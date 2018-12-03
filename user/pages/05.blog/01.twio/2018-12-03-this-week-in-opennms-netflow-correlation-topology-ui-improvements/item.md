---
title: This Week in OpenNMS - December 3rd, 2018 - Netflow, Correlation, Topology, and UI Improvements
date: 16:06 12/03/2018
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [netflow, kafka, oia, topology, oce, syslog, elasticsearch, carbon, telemetryd, bootstrap, vaadin, helm, graphml, training]
---

It's time for This Week in OpenNMS!

In the last week we did a lot of work improving recent feature additions including netflow and topology support, as well as UI refactors and other GUI improvements.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --color=always --since='2018-11-26 00:00:00' --until='2018-12-03 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->


## Github Project Updates

* __Internals, APIs, and Documentation__

  * Markus and Dustin did some wrap-up work on the multi-protocol netflow support.
  * Jesse fixed a timing bug in Kafka alarm sync.
  * Chandra did more work on moving detectors and pollers to use the integration API.
  * Antonio and Markus continued work on the project to move topology data to a backend service.
  * Chandra added support for larger Kafka buffer sizes.
  * David fixed a bug where alarms can be correlated to multiple situations.
  * Markus did some work on the daemon reload refactor.
  * Matthew added support for parsing a number of additional syslog formats.
  * Jesse did more work on indexing alarms in Elasticsearch.
  * Dustin worked on adding Carbon support to Telemetryd.
  * Matthew worked on making it possible to use OCE directly in OpenNMS core without Kafka.

* __Web & UI__

  * Sebastian worked on the Bootstrap 4 UI migration.
  * Markus did more work on the Vaadin 8 migration.
  * I added support for getting managed object data from alarms in opennms.js and displaying it in the alarm details in Helm.
  * Christian made a number of alarm/severity-related UI changes, including fixing pagination, bugs in the alarm details, and situation display on the front page.
  * Patrick continued his work improving the performance of the topology UI.
  * I worked on a couple of Helm bug fixes and enhancements, including honoring the "style with severity" setting in the alarm details page, and grouping a severity's "related alarms" in the alarm details page by node.
  * David did more work on a GraphML exporter for OCE data.
  * Brynjar Eide fixed drag & drop support in IE, Firefox, and Safari when editing column order in Helm.
  * Ronny added nicer favicons for the web UI.


## Upcoming Events and Appearances

* **[OpenNMS Training - December 10th through 14th, 2018](https://www.opennms.com/training/)**

  The OpenNMS Group will be [offering hands-on OpenNMS training](https://www.opennms.com/training/) in our Apex, NC office.


## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HELM-110](https://issues.opennms.org/browse/HELM-110): Display managed object type and instance in the alarm details view
* [HELM-119](https://issues.opennms.org/browse/HELM-119): Upgrade Grafana from 5.3.1 to 5.3.4 to fix CVE-2018-19039
* [HZN-1252](https://issues.opennms.org/browse/HZN-1252): Add documentation Netflow 9 and Ipfix
* [HZN-1391](https://issues.opennms.org/browse/HZN-1391): Add an "ssh" action to bin/opennms
* [HZN-1400](https://issues.opennms.org/browse/HZN-1400): Prevent alarms from being correlated again after being removed from a situation
* [HZN-1408](https://issues.opennms.org/browse/HZN-1408): Update telemetryd documentation to reflect single port support
* [HZN-1416](https://issues.opennms.org/browse/HZN-1416): Generate Netflow v5 flows to validate accuracy of classification
* [HZN-1426](https://issues.opennms.org/browse/HZN-1426): Older Alarms will Not Un-Acknowledge Situations
* [HZN-1439](https://issues.opennms.org/browse/HZN-1439): Clearing a situation should clear all the related alarms
* [NMS-7797](https://issues.opennms.org/browse/NMS-7797): Update to Vaadin to version 8.5.2
* [NMS-10227](https://issues.opennms.org/browse/NMS-10227): Add select/deselect all packages when creating a scheduled outage
* [NMS-10398](https://issues.opennms.org/browse/NMS-10398): Find out why intial loading of the topology map takes so long, fix for CDP
* [NMS-10420](https://issues.opennms.org/browse/NMS-10420): Wrong data type for Cassandra Thread Pool performance metrics
* [NMS-10462](https://issues.opennms.org/browse/NMS-10462): Wrong time in 'last' column for related alarms when viewing situation details
* [NMS-10463](https://issues.opennms.org/browse/NMS-10463): Cleared situations show up on home page
* [NMS-10468](https://issues.opennms.org/browse/NMS-10468): Fix offheap doc to be included in docs
* [NMS-10474](https://issues.opennms.org/browse/NMS-10474): Kafka Producer: Sync timing issues cause erroneous deletes
* [NMS-10481](https://issues.opennms.org/browse/NMS-10481): Broken links in Newts install documentation
* [OCE-26](https://issues.opennms.org/browse/OCE-26): Use situation and network interface icons in GraphML export
* [OCE-27](https://issues.opennms.org/browse/OCE-27): Managed object instance for SNMP interfaces can be blank
* [OCE-29](https://issues.opennms.org/browse/OCE-29): Switch to immutable implementation types for Alarms/Situations/Inventory