---
title: Running OpenNMS Horizon in Docker
date: 21:48 2018-01-09
author: Ronny Trommer
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: docker
    tag: [docker]
---

Running applications in containers provides many benefits, and it's not just hype.
Higher velocity to maintain changes while keeping a service available.
Scaling your software by just spinning up more instances to handle load.
Container images allow you to manage your application dependencies and link them all to a portable and standardised runnable container image.
The infrastructure can be used as a commodity and container allow you to manage resource usage on a granularity at process level.
All this is the buzz about running applications in containers.

You should know OpenNMS is currently not built to run with all components in separated and isolated processes.
But you can gain some benefits running it as a legacy application in a container.
There are already changes in the architecture to continuously improve this issue, but it will take time and I want to use it NOW&trade;.
The technology is available and this article describes how to run OpenNMS Horizon in Docker and is an article more or less for the brave ones.

Make yourself familiar with how Docker works and data is persisted, there are Dragons!
If you run something in production without knowing, you get in trouble.
The [Documentation](https://docs.docker.com/get-started/) is really good and worth reading and yes this is a DISCLAIMER :)

To get the possibility to run OpenNMS Horizon in Docker container images are needed, which we provide on DockerHub.
You will find images for [Horizon](https://hub.docker.com/r/opennms/horizon-core-web/) and [Minion](https://hub.docker.com/r/opennms/minion/).
Images are built automatically, on  [CircleCI](https://circleci.com) for [Horizon](https://circleci.com/gh/opennms-forge/docker-horizon-core-web) and [Minion](https://circleci.com/gh/opennms-forge/docker-minion).
The images are based on a latest vanilla CentOS 7 and OpenNMS Horizon is  installed from the official published RPMS.
Related `Dockerfile` for [Horizon](https://github.com/opennms-forge/docker-horizon-core-web) and [Minion](https://github.com/opennms-forge/docker-minion) can be found on GitHub.

The workflow to build and maintain these images is refactored and streamlined to reduce mainenance.
Build and publishing workflow is now more transparent within the GitHub repository and allows feedback through contribution.

Additionally there are some tips you need to know when running a Java application in a Docker container.

## Building images with CircleCI

First of all we build the Container Images with CircleCI which gives us the possibility to decentralise the build- and publishing process for container images.
The whole build and publishing process is described in the GitHub repository in the `.circleci` directory.
When you fork the project, you get the whole workflow for free and you can start immediately to modify and publish your own images as you like.

## What horizon-core-web means

The provided image has just the bare minimum installed to run the core services for monitoring and the web application.

If you want to use more advanced features like SNMP Hardware Asset adapter, RANCID integration or the JIRA ticketer integration plugins, you have to install the RPMS on your own.

The easiest way is to derive from the existing image which is described later in this article.
It is recommended to build a service stack with _Docker Compose_ using an [official PostgreSQL](https://hub.docker.com/_/postgres/) data base as container image.

## Provide an overlay etc-directory

Updating from one OpenNMS Horizon version to another is not so easy and you need to merge a lot configuration files.

The main issues which make it difficult are:

* Files which can be edited through the Web UI and are persisted in ${OPENNMS_HOME}/etc directory, this makes it hard to version control files which need to be edited on the file system and the running container depends on the file system.
* Hard coded library version dependencies in Karaf properties which are stored in ${OPENNMS_HOME}/etc, e.g. `${OPENNMS_HOME}/etc/custom.properties` directory. Even if you never modify this files, you have to modify these files during an update.
* The Karaf cache is used to persist topology history and the GraphML topology

To address the configuration management issues we provide an `etc-overlay` directory as convention.
It allows to just maintain the configuration files you have touched without caring about the ones you haven't touched.

The bits and pieces related to _Karaf Cache_ and the fact the webUI modifies configs which are located on a local file system can't be addressed here and require your attention.
You will run into similar problems if you try to use a configuration management tool or try to version your startup configuration of OpenNMS Horizon as well.

The following mount command in your OpenNMS Horizon service definition allows you to use a local directory for your custom configurations on your Docker host system:

```
volumes:
  - ./etc-overlay:/opt/opennms-etc-overlay
```

ATTENTION: You have to be aware, about configuration files changed in the Web UI and which are still persisted on the filessystem.
           These files need to be maintained. Some examples are users.xml, groups.xml, snmp-config.xml, surveillance-views.xml, etc..
           Ideally these configuration files should be in the database, but there is currently not really another useful workaround for this.
           You have to make sure your `${OPENNMS_HOME}/etc` directory gets persisted in a local volume.
           The Karaf cache directory is by default not persisted and gets lost on restart.
           If you work with the Topology UI ensure the `${OPENNMS_HOME}/data` gets persisted in a local volume as well, you have to deal with this during updates!

## Image Tags

We have cleaned up the image tags to provide the following use cases:

* specific stable release version, e.g. `21.0.2`: Use this tag if you have specific version dependencies in your service stack and you want full control for upgrades
* floating stable release tag `latest`: Use this tag when you want to always run the latest stable release, update the container image to latest stable release with `docker-compose pull && docker-compose stop opennms && docker-compose up -d`
* floating daily snapshot tag `bleeding`: This is an image built on a daily basis from the latest `develop` branch and is the release candidate for the next major release of horizon
* feature tag `drift`: This is a special tag for daily snapshot built if you want to test the features which are currently developed in [Project Drift](https://wiki.opennms.org/wiki/DevProjects/Drift). This tag will be removed when this feature is merged in a released version of Horizon.

## Allow Custom Health checks

In previous container image versions the Health check were hard coded.
To give people more freedom to implement container health checks, it is moved out of the container image into the `docker-compose.yml` file where the service stack is described.
In case you want to run the Java web application and the core services in separate containers, you can now define different health checks for each service.

## Service Dependencies

The old OpenNMS Horizon image had a sleep waiting for the PostgreSQL database.
With Docker Compose version 2.1 and later it is possible to wait for a service condition.
It makes the wait obsolete and OpenNMS Horizon is started when the PostgreSQL database is in state "healthy".

## Java Process and PID 1

Processes with ID 1 have special functionalities related to signal handling and cleaning up zombie processes.
For example, `docker-compose.yml` now uses the built-in init: true option, which runs a tiny init inside the container and prevents the Java process from getting PID 1.
The init option requires using a Docker-Compose version 2.2 or later.

## Derive from the Horizon Image

If you want to build and deploy your own image, just [fork](https://help.github.com/articles/fork-a-repo/) the [project](https://github.com/opennms-forge/docker-horizon-core-web).
Create your custom Dockerfile, for example named `MyDockerfile`, with the following content:

```
FROM opennms/horizon-core-web:latest
LABEL maintainer <its.me@acme.com>

RUN yum -y install opennms-plugin-ticketer-jira \
                   opennms-plugin-protocol-dhcp && \
    yum clean all && \
    rm -rf /var/cache/yum

LABEL org.opennms.additional.packages="opennms-plugin-ticketer-jira, opennms-plugin-protocol-dhcp"
```

Build your image with

```
docker build -t my-opennms-horizon -f MyDockerfile .
```

An additional layer is created with the installed RPMS you provided in the `RUN` directive.
Just as an optional idea, an additional label is created which tells you which packages you have installed.

If you use as tag name `-t ${YOUR_DOCKERHUB_USER}/my-opennms-horizon:latest` you can push it to your DockerHub repository within

```
docker push ${YOUR_DOCKERHUB_USER}/my-opennms-horizon:latest
```

If you want to do this with CircleCI automatically you have to provide your DockerHub credentials as [project environment variable](https://circleci.com/docs/2.0/env-vars/#adding-environment-variables-in-the-app).
The variables which are used in the config are `DOCKERHUB_LOGIN` and `DOCKERHUB_PASS`.

## Container and Java Memory Management with Limits

Running a Java application in a container has a few things to consider.
To control and isolate resource usage of processes the Kernel feature _cgroups (Control Groups)_ is used.
If you do nothing, the _Maximum Heap Size_ and _Initial Heap Size_ is calculated based on the memory of the Docker host system and can lead to problems when a memory limit on the container is set.
Running a JVM on a [server-class](https://docs.oracle.com/javase/8/docs/technotes/guides/vm/server-class.html) hardware it means 1/64th of the machines physical memory is used as _Initial Heap Size_.
For the _Maximum Heap Size_ less than 1/4 of the physical memory or 1GB is used.
To get more details about refer to article [Garbage Collectory Ergonomics](https://docs.oracle.com/javase/8/docs/technotes/guides/vm/gc-ergonomics.html).

To prevent this behaviour there are two options:

1) Set the correct _Maximum Heap Size_ for your application manually with -Xmx and the _Initial Heap Size_ with -Xms

2) In case the -Xmx option is not set, the JVM can automatically calculate a reasonable _Maximum Heap Size_ by enabling the experimental cgroup aware JVM feature

If you want to go with option 2 you have to set the following Java options:

```
JAVA_OPTS=-XX:+UnlockExperimentalVMOptions -XX:+UseCGroupMemoryLimitForHeap
```

Previous Docker images used the opennms startup bash script with some predefined ulimit settings.
The current version runs the native Java command in the [entrypoint script](https://github.com/opennms-forge/docker-horizon-core-web/blob/master/docker-entrypoint.sh#L86) and the `JAVA_OPTS` environment variable allows you to configure the JVM.
The stack size is 8192 kb by default and the open file limit is `1048576`.
We now use the defaults, which makes it more transparent.
If you want to set a limit for open files to `20480`, here is an example using the `ulimits` option in the service definition of the `docker-compose.yml` file:

```
services:
  opennms:
    image: opennms/horizon-core-web:latest
    ulimits:
      nofile: 20480
```
