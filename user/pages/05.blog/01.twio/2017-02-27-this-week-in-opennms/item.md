---
title: This Week in OpenNMS: February 27th, 2017
date: 10:48 02/27/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, internals, data collection, karaf, castor, jaxb, grok, syslog, enlinkd, drools, opendaylight, topology, bsm, horizon, percona live]
---

In the last week we worked on various internal cleanups and the web UI.

<!-- git log --all --no-merges --since='2017-02-21 00:00:00' --until='2017-02-27 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)' | sort | less -R -->

## Github Project Updates

* __Internals__

  Jesse did more work on cleaning up data collection. Seth continued to work on updating our embedded Karaf to Karaf 4.  Jesse and I worked a bunch on converting old Castor-based internal objects to use JAXB.  Seth worked on integrating grok-based syslog parsing.  Antonio worked on some Enlinkd bugs.  Alejandro added metric instrumentation to the Drools correlator.  Jesse worked a bit more on OpenDaylight integration.

* __Web UI and ReST__

  Markus did more topology cleanup work. Christian fixed more issues in the BSM admin UI.  Craig worked on adding support for using asset data for creating a topology layout.


## Horizon 19.0.1 (Ferret-Legging) Released

Horizon 19.0.1 was released last week, with [a number of upgrade-related bugs fixed](https://www.opennms.org/en/blog/releases/2017-02-22-opennms-horizon-19.0.1).  If you are using Horizon 19, please upgrade!


## Upcoming Events and Appearances

* __[Percona Live - April 24th through 27th, 2017](https://www.percona.com/live/17/)__

  Jesse [will be speaking at Percona](https://www.percona.com/live/17/users/jesse-white) in Santa Clara, California on April 25th, 2017.


## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

## Resolved Issues Since Last TWiO

* [HZN-626](https://issues.opennms.org/browse/HZN-626): Collect JMS queue statistics from the embedded broker via JMX
* [HZN-937](https://issues.opennms.org/browse/HZN-937): Remove direct GraphProvider access from GraphContainer (user session)
* [HZN-1005](https://issues.opennms.org/browse/HZN-1005): JMXCollector support for Minion
* [HZN-1006](https://issues.opennms.org/browse/HZN-1006): NSClientCollector support for Minion
* [HZN-1007](https://issues.opennms.org/browse/HZN-1007): TcaCollector support for Minion
* [HZN-1016](https://issues.opennms.org/browse/HZN-1016): Provide generic functionality to resolve geolcations and remove the current implementation from nodemaps
* [HZN-1019](https://issues.opennms.org/browse/HZN-1019): Generic requisition URL support
* [HZN-1029](https://issues.opennms.org/browse/HZN-1029): Service opennms doesn't start after upgrade from 18.0.4 to 19.0.0-1
* [NMS-8682](https://issues.opennms.org/browse/NMS-8682): Discovery list duplicate nodes
* [NMS-9090](https://issues.opennms.org/browse/NMS-9090): Collection timing enhancements
* [NMS-9114](https://issues.opennms.org/browse/NMS-9114): Minion throw's NullpointerException while flushing one or more aggregates in 'Trap' module.
* [NMS-9116](https://issues.opennms.org/browse/NMS-9116): Fix RPC integration tests
* [NMS-9120](https://issues.opennms.org/browse/NMS-9120): Selection of non-disk RRD strategies
* [NMS-9123](https://issues.opennms.org/browse/NMS-9123): Bundle error in output.log on startup


<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->
