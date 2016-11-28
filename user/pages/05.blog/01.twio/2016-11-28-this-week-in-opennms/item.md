---
title: This Week in OpenNMS: November 28th, 2016
date: 11:47 11/28/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, documentation, confguration, castor, jaxb, minion, snmp, ttl, monitoring locations, rpms, rhel, graph templates, bug fixes, osmc, fosdem]
---

In the last week we worked on documentation and configuration, various internals, Minion, graphs and the web UI, and bug fixes.

<!-- git log --all --no-merges --since='2016-11-22 00:00:00' --until='2016-11-28 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)' | sort | less -R -->

Github Project Updates
----------------------

* __Documentation and Configuration__

  Jesse converted a number of datacollection configuration files from Castor to JAXB.  Ronny and Seth updated some Minion-related (and location-related) documentation.

* __Internals and Events__

  Jesse fixed an exception during SNMP collection that would cause excessive logging.  He also changed TTL handling to return "unknown" status rather than "down."  Jeff fixed another issue with logging when dealing with incoming SNMPv2 traps.  Markus and Jesse did more work on event performance.

* __Minion__

  Jesse fixed response time storage to handle duplicate IPs in different monitoring locations.  I changed the Minion RPMs to run as root by default because non-root requires a newer kernel than RHEL provides.

* __Graphing and UI__

  Alejandro fixed a metric ton of graph templates.  Christian added location to the event list.

* __Bug Fixes__

  We've been spending time fixing a bunch of smaller bugs and starting to identify blockers for 19.0.0, due in the next few months.

Upcoming Events and Appearances
-------------------------------

* __[Open Source Monitoring Conference - November 29th through December 2nd, 2016](https://www.netways.de/en/events_trainings/osmc/overview/)__

  David will be speaking on December 1st at OSMC on the current state of OpenNMS and what we're planning for the future.  Also, Ronny Trommer will be there for the Hackathon on December 2nd.

* __[FOSDEM 2017 - February 4th and 5th, 2017](https://fosdem.org/2017/)__

  Craig Gallen will be at FOSDEM 2017 and OpenNMS will have a booth.

Until Next Week…
----------------

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

Resolved Issues Since Last TWiO
-------------------------------

* [HZN-811](https://issues.opennms.org/browse/HZN-811): Dependency missing in camel-kafka feature for zookeeper & zkclient
* [HZN-936](https://issues.opennms.org/browse/HZN-936): Expanding events: Only create a transaction when necessary
* [HZN-951](https://issues.opennms.org/browse/HZN-951): Minion fails to start with "sorry, you must have a tty to run sudo"
* [HZN-954](https://issues.opennms.org/browse/HZN-954): ICMP fails when running as non-root on CentOS 7
* [NMS-8510](https://issues.opennms.org/browse/NMS-8510): "View in Topology" on node detail page does not switch to "Linkd" topology Provider
* [NMS-8708](https://issues.opennms.org/browse/NMS-8708): Trapd reloads SNMPv3 config when no changes have occurred
* [NMS-8763](https://issues.opennms.org/browse/NMS-8763): Documentation about managing users, groups and roles
* [NMS-8803](https://issues.opennms.org/browse/NMS-8803): Syslog handler for Minion can't be added to the featuresBoot
* [NMS-8866](https://issues.opennms.org/browse/NMS-8866): Avoid creating tickets for cleared alarms
* [NMS-8879](https://issues.opennms.org/browse/NMS-8879): Updating assets/categories through ReST affects Forced Unmanaged services.
* [NMS-8900](https://issues.opennms.org/browse/NMS-8900): Spurious Trapd error logs: unknown SNMP protocol version 'v2'
* [NMS-8902](https://issues.opennms.org/browse/NMS-8902): Remove syslog handler installation from Minion docs
* [NMS-8904](https://issues.opennms.org/browse/NMS-8904): DefaultTicketerServiceLayerIntegrationTest.testWire() failed

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->
