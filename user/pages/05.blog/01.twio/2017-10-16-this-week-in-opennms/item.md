---
title: This Week in OpenNMS: October 16th, 2017
date: 11:03 10/16/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, minion, telemetryd, postgresql, karaf, asciibinder, alarms, owasp, cubaconf, osmc]
---

It's time for This Week in OpenNMS!

Last week we continued progress towards Horizon 21, due this week.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2017-10-09 00:00:00' --until='2017-10-16 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * Chandra worked on minion system tests for Telemetryd.
  * I wrapped up my work on normalizing configuration files for Horizon 21.
  * I added support for PostgreSQL 10.
  * Markus added some code to the installer to verify the database and system time match.
  * Christian did more work on cleaning up the location:IP cache code.
  * Seth wrapped up the majority of the move to Karaf 4.1, with only custom shell commands remaining to be finished.
  * I worked on a script to automate performing OpenNMS Horizon and Meridian releases.
  * Ronny continued to work on moving our documentation to the Asciibinder framework.

* __Web and UI__

  * Markus added alarm ID to the event list and detail pages.
  * Jesse updated our web security code to use the newest version of OWASP's encoder.


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

* [HELM-65](https://issues.opennms.org/browse/HELM-65): Templating with query does not work when storeByForeignSource is true
* [HZN-1092](https://issues.opennms.org/browse/HZN-1092): Upgrade to Karaf 4.1
* [HZN-1160](https://issues.opennms.org/browse/HZN-1160): Telemetryd
* [NMS-8445](https://issues.opennms.org/browse/NMS-8445): Display AlarmId on Event page
* [NMS-9363](https://issues.opennms.org/browse/NMS-9363): osgi-pluginmanager: Add support for OSGi R6 HTTP/Pax Web 6
* [NMS-9522](https://issues.opennms.org/browse/NMS-9522): RadixTreeSyslogParser confuses timezone and hostname fields
* [NMS-9613](https://issues.opennms.org/browse/NMS-9613): Stale IP Address Cache
* [NMS-9638](https://issues.opennms.org/browse/NMS-9638): opennms-webapp-remoting JARs are not signed
* [NMS-9649](https://issues.opennms.org/browse/NMS-9649): Align WS-Management collection definitions with WMI ones
* [NMS-9666](https://issues.opennms.org/browse/NMS-9666): Trap event parenting lacks bias toward SNMP primary interfaces
* [NMS-9679](https://issues.opennms.org/browse/NMS-9679): Check/add support for PostgreSQL 10