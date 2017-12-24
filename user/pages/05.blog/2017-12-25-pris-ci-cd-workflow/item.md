---
title: PRIS Release and CI/CD Workflow
date: 12:42 2017-12-24
author: Ronny Trommer
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: wiki
    tag: [pris, cicd, release]
---

# PRIS Release Management and Continuous Delivery Workflow

The current release workflow for PRIS and the Docker Container Images was driven by manual tasks.
That means you have to push a "Release Button" which sets version numbers and triggers Docker Image builds.
I have switched to a continuous delivery workflow.
Every commit is a release and there is no "Release Button" anymore.
Unique version numbers are generated with `git describe` and the build number from the CI/CD system.
To release stable versions just artifacts from a release branch get published to DockerHub and the GitHub release page.

Stable releases can be referenced by a floating tag `latest` or the very specific version number.
Every commit to the master branch is published and can be referenced as `bleeding` and the packaged artifacts are uploaded to the GitHub release page as pre-release. 

# Docker Container Images are part of the build

The Docker Container Image is now a build artifact of the CI/CD system and is used to run smoke tests.
For every build step, you can download runnable archives or Docker images from the [CI/CD system](https://circleci.com/workflow-run/4e2d7cb5-475e-4670-8193-ed3947c07f5e).

The following artifacts are created for every commit:

* compile_n_build: tar.gz and .zip archives to run PRIS natively with Java
* build_docker_image: Docker container image which can be downloaded and used with `docker load image` command
* smoke_test: Output of the example requisitions XML files which are used to test basic functionality of the image

In case the changes are made in a master or release branch, the artifacts are published to [DockerHub](https://hub.docker.com/r/opennms/pris/) and the [GitHub](https://github.com/OpenNMS/opennms-provisioning-integration-server/releases) release page.

The [Dockerfile](https://github.com/OpenNMS/opennms-provisioning-integration-server/blob/master/Docker/Dockerfile) for PRIS is now part of the source code and the docker-pris repository on opennms-forge is deleted.

# Decentralizing the CI/CD system using CircleCI

The build system is switched to [CircleCI](https://circleci.com/gh/OpenNMS/workflows/opennms-provisioning-integration-server) and the whole workflow is described in the [.circleci/config.yml](https://github.com/OpenNMS/opennms-provisioning-integration-server/blob/master/.circleci/config.yml) directory of the source code.
This makes the whole build- and publish-process more transparent and allows easily contribution from others.
Additionally, everyone who forks the project on GitHub, gets the whole release and publishing workflow for free.
If you want releases in your own DockerHub repository and GitHub project page you need the following environment variables in your CircleCI project:

* `DOCKERHUB_LOGIN` (required): with the user to publish Docker Images to your DockerHub repository
* `DOCKERHUB_PASS` (required): Password to access your DockerHub repository
* `GITHUB_TOKEN` (required): [GitHub personal API Token](https://github.com/settings/tokens) to make releases in your GitHub repository
* `DOCKERHUB_PROJECT_NAME` (optional): If you want to publish the Docker Image to a different name then the project name instead of the default GitHub repository name, e.g. `pris` instead of `opennms-provisioning-integration-server`  
* `DOCKERHUB_PROJECT_USER` (optional): In case you have a different GitHub name than on DockerHub you can overwrite it with this variable

Wish you all readers a Merry Christmas and a Happy new Year
