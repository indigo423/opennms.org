---
title: This Week in OpenNMS: October 3rd, 2016
date: 11:26 10/03/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, activemq, jaas, minion, traps, packaging, rpm, bug fixes, ohio linux fest, dbatlanta, all things open, ato, mc frontalot, the doubleclicks, kings barcade, osmc]
---

In the last week we worked on ActiveMQ, Minion, and bug fixes.

<!-- git log --all --no-merges --since='2016-09-26 00:00:00' --until='2016-10-03 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)'  | sort | less -R -->

Github Project Updates
----------------------

* __ActiveMQ__

  Jesse worked on making our ActiveMQ instance able to authenticate using our JAAS realm.

* __Minion__

  Deepak and Seth's work on cleaning up trap serialization was merged to develop. I worked on a bunch of packaging issues related to Minion.

* __Bug Fixes__

  We've been spending time fixing a bunch of smaller bugs and starting to identify blockers for 19.0.0, due in the next few months.

Upcoming Events and Appearances
-------------------------------

* __[Ohio Linux Fest - October 7th and 8th, 2016](https://ohiolinux.org/)__

  Jeff will be speaking at Ohio Linux Fest on the current state of OpenNMS and what we're planning for the future.

* __[DBAtlanta Meetup - October 12th, 2016](https://www.meetup.com/DBAtlanta/events/233373942/)__

  Jeff will be giving a talk about Newts, the time-series data store designed and built for OpenNMS.

* __[All Things Open - October 26th and 27th, 2016](https://allthingsopen.org/)__

  Tarus will be speaking at the All Things Open conference on the subject of The Internet of Silos.  A number of OpenNMS folks will be in attendance, so if you see us, don't hesitate to say "hi."  We'll be sponsoring an evening concert of [MC Frontalot and The Doubleclicks](http://www.adventuresinoss.com/2016/07/05/mc-frontalot-and-the-doubleclicks-at-all-things-open/) at [King's Barcade](http://www.kingsbarcade.com/) Wednesday night.

* __[Open Source Monitoring Conference - November 29th through December 2nd, 2016](https://www.netways.de/en/events_trainings/osmc/overview/)__

  Jeff will be speaking at OSMC on the current state of OpenNMS and what we're planning for the future.

Until Next Week…
----------------

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

Resolved Issues Since Last TWiO
-------------------------------

* [HZN-618](https://issues.opennms.org/browse/HZN-618): Minion container init script doesn't always properly stop the Karaf
* [HZN-622](https://issues.opennms.org/browse/HZN-622): The Karaf init script will complain if the JAVA_HOME environment variable is not set
* [HZN-766](https://issues.opennms.org/browse/HZN-766): Send Trap messages using XML instead of serialized POJOs
* [HZN-892](https://issues.opennms.org/browse/HZN-892): SVG Icons are not visible across all browsers (IE)
* [HZN-896](https://issues.opennms.org/browse/HZN-896): File handle leak in custom info panels and edge status provider
* [HZN-898](https://issues.opennms.org/browse/HZN-898): Add -XX:+HeapDumpOnOutOfMemoryError to Minion JVM
* [NMS-8651](https://issues.opennms.org/browse/NMS-8651): pathOutage event's reduction key should allow reducing on single critical path
* [NMS-8663](https://issues.opennms.org/browse/NMS-8663): Difficulty identifying multiple edges between vertices in Topology UI
* [NMS-8664](https://issues.opennms.org/browse/NMS-8664): Xport failed exception when using the Measurements API in a custom info panel item
* [NMS-8666](https://issues.opennms.org/browse/NMS-8666): Replace GWT with Angular: remove GWT projects and CoreWeb
* [NMS-8683](https://issues.opennms.org/browse/NMS-8683): Firebird SQL Monitor
* [NMS-8755](https://issues.opennms.org/browse/NMS-8755): Trap received from Minion doesn't preserve original timestamp, systemId fields
* [NMS-8774](https://issues.opennms.org/browse/NMS-8774): Capture Minion karaf.log during Docker smoke tests

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->
