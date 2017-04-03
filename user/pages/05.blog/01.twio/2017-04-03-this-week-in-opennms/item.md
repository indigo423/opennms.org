---
title: This Week in OpenNMS: April 3rd, 2017
date: 11:15 04/03/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, jaxb, syslog, quartz, tcp persister, provisiond, enlinkd, bsm, percona live, hackathon, dev-jam]
---

It's time for This Week in OpenNMS!  In the last week we worked on various internal changes, and the web UI.

<!-- git log --all --no-merges --since='2017-03-27 00:00:00' --until='2017-04-03 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)' | sort | less -R -->

## Github Project Updates

* __Internals__

  I did more work on using Java 8's `Optional` in our JAXB classes and other cleanups.  Seth continued his work on refactoring our syslog parser, and on moving our embedded Quartz scheduler to 2.2.  Jesse worked on improving string support in the TCP persister.  Dustin worked on improving deletion handling in Provisiond.  Antonio fixed more Enlinkd issues.

* __Web UI__

  Christian added support for searching sub-trees in the BSM UI.


## Upcoming Events and Appearances

* __[Percona Live - April 24th through 27th, 2017](https://www.percona.com/live/17/)__

  Jesse [will be speaking at Percona](https://www.percona.com/live/17/users/jesse-white) in Santa Clara, California on April 25th, 2017.

* __[OpenNMS Hackathon - April 28th through April 30th, 2017](http://doodle.com/poll/khqydbip8ee76ine)__

  Markus is arranging an OpenNMS hackathon in Fulda, Germany at the end of April.  If you'd like to hack on the OpenNMS code fixing bugs, implementing features, or just want to talk with other OpenNMS developers, please follow this link to let them know you're interested in joining: [OpenNMS Hackathon Doodle](http://doodle.com/poll/khqydbip8ee76ine)

* __[Dev-Jam 2017 - Concordia University - July 16th through 21st](http://www.opennms.com/opennms-dev-jam-registration)__

  Our annual developers' conference, Dev-Jam, will be held in Montreal, Canada this year.  For details, please see Tarus's [announcement on the OpenNMS blog](https://opennms.org/en/blog/2017-03-07-devjam-2017).  When you're ready to register, go to [the registration page](http://www.opennms.com/opennms-dev-jam-registration).  See you there!


## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HZN-699](https://issues.opennms.org/browse/HZN-699): Add support for searching in the "Manage Business Services" UI
* [HZN-1011](https://issues.opennms.org/browse/HZN-1011): XmlCollector support for Minion
* [HZN-1020](https://issues.opennms.org/browse/HZN-1020): DNS requisition handler
* [HZN-1032](https://issues.opennms.org/browse/HZN-1032): Remove old requisition ui
* [HZN-1034](https://issues.opennms.org/browse/HZN-1034): Add support for synchronous EventListener invocation
* [NMS-4551](https://issues.opennms.org/browse/NMS-4551): Merge Provisioning Groups while Retaining the data
* [NMS-4606](https://issues.opennms.org/browse/NMS-4606): Windows 2008 Server Interfaces show as 0.0.0.0
* [NMS-6584](https://issues.opennms.org/browse/NMS-6584): Update Quartz to current version
* [NMS-7233](https://issues.opennms.org/browse/NMS-7233): XML collector RPM has non-relocatable /var/opennms
* [NMS-8441](https://issues.opennms.org/browse/NMS-8441): RWS client always uses plain HTTP, even if rws-config.html has HTTPS URL
* [NMS-8601](https://issues.opennms.org/browse/NMS-8601): Simple usability improvement to the provisioning UI
* [NMS-8667](https://issues.opennms.org/browse/NMS-8667): Null ospfrouterid in NodeDiscoveryOspf
* [NMS-8725](https://issues.opennms.org/browse/NMS-8725): Write Syslog Parser to handle all message types (Cisco, syslog-ng, etc)
* [NMS-8726](https://issues.opennms.org/browse/NMS-8726): Create unit test to profile Syslogd's ConvertToEvent performance
* [NMS-8777](https://issues.opennms.org/browse/NMS-8777): Incoming syslog/trap flood can overwhelm new handler code
* [NMS-9000](https://issues.opennms.org/browse/NMS-9000): "invert-status" parameter is missing in documentation
* [NMS-9118](https://issues.opennms.org/browse/NMS-9118): no iplike for postgresql 9.6 on debian
* [NMS-9156](https://issues.opennms.org/browse/NMS-9156): Enhanced Linkd NPE: vlanmap is null
* [NMS-9159](https://issues.opennms.org/browse/NMS-9159): Elasticsearch alarms integration improvements
* [NMS-9192](https://issues.opennms.org/browse/NMS-9192): EIF documentation was not added to index.adoc
* [NMS-9197](https://issues.opennms.org/browse/NMS-9197): OpenNMS Loses Events if Elasticsearch is down
* [NMS-9210](https://issues.opennms.org/browse/NMS-9210): es-rest: Allow a comma-separated list of Elasticsearch URIs
* [NMS-9222](https://issues.opennms.org/browse/NMS-9222): Set domain level for DNS adapter
* [PRIS-137](https://issues.opennms.org/browse/PRIS-137): Bump version dependencies
