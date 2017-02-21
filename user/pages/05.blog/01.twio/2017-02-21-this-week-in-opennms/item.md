---
title: This Week in OpenNMS: February 21st, 2017
date: 11:18 02/21/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, ssl, castor, jaxb, prometheus, jmx, ipv6, camel, minion, topology, heatmap, trend charts, rest, opendaylight, upgrades, icmp, users, roles, bug fixes, training]
---

In the last week we worked on internals, Minion, the web UI and ReST, and bug fixes.

<!-- git log --all --no-merges --since='2017-02-13 00:00:00' --until='2017-02-21 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)' | sort | less -R -->

## Github Project Updates

* __Internals__

  Ron worked on improving our SSL handling in a number of the SSL-based monitors and detectors.  Jesse worked on converting our remaining Castor-based objects to JAXB.  He also worked on a new collector for collecting from the Prometheus time-series database.  Seth fixed JMX connections to IPv6 addresses.  Seth worked on updating our Camel version to 2.14.

* __Minion__

  Jesse worked on adding JMX collection support on the Minion.

* __Web UI and ReST__

  Markus did a bit more bug fixing in the topology UI.  Christian fixed a rendering bug when the heatmap and trend charts are included on the front page.  Jesse fixed the issue with 19 returning a blank version number in the ReST API.  He also worked on an OpenDaylight proof-of-concept integration for the topology UI.

* __Bug Fixes__

  Now that 19 is out, we've been fixing the highest-priority issues people have run into on upgrades.  I fixed the `localhost` monitoring location issue, as well as issues with certain ICMP configurations.  Alejandro fixed an upgrade issue that could cause user roles to not propagate to the new integrated `users.xml` file.


## Horizon 19.0.1 Coming Shortly

I'm waiting for a final Integration/Smoke test run, but I plan on releasing Horizon 19.0.1 today.  This should fix a number of small bugs as well as the upgrade issues some people have been seeing.  Start watching for it later today.


## Upcoming Events and Appearances

* __[Training - February 27th through March 3rd, 2017](https://www.opennms.com/opennms-training-dates-announced-for-february-2017/)__

  The OpenNMS Group will be holding training at OpenNMS Headquarters in Pittsboro, NC, USA the week of February 27th, 2017.

## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

## Resolved Issues Since Last TWiO

* [HZN-626](https://issues.opennms.org/browse/HZN-626): Collect JMS queue statistics from the embedded broker via JMX
* [HZN-976](https://issues.opennms.org/browse/HZN-976): Upgrade JDK for HZN 19 release
* [HZN-1004](https://issues.opennms.org/browse/HZN-1004): JdbcCollector support for Minion
* [HZN-1023](https://issues.opennms.org/browse/HZN-1023): HeatMap broken due to GeoMap JavaScript includes
* [HZN-1024](https://issues.opennms.org/browse/HZN-1024): GeoMap produces 404 error on landing page
* [NMS-8505](https://issues.opennms.org/browse/NMS-8505): SNMP4J logging is not enabled on Minion
* [NMS-8703](https://issues.opennms.org/browse/NMS-8703): Show Business Service in Topology Map generates exception
* [NMS-8934](https://issues.opennms.org/browse/NMS-8934): NPE in IpInterfaceScan when processing IPLike rule with IPv6 address
* [NMS-9071](https://issues.opennms.org/browse/NMS-9071): Jsr160ConnectionFactory doesn't work with IPv6 address
* [NMS-9100](https://issues.opennms.org/browse/NMS-9100): Migrate RTC related objects to JAXB instead of Castor
* [NMS-9102](https://issues.opennms.org/browse/NMS-9102): after an update /opt/opennms/bin/install -dis is failing on duplicate key value violates unique constraint "monitoringlocations_pkey"
* [NMS-9103](https://issues.opennms.org/browse/NMS-9103): Display version is blank in 19.0.0
* [NMS-9109](https://issues.opennms.org/browse/NMS-9109): The upgrade task for magic.users doesn't work on RPM based upgrades
* [NMS-9111](https://issues.opennms.org/browse/NMS-9111): Expand SNMP4J trap socket receive buffer
* [NMS-9112](https://issues.opennms.org/browse/NMS-9112): Pollerd continues to monitor deleted nodes
* [NMS-9114](https://issues.opennms.org/browse/NMS-9114): Minion throw's NullpointerException while flushing one or more aggregates in 'Trap' module.
* [NMS-9119](https://issues.opennms.org/browse/NMS-9119): Broken Link in Release Notes
* [NMS-9123](https://issues.opennms.org/browse/NMS-9123): Bundle error in output.log on startup

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->
