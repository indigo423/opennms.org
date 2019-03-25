---
title: This Week in OpenNMS - March 25th, 2019 - OCE, Java 9+, UI Improvements, Helm, and more!
date: 11:04 03/25/2019
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [topology, oce, java9, circleci, snmp, alarmd, drools, bootstrap, helm, opennmsjs, nethinks, training, dev-jam, osmc]
---

It's time for This Week in OpenNMS!

In the last week we continued work on OCE improvements, Java 9+ changes, UI cleanups, Helm and OpenNMS.js updates, and much more!

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --color=always --since='2019-03-18 00:00:00' --until='2019-03-25 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->


## Github Project Updates

* __Internals, APIs, and Documentation__

  * Patrick continued his refactor of the topology provider to use the new graph service.
  * David continued his work on a configurable meta model for OCE.
  * Dustin kept working on supporting arbitrary metadata on nodes.
  * Markus did more work on the CXF upgrade to 3.2 to facilitate running on newer JDKs.
  * Ronny worked on performing OpenNMS builds in CircleCI.
  * Jesse did more work on fixing an SNMP loop caused by bad agents.
  * Chandra worked on improving our error/exit code handling for graceful JVM shutdown.
  * Jesse updated Alarmd to allow for using node category when handling alarms in Drools.
  * Jesse worked on fixing an issue where related alarms were not properly removed from situations.
  * Matt did more work on the "direct" OCE datasource, which allows running OCE in the OpenNMS JVM.

* __Web & UI__

  * Christian worked on updating the node detail page to make the number of services displayed configurable.
  * Markus worked on some new UI changes to the web navbar.
  * Christian updated event and alarm search to include logMessage and description.
  * Jesse did some changes to support user-specified (manual) links in the topology UI.
  * I worked on a number of Helm enhancements, including creating an inventory datasource, as well as making a custom filter panel that can do dynamic filtering on the alarm table.
  * Markus worked on cleaning up some table layout issues in the new Bootstrap 4 UI.
  * I added support for `isAcknowledged` to OpenNMS.js and fixed some bugs in property caching in ReST DAOs.


## OpenNMS Horizon and Meridian March Releases

Last week we put out updated OpenNMS Horizon and Meridian releases.
These were, for the most part, small bug fix releases as we prep for Horizon 24 (which Meridian 2019 will be based on).

If you are running Meridian 2018 or Horizon 23, it is strongly recommended you upgrade.
An SNMP agent loop bug was fixed in both of those releases, as well as an Alarmd deadlock that affects all Horizon 23 versions.

For a complete list of changes, see the release announcements:

* [Horizon 23.0.4](https://www.opennms.org/en/blog/releases/2019-03-21-opennms-horizon-23.0.4)
* [Meridian 2018.1.6](https://www.opennms.com/2019/03/21/opennms-meridian-2018-1-6-released/)
* [Meridian 2017.1.15](https://www.opennms.com/2019/03/21/opennms-meridian-2017-1-15-released/)
* [Meridian 2016.1.19](https://www.opennms.com/2019/03/21/opennms-meridian-2016-1-19-released/)


## Upcoming Events and Appearances

* **[NETHINKS Training in Fulda, Germany - June and October](https://www.nethinks.com/opennms-schulung.html)**

  NETHINKS will be offering German-language training in their headquarters in Fulda, Germany.

  There are 2 dates available:
  * June 3rd through 7th
  * October 21st through 25th

  For more details or to sign up, see the [NETHINKS training page](https://www.nethinks.com/opennms-schulung.html).

* **OpenNMS Dev-Jam 2019 in Minneapolis, MN**

  Dev-Jam 2019 will be once again on the University of Minneapolis campus, from June 24th through 28th.

  More details will be forthcoming as we start to put together plans,
  but please plan on joining us for a week of fun, coding, and frivolity.

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

* [HZN-1455](https://issues.opennms.org/browse/HZN-1455): Update startup script to bootstrap with Java 9+
* [HZN-1499](https://issues.opennms.org/browse/HZN-1499): ON DELETE CASCADE missing in Metadata database changelog
* [NMS-10570](https://issues.opennms.org/browse/NMS-10570): Alarm details page has problem with footer
* [NMS-10571](https://issues.opennms.org/browse/NMS-10571): The categories card on the node details page has no spacing above the bottom border
* [NMS-10572](https://issues.opennms.org/browse/NMS-10572): Appears to be extra whitespace above bottom border on cards in the Admin page
* [NMS-10575](https://issues.opennms.org/browse/NMS-10575): KSC Create Custom Graph Prefabricated Report selection is too small and wraps
* [NMS-10602](https://issues.opennms.org/browse/NMS-10602): Incorrect date formatting in send-event.py
* [NMS-10609](https://issues.opennms.org/browse/NMS-10609): The MIB Compiler is unable to parse certain MIBs
* [NMS-10612](https://issues.opennms.org/browse/NMS-10612): Button arrangement on alarm detail page is broken
* [NMS-10613](https://issues.opennms.org/browse/NMS-10613): Sticky and Journal Memo icons look out of place
* [NMS-10614](https://issues.opennms.org/browse/NMS-10614): Alarm Details page is not rendering related alarms and parent situations correctly
* [NMS-10615](https://issues.opennms.org/browse/NMS-10615): Notification switcher is broken
* [NMS-10621](https://issues.opennms.org/browse/NMS-10621): Bad response from SNMP agent leads to infinite loop in SNMP tracker
* [NMS-10623](https://issues.opennms.org/browse/NMS-10623): KSC resource selection is not shown/visualized
* [OCE-44](https://issues.opennms.org/browse/OCE-44): OCE Documentation
