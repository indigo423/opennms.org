---
title: This Week in OpenNMS: September 25th, 2017
date: 11:16 09/25/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, remote poller, jti, jna, karaf, meridian, horizon, ohio linux fest, olf, cubaconf, osmc]
---

It's time for This Week in OpenNMS!

Last week we did prep-work for Meridian 2017 and Horizon 20.1, as well as continuing to work on JTI integration.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2017-09-18 00:00:00' --until='2017-09-25 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * Seth did more remote poller logging cleanup.
  * Jesse did more work on JTI telemetry support.
  * Seth updated JNA to 4.4.0.
  * Dustin worked on supporting multiple nodes with the same IP in the location:IP cache.
  * Seth did more work updating our embedded Karaf.

* __Web and UI__

  * Seth cleaned up parameter escaping in a few UI pages.
  * I fixed opennms.js to support ReSTv2 when talking to Horizon 20.1.
  * Jesse updated Helm to support Horizon 20.1.

## Meridian 2017 Due This Week

Horizon 20.1 was released last week, but we decided to delay the release of Meridian 2017 as we had a few more config cleanups pending and wanted to give a bit more time for testing.

Barring any complications, we will release Meridian 2017.1.0 on Thursday of this week.

## Upcoming Events and Appearances

* __[Ohio Linux Fest - Columbus, OH - September 29th through 30th, 2017](https://ohiolinux.org/tarus-balog-to-keynote-ohio-linuxfest-2017/)__

  Tarus Balog will be the keynote speaker at Ohio Linux Fest in Columbus.
  His talk is titled _"A Short History of an Open Source Business"_ and will be about the history of OpenNMS, decisions that were made, problems that were faced, and things we'd do different.

  For details, see [the Ohio Linux Fest announcement](https://ohiolinux.org/tarus-balog-to-keynote-ohio-linuxfest-2017/).

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

* [HZN-1157](https://issues.opennms.org/browse/HZN-1157): Upgrade to JNA 4.4.0
* [NMS-9558](https://issues.opennms.org/browse/NMS-9558): BridgeTopologyDaoHibernate
* [NMS-9621](https://issues.opennms.org/browse/NMS-9621): Remote poller logs have place holders for their names
* [NMS-9624](https://issues.opennms.org/browse/NMS-9624): Missing visual aid on BSM Admin Page after hitting Reload Daemon
* [NMS-9636](https://issues.opennms.org/browse/NMS-9636): Pristine installation with an empty content for etc/drools-engine.d/ncs which is invalid
* [NMS-9637](https://issues.opennms.org/browse/NMS-9637): MomentJS warning after running sample code