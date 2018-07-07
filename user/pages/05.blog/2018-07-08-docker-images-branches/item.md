---
title: How to build Docker images from branches
date: 10:00 2018-07-09
author: Ronny Trommer
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: opennms
    tag: [docker, install]
---

In OpenNMS we use [Atlassian Bamboo](https://www.atlassian.com/software/bamboo) which runs all our tests and build also the packages which can be installed on different operating systems. It plays an important role as quality gate for changes going into the code base. Our Bamboo is [public available](https://bamboo.opennms.org/browse/OPENNMS-ONMS) and can be seen by everyone.

There are two type of branches, one following a pattern like "features/sentinel" and another like "jira/HZN-1307".
The feature branches are work in progress branches and used to collect many smaller changes to build a bigger new feature.
Once the feature is implemented, it gets merged into develop and is automatically released with the next major version of Horizon.

For the reason Bamboo built every change in those branches it is pretty easy to test new features or verify if bugs in specific issues are fixed by using our CentOS 7 based Docker image. So lets assume you want to test if the bug in NMS-10195 is fixed and works for you.
Go to the [GitHub Pull Request](https://github.com/OpenNMS/opennms/pull/2040) and see if Bamboo tested the branch and flagged it green, if it is green packages are deployed to https://yum.opennms.org/branches/jira-NMS-10195. With this in mind, you can easily create a Docker image from this repository doing the following:

```
git clone https://github.com/opennms-forge/docker-horizon-core-web
cd docker-horizon-core-web
docker build -t horizon-core-web:NMS-10195 --build-arg=branches/jira-NMS-10195 .
```

In your `docker-compose.yml` use the tagged image `horizon-core-web:NMS-10195` for OpenNMS and you are good to go.
