---
title: This Week in OpenNMS - November 19th, 2018 - Correlation, Topology UI, Core Upgrades, Meridian and Horizon
date: 14:29 11/19/2018
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [karaf, oce, kafka, topology, drools, netflow, docker, eif, minion, vaadin, training]
---

It's time for ~~This Week~~These Weeks in OpenNMS!

Apologies for missing last week but I got a bug of my own and by the time I was feeling up to writing TWiO I figured I might as well just punt to the next week.
I assure you, I lived.   OR DID I?

In the last few weeks we did more improvements to OCE, a number of topology improvements and fixes, and worked on updating a number of core tools including Kafka and Vaadin to newer versions.  We also released Meridian 2017.1.13, 2018.1.3, and Horizon 23.0.1.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --color=always --since='2018-11-05 00:00:00' --until='2018-11-19 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->


## Github Project Updates

* __Internals, APIs, and Documentation__

  * I wrapped up my changes to quarantine flapping tests.
  * Jesse did more work on making it easier to package up Karaf code.
  * Markus and Sebastian did more work on refactoring Daemon start/stop.
  * Jesse worked on creating packages for OCE.
  * David fixed alarm un-ack to work with old situations.
  * Chandra fixed SASL auth in the Kafka producer.
  * Antonio continued his work on a refactored topology API.
  * Chandra fixed propagating errors inside the Drools correlation engine.
  * Markus worked on getting rid of our use of the custom feature generation maven plugin.
  * Matthew updated the OCE datasource to handle alarm feedback.
  * Markus did some more updates to the single-port Netflow support.
  * Jesse worked on updating to Kafka 2.
  * Matthew continued his work on graph persistence in OCE.
  * Ronny has been working on a unified set of Docker containers for various OpenNMS projects.
  * Will Keaney updated the EIF adapter to support an additional protocol value.
  * Alejandro and Jeff made a number of configuration improvements.
  * Ronny created Docker releases for Horizon 23.0.1 (including Minion).

* __Web & UI__

  * David continued his work on the topology graph UI for alarms and situations.
  * Markus worked on porting to Vaadin 8.
  * Patrick did more work on improving the performance of the topology UI.
  * I worked on updating our JS build to newer dependencies.
  * Markus fixed an issue with selecting a vertex that is not visible.
  * Markus fixed a performance issue drawing menus in the topology UI.


## New Releases: Meridian 2017.1.13 and 2018.1.3, and Horizon 23.0.1

OpenNMS Meridian 2017 got a very small update, and Meridian 2018 and Horizon 23 both got bug fix and performance updates last week.

For a complete list of what has changed, see the release notes:

* **[Meridian 2017.1.13](https://www.opennms.com/2018/11/15/opennms-meridian-2017-1-13-released/)**
* **[Meridian 2018.1.3](https://www.opennms.com/2018/11/15/opennms-meridian-2018-1-3-released/)**
* **[Horizon 23.0.1](https://www.opennms.org/en/blog/releases/2018-11-15-opennms-horizon-23.0.1)**


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

* [HZN-814](https://issues.opennms.org/browse/HZN-814): Change eventconf for newSuspect to include location name in logmsg
* [HZN-1404](https://issues.opennms.org/browse/HZN-1404): Ticketing support for situations
* [HZN-1431](https://issues.opennms.org/browse/HZN-1431): Update OpennmsKafkaProducer to handle alarm feedback
* [HZN-1435](https://issues.opennms.org/browse/HZN-1435): Remove feedback submission actions from Opennms so that OCE is the authoritative source of situation changes
* [HZN-1436](https://issues.opennms.org/browse/HZN-1436): Packaging OpenNMS plugins
* [NMS-10363](https://issues.opennms.org/browse/NMS-10363): Detect and Attempt to Restart Failed Drools Engines
* [NMS-10375](https://issues.opennms.org/browse/NMS-10375): Enlinkd and Topologies under features
* [NMS-10395](https://issues.opennms.org/browse/NMS-10395): Sink API drops messages when there is no connectivity with Kafka
* [NMS-10412](https://issues.opennms.org/browse/NMS-10412): Remove Scale Free Topology Provider
* [NMS-10419](https://issues.opennms.org/browse/NMS-10419): Find out why selecting a node takes so long in a big topology
* [NMS-10424](https://issues.opennms.org/browse/NMS-10424): Handle Flapping Tests in Bamboo More Gracefully
* [NMS-10436](https://issues.opennms.org/browse/NMS-10436): Cannot use SASL Authentication for kafka-producer module.
* [NMS-10437](https://issues.opennms.org/browse/NMS-10437): Default Metaspace configuration is insufficient
* [NMS-10440](https://issues.opennms.org/browse/NMS-10440): Remove RemotePollerMap
* [NMS-10442](https://issues.opennms.org/browse/NMS-10442): Add support for external Proxy to the Slack Notification Strategy
* [NMS-10444](https://issues.opennms.org/browse/NMS-10444): Enhance onms-topology-generator to support isi, ospf, lldp protocols
* [NMS-10445](https://issues.opennms.org/browse/NMS-10445): Improve performance of node search
* [NMS-10450](https://issues.opennms.org/browse/NMS-10450): Allow PostgreSQL 11.x
* [NMS-10451](https://issues.opennms.org/browse/NMS-10451): When selecting a vertex which is neither visible nor in focus the ui state is stuck
* [NMS-10452](https://issues.opennms.org/browse/NMS-10452): Building the menu takes forever if a visible node has an invalid ip address set
* [NMS-10453](https://issues.opennms.org/browse/NMS-10453): "Use Default Focus" may not show the "add nodes manual" indicator if "getDefaults().getCriteria()" returns empty list rather than null
* [NMS-10455](https://issues.opennms.org/browse/NMS-10455): Use MoreObjects.ToStringHelper instead of Spring ToStringCreator
* [OCE-12](https://issues.opennms.org/browse/OCE-12): Packaging & init scripts for the Kafka Event Mirrorer (KEM)
* [OCE-14](https://issues.opennms.org/browse/OCE-14): Audit and compare situations generated by OCE to other systems