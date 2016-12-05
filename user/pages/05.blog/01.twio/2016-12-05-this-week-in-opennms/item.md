---
title: This Week in OpenNMS: December 5th, 2016
date: 11:47 12/05/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, data collection, polling, traps, ttl, varbinds, ws-man, syslog, events, quartz, unit tests, minion, snmpv3 jira, backshift, vdef, bug fixes, fosdem]
---

In the last week we worked on data collection, polling, traps, various internals, the Minion, ticketing, graphing, and bug fixes.

<!-- git log --all --no-merges --since='2016-11-28 00:00:00' --until='2016-12-05 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)' | sort | less -R -->

Github Project Updates
----------------------

* __Data Collection, Polling, and Traps__

  Jesse added code for handling related metric types and identifiers in collections.  He also changed the poller to return "unknown" rather than "unavailable" if a monitor exceeds the TTL, to handle the case when minions go offline.  Jeff fixed a bug handling some kinds of trap varbinds.  Jesse did a number of fixes and enhancements for the WS-Man collector.

* __Internals and Events__

  Seth continued work on event and syslog performance.  He also worked on updating our embedded version of the Quartz scheduler.  Seth and Alejandro fixed some unit test bugs.

* __Minion__

  Dustin fixed the case where sometimes Minion hadn't finished stopping before starting again when running `service minion restart`.  I fixed a bug where SNMPv3 config updates coming from OpenNMS would cause the trap listener to reinitialize improperly.  Jesse fixed some Minion reconnect issues.

* __Ticketing__

  Markus added support for custom fields in the JIRA ticketing plugin, as well as fixing some bugs in how ticket updates are handled.

* __Graphing and UI__

  Dustin updated Backshift to support VDEFs and upgraded the version shipped with OpenNMS.

* __Bug Fixes__

  We've been spending time fixing blockers and other bugs for 19.0.0, due (hopefully) before the end of the year.

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

* [BSHIFT-12](https://issues.opennms.org/browse/BSHIFT-12): Add support for handling VDEF expressions
* [HZN-315](https://issues.opennms.org/browse/HZN-315): Add system/location column to event list in UI
* [HZN-931](https://issues.opennms.org/browse/HZN-931): Minion trap listener uses port from trapd-configuration.xml
* [HZN-932](https://issues.opennms.org/browse/HZN-932): Improve eventd's event throughput
* [HZN-933](https://issues.opennms.org/browse/HZN-933): Batch insert events in both the Hibernate and JDBC
* [HZN-944](https://issues.opennms.org/browse/HZN-944): Traps are getting failed in OpenNMS because of different TrapDTO format
* [HZN-952](https://issues.opennms.org/browse/HZN-952): The Minion is not restarted after running 'systemctl restart minion'
* [HZN-955](https://issues.opennms.org/browse/HZN-955): Refine TTL handling in Pollerd
* [NMS-6346](https://issues.opennms.org/browse/NMS-6346): IllegalArgumentException, ArrayIndexOutOfBoundsException on custom report page in 1.12.1 and in 1.12.3 
* [NMS-8451](https://issues.opennms.org/browse/NMS-8451): The friendly-names in the default Cassandra collection packages have changed
* [NMS-8490](https://issues.opennms.org/browse/NMS-8490): Replace VDEF with {diffTime} on the resource templates to avoid conflicts with Backshift
* [NMS-8697](https://issues.opennms.org/browse/NMS-8697): Collect Elasticsearch stats via REST using the XmlCollector
* [NMS-8714](https://issues.opennms.org/browse/NMS-8714): Minion code throws "javax.jms.IllegalStateException: The Session is closed"
* [NMS-8723](https://issues.opennms.org/browse/NMS-8723): Add ReST Elastic Search Alarms to devel
* [NMS-8776](https://issues.opennms.org/browse/NMS-8776): Latency metrics are not location-aware
* [NMS-8813](https://issues.opennms.org/browse/NMS-8813): InterruptedExceptions thrown when using SNMP
* [NMS-8838](https://issues.opennms.org/browse/NMS-8838): ICMPv6 tests don't skip ping tests when runPingTests system property set to false
* [NMS-8893](https://issues.opennms.org/browse/NMS-8893): Set additional fields in the JIRA ticketer
* [NMS-8906](https://issues.opennms.org/browse/NMS-8906): JiraTicketerPlugin does not to work with https instances
* [NMS-8912](https://issues.opennms.org/browse/NMS-8912): Can't save cached requisition associated with HTTP when scheduling the import through provisiond-configuration.xml
* [NMS-8914](https://issues.opennms.org/browse/NMS-8914): The "Update Ticket" functionality on the alarm detail page is broken, when the original creation of the issue failed
* [NMS-8930](https://issues.opennms.org/browse/NMS-8930): SNMP Collector does not use the location when retrieving the agent configuration

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->
