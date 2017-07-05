---
title: This Week in OpenNMS: July 5th, 2017
date: 09:52 07/05/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, logging, jaxb, activemq, enlinkd, syslogd, castor, snmp, minion, sql, rancid, rpc, jmx, rest, xml, json, path outage, alarms, topology, vaadin, ksc reports, opennms.js, helm, mc frontalot, ulf, youtube, dev-jam, training, ohio linux fest, olf]
---

It's time for This Week in OpenNMS!  In the last week we did various internal and web UI work.

<!-- git log --all --no-merges --since='2017-06-26 00:00:00' --until='2017-07-05 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)' | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * Alejandro did more work on improving the logging of events.
  * I did a bit more work on fixing up the JAXB bugs introduced in 20.0.0, including adding smoke tests for some of the UI that was impacted.
  * Seth worked on the ActiveMQ support in OpenNMS.
  * Antonio fixed more Enlinkd bugs.
  * I fixed the `syslogd-configuration.xml` parser to honor out-of-order ueimatch fields, like Castor did.
  * Jesse fixed support for falling back to the default SNMP configuration for nodes that do not have a location-specific configuration.
  * Seth added support for parameterized SQL in the criteria API.
  * Antonio fixed some RANCID bugs introduced as part of the JAXB changes.
  * Jesse worked on changing some handling of RPC JMX requests to the Minion.
  * Seth fixed an issue with lock timeouts in the poller.
  * Markus fixed the ReST API to return useful XML or JSON responses on error.
  * Alejandro fixed an issue with clearing path outage alarms.

* __Web UI__

  * Roman Solomakhov added the ability to search categories in the topology UI for providers that support it.
  * Christian fixed some issues with the Vaadin dashboard and trend charts.
  * Seth did more work on infrastructure related to the v2 ReST API.
  * I changed the timespan lists in the KSC reports to render "_" as a space.
  * Antonio improved the layout of shared segments in the topology UI.
  * Alejandro added a confirmation before overwriting requisitions on clone.
  * Markus worked on integrating opennms.js into Helm, as well as adding support for nested conditions.

## MC Frontalot's New Music Video

MC Frontalot released a music video on the subject of free software and open source featuring OpenNMS and Ulf!

Check it out here:

[plugin:youtube](https://www.youtube.com/watch?v=fffQjrTCkLI)

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

* [HZN-1066](https://issues.opennms.org/browse/HZN-1066): retrieve alarm info (including filtering/criteria) in OpenNMS.js
* [HZN-1068](https://issues.opennms.org/browse/HZN-1068): retrieve event info (including filtering/criteria) in OpenNMS.js
* [HZN-1108](https://issues.opennms.org/browse/HZN-1108): ReST endpoints do not handle exceptions correctly
* [NMS-5105](https://issues.opennms.org/browse/NMS-5105): collectd does not unschedule deleted nodes
* [NMS-8759](https://issues.opennms.org/browse/NMS-8759): Add category search provider support to Atlas topology provider
* [NMS-9422](https://issues.opennms.org/browse/NMS-9422): Event Configuration Screen Requires Alarm Type
* [NMS-9427](https://issues.opennms.org/browse/NMS-9427): NPE on Vaadin Dashboard
* [NMS-9441](https://issues.opennms.org/browse/NMS-9441): Minion RPM lays down /opt/minion/debian directory
* [NMS-9445](https://issues.opennms.org/browse/NMS-9445): minion:ping does not properly validate JMS broker connectivity
* [NMS-9452](https://issues.opennms.org/browse/NMS-9452): Improve logging for EventIpcManagerDefaultImpl
* [NMS-9462](https://issues.opennms.org/browse/NMS-9462): Minion requires location-specific definitions in SNMP config
* [NMS-9466](https://issues.opennms.org/browse/NMS-9466): IllegalMonitorStateException in Poller ReentrantLock causes polling to stop
* [NMS-9471](https://issues.opennms.org/browse/NMS-9471): NPE discovery bridge topology
* [NMS-9472](https://issues.opennms.org/browse/NMS-9472): AMQP features broken after Camel upgrade
* [NMS-9473](https://issues.opennms.org/browse/NMS-9473): Trend graphs: colors with alpha channel not working in Google Chrome
* [NMS-9477](https://issues.opennms.org/browse/NMS-9477): RancidAdapter type mismatch
* [NMS-9480](https://issues.opennms.org/browse/NMS-9480): Add parameterized SQL support to Criteria API
* [NMS-9481](https://issues.opennms.org/browse/NMS-9481): Clone foreign source requisition overwrites config of other requisition without any hint or warning
