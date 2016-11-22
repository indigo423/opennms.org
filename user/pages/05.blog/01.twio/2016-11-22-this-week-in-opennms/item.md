---
title: This Week in OpenNMS: November 22nd, 2016
date: 10:31 11/22/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, documentation, eventd, eif, jetty, alarms, events, heartbeats, minion, linkd, topology, bug fixes, osmc]
---

In the last week we worked on documentation, various internals, Minion, maps, and bug fixes.

<!-- git log --all --no-merges --since='2016-11-14 00:00:00' --until='2016-11-22 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)' | sort | less -R -->

Github Project Updates
----------------------

* __Documentation__

  Cyrill worked on documenting `eventd-configuration.xml`, Ronny did more work on user/group documentation.

* __Internals, Events and Alarms__

  Will (with some help from Jesse) wrote an adapter to convert EIF (Event Integration Facility) events to OpenNMS events.  Jesse worked on the update to Jetty 9.4, as well as a fix to deal with an issue creating and clearing tickets when alarms flap.  Markus and Jesse worked on improving Eventd performance.

* __Minion__

  Jesse improved the heartbeat-handling in the Minion.

* __Maps__

  Markus improved the topology infrastructure to deal better with link creation.

* __Bug Fixes__

  We've been spending time fixing a bunch of smaller bugs and starting to identify blockers for 19.0.0, due in the next few months.

Upcoming Events and Appearances
-------------------------------

* __[Open Source Monitoring Conference - November 29th through December 2nd, 2016](https://www.netways.de/en/events_trainings/osmc/overview/)__

  Jeff will be speaking at OSMC on the current state of OpenNMS and what we're planning for the future.

Until Next Week…
----------------

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

Resolved Issues Since Last TWiO
-------------------------------

* [HZN-811](https://issues.opennms.org/browse/HZN-811): Dependency missing in camel-kafka feature for zookeeper & zkclient
* [HZN-919](https://issues.opennms.org/browse/HZN-919): SNMPV1 Trap messages are failing on opennms side
* [HZN-934](https://issues.opennms.org/browse/HZN-934): Add support for synchronous forwarding
* [HZN-939](https://issues.opennms.org/browse/HZN-939): Update Discovery to the use the Ping Sweep RPC
* [HZN-940](https://issues.opennms.org/browse/HZN-940): Create upgrade task for updating 'localhost' to 'Default' in discovery-configuration.xml
* [NMS-7573](https://issues.opennms.org/browse/NMS-7573): Update prototypes from kie version 6.2.0.CR4 to 6.2.0.Final 
* [NMS-7911](https://issues.opennms.org/browse/NMS-7911): Opsboard change title color to something neutral than red
* [NMS-8181](https://issues.opennms.org/browse/NMS-8181): Create data collection configuration from vCenter 6
* [NMS-8510](https://issues.opennms.org/browse/NMS-8510): "View in Topology" on node detail page does not switch to "Linkd" topology Provider
* [NMS-8552](https://issues.opennms.org/browse/NMS-8552): Eventd
* [NMS-8653](https://issues.opennms.org/browse/NMS-8653): Show availability box for the primary interface if the node has more than 10 interfaces
* [NMS-8739](https://issues.opennms.org/browse/NMS-8739): Top 20 nodes I/O wait jasper report
* [NMS-8803](https://issues.opennms.org/browse/NMS-8803): Syslog handler for Minion can't be added to the featuresBoot
* [NMS-8820](https://issues.opennms.org/browse/NMS-8820): Can not make Secure Page (HTTPS) work
* [NMS-8821](https://issues.opennms.org/browse/NMS-8821): LDAP to AD with ssl
* [NMS-8822](https://issues.opennms.org/browse/NMS-8822): LDAP socket closed; nested exception is javax.naming.ServiceUnavailableException
* [NMS-8839](https://issues.opennms.org/browse/NMS-8839): DiscoveryBlueprintIT test it flapping
* [NMS-8851](https://issues.opennms.org/browse/NMS-8851): Allow filtering by severity in alarm list
* [NMS-8852](https://issues.opennms.org/browse/NMS-8852): Expose alarm-list "limit" parameter as a UI control
* [NMS-8866](https://issues.opennms.org/browse/NMS-8866): Avoid creating tickets for cleared alarms
* [NMS-8879](https://issues.opennms.org/browse/NMS-8879): Updating assets/categories through ReST affects Forced Unmanaged services.
* [NMS-8886](https://issues.opennms.org/browse/NMS-8886): GraphAll Button no longer works
* [NMS-8892](https://issues.opennms.org/browse/NMS-8892): Add newest supported PostgreSQL version in docs
* [NMS-8895](https://issues.opennms.org/browse/NMS-8895): Jetty logging behavior has changed

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->
