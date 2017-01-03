---
title: This Week in OpenNMS: January 3rd, 2017
date: 16:22 01/03/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, internals, testing, performance, syslog, alarmd, elasticsearch, kafka, miniontrapd, enlinkd, bug fixes, fosdem]
---

Hello again!  We're back from our holiday break, so it's time for "These Weeks in OpenNMS." ;)

In the last couple of weeks we worked on internals, testing, performance, Minion, Enlinkd, and bug fixes.

<!-- git log --all --no-merges --since='2016-12-19 00:00:00' --until='2017-01-03 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)' | sort | less -R -->

Github Project Updates
----------------------

* __Internals, Testing, and Performance__

  Seth did more work on syslog testing and performance, as well as a number of performance updates for Alarmd.  He also updated event processing and the Elasticsearch APIs to handle the case where queues can fill up, allowing OpenNMS to drop events rather than run out of memory and crash.

* __Minion__

  I got a prototype working for a Kafka dispatcher and producer for the sink API.  Jesse worked on handling path outages properly in the Minion.  Markus finished his port of Trapd to the sink API.

* __Enlinkd__

  Antonio fixed a number of bugs in Enlinkd.

* __Bug Fixes__

  We've been spending time fixing blockers and other bugs for 19.0.0, due early this year.


Upcoming Events and Appearances
-------------------------------

* __[FOSDEM 2017 - February 4th and 5th, 2017](https://fosdem.org/2017/)__

  Craig Gallen will be at FOSDEM 2017 and OpenNMS will have a booth there.

* __[Training - February 27th through March 3rd, 2017](https://www.opennms.com/opennms-training-dates-announced-for-february-2017/)__

  The OpenNMS Group will be holding training at OpenNMS Headquarters in Pittsboro, NC, USA the week of February 27th, 2017.

Until Next Week…
----------------

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

Resolved Issues Since Last TWiO
-------------------------------

* [NMS-8067](https://issues.opennms.org/browse/NMS-8067): ConstraintViolationException in Enlinkd for OSPF
* [NMS-8639](https://issues.opennms.org/browse/NMS-8639): Concurrent Modification Exception Bridge Discovery Topology
* [NMS-8790](https://issues.opennms.org/browse/NMS-8790): The search page for events is not working as expected
* [NMS-8964](https://issues.opennms.org/browse/NMS-8964): Enlinkd Not Performing Bridge Topology Discovery

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->
