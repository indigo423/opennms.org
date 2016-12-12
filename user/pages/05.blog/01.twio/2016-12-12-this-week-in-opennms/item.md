---
title: This Week in OpenNMS: December 12th, 2016
date: 11:47 12/12/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, documentation, collectd, snmp, minion, provisiond, rpc, syslog, traps, topology maps, graphs, jasper reports, bug fixes, fosdem]
---

In the last week we worked on documentation, various internals, Minion, topology maps, graphing, reporting, web UI, and bug fixes.

<!-- git log --all --no-merges --since='2016-12-05 00:00:00' --until='2016-12-12 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)' | sort | less -R -->

Github Project Updates
----------------------

* __Documentation__

  Cyrille added documentation for Collectd and the SNMP collector.  Ronny added improved Minion install and troubleshooting documentation.

* __Internals__

  Jesse did more work on handling locations properly when discovering new nodes with Provisiond. He also improved RPC error handling and logging. I did some more fixes to [SNMP error handling](http://docs.opennms.org/opennms/branches/jira-NMS-8671/guide-admin/guide-admin.html#ga-special-cases-and-workarounds).

* __Minion__

  Jesse and Seth have been working on much of the plumbing that is going into Minion's communication (and the APIs that are shared with the OpenNMS side), as well as tidying up syslog and trap integration.

* __Topology Maps__

  Markus improved the performance of reloading data from topology providers.

* __Graphing, Reporting, and UI__

  Alejandro did more cleanup of graph definitions, as well as some improvements to the resource list layout. Cyrille finished up fixes to rate calculations in the "total bytes transferred" Jasper reports.

* __Bug Fixes__

  We've been spending time fixing blockers and other bugs for 19.0.0, due (hopefully) before the end of the year.


Upcoming Events and Appearances
-------------------------------

* __[FOSDEM 2017 - February 4th and 5th, 2017](https://fosdem.org/2017/)__

  Craig Gallen will be at FOSDEM 2017 and OpenNMS will have a booth there.

* __[Training - February 27th through March 3rd, 2017](https://www.opennms.com/opennms-training-dates-announced-for-february-2017/)__

  The OpenNMS Group will be holding training at OpenNMS Headquarters in Pittsboro, NC, USA the week of February 27th, 2017.

Until Next Week…
----------------

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

Resolved Issues Since Last TWiO
-------------------------------

* [HZN-84](https://issues.opennms.org/browse/HZN-84): Clarification for Oracle JDK vs. OpenJDK and Java 7 / Java 8 support
* [HZN-393](https://issues.opennms.org/browse/HZN-393): Delete WMI page on wiki
* [HZN-767](https://issues.opennms.org/browse/HZN-767): Add kafka components to the Minion RPM build
* [HZN-960](https://issues.opennms.org/browse/HZN-960): Location is not persisted in the requisition when using discovery with a foreign source
* [HZN-967](https://issues.opennms.org/browse/HZN-967): Location filter not working as expected
* [HZN-968](https://issues.opennms.org/browse/HZN-968): GenericURLConnection's getQueryArgs just doesn't work
* [NMS-8720](https://issues.opennms.org/browse/NMS-8720): saved wrong OSPF routerid in ospfelement 
* [NMS-8923](https://issues.opennms.org/browse/NMS-8923): WS-Man collection fail with unknown reason code 2
* [NMS-8924](https://issues.opennms.org/browse/NMS-8924): WS-Man collection with resource-type only store last resource
* [NMS-8929](https://issues.opennms.org/browse/NMS-8929): OpenNMS Kafka client cannot load because of Zookeeper OSGi issue
* [NMS-8937](https://issues.opennms.org/browse/NMS-8937): Elasticsearch event forwarder logs event body at INFO level
* [NMS-8940](https://issues.opennms.org/browse/NMS-8940): wsdl2java in features/ticketing/remedy is causing build failures

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->
