---
title: OpenNMS Docker Image
date: 09:55 2017-01-10
author: Ronny Trommer
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: docker
    tag: [docker]
---

Deploying and running OpenNMS and Minions in infrastructures using containers might be interesting to some users.
For this reason, I've started to use [Docker](https://docs.docker.com/engine/installation/) infrastructure to provide a ready-to-run entrypoint to build your OpenNMS container based infrastructure.
You can find more information in the [lab section](https://wiki.opennms.org/wiki/Lab) under [Running with Docker](https://wiki.opennms.org/wiki/DevProjects/Running_with_Docker) in our wiki.
The Docker files and images can be forked on [GitHub](https://hub.docker.com/r/opennms/horizon-core-web/) and pre-built images are available on [Dockerhub](https://hub.docker.com/u/opennms/dashboard/).

To run this example, make sure you have a recent version of Docker 1.12+ and Docker Compose 1.8+ installed.
You can verify with `docker version` and `docker-compose version`.

OpenNMS uses a few other services like a [PostgreSQL](https://www.postgresql.org) database service, therefore I recommend that you use [Docker Compose](https://docs.docker.com/compose/) to model your OpenNMS service.
The following tutorial shows you how to build an [OpenNMS Horizon](https://www.opennms.org) with the latest stable version using [PostgreSQL 9.6.1](https://www.postgresql.org/docs/9.6/static/release-9-6-1.html) and [Grafana 4.1.1](http://docs.grafana.org/guides/whats-new-in-v4/).

![Docker Layers](docker-layers.svg)

An intermediate image is used to ease maintaining the Java JDK version for OpenNMS.
By using the `opennms:latest` version tag a [daily built](https://hub.docker.com/r/opennms/horizon-core-web/builds/) image from the OpenNMS develop branch is used.

![Docker Service Stack](docker-service-stack.svg)

Data for the services is stored in dedicated data containers with the exception of the OpenNMS configuration directory.
Because it is required to edit OpenNMS configuration files manually, the `/opt/opennms/etc` directory is mounted to the Docker host system.
It is required to modify the `/my/path/to/opennms/config:/opt/opennms/etc` entry in the following `docker-compose.yml` example.
In case the directory does not exist, the configuration files are initialized automatically from the `/opt/opennms/share/etc-pristine` directory.

The data containers are used for:

* PostgreSQL raw database files
* Grafana SQlite database with dashboards, users and plugins
* OpenNMS RRD/JRobin files, logs and created reports

The services themselves can easily be deleted or recreated without losing data.
As long the data containers are not deleted, the OpenNMS and Grafana generated data is still available.

To communicate among the containers, the name of the service can be used as the host name in URLs to access the services provided in other containers.

A suitable place to create the files is a directory like `/opt/docker-service/opennms` and `/opt/docker-service/opennms-config` for the configuration files.

### Building your service stack

The configuration of each service is defined in dedicated environment files.

Initialize PostgreSQL with a minimal configuration and provide user credentials for the `postgres` user:

_File: .postgres.env_
```
# Environment variables for generic PostgreSQL server
POSTGRES_HOST=database
POSTGRES_PORT=5432
POSTGRES_USER=postgres
POSTGRES_PASSWORD=postgres
```

Configure OpenNMS database connection with credentials:

_File: .opennms.env_
```
# Environment variables for OpenNMS database connection
OPENNMS_DBNAME=opennms
OPENNMS_DBUSER=opennms
OPENNMS_DBPASS=opennms
OPENNMS_HOME=/opt/opennms
OPENNMS_DB_CONFIG=/opt/opennms/etc/opennms-datasources.xml
```

Configure Grafana admin credentials and server host in URL for the web interface:

_File: .grafana.env_
```
# Environment variables for Grafana
GF_SERVER_ROOT_URL=http://localhost
GF_SECURITY_ADMIN_PASSWORD=mypass
```

Create the `docker-compose.yml` file with the services and data containers, and expose the ports for network access:

_File: docker-compose.yml_
```
version: '2'
services:
  database_data:
    image: tianon/true
    volumes:
        - /var/lib/postgresql/data
  database:
    image: postgres:9.6.1
    env_file:
      - .postgres.env
    ports:
      - "5432:5432"
    depends_on:
      - database_data
    volumes_from:
      - database_data:rw
  opennms_data:
    image: tianon/true
    volumes:
        - /var/log/opennms
        - /var/opennms/rrd
        - /var/opennms/reports
  opennms:
    image: opennms/horizon-core-web:19.0.1-1
    env_file:
      - .opennms.env
      - .postgres.env
    depends_on:
      - database
      - opennms_data
    volumes_from:
      - opennms_data:rw
    volumes:
      - /my/path/to/opennms/config:/opt/opennms/etc
    command: ["-s"]
    ports:
      - "8980:8980"
      - "18980:18980"
      - "1099:1099"
      - "8101:8101"
      - "61616:61616"
      - "5817:5817"
      - "162:162/udp"
  grafana_data:
    image: tianon/true
    volumes:
        - /var/lib/grafana
        - /var/lib/grafana/plugins
  grafana:
    image: grafana/grafana:4.1.1
    env_file:
      - .grafana.env
    depends_on:
      - grafana_data
    volumes_from:
      - grafana_data:rw
    ports:
      - "3000:3000"
```

The whole stack can be started in the background with

```
docker-compose up -d
```

For OpenNMS Horizon, a health check shows if the web application is started and can be checked with the `docker ps` command.

### Install OpenNMS Grafana Data Source plugin and configuration

By default there are no plugins installed.
The OpenNMS project maintains the [OpenNMS Data Source plugin](https://grafana.net/plugins/opennms-datasource) which can be installed with the `grafana-cli` command.
The OpenNMS data source uses the [OpenNMS Measurement ReST API](https://grafana.net/plugins/opennms-datasource).
It is recommended to create a non-admin user in OpenNMS which can be used to access the data from Grafana.

Create a user in the OpenNMS web user interface in this example called `grafana` with a password `mypass`.

The next step is installing the OpenNMS Data Source in Grafana with:

```
docker-compose exec grafana grafana-cli plugins install opennms-datasource
```

To be able to create use the OpenNMS Data Source Grafana needs to be restarted with

```
docker-compose stop grafana && docker-compose up -d
```

Create a Data Source of type `OpenNMS` and use the URL to our OpenNMS service:

`http://opennms:8980/opennms`

We named our OpenNMS Horizon instance `opennms` and can use this in Grafana as host name in the URL.
The host name `opennms` will be automatically resolved to an dynamically associated IP address from the Docker engine.

Access type is `Proxy` and enable `Basic Auth` with `Credentials`.
Type in the user name `grafana` with the provided password in our example `mypass`.

`Save & Test` will test the connectivity to the OpenNMS ReST API with the provided credentials.

![Configure OpenNMS Grafana Data Source](grafana-datasource.png)

Now you can start creating your own dashboards using data from OpenNMS.

### Build OpenNMS Minion service

If you want to test the Minion environment, make sure that you use at least the image version for release candidate OpenNMS Horizon 19 (`indigo/docker-opennms:rc-19.0.0`) or 20 (`indigo/docker-opennms:latest`).
The Minion image version should be the same as the OpenNMS Horizon version.

Running a Minion in a remote location can also be easily deployed using Docker.
The minimum configuration requirements to get a Minion running are:

* Configure OpenNMS to allow network access to ActiveMQ
* Configure OpenNMS to allow authenticated access to the ReST API
* Create a Minion service and configure a Location, Minion-ID, HTTP and Broker URL endpoints

The Minion docker image is similarly built on the same `centos-jdk8` image as OpenNMS.
It can be configured with an environment file and as a service with `docker-compose` in the same way.

Allow network access to ActiveMQ by uncommenting the following line in `opennms-activemq.xml` located in the OpenNMS configuration directory.

```
<!-- Uncomment this line to allow localhost TCP connections (for testing purposes) -->
<!-- <transportConnector name="openwire" uri="tcp://127.0.0.1:61616?useJmx=false&amp;maximumConnections=1000&amp;wireformat.maxFrameSize=104857600"/> -->
```
For production environments see [Minion Authorization](http://docs.opennms.org/opennms/branches/develop/guide-install/guide-install.html#_authentication_and_authorization) in our admin guide.

Restart OpenNMS Horizon with

```
docker-compose stop opennms && docker-compose up -d
```

Replace the `YOUR-LOCATION` and `opennms` in the URLs with values fitting your environment.
The Minion ID is a unique identifier to register this specific instance of the Minion in the OpenNMS system.
If you don't provide a Minion ID, it is generated automatically and you don't control the ID when it's lost.
To assign them manually, you can just specify them in the Minion environment file.

_File: .minion.env_

```
# Environment variables for OpenNMS Minion connection
MINION_ID=00000000-0000-0000-0000-deadbeef0001
MINION_LOCATION=YOUR-LOCATION
MINION_CONFIG=/opt/minion/etc/org.opennms.minion.controller.cfg
OPENNMS_BROKER_URL=tcp://opennms:61616
OPENNMS_HTTP_URL=http://opennms:8980/opennms
```

Define the service by creating a `docker-compose.yml` file:

```
version: '2'
services:
  minion:
    image: opennms/minion:19.0.1-1
    env_file:
      - .minion.env
    command: ["-f"]
    ports:
      - "8201"
      - "18980"
      - "162/udp"
      - "514/udp"
```

Start the Minion service with `docker-compose up -d`.
A health check [tests the communication](http://docs.opennms.org/opennms/branches/develop/guide-install/guide-install.html#_verifying_connectivity) to the OpenNMS Horizon instance, and can be checked with the `docker ps` command.

By default the Minion is automatically provisioned in the OpenNMS system and sends a heartbeat to OpenNMS which is monitored with the `Minion-Heartbeat` service.
