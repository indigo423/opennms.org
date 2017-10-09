---
title: This Week in OpenNMS: October 9th, 2017
date: 10:28 10/09/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, trapd, httpclient, karaf, snmp, netmask, jaxb, syslog, drift, jti, netflow, olf, cubaconf, osmc]
---

It's time for This Week in OpenNMS!

Last week we continued progress towards Horizon 21.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2017-10-02 00:00:00' --until='2017-10-09 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * Jesse fixed some issues in the trap handler.
  * Alejandro worked on updating us to the latest Apache Commons HTTP client.
  * Seth continued to work on upgrading Karaf to 4.1.
  * I (finally) moved the netmask field from the SNMP interface table to the IP interface table.
  * I worked on reformatting our configuration files to make them match the way they get written out by code.
  * Seth fixed a parsing bug in the new radix syslog parser.


## In Development: Drift

You may have noticed in the last few TWiOs that there have been references to work relating to [JTI](https://www.juniper.net/documentation/en_US/junos/topics/concept/junos-telemetry-interface-oveview.html).  This is part of a larger project we are internally calling "Drift" which is designed to add support for handling [NetFlow](https://en.wikipedia.org/wiki/NetFlow) and similar telemetry data in conjunction with OpenNMS.

The plan is for telemetry data to come in and be enriched with OpenNMS's location and node data and then be persisted to Elasticsearch. From there you will be able to get [Grafana](https://grafana.com/) graphs, [Sankey diagrams](https://en.wikipedia.org/wiki/Sankey_diagram), and anything else that can be sliced and diced from Elasticsearch data.

A basic project plan for Drift is up on [the OpenNMS wiki](https://wiki.opennms.org/wiki/DevProjects/Drift) if you'd like to see more details.


## Upcoming Events and Appearances

* __[CubaConf - Havana, Cuba - November 7th through 9th, 2017](http://www.cubaconf.org/)__

  Alejandro Galue and Tarus Balog will be representing OpenNMS at the second annual Cubaconf to be held in Havana, Cuba, in November.

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

* [HZN-1071](https://issues.opennms.org/browse/HZN-1071): Remove org.apache.activemq.SERIALIZABLE_PACKAGES system properties
* [NMS-8684](https://issues.opennms.org/browse/NMS-8684): Karaf errors when installation path has white space
* [NMS-9385](https://issues.opennms.org/browse/NMS-9385): Remove snmpIpAdEntNetmask from the snmpInterface table
* [NMS-9423](https://issues.opennms.org/browse/NMS-9423): An empty category is not shown when in focus
* [NMS-9498](https://issues.opennms.org/browse/NMS-9498): The button to add a graph to a KSC report doesn't work
* [NMS-9660](https://issues.opennms.org/browse/NMS-9660): trapd may silently discard invalid traps
* [NMS-9661](https://issues.opennms.org/browse/NMS-9661): Upgrade Apache httpcore and httpclient