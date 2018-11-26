---
title: This Week in OpenNMS - November 26th, 2018 - Correlation, Topology, and UI Refactoring
date: 13:54 11/26/2018
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [eif, oce, karaf, oia, enlinkd, topology, snmp, vaadin, bootstrap, training]
---

It's time for This Week in OpenNMS!

In the last week we did a lot of OCE work, continued refactoring of topology APIs, did more UI refactoring, and a bunch of other stuff.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --color=always --since='2018-11-19 00:00:00' --until='2018-11-26 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->


## Github Project Updates

* __Internals, APIs, and Documentation__

  * David Hustace made some enhancements to thresholding events.
  * Will Keaney made some fixes for EIF decoding.
  * Matt worked on graph persistence in OCE.
  * Christian made a convenience method on `$OPENNMS_HOME/bin/opennms` to ssh to the Karaf console.
  * David Smith worked on making old alarms un-acknowledge situations if they get correlated.
  * David Hustace worked on documenting Thresholding.
  * David Smith fixed situations so they always reference the latest version of an alarm.
  * Chandra worked on detector support in the OpenNMS Integration API.
  * Antonio continued his work on refactoring Enlinkd and topology services.
  * Brynjar Eide fixed the node availability report to honor time zones properly.
  * Matt worked on converting a number of OCE-related objects to be immutable.
  * Matt added support for tagging interface threshold alarms in OCE, and made correlation of SNMP interface poller alarms possible.

* __Web & UI__

  * Markus and Sebastian continued the work on creating a Daemon ReST service.
  * Markus did more work porting our Vaadin UI to Vaadin 8.
  * Christian added select/deselect all checkmarks to the scheduled outages page.
  * Sebastian did some work on the Bootstrap 4 UI refactor.
  * Patrick did more work on improving topology UI performance.
  * Jesse updated the OCE graphml export to have proper icons for situations and interfaces.


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

* [HELM-101](https://issues.opennms.org/browse/HELM-101): PM panels throw errors on initialization
* [HELM-122](https://issues.opennms.org/browse/HELM-122): SingleStat Panel Wrong in Helm
* [HZN-157](https://issues.opennms.org/browse/HZN-157): SmtpMonitor
* [HZN-1270](https://issues.opennms.org/browse/HZN-1270): Netflow - Support multiple protocols with a single UDP port
* [HZN-1426](https://issues.opennms.org/browse/HZN-1426): Older Alarms will Not Un-Acknowledge Situations
* [HZN-1432](https://issues.opennms.org/browse/HZN-1432): Update OCE OpennmsDatasource to subscribe to alarm feedback topic
* [HZN-1439](https://issues.opennms.org/browse/HZN-1439): Clearing a situation should clear all the related alarms
* [NMS-10159](https://issues.opennms.org/browse/NMS-10159): Extend system statistic metrics from UCD SNMP agents
* [NMS-10383](https://issues.opennms.org/browse/NMS-10383): APCs rpdu's total energy/power metric is missing
* [NMS-10427](https://issues.opennms.org/browse/NMS-10427): Provide Daemon REST service
* [NMS-10434](https://issues.opennms.org/browse/NMS-10434): Sentinel does not start using init scripts on RHEL 6.6
* [NMS-10464](https://issues.opennms.org/browse/NMS-10464): noisy logs by the kafka-offset-producer
* [OCE-13](https://issues.opennms.org/browse/OCE-13): Managed object tagging support for interface related thresholds
* [OCE-19](https://issues.opennms.org/browse/OCE-19): Add edge styles to GraphML output to help visualize temporal distance
* [OCE-21](https://issues.opennms.org/browse/OCE-21): OCE cluster engine diagnostic text issues
* [OCE-25](https://issues.opennms.org/browse/OCE-25): Situations retain old reference to Alarms
* [OCE-30](https://issues.opennms.org/browse/OCE-30): Support correlation of alarms triggered by the SNMP interface poller