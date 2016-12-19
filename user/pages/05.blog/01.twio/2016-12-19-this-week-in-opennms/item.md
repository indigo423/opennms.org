---
title: This Week in OpenNMS: December 19th, 2016
date: 11:47 12/19/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, minion, documentation, performance, syslog, kafka, eventd, alarmd, jmx, syslogd, trapd, enlinkd, bug fixes, fosdem]
---

In the last week we worked on documentation, internals, testing, performance, minion, enlinkd, and bug fixes.

<!-- git log --all --no-merges --since='2016-12-12 00:00:00' --until='2016-12-19 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)' | sort | less -R -->

Github Project Updates
----------------------

* __Documentation__

  Ronny created advanced Minion configuration documentation.

* __Internals, Testing, and Performance__

  Seth made a number of performance improvements to syslog handling, as well as working on a Kafka server setup for integration tests.  He also updated eventd to configurably drop events when queue limits have been reached.  Jesse improved the performance of event parm expansion and search.  Seth worked on Alarmd performance.

* __Minion__

  Jesse reworked the sink communication APIs to support aggregate messages and asynchronous dispatching, as well as getting dispatch statistics via JMX.  Markus converted syslogd and trapd to the sink API.  I worked on creating a Kafka dispatcher and producer for the sink API.

* __Enlinkd__

  Antonio worked on memory leak issues in Enlinkd.

* __Bug Fixes__

  We've been spending time fixing blockers and other bugs for 19.0.0, due early next year.


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

* [HZN-314](https://issues.opennms.org/browse/HZN-314): Add location column to outage list in UI
* [HZN-370](https://issues.opennms.org/browse/HZN-370): Administrator documentation for SNMP data collection
* [HZN-811](https://issues.opennms.org/browse/HZN-811): Dependency missing in camel-kafka feature for zookeeper & zkclient
* [HZN-948](https://issues.opennms.org/browse/HZN-948): Minion basic documentation for release 19
* [HZN-979](https://issues.opennms.org/browse/HZN-979): Add Kafka image to system test API
* [NMS-8896](https://issues.opennms.org/browse/NMS-8896): Memory Leak in enlinkd?
* [NMS-8948](https://issues.opennms.org/browse/NMS-8948): Kafka producer endpoints should operate in async mode

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->
