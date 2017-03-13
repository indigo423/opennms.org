---
title: This Week in OpenNMS: March 13th, 2017
date: 11:40 03/13/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, castor, xml, jaxb, drools, syslog, snmp, enlinkd, requisitions, ibm, tivoli, eif, collectd, pollerd, activemq, wmi, ws-man, minion, topology, percona live]
---

Hey there, everybody!  I am back from [JoCo Cruise 2017](https://jococruise.com/) and ready to catch you up on the last 2 weeks of development.  In the last 2 weeks we worked on various internals, polling and provisioning, the Minion, and the web UI.

<!-- git log --all --no-merges --since='2017-02-27 00:00:00' --until='2017-03-13 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)' | sort | less -R -->

## Github Project Updates

* __Internals__

  Jesse and I worked more on getting rid of Castor from our codebase, converting XML parsing to JAXB.  Alejandro did more work on Drools infrastructure changes to better evaluate and handle memory issues.  Seth continued work on improving syslog parsing infrastructure.  Jesse worked on some SNMP error-handling issues.  Antonio did a bunch of fixes in the Enlinkd backend.  Markus worked on refactoring requisition code, and also did a bunch of optimization of database stuff (indexes, etc.).  Will created an event adapter to accept events from IBM Tivoli Event Integration Facility.

* __Polling and Provisioning__

  Ronald added instrumentation to queues used by Collectd and Pollerd.  Ronald added polling/provisioning support for ActiveMQ.

* __Minion__

  Jesse added WMI and WS-Man collection support to the Minion.

* __Web UI__

  Markus and Craig worked on some cleanups to Craig's asset -> topology mapper.


## Upcoming Events and Appearances

* __[Percona Live - April 24th through 27th, 2017](https://www.percona.com/live/17/)__

  Jesse [will be speaking at Percona](https://www.percona.com/live/17/users/jesse-white) in Santa Clara, California on April 25th, 2017.


## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HZN-822](https://issues.opennms.org/browse/HZN-822): Add support dynamically adding and removing topology providers
* [HZN-906](https://issues.opennms.org/browse/HZN-906): Write marshal/unmarshal tests for trap and syslog DTOs
* [HZN-1008](https://issues.opennms.org/browse/HZN-1008): VmwareCollector and VmwareCimCollector support for Minion
* [HZN-1009](https://issues.opennms.org/browse/HZN-1009): WmiCollector support for Minion
* [HZN-1010](https://issues.opennms.org/browse/HZN-1010): WsManCollector support for Minion
* [HZN-1030](https://issues.opennms.org/browse/HZN-1030): admin rights in openNMS 19.0.1
* [NMS-6539](https://issues.opennms.org/browse/NMS-6539): None of the out-of-the-box syslogd regex ueiMatch statements work
* [NMS-7521](https://issues.opennms.org/browse/NMS-7521): Too many open files (reported by provisiond)
* [NMS-8370](https://issues.opennms.org/browse/NMS-8370): Renaming a root business services does not work anymore
* [NMS-8704](https://issues.opennms.org/browse/NMS-8704): Add an Event Adapter for IBM's Event Integration Facility Events
* [NMS-8751](https://issues.opennms.org/browse/NMS-8751): Poller Node Down without outages
* [NMS-8860](https://issues.opennms.org/browse/NMS-8860): DB installer tries to class-load every file under OPENNMS_HOME as a JAR
* [NMS-8973](https://issues.opennms.org/browse/NMS-8973): Enlinkd fails to discovery Bridge Topology
* [NMS-9084](https://issues.opennms.org/browse/NMS-9084): Standalone HTTPS with Jetty doesn't work with certificate alias
* [NMS-9093](https://issues.opennms.org/browse/NMS-9093): Cleanup opennms provided default event definitions
* [NMS-9094](https://issues.opennms.org/browse/NMS-9094): SNMP data collection definitions for Cisco ASA5585-SSP-60 devices
* [NMS-9145](https://issues.opennms.org/browse/NMS-9145): Add JMX instrumentation for the Drools Correlator to understand the the working memory of each rule-set (a.k.a. engine)
* [NMS-9146](https://issues.opennms.org/browse/NMS-9146): Blank Location vs. Default Location
* [NMS-9157](https://issues.opennms.org/browse/NMS-9157): minion:ping command gives 403 errors 
* [NMS-9161](https://issues.opennms.org/browse/NMS-9161): Expose task queue size for ExecutorService runners.
* [NMS-9162](https://issues.opennms.org/browse/NMS-9162): Upgrade snmp4j to 2.5.5
* [NMS-9163](https://issues.opennms.org/browse/NMS-9163): Enhance to MockSnmpAgent to support returning arbitrary SNMP error codes
* [NMS-9165](https://issues.opennms.org/browse/NMS-9165): log entry in uncategorized.log
* [NMS-9166](https://issues.opennms.org/browse/NMS-9166): incorrect permissions on opennms.service
* [NMS-9172](https://issues.opennms.org/browse/NMS-9172): Fix the execution of Drools rules when using streaming (CEP, Temporal Reasoning)
* [NMS-9174](https://issues.opennms.org/browse/NMS-9174): Add Checkstyle to the build
* [NMS-9186](https://issues.opennms.org/browse/NMS-9186): Drools examples fails to load with exception
* [NMS-9188](https://issues.opennms.org/browse/NMS-9188): CustomSyslogParser adds misleading blank process values to events
* [NMS-9198](https://issues.opennms.org/browse/NMS-9198): Cannot associate category to user group
