---
title: This Week in OpenNMS: September 26th, 2016
date: 11:26 09/26/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, jetty, camel, hikaricp, c3p0, minion, snmp, elasticsearch, bug fixes, ohio linux fest, dbatlanta, all things open, ato, mc frontalot, the doubleclicks, kings barcade, osmc]
---

In the last week we worked on dependency updates, Minion, Elasticsearch, and bug fixing.

<!-- git log --all --no-merges --since='2016-09-19 00:00:00' --until='2016-09-26 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)'  | sort | less -R -->

Github Project Updates
----------------------

* __Dependency Updates__

  Jesse did some more work on upgrading to the latest Jetty and Camel.  He also updated [HikariCP](https://brettwooldridge.github.io/HikariCP/) to the latest version and made it our default pooling implementation, rather than C3P0.

* __Minion__

  Chandra continued his work on tracking Minion system registration and location support in `snmp-config.xml`.  I worked on packaging-related issues in Minion (configuring startup, fixing assembly-only builds, etc).

* __Elasticsearch Support__

  Craig and Seth did more work on forwarding events to Elasticsearch.

* __Bug Fixes__

  We've been spending time fixing a bunch of smaller bugs and starting to identify blockers for 19.0.0, due in the next few months.

Upcoming Events and Appearances
-------------------------------

* __[Ohio Linux Fest - October 7th and 8th, 2016](https://ohiolinux.org/)__

  Jeff will be speaking at Ohio Linux Fest on the current state of OpenNMS and what we're planning for the future.

* __[DBAtlanta Meetup - October 12th, 2016](https://www.meetup.com/DBAtlanta/events/233373942/)__

  Jeff will be giving a talk about Newts, the time-series data store designed and built for OpenNMS.

* __[All Things Open - October 26th and 27th, 2016](https://allthingsopen.org/)__

  Tarus will be speaking at the All Things Open conference on the subject of The Internet of Silos.  A number of OpenNMS folks will be in attendance, so if you see us, don't hesitate to say "hi."  We'll be sponsoring an evening concert of [MC Frontalot and The Doubleclicks](http://www.adventuresinoss.com/2016/07/05/mc-frontalot-and-the-doubleclicks-at-all-things-open/) at [King's Barcade](http://www.kingsbarcade.com/) Wednesday night.

* __[Open Source Monitoring Conference - November 29th through December 2nd, 2016](https://www.netways.de/en/events_trainings/osmc/overview/)__

  Jeff will be speaking at OSMC on the current state of OpenNMS and what we're planning for the future.

Until Next Week…
----------------

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

Resolved Issues Since Last TWiO
-------------------------------

* [HZN-410](https://issues.opennms.org/browse/HZN-410): getting ICMP working in non-root environment
* [HZN-617](https://issues.opennms.org/browse/HZN-617): RPM packages should cleanly uninstall
* [HZN-872](https://issues.opennms.org/browse/HZN-872): "monitoringSystemAdded" event should be sent when Minion connects
* [HZN-873](https://issues.opennms.org/browse/HZN-873): "monitoringSystemLocationUpdated" event when Location is changed
* [HZN-874](https://issues.opennms.org/browse/HZN-874): "monitoringSystemDeleted" when a Minion is removed
* [HZN-881](https://issues.opennms.org/browse/HZN-881): Make pollerd location aware
* [HZN-882](https://issues.opennms.org/browse/HZN-882): Add support for customizing JVM argument and system properties
* [HZN-884](https://issues.opennms.org/browse/HZN-884): Cascade Searching
* [HZN-886](https://issues.opennms.org/browse/HZN-886): Double click on edge API
* [NMS-5689](https://issues.opennms.org/browse/NMS-5689): "Pinger already registered" warning when changing Discovery config
* [NMS-6538](https://issues.opennms.org/browse/NMS-6538): Snmp Collection does not start
* [NMS-7913](https://issues.opennms.org/browse/NMS-7913): JMX Datacollection Config Generator Test Race Condition
* [NMS-8047](https://issues.opennms.org/browse/NMS-8047): OpenNMS alarm's clear-key can't clear several events
* [NMS-8136](https://issues.opennms.org/browse/NMS-8136): Heatmap box doesn't format correctly when browser window is resized (zoomed)
* [NMS-8338](https://issues.opennms.org/browse/NMS-8338): Elasticsearch and AMQP DefaultEventForwarder classes need @InOnly interface
* [NMS-8412](https://issues.opennms.org/browse/NMS-8412): minion build fails with makerpm.sh -a
* [NMS-8585](https://issues.opennms.org/browse/NMS-8585): Backshift graphs bleed over the div when viewed via the dashboard
* [NMS-8663](https://issues.opennms.org/browse/NMS-8663): Difficulty identifying multiple edges between vertices in Topology UI
* [NMS-8693](https://issues.opennms.org/browse/NMS-8693): Add ReST Elastic Search Alarms to Foundation2016
* [NMS-8696](https://issues.opennms.org/browse/NMS-8696): Guava upgrade breaks Elasticsearch forwarding
* [NMS-8711](https://issues.opennms.org/browse/NMS-8711): Search web page doesn't talk about searching IPv6 addresses
* [NMS-8742](https://issues.opennms.org/browse/NMS-8742): Add documentation for Mattermost/Slack notifications
* [NMS-8744](https://issues.opennms.org/browse/NMS-8744): Trapd JMX trap counters don't count traps
* [NMS-8747](https://issues.opennms.org/browse/NMS-8747): Use HikariCP as the default connection factory

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->
