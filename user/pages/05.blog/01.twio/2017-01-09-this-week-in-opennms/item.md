---
title: This Week in OpenNMS: January 9th, 2017
date: 16:22 01/09/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, internals, testing, eventd, rrd, wsman, trapd, syslogd, elasticsearch, datacollection, bug fixes, fosdem, training]
---

In the last couple of weeks we worked on internals, testing, the Minion, and bug fixes.  We also released OpenNMS Horizon 18.0.3, OpenNMS Meridian 2016.1.4, and OpenNMS Meridian 2015.1.4.

<!-- git log --all --no-merges --since='2017-01-03 00:00:00' --until='2017-01-09 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)' | sort | less -R -->

## Github Project Updates

* __Internals and Testing__

  Seth continued his work on handling full event queues more gracefully.  Alejandro enhanced the RRD stresser to make the RRAs configurable.  Jesse did more improvements to our WSMan support.

* __Minion__

  Seth made the syslog and trapd queues configurable.  He also added support for forwarding non-persisted events to Elasticsearch.  Jesse fixed some issues with outages and datacollection failures from the Minion on restart.

* __Bug Fixes__

  We've been spending time fixing blockers and other bugs for 19.0.0, due early this year.


## New Releases

### [OpenNMS Horizon 18.0.3 (Dugong)](https://bit.ly/opennms-changes-18-0-3)

This release has been a long time coming, with tons of bug fixes including a fix for a discovery/provisioning regression over Horizon 17.

Notable Changes:

* fix for the duplicate node regression
* many improvements and fixes to SNMP graph definitions
* a number of GUI tweaks and fixes (event search, alarm details, ops board colors, node link details)
* Newts fixes: improved Measurements API compatibility for graphing, fixed retrying when Cassandra is unavailable
* better handling of invalid or unlikely SNMP error responses from agents
* some fixes to JMX-related code (trap counters, the config command-line tool)
* fixes to a number of crashes and exceptions in various subsystems (BSMD, Enlinkd, SNMP)
* the JIRA ticketer now handles HTTPS properly and now supports additional fields
* bug fixes and improvements to WS-MAN collection

For more details, see the complete [Release Notes](https://docs.opennms.org/opennms/releases/latest/releasenotes/releasenotes.html).

### [OpenNMS Meridian 2016.1.4 (Dymaxion)](https://bit.ly/meridian-changes-2016-1-4)

The fifth Meridian 2016.1.4 release contains a number of the bug fixes and enhancements that have been rolled into recent 18.x releases.

Release notes are available on [the Meridian web site](http://bit.ly/meridian-changes-2016-1-4).

### [OpenNMS Meridian 2015.1.4 (ULAST)](https://bit.ly/meridian-changes-2015-1-4)

Meridian releases are supported for 3 years, so we have backported the most important fixes from recent 18.x releases to Meridian 2015 as well.

Release notes are available on [the Meridian web site](http://bit.ly/meridian-changes-2015-1-4).


## Upcoming Events and Appearances

* __[FOSDEM 2017 - February 4th and 5th, 2017](https://fosdem.org/2017/)__

  Craig Gallen will be at FOSDEM 2017 and OpenNMS will have a booth there.

* __[Training - February 27th through March 3rd, 2017](https://www.opennms.com/opennms-training-dates-announced-for-february-2017/)__

  The OpenNMS Group will be holding training at OpenNMS Headquarters in Pittsboro, NC, USA the week of February 27th, 2017.

## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

## Resolved Issues Since Last TWiO

* [HZN-604](https://issues.opennms.org/browse/HZN-604): Modularize Trapd
* [HZN-932](https://issues.opennms.org/browse/HZN-932): Improve eventd's event throughput
* [HZN-963](https://issues.opennms.org/browse/HZN-963): Add Kafka support to the Sink IPC
* [HZN-966](https://issues.opennms.org/browse/HZN-966): Convert Syslogd to use a Sink module
* [HZN-983](https://issues.opennms.org/browse/HZN-983): Make the hawtio feature available in the Minion RPMs
* [HZN-984](https://issues.opennms.org/browse/HZN-984): Avoid logging JMS message contents by default
* [HZN-986](https://issues.opennms.org/browse/HZN-986): Make Elasticsearch ports configurable in forwarder
* [NMS-5110](https://issues.opennms.org/browse/NMS-5110): New-suspect event flood possible in trapd
* [NMS-8756](https://issues.opennms.org/browse/NMS-8756): Exception in LatencyStoringServiceMonitorAdaptor: IncorrectResultSizeDataAccessException
* [NMS-8767](https://issues.opennms.org/browse/NMS-8767): Auto-Discover architecture/behavior has changed and broke its typical usage
* [NMS-8790](https://issues.opennms.org/browse/NMS-8790): The search page for events is not working as expected
* [NMS-8903](https://issues.opennms.org/browse/NMS-8903): Better logging for SNMP traps with processing problems
* [NMS-8915](https://issues.opennms.org/browse/NMS-8915): ArrayIndexOutOfBoundsException while processing some trap varbinds
* [NMS-8955](https://issues.opennms.org/browse/NMS-8955): WS_Man datacollection using WQL fails with 'unsupported element'
* [NMS-8957](https://issues.opennms.org/browse/NMS-8957): Alarmd creates new database transaction for every event
* [NMS-8965](https://issues.opennms.org/browse/NMS-8965): Exposing JMX through 18980 doesn't work with authentication
* [NMS-8966](https://issues.opennms.org/browse/NMS-8966): es-rest: EventForwarderQueueImpl needs configurable blockWhenFull behavior
* [NMS-8970](https://issues.opennms.org/browse/NMS-8970): Search Events Error
* [NMS-8972](https://issues.opennms.org/browse/NMS-8972): Make the RRAs tunable for the metrics:stress command when using for RRDtool.
* [NMS-8975](https://issues.opennms.org/browse/NMS-8975): Restarting OpenNMS while monitoring nodes via Minions may create erroneous outages

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->
