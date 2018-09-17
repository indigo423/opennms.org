---
title: This Week in OpenNMS: September 10th, 2018
date: 13:45 09/10/2018
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [alarmd, sentinel, karaf, kafka, netflow, rest, minion, uknof, ouce, osmc]
---

It's time for This Week in OpenNMS!

Last week we mostly worked on wrapping up various in-progress projects.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --color=always --since='2018-09-04 00:00:00' --until='2018-09-10 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->


## Github Project Updates

* __Internals, APIs, and Documentation__

  * David Hustace did some final cleanup to his updated alarm workflow code.
  * Matthew did some work on leader election in Sentinel containers.
  * Chandra made some more adjustments to his work on Karaf commands to reload daemons.
  * Matthew extended the Kafka producer to be able to expose information on situations.
  * Dustin continued his work on using a single port for receiving multiple netflow protocols.

* __Web & UI__

  * Christian added the polling interval to the service status UI.
  * I fixed the minion status page to show `unknown` status for minions that do not have an associated node.
  * David added additional situation-related features to the ReST v2 alarm API.
  * I updated the minion status page to link to the related node if there is one.


## [Meridian](https://www.opennms.com/meridian/) 2018.1.0 Released

I don't normally go into too much detail on the .com side of things since TWiO is about the open source project for the most part, but it's the one time of year where we make a significant announcement.  (Sorry, no tote bags.)

Last week we [released Meridian 2018.1.0](https://www.opennms.com/2018/09/06/opennms-meridian-2018-1-0-released/), the first release in the 2018 series.  Like all Meridian releases, it will be supported with bugfixes and security updates for 3 years.  Note that this means Meridian 2015 support ends at the end of this calendar year.

[Meridian](https://www.opennms.com/meridian/) 2018 is based on OpenNMS Horizon 21 plus a few other changes and bugfixes that went into Horizon 22.

The most significant addition in Meridian 2018 is official support for the Minion.

Other new features include:

* **[IBM Tivoli Event Integration Facility](https://meridian.opennms.com/docs/2018/latest/guide-admin/index.html#ga-events-sources-eif)**: Support has been added to bridge EIF events into OpenNMS.
* **[Asset Topology Provider](https://meridian.opennms.com/docs/2018/latest/guide-admin/index.html#_asset_topology_provider)**: The Asset Topology Provider generates a GraphML topology based on node metadata including asset fields.
* **[Alarm Sounds](https://meridian.opennms.com/docs/2018/latest/guide-admin/index.html#ga-alarm-sounds)**: The web UI can now optionally flash and play an alert sound when alarms are created and optionally updated.
* **ReST Updates**: A new experimental ReST API (/opennms/api/v2) has been enabled which supports [JEXL 2.x](https://commons.apache.org/proper/commons-jexl/).
* **Topology UI**: The topology UI now supports [scriptable vertex status](https://meridian.opennms.com/docs/2018/latest/guide-development/index.html#gd-topology-graphml-vertex-status-provider).
* **[Alarm Northbounders](https://issues.opennms.org/browse/NMS-9513): There are new alarm northbounders for running arbitrary BSF scripts or forwarding to Drools.
* **Web UI**: It is now possible to [customize the date format](https://issues.opennms.org/browse/NMS-10072) used in the UI.
You can configure it by overriding the `org.opennms.ui.datettimeformat` property in `opennms.properties`.
* **Hawtio**: Hawtio is now included as an optional webapp package (`opennms-webapp-hawtio`) for convenience.
* **IFTTT**: Support has been added for triggering IFTTT events based on alarms.

On top of that, there have been many smaller improvements and enhancements since Meridian 2017.  If you follow TWiO regularly, you've probably already read about them when they arrived in Horizon releases.  ;)


## Upcoming Events and Appearances

* **[UK Network Operators' Forum - September 11th, 2018](https://indico.uknof.org.uk/event/43)**

  Tarus will be [speaking at the UK Network Operators Forum](https://indico.uknof.org.uk/event/43/contributions) on September 11th, 2018.
  He'll be giving a talk called "What's Happening with OpenNMS" going over some of the recent enhancements to OpenNMS to extend scalability.


* **[OpenNMS User Conference Europe 2018 - September 20th through 21st, 2018](https://ouce.opennms.eu/)**

  [OUCE 2018](https://ouce.opennms.eu/) will be held at the [Rilano Hotel in Munich, Germany](https://www.rilano-hotel-muenchen.de/).
  A reception will be held on Wednesday the 19th, with talks and workshops the following Thursday and Friday.


* **[OSMC 2018 - November 5th through 8th, 2018](https://osmc.de/)**

  Tarus will be [speaking on Tuesday, November 6th](https://osmc.de/schedule/) about the latest features in OpenNMS including Minions, Telemetryd (flow support), Sextant (alarm correlation), and more.

## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HELM-103](https://issues.opennms.org/browse/HELM-103): Flow: Application & Conversations Top N limited to 10
* [HZN-1380](https://issues.opennms.org/browse/HZN-1380): Leader election support for Sentinel
* [HZN-1383](https://issues.opennms.org/browse/HZN-1383): Kafka Producer: Don't forward alarms for every reduce
* [HZN-1385](https://issues.opennms.org/browse/HZN-1385): Extend the Kafka Producer to expose related alarms for situations
* [NMS-10264](https://issues.opennms.org/browse/NMS-10264): Only increment the alarm count if the alarm type is not a resolving event.
* [NMS-10296](https://issues.opennms.org/browse/NMS-10296): Manage Minions page should link to the node for the minion
* [NMS-10324](https://issues.opennms.org/browse/NMS-10324): Set the default resource graph time range to "Last Day"
* [NMS-10338](https://issues.opennms.org/browse/NMS-10338): Minions without nodes should show "unknown" status