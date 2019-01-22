---
title: This Week in OpenNMS: February 6th, 2017
date: 11:18 02/06/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, jasper reports, jira, trouble ticketing, rrd, wmi, ws-man, graphing, icmp, ping, data collection, node maps, maps, acls, bug fixes, training]
---

In the last week we worked on internals, minion, web UI, and bug fixes.

<!-- git log --all --no-merges --since='2017-01-30 00:00:00' --until='2017-02-06 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)' | sort | less -R -->

## Github Project Updates

* __Internals__

  Markus did some more work on auto-compiling Jasper reports.  Markus fixed attribute mapping in the JIRA ticketer.  Alejandro fixed an issue with spikes in graphs on node reboot.  Jesse did more WMI and WSMan fixes.  I worked on fixing ICMP support to autodetect the best ICMP API to use on startup.

* __Minion__

  Jesse added a module to allow triggering collectors remotely, as well as other fixes to data collection.

* __Web UI__

  Markus did more work finishing his replacement for node maps.  Christian worked on fixing ACL support in some portions of the web UI.

* __Bug Fixes__

  We've been spending time fixing blockers and other bugs for 19.0.0, due early this year.


## Upcoming Events and Appearances

* __[Training - February 27th through March 3rd, 2017](https://www.opennms.com/opennms-training-dates-announced-for-february-2017/)__

  The OpenNMS Group will be holding training at OpenNMS Headquarters in Pittsboro, NC, USA the week of February 27th, 2017.

## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

## Resolved Issues Since Last TWiO

* [HZN-911](https://issues.opennms.org/browse/HZN-911): Add Geographical Status Map to Index Page
* [HZN-1001](https://issues.opennms.org/browse/HZN-1001): Refactor ServiceCollector implementations out of opennms-services
* [NMS-4552](https://issues.opennms.org/browse/NMS-4552): Auto-compile jasper subreports if needed
* [NMS-5450](https://issues.opennms.org/browse/NMS-5450): OpenNMS doesn't correctly support IPv6 addresses for (jasper) reporting
* [NMS-6345](https://issues.opennms.org/browse/NMS-6345): There are graph templates that are not working with RRDtool
* [NMS-8085](https://issues.opennms.org/browse/NMS-8085): InvalidPathException on element/node.jsp with IPv6 interface on Windows
* [NMS-8352](https://issues.opennms.org/browse/NMS-8352): Event Filtering in Notification UI doesn't have type-ahead behavior
* [NMS-8911](https://issues.opennms.org/browse/NMS-8911): Integration tests fail if HikariCP is used
* [NMS-9019](https://issues.opennms.org/browse/NMS-9019): Bundle "Topology :: Plugins :: Net Utils" fails to start
* [NMS-9026](https://issues.opennms.org/browse/NMS-9026): Heatmap does not load in some cases "$.widget is not a function"
* [NMS-9033](https://issues.opennms.org/browse/NMS-9033): Deprecate the opennms-elasticsearch-event-forwarder feature
* [NMS-9060](https://issues.opennms.org/browse/NMS-9060): Copyright bump 2017
* [NMS-9069](https://issues.opennms.org/browse/NMS-9069): Icon Selection Dialog shows empty icon "microwave_backhaul_2"

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->
