---
title: This Week in OpenNMS: June 26th, 2017
date: 11:23 06/26/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, collection, snmp, java9, topology, enlinkd, radius, provisioning, requsitions, jaxb, thresholding, ksc reports, collectd, fiql, javascript, dashboard, rest, graphml, angularjs, grafana, dev-jam, training, ohio linux fest, olf]
---

It's time for This Week in OpenNMS!  In the last week we did various internal and web UI work.

<!-- git log --all --no-merges --since='2017-06-19 00:00:00' --until='2017-06-26 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)' | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * Ron Roskens added documentation about collection resource types.
  * Brynjar Eide fixed a bug in scanning SNMP devices with missing `IP-MIB::ipAddressIfIndex` entries.
  * Jesse did more work on Java 9 support.
  * Antonio squashed more topology and Enlinkd bugs.
  * Jean-Marie Kubek improved test support for RADIUS by using an internal tinyRadius server.
  * Markus did more work on changing our provisioning code to store requisition information in the database.
  * Alejandro fixed events to log in a more useful fashion.
  * I worked on cleaning up a number of things broken by the JAXB changes introduced in 20.0.0 (including the thresholding and KSC report editors).
  * Jesse fixed a bug in Collectd not properly handling node, interface, and service deleted events.
  * Jesse added v2 (FIQL) support to the [JavaScript API for OpenNMS](https://github.com/OpenNMS/opennms-js).

* __Web UI__

  * Markus fixed an issue with the dashboard loading properly.
  * Markus added an API to expose OpenNMS web UI navigation info to ReST clients.
  * Seth worked on the ReSTv2 APIs more.
  * Roman Solomakhov improved topology icon support.
  * Dustin made vertex status scriptable in the topology GraphML provider.
  * Markus worked on refactoring the admin UI angular code.
  * Jesse and Markus worked on a Grafana-based UI for working with alarms. (code name: "[HELM](https://github.com/OpenNMS/grafana-opennms-helm-app)")

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

* [HZN-862](https://issues.opennms.org/browse/HZN-862): Implement ByteArrayPartitioner to generate partition number to store kafka messegas for syslog & traps
* [HZN-1080](https://issues.opennms.org/browse/HZN-1080): The location field on the SNMP configuration page should be a select box
* [HZN-1082](https://issues.opennms.org/browse/HZN-1082): Missing java.xml.bind.* classes when compiling under Java 9
* [HZN-1089](https://issues.opennms.org/browse/HZN-1089): VMware v6 data collection not working
* [HZN-1094](https://issues.opennms.org/browse/HZN-1094): Upgrade Camel to version 2.19
* [HZN-1095](https://issues.opennms.org/browse/HZN-1095): Use cxf-xjc-plugin instead of maven-jaxb2-plugin
* [NMS-8759](https://issues.opennms.org/browse/NMS-8759): Add category search provider support to Atlas topology provider
* [NMS-9335](https://issues.opennms.org/browse/NMS-9335): LoadingTopology from db result in NPE
* [NMS-9351](https://issues.opennms.org/browse/NMS-9351): Upgrade Spring from 4.1 to 4.2
* [NMS-9403](https://issues.opennms.org/browse/NMS-9403): Add Resource Types to admin guide documentation
* [NMS-9409](https://issues.opennms.org/browse/NMS-9409): TCP persistence strategy should output time in milliseconds, not seconds
* [NMS-9414](https://issues.opennms.org/browse/NMS-9414): Node Label Change form Broken
* [NMS-9415](https://issues.opennms.org/browse/NMS-9415): NullPointerException during nodeScan on devices with broken IP-MIB::ipAddressIfIndex
* [NMS-9417](https://issues.opennms.org/browse/NMS-9417): RadiusAuthMonitorTest is @ignored as it needs an external radius server
* [NMS-9421](https://issues.opennms.org/browse/NMS-9421): Possible XSS in Alarm Filter Favorites
* [NMS-9427](https://issues.opennms.org/browse/NMS-9427): NPE on Vaadin Dashboard
* [NMS-9450](https://issues.opennms.org/browse/NMS-9450): Unable to "Change Label" of Node
* [NMS-9455](https://issues.opennms.org/browse/NMS-9455): BridgeTopology Discovery Mismatch after opennms restart
* [NMS-9456](https://issues.opennms.org/browse/NMS-9456): ClassNotFoundException when running vmwarecimquery/vmwareconfigbuilder
