---
title: This Week in OpenNMS: October 23rd, 2017
date: 9:47 10/23/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, netflow, elasticsearch, sqs, minion, angular, rest, cubaconf, osmc]
---

It's time for This Week in OpenNMS!

Last week we released Horizon 21 and Meridians 2015.1.8, 2016.1.8, and 2017.1.1.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2017-10-16 00:00:00' --until='2017-10-23 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * Markus worked on persisting Netflow 5 data to elasticsearch.
  * Alejandro worked on implementing and Amazon SQS-based sink adapter for Minion forwarding.

* __Web and UI__

  * Seth did more work on the newer Angular-based outage list.
  * Seth fixed some ReSTv2 date-handling relating to null values.
  * Jeff fixed some typos in various UI elements.
  * Jesse updated helm to a newer Grafana base, and improved how IDs are returned.


## Upcoming Events and Appearances

* __[CubaConf - Havana, Cuba - November 7th through 9th, 2017](http://www.cubaconf.org/)__

  Alejandro Galue and Tarus Balog will be representing OpenNMS at the second annual Cubaconf to be held in Havana, Cuba, in November.

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

* [HZN-1153](https://issues.opennms.org/browse/HZN-1153): Tool to generate JTI traffic
* [HZN-1162](https://issues.opennms.org/browse/HZN-1162): Create an XSD for telemetryd-configuration.xml
* [HZN-1167](https://issues.opennms.org/browse/HZN-1167): Update Karaf shell API for console commands
* [HZN-1169](https://issues.opennms.org/browse/HZN-1169): Netflow 5 telemetryd adapter
* [HZN-1173](https://issues.opennms.org/browse/HZN-1173): Upgrade the embedded Karaf container to 4.1
* [HZN-1174](https://issues.opennms.org/browse/HZN-1174): Update Karaf shell commands in install guide
* [HZN-1175](https://issues.opennms.org/browse/HZN-1175): Karaf shell bundle command fails with "Insufficient credentials" error
* [HZN-1176](https://issues.opennms.org/browse/HZN-1176): JTI adapter for telemetryd
* [NMS-6287](https://issues.opennms.org/browse/NMS-6287): etc-pristine configuration format differs from webapp saved configuration
* [NMS-9690](https://issues.opennms.org/browse/NMS-9690): Ubiquiti support
* [NMS-9696](https://issues.opennms.org/browse/NMS-9696): Broken packages for Horizon 21.0.0 stable release