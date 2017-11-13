---
title: This Week in OpenNMS: November 13th, 2017
date: 11:09 11/13/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, telemetryd, osgi, nx-os, elasticsearch, nexus, jest, asciibinder, enlinkd, osmc]
---

It's time for This Week in OpenNMS!

Last week we did a lot of Telemetryd work and a few other bug fixes in preparation for the releases this Thursday.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2017-11-06 00:00:00' --until='2017-11-13 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * Markus worked on the vaadin OSGi bug introduced in Horizon 20.
  * Chandra did more work on making it so Telemetryd adapters can be loaded from OSGi.
  * Chandro worked on the NX-OS Telemetryd adapter.
  * Markus fixed preemptive auth in the Elasticsearch ReST client and updated the Jest client.
  * Christian, Dustin, and Markus did more work on the Netflow Telemetryd adapter.
  * Jeff cleaned up Cisco Nexus datacollection and graphing configs.
  * Ronny did more work on the AsciiBinder documentation branch.
  * Antonio worked on Enlinkd bridge topology bugs.
  * Brynjar Eide fixed a bug in the OpenNMS.js search example documentation.


## Upcoming Events and Appearances

* __[OSMC - Nuremberg, Germany - November 21st through 24th, 2017](https://osmc.de/)__

  Ronny Trommer will be speaking at OSMC with a talk titled, _"Another Year with OpenNMS"_, discussing the progress made in the last 3 major releases of OpenNMS and what's on the roadmap going forward.

  [Ronny's talk](https://osmc.de/events/en-another-year-with-opennms/) will be on Thursday, November 23rd.
  Full details of the schedule are available on [the OSMC site](https://osmc.de/schedule/).


## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HZN-1181](https://issues.opennms.org/browse/HZN-1181): Consolidate RestClientFactory and ClientFactory (jest)
* [HZN-1184](https://issues.opennms.org/browse/HZN-1184): Be more robust on error when starting flows feature
* [HZN-1185](https://issues.opennms.org/browse/HZN-1185): Add support for OSGi based Telemetryd adapters
* [HZN-1187](https://issues.opennms.org/browse/HZN-1187): Allow Filtering SNMP Collection
* [HZN-1188](https://issues.opennms.org/browse/HZN-1188): Cache NodeInfo objects instead of re-fetch it all the time
* [HZN-1190](https://issues.opennms.org/browse/HZN-1190): Allow the Jest connection pool size to be configured
* [NMS-8596](https://issues.opennms.org/browse/NMS-8596): JMX config GUI can't connect to JMX service with JNDI name not "jmxrmi"
* [NMS-9620](https://issues.opennms.org/browse/NMS-9620): Thread leak in Snmp4JStrategy
* [NMS-9699](https://issues.opennms.org/browse/NMS-9699): ES REST plugin not doing preemptive basic auth
* [NMS-9704](https://issues.opennms.org/browse/NMS-9704): Vaadin fragment bundles not loading correctly in Karaf
* [NMS-9711](https://issues.opennms.org/browse/NMS-9711): Minion WSMAN collector is not functional due to dependency missing
* [NMS-9725](https://issues.opennms.org/browse/NMS-9725): Sending bad XML to the Requisitions ReST end point makes the API unusable
* [NMS-9735](https://issues.opennms.org/browse/NMS-9735): Modularize telemetryd docs and add overview to telemetry daemon