---
title: This Week in OpenNMS: July 9th, 2018
date: 10:46 07/09/2018
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [alarmd, sextant, kafka, sentinel, plugin manager, eventd, servicenow, iplike, snmp, topology, ouce]
---

It's time for This Week in OpenNMS!

We were off for part of last week for the 4th of July holiday, so we're back with a very special 2-week TWiO.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2018-06-25 00:00:00' --until='2018-07-09 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->


## Github Project Updates

* __Internals, APIs, and Documentation__

  * Jesse and David continued their work on a next-generation Alarmd (codename: Sextant) with full rules-based workflow management.
  * Markus did more work on the Sentinel container, validating Kafka communication and adding documentation.
  * Patrick worked on fixing varbind matching validation in the config tester.
  * Craig worked on more enhancements to the plugin manager.
  * Malatesh added some coverage to the eventd configuration tests.
  * Jeff did more work on his proof-of-concept ServiceNow ticketer plugin.
  * I fixed some issues with the pl/pgsql version of IPLIKE not matching the C behavior.
  * Ronny did more work streamlining documentation.
  * Ronny fixed a regression in certain MIB2 interface data not being collected by default.
  * Chandra did more work on support for RPC over Kafka.

* __Web & UI__

  * I finished my fixes for web asset loading (most noticeably, the heatmap on the front page).
  * Antonio has been working on fixing the topology UI showing enlinkd links properly.
  * Patrick worked on changes to make dates in the web UI consistent, and also configurable.


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

* [HELM-97](https://issues.opennms.org/browse/HELM-97): Template variables were only replaced once
* [HZN-1228](https://issues.opennms.org/browse/HZN-1228): Reporting and Dashboards for Flow Data
* [HZN-1291](https://issues.opennms.org/browse/HZN-1291): Enhancements to Plugin Manager
* [HZN-1307](https://issues.opennms.org/browse/HZN-1307): Implement first version of a sentinel, which is capable of running the *flow*-adapters.
* [HZN-1316](https://issues.opennms.org/browse/HZN-1316): Heatmap stopped working in centerUrl after upgrading to 22.0.0
* [HZN-1319](https://issues.opennms.org/browse/HZN-1319): Alarm service layer research & design
* [HZN-1328](https://issues.opennms.org/browse/HZN-1328): Add an additional tab to Alarm display in Grafana to display related Alarms
* [HZN-1336](https://issues.opennms.org/browse/HZN-1336): AbstractAdapter always logs 0 packets
* [HZN-1337](https://issues.opennms.org/browse/HZN-1337): Jira PLugin: Tickets are not being automatically created in Jira
* [HZN-1344](https://issues.opennms.org/browse/HZN-1344): Make the default (feature) repositories known to sentinel
* [HZN-1351](https://issues.opennms.org/browse/HZN-1351): opennms snmp form can't handle ip address range
* [NMS-8387](https://issues.opennms.org/browse/NMS-8387): Improve bridge topology performance in EnlinkdTopologyProvider
* [NMS-9287](https://issues.opennms.org/browse/NMS-9287): linknode page should show more information on edges fro bridge topology
* [NMS-9719](https://issues.opennms.org/browse/NMS-9719): shared segments optimization
* [NMS-9821](https://issues.opennms.org/browse/NMS-9821): Config-tester not validating varbind matching in event files
* [NMS-10182](https://issues.opennms.org/browse/NMS-10182): Merge User and Admin Guide
* [NMS-10229](https://issues.opennms.org/browse/NMS-10229): write custom tag for date time formatting
* [NMS-10238](https://issues.opennms.org/browse/NMS-10238): plpgsql IPLIKE does not behave the same as the C version
* [NMS-10247](https://issues.opennms.org/browse/NMS-10247): MIB2 SNMP Interface counters missing from Windows data collection
