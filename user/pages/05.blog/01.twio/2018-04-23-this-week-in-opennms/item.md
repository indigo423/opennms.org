---
title: This Week in OpenNMS: April 23rd, 2018
date: 11:16 04/23/2018
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [elasticsearch, karaf, minion, sentinel, telemetry, groovy, newts, enlinkd, grafana, drift, afnog, ais, dev-jam, ouce]
---

It's time for This Week in OpenNMS!

In the last week we released Horizon 21.1.0, Meridian 2016.1.12, and Meridian 2017.1.7, and did more work on Drift and preparing for Meridian 2018.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2018-04-16 00:00:00' --until='2018-04-23 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * Markus worked on some Elasticsearch updates.
  * I worked on refactoring out our Karaf container build so it can be shared between Minion and Sentinel.
  * Chandra worked on making telemetry persistence groovy scripts reloadable at runtime.
  * Patrick did performance improvements to flow query indexing.
  * Markus added support for handling source and destination in classification rules.
  * Jesse fixed a thread-safety issue in the index strategy code.
  * Jesse worked on improving startup cache handling in Newts.
  * Antonio worked on some bridge discovery bugs in Enlinkd.
  * Ronny worked on refactoring a number of MIB definitions.

* __Web & UI__

  * Markus made some enhancements to the classification web UI.
  * Christian made it possible to use an embedded grafana box in the web UI when running behind a proxy.
  * David did some work on a correlation proof-of-concept in OpenNMS.js and Helm.


## OpenNMS Horizon 21.1.0 Released

OpenNMS Horizon 21.1.0 (code name: [Replicant](https://bladerunner.wikia.com/wiki/Replicant)) was released last Thursday.

It contains bug fixes and a few enhancements, including support for forwarding events, alarms, and nodes to Kafka.

For more details on what has changed, see the complete [change log](http://docs.opennms.org/opennms/releases/21.1.0/releasenotes/#releasenotes-changelog-21.1.0).


## OpenNMS Meridian [2016.1.12](https://www.opennms.com/2018/04/23/opennms-meridian-2016-1-12-released/) and [2017.1.7](https://www.opennms.com/2018/04/20/opennms-meridian-2017-1-7-released/) Released

Both releases include a small bug fix in event handling.

Additionally, Meridian 2017.1.7 contains a few other small bug fixes, enhancements, and configuration updates.  See [the release announcement](https://www.opennms.com/2018/04/20/opennms-meridian-2017-1-7-released/) for more details.


## In Development: Sentinel

As we wrap up [the Drift project](https://www.opennms.org/en/blog/twio/2017-10-09-this-week-in-opennms) (expected to be included in OpenNMS Horizon 22), we are [starting up a new project codenamed "Sentinel"](https://wiki.opennms.org/wiki/DevProjects/Sentinel) to create a new Karaf container capable of running some components of OpenNMS standalone.

In the short term, the goal of Sentinel is to be able to horizontally scale Drift, receiving telemetry data and enhancing it with additional OpenNMS metadata, then passing it on to Elasticsearch for storage and indexing.

Over time, we should be able to expand it out to run other components of OpenNMS as well, eventually being able to run any combination of OpenNMS subsystems across multiple systems and/or processes.


## Upcoming Events and Appearances

* **[Africa Internet Summit - April 29th through May 11th, 2018](http://internetsummitafrica.org/)**

  Tarus Balog will be [conducting a one day workshop on OpenNMS](https://www.internetsummit.africa/agenda/programme) at the [Africa Network Operators group](https://afnog.org/)'s annual [Africa Internet Summit (AIS)](http://internetsummitafrica.org/) to be held in Dakar, Senegal.
  The training is currently scheduled for Sunday, May 6th.

* **[Dev-Jam 2018 - June 10th through 16th, 2018](https://wiki.opennms.org/wiki/Dev-Jam_2018)**

  The OpenNMS developers conference, Dev-Jam, will return again this year to the University of Minnesota in Minneapolis.
  Dev-Jam is a week of fun -- half hackathon, half social get-together.  More information is available on [the OpenNMS wiki](https://wiki.opennms.org/wiki/Dev-Jam_2018) and [registration is now open](http://www.opennms.com/opennms-dev-jam-registration) -- please join us!  All are welcome.

* **[OpenNMS User Conference Europe 2018 - September 20th through 21st, 2018](https://ouce.opennms.eu/)**

  [OUCE 2018](https://ouce.opennms.eu/) will be held at the [Rilano Hotel in Munich, Germany](https://www.rilano-hotel-muenchen.de/).
  A reception will be held on Wednesday the 19th, with talks and workshops the following Thursday and Friday.
  The [call for papers](https://ouce.opennms.eu/cfp/2018/) is now open for submissions.


## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HELM-90](https://issues.opennms.org/browse/HELM-90): Options tab in Alarm Table shows OpenNMS homepage
* [HZN-1256](https://issues.opennms.org/browse/HZN-1256): Kafka Entity Streams
* [HZN-1272](https://issues.opennms.org/browse/HZN-1272): EventToIndex - Alarm Change Old/New parameters submitted to ES as single string and not JSON objects
* [HZN-1281](https://issues.opennms.org/browse/HZN-1281): Netflow - Limit queries to specified indices
* [HZN-1296](https://issues.opennms.org/browse/HZN-1296): Flow documents logged against incorrect ES index
* [HZN-1298](https://issues.opennms.org/browse/HZN-1298): Make time padding for IndexSelector configurable
* [NMS-8974](https://issues.opennms.org/browse/NMS-8974): missing files in debian x64 distribution
* [NMS-9559](https://issues.opennms.org/browse/NMS-9559): Store forwarders lacks of memory
* [NMS-9831](https://issues.opennms.org/browse/NMS-9831): Karaf opennms-es-rest Plugin - Creating OID mappings causing ES index mappings to exceed 1000
* [NMS-9915](https://issues.opennms.org/browse/NMS-9915): JasperStudio extension dependency error
* [NMS-9916](https://issues.opennms.org/browse/NMS-9916): The Grafana Box on the front page doesn't work when Grafana is behind a Web Proxy
* [NMS-9937](https://issues.opennms.org/browse/NMS-9937): Refactor UserGroupLdapAuthoritiesPopulator to provide a default role.
* [NMS-9952](https://issues.opennms.org/browse/NMS-9952): The JDBC Collector doesn't work