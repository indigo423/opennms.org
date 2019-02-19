---
title: This Week in OpenNMS - February 19th, 2019 - Bug Fixes, New Integration APIs, Enlinkd Refactor, and More!
date: 09:49 02/19/2019
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [sentinel, rest, graphs, oce, newts, oia, dhcp, topology, syslog, drools, kafka, enlinkd, bootstrap, nethinks, training, osmc]
---

It's time for This Week in OpenNMS!

Last week we fixed more bugs, added more integrations to OIA, finished the Bootstrap 4 UI transition, and merged the Enlinkd refactor branch.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --color=always --since='2019-02-11 00:00:00' --until='2019-02-19 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->


## Github Project Updates

* __Internals, APIs, and Documentation__

  * Chandra fixed sentinel-core loading in the Sentinel container.
  * Markus did more work on exposing the new graph service through ReST.
  * Jesse did some work on adding weight support to the OCE service.
  * Jesse finished his changes to expose connection pooling configuration for Newts.
  * Chandra worked on ticketing plugin support in the OpenNMS Integration API.
  * Markus worked on updating our embedded Karaf to 4.2.
  * Christian did more work on making DHCP detection and polling work on the Minion.
  * Matthew did some more work on the topology generation APIs.
  * Jesse changed Syslog handling to use the `RadixTreeSyslogParser` by default.
  * Jesse worked on updating OCE to use Drools internally for clustering alarms.
  * Chandra worked on collector support in OIA.
  * I did more fixes to the `opennms` shell scripts.
  * Antonio wrapped up his refactor of Enlinkd to support sending topology data to Kafka.
  * Patrick worked on updating various topology backend code to work with the Enlinkd refactor.

* __Web & UI__

  * Markus wrapped up the Bootstrap 4 migration.
  * Patrick updated the topology UI to support instant refresh based on recent API changes.


## Upcoming Events and Appearances

* **[NETHINKS Training in Fulda, Germany - June and October](https://www.nethinks.com/opennms-schulung.html)**

  NETHINKS will be offering German-language training in their headquarters in Fulda, Germany.

  There are 2 dates available:
  * June 3rd through 7th
  * October 21st through 25th

  For more details or to sign up, see the [NETHINKS training page](https://www.nethinks.com/opennms-schulung.html).

* **[OSMC 2019 in Nuremberg, Germany - November 4th through 7th](https://osmc.de/)**

  We will be at OSMC in November.
  Details are still forthcoming but we're hoping to do a 1-day workshop.

  For more information on OSMC, see [their website](https://osmc.de/).


## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HELM-127](https://issues.opennms.org/browse/HELM-127): Upgrade Grafana from 5.3.4 to 5.4.3
* [HZN-1393](https://issues.opennms.org/browse/HZN-1393): Forward enlinkd link data via Kafka
* [HZN-1423](https://issues.opennms.org/browse/HZN-1423): Migrate bootstrap 3 to bootstrap 4 and revert custom stylings
* [HZN-1469](https://issues.opennms.org/browse/HZN-1469): Leverage new topology generator to test the LinkdTopologyProvider
* [IPL-31](https://issues.opennms.org/browse/IPL-31): iplike with postgres 9.4 and higher
* [NEWTS-108](https://issues.opennms.org/browse/NEWTS-108): Expose connection pooling options
* [NMS-9633](https://issues.opennms.org/browse/NMS-9633): JDBC collector event reason provides no useful information
* [NMS-10504](https://issues.opennms.org/browse/NMS-10504): DhcpMonitor does not work on Minion
* [NMS-10518](https://issues.opennms.org/browse/NMS-10518): refactor/clean up `opennms` script
* [NMS-10543](https://issues.opennms.org/browse/NMS-10543): Upgrade PostgreSQL JDBC driver to 42.x
* [NMS-10561](https://issues.opennms.org/browse/NMS-10561): Not able to install sentinel-core feature on sentinel container
* [NMS-10565](https://issues.opennms.org/browse/NMS-10565): add `runjava` unit tests for detecting the correct java in a range
* [NMS-10568](https://issues.opennms.org/browse/NMS-10568): Leaking logs from HELM performance data source requests to OpenNMS standard out
* [OCE-39](https://issues.opennms.org/browse/OCE-39): Configurable logging for the kafka-event-mirrorer
* [OIA-4](https://issues.opennms.org/browse/OIA-4): Add support for ServiceCollectors
