---
title: This Week in OpenNMS: June 13th, 2017
date: 10:59 06/13/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, enlinkd, topology, thresholding, ws-man, strafeping, minion, java9, karaf, activemq, ssl, snmp, javascript, alarms, dev-jam, training]
---

It's time for This Week in OpenNMS!  In the last week we worked on various internal and web UI changes.

<!-- git log --all --no-merges --since='2017-06-05 00:00:00' --until='2017-06-13 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)' | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * Antonio worked on more Enlinkd and topology bugs.
  * Jesse fixed an issue with thresholding WS-Man collection results.
  * Jesse worked on fixing StrafePing on the Minion.
  * Jesse did more work on initial Java 9 support.
  * Seth did more work on upgrading our embedded Karaf to 4.1 and our ActiveMQ to 5.14.
  * Dustin updated the docs on using the `SSLCertMonitor`.
  * Jesse fixed a bug discovered in OpenNMS 20 where secondary SNMP interfaces were being collected when they shouldn't be.
  * I continued my work on a [JavaScript API for OpenNMS](https://github.com/OpenNMS/opennms-js).

* __Web__

  * Craig did a bit more work on the alarm alert browser support.
  * Markus converted the location field of the SNMP configuration page to a select box.

## OpenNMS Horizon 20 Released

OpenNMS Horizon 20 was released last week, with tons of minion updates and a lot of other changes.  For a complete list of changes, see the [release notes](http://docs.opennms.org/opennms/releases/latest/releasenotes/releasenotes.html#releasenotes-20).

Also note, Horizon 20 has finished our conversion to processing XML with JAXB, and some files that previously worked may need to be modified to be well-formed.  As we get reports from users about pitfalls they run into, we'll document them [here](https://wiki.opennms.org/wiki/Upgrade_Guide:_19_to_20).

## September Traning Dates Announced

The next training offered by The OpenNMS Group will be the week of September 11th, 2017, at our Apex, NC office.  For details, see [the OpenNMS.com training site](https://www.opennms.com/training/).

## Upcoming Events and Appearances

* __[Dev-Jam 2017 - Concordia University - July 16th through 21st](http://www.opennms.com/opennms-dev-jam-registration)__

  Our annual developers' conference, Dev-Jam, will be held in Montreal, Canada this year.  For details, please see Tarus's [announcement on the OpenNMS blog](https://opennms.org/en/blog/2017-03-07-devjam-2017).  When you're ready to register, go to [the registration page](http://www.opennms.com/opennms-dev-jam-registration).  See you there!

* __[OpenNMS Training – Apex, NC - September 11th through 15th, 2017](http://www.opennms.com/training/)__

  The OpenNMS Group's next training session in Apex, NC will be September 11th through 15th.  For more details on OpenNMS training and to sign up, see [The OpenNMS.com training page](http://www.opennms.com/training/).

## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HZN-1050](https://issues.opennms.org/browse/HZN-1050): Enable username logging in Jetty request logs
* [HZN-1055](https://issues.opennms.org/browse/HZN-1055): Allow the credentials stored in scv to be configured without starting the Karaf container
* [HZN-1074](https://issues.opennms.org/browse/HZN-1074): Histogram panel for alarms
* [HZN-1081](https://issues.opennms.org/browse/HZN-1081): Avoid depending on tools.jar when compiling under JDK9
* [NMS-9353](https://issues.opennms.org/browse/NMS-9353): XSS vulnerability on quick-add node page
* [NMS-9354](https://issues.opennms.org/browse/NMS-9354): XSS vulnerability on node error page
* [NMS-9355](https://issues.opennms.org/browse/NMS-9355): XSS vulnerability with application names
* [NMS-9356](https://issues.opennms.org/browse/NMS-9356): Allow provisiond to perform reverse lookups without requiring an A record
* [NMS-9361](https://issues.opennms.org/browse/NMS-9361): Thresholding on WSMan datasources appears broken
* [NMS-9375](https://issues.opennms.org/browse/NMS-9375): Alarms Page Enhancements - Sound and Flashing
* [NMS-9401](https://issues.opennms.org/browse/NMS-9401): Warn users about upcoming configuration formatting changes in release notes for 20.0.0
* [NMS-9407](https://issues.opennms.org/browse/NMS-9407): StrafePingMonitor fails on Minion
* [NMS-9410](https://issues.opennms.org/browse/NMS-9410): Can't install OpenNMS caused by libopennms-java dependency problems
