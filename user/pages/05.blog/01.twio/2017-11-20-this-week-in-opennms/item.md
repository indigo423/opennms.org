---
title: This Week in OpenNMS: November 20th, 2017
date: 14:45 11/20/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, jmx, osgi, telemetryd, jest, amazon, sqs, netflow, groovy, enlinkd, karaf, elasticsearch, helm, horizon, meridian, osmc]
---

It's time for This Week in OpenNMS!

Last week we did a lot of Telemetryd work and other work supporting the Horizon and Meridian releases.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2017-11-13 00:00:00' --until='2017-11-20 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * Markus worked on refactoring our JMX code to be shared as much as possible between the monitor, collection, and detector implementations.
  * Jesse refactored the OSGi Telemetryd adapter to fall back to classpath searches more quickly for non-OSGi telemetry plugins.
  * Markus continued to work on updating the Jest library for improved Amazon SQS support.
  * Jesse added support for making RPC calls over the SQS adapter.
  * Jesse worked on improving netflow performance and metrics.
  * Chandra added support for using groovy for telemetry adapters.
  * Ronny cleaned up a bunch of issues in default SNMP data collection.
  * Antonio fixed some issues in the Enlinkd bridge topology support.
  * Dustin did more work on flow support.
  * Seth added karaf version info to the UI status page.
  * Markus added support for detecting new nodes in an Elasticsearch cluster.

* __Web UI__

  * Markus and Jesse cleaned up some potential security issues in the UI.
  * Seth updated Jetty to a bugfixed version that fixes `HEAD` request handling.
  * Jesse fixed the Helm alarm detail page to fit in the viewspace and scroll for alarm details with lots of text.

## This Month's Releases: Horizon 21.0.1, Meridian 2016.1.9, and Meridian 2017.1.2

This month we released bug and security updates to Horizon 21 and Meridian 2016 & 2017.

* **Horizon 21.0.1** ([Rachael](https://bladerunner.wikia.com/wiki/Rachael)) is the newest stable release of OpenNMS Horizon. It contains a few enhancements but is primarily a bugfix release, including a fix for the rendering issue in the topology UI and other Vaadin-based UI elements.  ([Release Notes](https://bit.ly/opennms-horizon-21-0-1))
* **Meridian 2017.1.2** ([Kraków meridian](https://en.wikipedia.org/wiki/Prime_meridian)) is a small update to Meridian 2017 with many of the bug fixes that went into Horizon 21.0.1.  ([Release Notes](http://bit.ly/meridian-2017-1-2))
* **Meridian 2016.1.9** ([Winkel tripel](https://en.wikipedia.org/wiki/Winkel_tripel_projection)) contains a subset of the changes that went into the other releases this month.  ([Release Notes](http://bit.ly/meridian-2016-1-9))


## Upcoming Events and Appearances

* __[OSMC - Nuremberg, Germany - November 21st through 24th, 2017](https://osmc.de/)__

  Ronny Trommer will be speaking at OSMC with a talk titled, _"Another Year with OpenNMS"_, discussing the progress made in the last 3 major releases of OpenNMS and what's on the roadmap going forward.

  [Ronny's talk](https://osmc.de/events/en-another-year-with-opennms/) will be on Thursday, November 23rd.
  Full details of the schedule are available on [the OSMC site](https://osmc.de/schedule/).


## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HELM-70](https://issues.opennms.org/browse/HELM-70): Long descriptions and log messages fill the alarm details modal
* [HZN-1178](https://issues.opennms.org/browse/HZN-1178): Write documentation for the Netflow 5 Adapter
* [HZN-1183](https://issues.opennms.org/browse/HZN-1183): Update Jest library to version 5.3.3
* [HZN-1193](https://issues.opennms.org/browse/HZN-1193): Improve Netflow performance and metrics
* [NMS-9099](https://issues.opennms.org/browse/NMS-9099): Complete migration from Castor to JAXB
* [NMS-9492](https://issues.opennms.org/browse/NMS-9492): rescan-exitsing attibute of requisition-def tag in provisiond-configuration.xml is not passed to scanNode() in CoreImportActivities
* [NMS-9509](https://issues.opennms.org/browse/NMS-9509): Duplicate event definition in etc/events
* [NMS-9585](https://issues.opennms.org/browse/NMS-9585): KSC reports broken for all nodes
* [NMS-9670](https://issues.opennms.org/browse/NMS-9670): IOActive: Cross-Site Scripting in createFavorite filter Parameter
* [NMS-9673](https://issues.opennms.org/browse/NMS-9673): IOActive: Reflected Cross-site Scripting in userGroupView/roles roleDescr and Other Parameters
* [NMS-9674](https://issues.opennms.org/browse/NMS-9674): IOActive: Reflected Cross-site Scripting in admin/thresholds/index.htm filterField and Other Parameters
* [NMS-9723](https://issues.opennms.org/browse/NMS-9723): Implement the RPC pattern using AWS SQS
* [NMS-9724](https://issues.opennms.org/browse/NMS-9724): ReST v1 does not return errors for unparseable events
* [NMS-9740](https://issues.opennms.org/browse/NMS-9740): JMX collector doesn't support integer
* [ORG-65](https://issues.opennms.org/browse/ORG-65): Monitoring storcli based raid controllers