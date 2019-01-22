---
title: This Week in OpenNMS: January 17th, 2017
date: 11:18 01/17/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, data collection, karaf, logging, ws-man, elasticsearch, kafka, syslog, jasper, path outages, surveillance categories, floss weekly, open technologies for growth, fosdem, training]
---

In the last week we worked on internals, testing, the Minion, the web UI, and bug fixes.

<!-- git log --all --no-merges --since='2017-01-09 00:00:00' --until='2017-01-17 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)' | sort | less -R -->

## Github Project Updates

* __Internals and Testing__

  Jesse's work on making datacollection attribute names more flexible was merged.  Markus's change to make Karaf log to `${OPENNMS_HOME}/logs` was merged.  Jesse did more work on WSMan collection.  Seth did more work on testing for Elasticsearch, Kafka, and syslog.  He also made it possible to forward non-persisted events to Elasticsearch and fixed some potential deadlock issues in event handling.  Markus worked on making Jasper subreports compilable at runtime.

* __Minion__

  Jesse's changes to make path outages location-aware was merged.  Dustin worked on adding test coverage to handle overlapping IP ranges across disparate locations.

* __Web UI__

  I finished the work of adding event source location and node location to the event, alarm, outage, and notification UIs, as well as cleaning up the detailed alarm list to work more like the event one.  Markus made the surveillance category box scrollable so the front page isn't huge when there are a large number of categories in the system.

* __Bug Fixes__

  We've been spending time fixing blockers and other bugs for 19.0.0, due early this year.


## Upcoming Events and Appearances

* __[FLOSS Weekly - January 17th, 2017](https://twit.tv/shows/floss-weekly)__

  Tarus Balog and Jeff Gehlbach will be guesting on FLOSS Weekly __TODAY__, January 17th. Tune in live at 17:30 UTC, or get it from your favorite podcatcher at your leisure.

* __[Open Technologies for Growth - February 2nd, 2017](http://lata.org.lv/konference2017_eng/)__

  Tarus will be speaking on open source business at the Open Tech conference in Riga, Latvia on February 2nd.

* __[FOSDEM 2017 - February 4th and 5th, 2017](https://fosdem.org/2017/)__

  Craig Gallen will be at FOSDEM 2017 and OpenNMS will have a booth there.

* __[Training - February 27th through March 3rd, 2017](https://www.opennms.com/opennms-training-dates-announced-for-february-2017/)__

  The OpenNMS Group will be holding training at OpenNMS Headquarters in Pittsboro, NC, USA the week of February 27th, 2017.

## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

## Resolved Issues Since Last TWiO

* [HZN-942](https://issues.opennms.org/browse/HZN-942): Add kafka support for sink pattern to send syslogs
* [HZN-943](https://issues.opennms.org/browse/HZN-943): Add kafka support for sink pattern to send traps
* [HZN-962](https://issues.opennms.org/browse/HZN-962): Rework Listeners in Minion and OpenNMS to use the "Sink" pattern
* [NMS-8019](https://issues.opennms.org/browse/NMS-8019): Nodes with invalid NodeTypes can be created via the Nodes Rest-API
* [NMS-8055](https://issues.opennms.org/browse/NMS-8055): The resourcecli tool shows metrics as graph (sounds confusing)
* [NMS-8976](https://issues.opennms.org/browse/NMS-8976): Restarting OpenNMS while performing SNMP data-collection via Minions may create dataCollectionFailed alarms
* [NMS-8981](https://issues.opennms.org/browse/NMS-8981): Typo in linkednode.jsp in panel title
* [NMS-9001](https://issues.opennms.org/browse/NMS-9001): BSM documentation: explanation of threshold menu is missing

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->
