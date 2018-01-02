---
title: This Week in OpenNMS: January 2nd, 2018
date: 10:56 01/02/2018
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, telemetryd, kafka, snmp, netflow, notifd, ipfix, ironport, webpack, linuxconf, nznog]
---

It's time for This Week in OpenNMS!  We're back from the holidays and ready to write some more code.

Before the holiday break we did more Telemetryd work, web UI refactor, and other bug fixing.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2017-12-18 00:00:00' --until='2018-01-02 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * Chandra did more work on kafka offset monitoring.
  * Seth did more work on making DAOs and collection OSGi-friendly.
  * Antonio added a new monitor: `SnmpTimeMonitor`.
  * Markus did more work on defining a model for flow applications.
  * Jesse fixed a bug that could cause Notifd to spin out of control creating new threads.
  * Dustin added Netflow 9 and IPFIX parsing to Telemetryd.
  * Tarus added events for Ironport AsyncOS mail gateway appliances.
  * Ronny fixed up some alarm-related documentation.

* __Web & UI__

  * I did more work on refactoring our various JavaScript code to a single optimized webpack build.
  * Markus worked on ReST APIs for flow applications.
  * Jesse finished the initial implementation of ReST APIs for retrieving telemetry data.


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

* [HELM-77](https://issues.opennms.org/browse/HELM-77): Provide Grafana dashboard for OpenNMS JVM metrics
* [HZN-1207](https://issues.opennms.org/browse/HZN-1207): Flow application definition database model
* [HZN-1211](https://issues.opennms.org/browse/HZN-1211): Make standalone application which calculates lag for kafka topics
* [HZN-1213](https://issues.opennms.org/browse/HZN-1213): Integrate kafka offset monitoring into OpenNMS
* [HZN-1214](https://issues.opennms.org/browse/HZN-1214): Canonical Netflow Model
* [NMS-8093](https://issues.opennms.org/browse/NMS-8093): Privilege Escalation Bug with Grafana Plugin
* [NMS-9728](https://issues.opennms.org/browse/NMS-9728): Karaf client shell script fails on missing inc directory
* [NMS-9781](https://issues.opennms.org/browse/NMS-9781): Attribute categoryFilter missing in default ifttt-config.xml
* [NMS-9794](https://issues.opennms.org/browse/NMS-9794): Add Ironport AsyncOS Mail Gateway Events
* [NMS-9802](https://issues.opennms.org/browse/NMS-9802): Broken Link in Admin guide to Alarm Introduction
* [NMS-9803](https://issues.opennms.org/browse/NMS-9803): Wrong syntax for automatic rescanning in admin guide