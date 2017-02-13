---
title: This Week in OpenNMS: February 13th, 2017
date: 11:18 02/13/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, requisitions, karaf, elasticsearch, rrd, geolocation, icmp, ping, topology, node maps, bsm, bug fixes, training]
---

In the last week we worked on internals, Minion, the web UI, and bug fixes.

<!-- git log --all --no-merges --since='2017-02-06 00:00:00' --until='2017-02-13 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)' | sort | less -R -->

## Github Project Updates

* __Internals__

  Jesse added support for requisition providers through a new URL format, `requisition://[plugin]`.  Seth worked on updating OpenNMS's embedded Karaf to 4.x.  I fixed an issue with the Elasticsearch API that would treat valid non-200 results from the ES ReST API as failures.  Dustin did more work on cleaning up resource-handling in the RRD APIs.  Markus refactored geolocation resolution into a more generic/reusable API.  I finished up my work to make OpenNMS automatically choose the best ICMP implementation on startup.

* __Minion__

  Jesse added support for scanning requisition providers through a Minion.

* __Web UI__

  Markus cleaned up a number of issues in the topology UI, as well as fixing a few remaining node map bugs.  Christian fixed a layout issue in the BSM editor.

* __Bug Fixes__

  We've been spending time fixing blockers and other bugs for 19.0.0, due this week.


## Upcoming Events and Appearances

* __[Training - February 27th through March 3rd, 2017](https://www.opennms.com/opennms-training-dates-announced-for-february-2017/)__

  The OpenNMS Group will be holding training at OpenNMS Headquarters in Pittsboro, NC, USA the week of February 27th, 2017.

## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

## Resolved Issues Since Last TWiO

* [HZN-614](https://issues.opennms.org/browse/HZN-614): Allow setting a foreign source scan interval to "never".
* [HZN-800](https://issues.opennms.org/browse/HZN-800): Write a Minion System Test for syslog reception with Kafka broker
* [HZN-1002](https://issues.opennms.org/browse/HZN-1002): Allow collectors to be invoked on Minion (via RPC)
* [HZN-1003](https://issues.opennms.org/browse/HZN-1003): HttpCollector support for Minion
* [HZN-1013](https://issues.opennms.org/browse/HZN-1013): New default centerUrl is not described in opennms.properties
* [HZN-1022](https://issues.opennms.org/browse/HZN-1022): es-rest: Add multithreaded processing when sending to ES
* [NMS-7106](https://issues.opennms.org/browse/NMS-7106): If a target node is rebooted the RRD/JRB files contains spikes because the sysUpTime check is not working
* [NMS-8330](https://issues.opennms.org/browse/NMS-8330): Switching Topology Providers causes Exception
* [NMS-8728](https://issues.opennms.org/browse/NMS-8728): OpenNMS web console is not displaying node name for syslog events
* [NMS-8798](https://issues.opennms.org/browse/NMS-8798): Test that syslog and trap messages handle overlapping IP addresses
* [NMS-8901](https://issues.opennms.org/browse/NMS-8901): auto-acknoledge random fails
* [NMS-8944](https://issues.opennms.org/browse/NMS-8944): Statsd: erroneous reporting; aggregators not reset between worker's runs
* [NMS-9002](https://issues.opennms.org/browse/NMS-9002): adjust default size of BSM window
* [NMS-9023](https://issues.opennms.org/browse/NMS-9023): Jira-Ticketer: Attribute values for some custom fields are not mapped correctly
* [NMS-9062](https://issues.opennms.org/browse/NMS-9062): es-rest: HTTP 201 is considered an error
* [NMS-9065](https://issues.opennms.org/browse/NMS-9065): ACLs broken for Assets page
* [NMS-9076](https://issues.opennms.org/browse/NMS-9076): Geographical map on index page is by default empty
* [NMS-9077](https://issues.opennms.org/browse/NMS-9077): WS-Man thresholding reports: No thresholds configured for resource type '*'
* [NMS-9078](https://issues.opennms.org/browse/NMS-9078): Detect ICMP API availability automatically
* [NMS-9081](https://issues.opennms.org/browse/NMS-9081): Geographical map shows alarms not correct
* [NMS-9086](https://issues.opennms.org/browse/NMS-9086): osgi-pluginmanager: Include support for Karaf 4
* [NMS-9087](https://issues.opennms.org/browse/NMS-9087): Correlation engine's cancelTimer method should be public

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->
