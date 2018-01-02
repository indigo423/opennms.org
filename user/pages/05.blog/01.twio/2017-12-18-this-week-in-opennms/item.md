---
title: This Week in OpenNMS: December 18th, 2017
date: 11:57 12/18/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, drift, telemetry, netflow, elasticsearch, karaf, bridge discovery, kafka, javascript, rest, linuxconf, nznog]
---

It's time for This Week in OpenNMS!  Apologies for missing last week but I was in Las Vegas to watch a hockey game. (No really.)

In the last two weeks we more work on the Drift telemetry project and other refactoring.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2017-12-04 00:00:00' --until='2017-12-18 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * Dustin and Christian continued their work on the Netflow support in Telemetryd.
  * Markus continued his work on Elasticsearch and Telemetryd.
  * Markus added support for enriching flows with classification metadata from OpenNMS.
  * Seth continued his work on refactoring our Karaf container builds.
  * Antonio did more work on fixing issues in bridge discovery.
  * Seth worked on fixing a regression in radius encryption support.
  * Chandra continued to work on exposing Kafka latency metrics to OpenNMS.
  * Marcel and Ronny worked on refactoring and improving our JVM data collection.

* __Web & UI__

  * I worked on refactoring our various JavaScript code to a single optimized webpack build.
  * Ronny worked on cleaning up and refactoring the help & support pages.
  * Jesse continued to work on creating a model for ReST API access to telemetry data.


## Upcoming Events and Appearances

* __[Linuxconf Australia Sysadmin Miniconf - January 23rd, 2018](https://linux.conf.au/programme/miniconfs/sysadmin/)__

  Tarus will be speaking at the Linuxconf Australia Systems Administration Miniconf on January 23rd.

* __[NZNOG 2018 - Queenstown, NZ - January 22nd - 26th, 2018](http://www.nznog.org/nznog18)__

  After Linuxconf, Tarus will speak at the New Zealand Network Operators Group event at [Rydges in Queenstown, NZ](http://www.nznog.org/nznog18/venue).

## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HZN-1195](https://issues.opennms.org/browse/HZN-1195): Implement proper retry-behaviour on errors
* [HZN-1196](https://issues.opennms.org/browse/HZN-1196): Migrate Karaf container builds from assemblies to karaf-maven-plugin
* [HZN-1210](https://issues.opennms.org/browse/HZN-1210): Flow application classification
* [HZN-1212](https://issues.opennms.org/browse/HZN-1212): Migrate FlowRestService to run inside Karaf
* [NMS-9742](https://issues.opennms.org/browse/NMS-9742): IllegalStateException in OnmsVaadinContainer
* [NMS-9767](https://issues.opennms.org/browse/NMS-9767): Relative path reference to version.properties
* [NMS-9779](https://issues.opennms.org/browse/NMS-9779): error in dashboard