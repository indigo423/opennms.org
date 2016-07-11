---
title: This Week in OpenNMS: March 21th, 2016
date: 15:26 03/21/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [bsm, dev-jam, enlinkd, minion, open network summit, opennms, opennms compass, requisitions, rest, sdn, smoke tests, snmp, snmp4j]
---

It’s Time for This Week in OpenNMS!
-----------------------------------

In the last week we worked on Compass, Enlinkd, smoke tests, the requisitions UI, SNMP4J, Minion, BSM, and ReST.

Github Project Updates
----------------------

* __Compass__

  More work on Compass 2.1 last week, mostly around performance of the dashboard and fixing a long-standing bug with dashboard refresh sometimes failing when switching servers.

* __Enlinkd__

  Antonio has continued to work on Enlinkd bugs and fixing performance issues, due in OpenNMS Horizon 18’s codebase in the develop branch soon.

* __Smoke Tests__

  More work has gone into the CasperJS smoke test rewrite. It’s still not clear if it’s a win over Selenium but we’re continuing to evaluate it.

* __Requisitions UI__

  Alejandro has been wrapping up his work on the Requisitions UI, with more refactoring of UI behavior and support for a new version of the "quick add node" UI.

* __SNMP4J Update__

  Jeff updated and tested SNMP4J 2.4, which fixes some SNMP-related issues reported last week.

* __Minion__

  Seth has been working on associating monitoring locations with nodes, so that we can more easily keep track of which devices are associated with minions as opposed to the core OpenNMS monitoring system. Jesse also wrapped up work on minion RPM packaging. There was also more work done on the syslog and trap support.

* __Business Service Monitor__

  Markus and Christian did more work on the BSM, mostly related to validation and constraints of BSM naming, adding some UI APIs, and bug fixes.

* __ReST__

  Alejandro’s ReST API updates have hit the foundation and develop branches. For details on the API changes he made, see the NMS-8194 issue.

Resolved Issues Since Last TWiO
-------------------------------

* [BSM-67](http://issues.opennms.org/browse/BSM-67): Enforce unique naming of Business Services
* [BSM-173](http://issues.opennms.org/browse/BSM-173): Add a "Problems Box" for applications to the OpenNMS start page.
* [BSM-175](http://issues.opennms.org/browse/BSM-175): REST documentation diverges from annotations
* [HZN-571](http://issues.opennms.org/browse/HZN-571): Implement common Syslogd dropwizard-metrics in all receivers
* [HZN-605](http://issues.opennms.org/browse/HZN-605): Consolidate TrapdIpMgr implementations
* [HZN-606](http://issues.opennms.org/browse/HZN-606): Write a test to see if TrapNotification is Serializable
* [HZN-607](http://issues.opennms.org/browse/HZN-607): Get rid of SyslogdIpMgr.getInstance() singleton calls
* [HZN-608](http://issues.opennms.org/browse/HZN-608): Replace BroadcastEventProcess.onEvent() with BroadcastEventProcessorSyslog.onEvent()
* [NMS-1095](http://issues.opennms.org/browse/NMS-1095): Adding a textual cause description to certain logged events
* [NMS-4072](http://issues.opennms.org/browse/NMS-4072): out of box, 1.8.3 missing entry in capsd-configuration.xml for protocol XMP
* [NMS-6951](http://issues.opennms.org/browse/NMS-6951): OpenNMS daemon JMX completion ratios sometimes short when really 1.0
* [NMS-8194](http://issues.opennms.org/browse/NMS-8194): Return an HTTP 303 for PUT/POST request on a ReST API is a bad practice
* [NMS-8214](http://issues.opennms.org/browse/NMS-8214): AlarmdIT.testPersistManyAlarmsAtOnce() test ordering issue?
* [NMS-8225](http://issues.opennms.org/browse/NMS-8225): Integrate the Minion container and packages into the mainline OpenNMS build
* [NMS-8226](http://issues.opennms.org/browse/NMS-8226): Upgrade SNMP4J to version 2.4
* [NMS-8235](http://issues.opennms.org/browse/NMS-8235): Jaspersoft Studio cannot be used anymore to debug/create new reports

Open Networking Summit
----------------------

Last week, Jesse and Jeff attended the Linux Foundation Open Networking Summit. Jeff gave a talk about SDN as an evolutionary pressure on network management systems. Video will be posted here as soon as it’s available.

Upcoming Events and Appearances
-------------------------------

* __Dev-Jam 2016 – July 25th through 30th, 2016__

  Dev-Jam 2016 is sneaking up on is, but there is still plenty of time to join us in Minnesota. For more information, see The Dev-Jam 2016 wiki page.

Until Next Week…
-----------------
If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:ranger@opennms.org).

– Ben
