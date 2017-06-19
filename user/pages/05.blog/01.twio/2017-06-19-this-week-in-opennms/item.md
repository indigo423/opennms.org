---
title: This Week in OpenNMS: June 19th, 2017
date: 10:33 06/19/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, enlinkd, topology, collectd, horizon, jaxb, javascript, rest, events, maps, dev-jam, training, ohio linux fest, olf]
---

It's time for This Week in OpenNMS!  In the last week we worked on various internal and web UI changes.

<!-- git log --all --no-merges --since='2017-06-13 00:00:00' --until='2017-06-19 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)' | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * Antonio worked on more Enlinkd and topology bugs.
  * Jesse fixed a bug in Collectd in Horizon 20 that would cause large amounts of collection on non-primary interfaces.
  * I fixed some issues related to the JAXB update.
  * I continued my work on a [JavaScript API for OpenNMS](https://github.com/OpenNMS/opennms-js).

* __Web__

  * Seth worked on the ReSTv2 APIs and cleanup.
  * Markus and Alejandro fixed some UI bugs in the event configuration and map pages.

## Tarus Balog will Keynote Ohio Linux Fest

Tarus Balog will be the keynote speaker at Ohio Linux Fest in Columbus.  His talk is titled _"A Short History of an Open Source Business"_ and will be about the history of OpenNMS, decisions that were made, problems that were faced, and things we'd do different.

For details, see [the Ohio Linux Fest web site](https://ohiolinux.org/tarus-balog-to-keynote-ohio-linuxfest-2017/).

## Upcoming Events and Appearances

* __[Dev-Jam 2017 - Concordia University - July 16th through 21st](http://www.opennms.com/opennms-dev-jam-registration)__

  Our annual developers' conference, Dev-Jam, will be held in Montreal, Canada this year.  For details, please see Tarus's [announcement on the OpenNMS blog](https://opennms.org/en/blog/2017-03-07-devjam-2017).  When you're ready to register, go to [the registration page](http://www.opennms.com/opennms-dev-jam-registration).  See you there!

* __[OpenNMS Training – Apex, NC - September 11th through 15th, 2017](http://www.opennms.com/training/)__

  The OpenNMS Group's next training session in Apex, NC will be September 11th through 15th.  For more details on OpenNMS training and to sign up, see [The OpenNMS.com training page](http://www.opennms.com/training/).

* __[Ohio Linux Fest - Columbus, OH - September 29th through 30th, 2017](https://ohiolinux.org/tarus-balog-to-keynote-ohio-linuxfest-2017/)__

  Tarus Balog will be the keynote speaker at Ohio Linux Fest in Columbus.  His talk is titled _"A Short History of an Open Source Business"_ and will be about the history of OpenNMS, decisions that were made, problems that were faced, and things we'd do different.

  For details, see [the Ohio Linux Fest announcement](https://ohiolinux.org/tarus-balog-to-keynote-ohio-linuxfest-2017/).

## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HZN-1053](https://issues.opennms.org/browse/HZN-1053): Create BackingEngineFactory for Karaf JAAS module
* [HZN-1054](https://issues.opennms.org/browse/HZN-1054): Some (other) events have Log Messages that are more verbose than Description
* [HZN-1056](https://issues.opennms.org/browse/HZN-1056): Add SNI suppot for SSLCertMonitor
* [HZN-1086](https://issues.opennms.org/browse/HZN-1086): Upgrade ActiveMQ to 5.14
* [HZN-1087](https://issues.opennms.org/browse/HZN-1087): Upgrade Camel to version 2.18
* [NMS-6216](https://issues.opennms.org/browse/NMS-6216): Strange entries in output.log
* [NMS-8341](https://issues.opennms.org/browse/NMS-8341): Custom Karaf banner and misleading osgi:shutdown hint
* [NMS-8473](https://issues.opennms.org/browse/NMS-8473): Karaf extender fails to start up due to Wagon error
* [NMS-8793](https://issues.opennms.org/browse/NMS-8793): Minion code throws "java.lang.IllegalStateException: Unknown protocol: mvn"
* [NMS-8825](https://issues.opennms.org/browse/NMS-8825): SNMP4J high thread churn
* [NMS-9085](https://issues.opennms.org/browse/NMS-9085): Upgrade embedded Apache Karaf to version 4.0
* [NMS-9321](https://issues.opennms.org/browse/NMS-9321): Update Minion's Apache Karaf to 4.0.8
* [NMS-9324](https://issues.opennms.org/browse/NMS-9324): 'wrap' protocol not loading early enough with Karaf 4.0.8
* [NMS-9413](https://issues.opennms.org/browse/NMS-9413): Collectd is scheduling collection for every IP address instead of just primary interfaces
* [NMS-9419](https://issues.opennms.org/browse/NMS-9419): Quick search HTTP error
* [NMS-9424](https://issues.opennms.org/browse/NMS-9424): Grouped status circle on geomap is not a circle

