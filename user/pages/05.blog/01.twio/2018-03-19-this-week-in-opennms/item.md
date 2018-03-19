---
title: This Week in OpenNMS: March 19th, 2018
date: 11:53 03/19/2018
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, elasticsearch, jasperstudio, kafka, statsd, drift, docker, newts, grafana, ohio state]
---

It's time for This Week in OpenNMS!

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2018-03-12 00:00:00' --until='2018-03-19 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * Markus continued his work on improvements to Elasticsearch configuration and testing.
  * Markus fixed a dependency issue that would cause errors in the JasperStudio extension.
  * Craig fixed a classloader issue to access configs from the config manager.
  * Jesse did some work on the Kafka exporter.
  * Markus fixed a bug in flow document indexing in Elasticsearch.
  * Ronny added the admin guide to the help page.

* __Web & UI__

  * Chandra finished his fix for the Statsd page rendering.
  * Chandra did more work on showing flow availability in the resource pages.

## Docker Images Updated

The [Docker images](https://github.com/opennms-forge/docker-horizon-core-web/) have recently been updated to have a couple of new features:

* Craig recently extended the Docker image to have support for [Newts in Cassandra](https://github.com/opennms-forge/docker-horizon-core-web/blob/master/README.md#running-on-cassandra-with-newts).  There is also an example stack with just one Cassandra node to try it out.
* Before starting or updating, the configuration files are now always checked with the config-tester.

Environment variables and more details can be found in [the README](https://github.com/opennms-forge/docker-horizon-core-web/blob/master/README.md#running-on-cassandra-with-newts).
The changes are applied to images with tags `bleeding`, `drift` and `21.0.4-1` (and higher).

## German-Language OpenNMS/Grafana Webinar Now Available

The German-Language webinar from NETHINKS is now available on YouTube:

[plugin:youtube](https://www.youtube.com/watch?v=rOqpCikqcbc)

## Upcoming Events and Appearances

* __[Ohio State Open Source Club - March 22nd, 2018](https://opensource.osu.edu/events/)__

  Tarus will be [speaking at the Ohio State Open Source Club](https://opensource.osu.edu/events/) on Thursday, March 22nd.

## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HELM-60](https://issues.opennms.org/browse/HELM-60): Color code inconsistency for severities in Alarm Histogram and Alarm Table
* [HELM-76](https://issues.opennms.org/browse/HELM-76): operator instruction field is missing
* [HZN-1229](https://issues.opennms.org/browse/HZN-1229): Design Kibana dashboards for flow
* [HZN-1230](https://issues.opennms.org/browse/HZN-1230): Kibana dashboard template lifecycle
* [HZN-1269](https://issues.opennms.org/browse/HZN-1269): Allow xml config to be accessed from karaf
* [NMS-9829](https://issues.opennms.org/browse/NMS-9829): PostgreSQL jdbc detector fails with: java.lang.ClassNotFoundException: org.postgresql.Driver not found
* [NMS-9861](https://issues.opennms.org/browse/NMS-9861): It is not possible to see Statsd results on the WebUI
* [NMS-9869](https://issues.opennms.org/browse/NMS-9869): Minion RPM spec doesn't build enough projects
* [NMS-9870](https://issues.opennms.org/browse/NMS-9870): Admin guide needs updating for SQS parameters on sink and rpc queues
* [NMS-9914](https://issues.opennms.org/browse/NMS-9914): Opennms fails to restart
* [NMS-9915](https://issues.opennms.org/browse/NMS-9915): JasperStudio extension dependency error