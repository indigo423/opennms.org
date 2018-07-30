---
title: This Week in OpenNMS: July 30th, 2018
date: 16:04 07/30/2018
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [sextant, rpc, kafka, drools, vmware, sentinel, radius, sflow, topology, enlinkd, bootstrap, uknof, ouce]
---

It's time for This Week in OpenNMS!

Last week we continued work on RPC over Kafka, Sextant, Enlinkd, and other bug fixes.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2018-07-23 00:00:00' --until='2018-07-30 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->


## Github Project Updates

* __Internals, APIs, and Documentation__

  * David continued implementing a feedback mechanism for training/tuning Sextant correlations.
  * Mike Kelly submitted a fix to the date format in the alarm northbounder.
  * Chandra did more work on support for RPC over Kafka.
  * Ronny worked on some theme cleanup in the OpenNMS documentation.
  * Jesse fixed the reload event handling in Drools.
  * Chandra did a bit more to the support for persisting data collection to Kafka.
  * Christian fixed VMware code to use a pool of connections to avoid overloading the host system.
  * Jesse did more work on Sextant configuration and cleanup, including support for configuration reload.
  * Markus continued to work on tightening up the Sentinel container code.
  * Markus worked on fixing an issue in RADIUS-related queries that could return wrong results.
  * Christian did more work on SFlow issues.

* __Web & UI__

  * Antonio continued his work on fixing the topology UI showing enlinkd links properly.
  * Markus and Patrick continued work on changes to make dates in the web UI consistent, and also configurable.
  * Markus experimented with simplifying our Bootstrap-based theme code.


## Upcoming Events and Appearances

* **[UK Network Operators' Forum - September 11th, 2018](https://indico.uknof.org.uk/event/43)**

  Tarus will be [speaking at the UK Network Operators Forum](https://indico.uknof.org.uk/event/43/contributions) on September 11th, 2018.
  He'll be giving a talk called "What's Happening with OpenNMS" going over some of the recent enhancements to OpenNMS to extend scalability.


* **[OpenNMS User Conference Europe 2018 - September 20th through 21st, 2018](https://ouce.opennms.eu/)**

  [OUCE 2018](https://ouce.opennms.eu/) will be held at the [Rilano Hotel in Munich, Germany](https://www.rilano-hotel-muenchen.de/).
  A reception will be held on Wednesday the 19th, with talks and workshops the following Thursday and Friday.
  The [call for papers](https://ouce.opennms.eu/cfp/2018/) is now open for submissions.


## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HZN-1206](https://issues.opennms.org/browse/HZN-1206): Classify applications in received flows
* [HZN-1324](https://issues.opennms.org/browse/HZN-1324): RPC over Kafka
* [HZN-1345](https://issues.opennms.org/browse/HZN-1345): Provide a more flexible way of checking the connectivity/health of a sentinel/minion container
* [HZN-1361](https://issues.opennms.org/browse/HZN-1361): Make isUseDebugger() return false instead of true to fix flapping Camel Tests (e.g. HeartbeatBlueprintPerfIT)
* [NMS-9858](https://issues.opennms.org/browse/NMS-9858): Make hawtio available for OpenNMS as installable RPM/DEB
* [NMS-10239](https://issues.opennms.org/browse/NMS-10239): apply centralized datetime rendering to freemarker template(s)
* [NMS-10242](https://issues.opennms.org/browse/NMS-10242): Trapd does not validate config against XSD
* [NMS-10257](https://issues.opennms.org/browse/NMS-10257): Drools correlation engine do not always respond to targeted reloadDaemonConfig events
* [NMS-10283](https://issues.opennms.org/browse/NMS-10283): Web UI throws exception when filtering events