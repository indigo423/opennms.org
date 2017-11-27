---
title: This Week in OpenNMS: November 27th, 2017
date: 11:27 11/27/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, jmx, snmp, osgi, netflow, remote poller, enlinkd, elasticsearch, vmware, rest]
---

It's time for This Week in OpenNMS!

Last week we did more Telemetryd work and a bunch of bug fixing.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2017-11-20 00:00:00' --until='2017-11-27 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * Markus continued his work refactoring our JMX code to be shared as much as possible between the monitor, collection, and detector implementations.
  * Jeff fixed an issue with the karaf `snmp:show-config` command.
  * Jesse fixed an intermittent JMX issue in containers.
  * I fixed a couple of object-comparison bugs found while debugging other issues.
  * Dustin & Christian continued their work on Netflow support.
  * Seth worked on fixing the remote poller on Windows.
  * Antonio fixed more Enlinkd bugs.
  * Markus worked on a retry strategy for when Elasticsearch endpoints fail.
  * Jesse fixed an issue with VMware import.

* __Web UI__

  * Craig continued his work on adding expression support to the measurements ReST API.
  * Markus continued to work on making JAX-RS work in the OSGi container.
  * Markus did more work on supporting multiple users/passwords with Elasticsearch endpoints.
  * Alejandro improved the workflow for cloning requisitions.
  * I worked on adding support for pre-authentication in the OpenNMS web UI when behind a proxy.

<!--
## Upcoming Events and Appearances

* __[OSMC - Nuremberg, Germany - November 21st through 24th, 2017](https://osmc.de/)__

  Ronny Trommer will be speaking at OSMC with a talk titled, _"Another Year with OpenNMS"_, discussing the progress made in the last 3 major releases of OpenNMS and what's on the roadmap going forward.

  [Ronny's talk](https://osmc.de/events/en-another-year-with-opennms/) will be on Thursday, November 23rd.
  Full details of the schedule are available on [the OSMC site](https://osmc.de/schedule/).
-->

## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HZN-1177](https://issues.opennms.org/browse/HZN-1177): NX-OS adapter for telemetryd
* [HZN-1192](https://issues.opennms.org/browse/HZN-1192): Migrate flow adapter to osgi module
* [HZN-1194](https://issues.opennms.org/browse/HZN-1194): Consolidate all existing JMX Monitor/Collector/Detector implementations
* [NMS-8905](https://issues.opennms.org/browse/NMS-8905): MockLogAppender.setupLogging() doesn't override default log level
* [NMS-9745](https://issues.opennms.org/browse/NMS-9745): Karaf snmp:show-config command lists value of timeout for retries
* [NMS-9748](https://issues.opennms.org/browse/NMS-9748): Data-collection (Non-SNMP) broken on Minion
* [NMS-9751](https://issues.opennms.org/browse/NMS-9751): Intermittent startup failures in Minion due to missing org.apache.xerces.parsers bundle
* [NMS-9752](https://issues.opennms.org/browse/NMS-9752): Users with the MINION role cannot write to Telemetryd queues
* [NMS-9753](https://issues.opennms.org/browse/NMS-9753): Minion intermittently connects to localhost instead of configured broker