---
title: This Week in OpenNMS: October 31st, 2016
date: 11:26 10/31/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, topology maps, jetty, ping, rest, measurements, rrd, discovery, rpc, snmp, osmc]
---

In the last week we worked on maps, various internal fixes, ReST, the Minion, and bug fixes.

<!-- git log --all --no-merges --since='2016-10-24 00:00:00' --until='2016-10-31 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)' | sort | less -R -->

Github Project Updates
----------------------

* __Maps__

  Markus made it possible to persist topology map layouts to the database so they can be modified.

* __Internals__

  Jesse did some more work on upgrading to Jetty 9.4.  David Schlenk cleaned up some unit test issues including time-zone handling and the flags for running ping tests.   Christian made it possible to show the web headers even when embedded inside an iframe.

* __ReST__

  Dustin changed the ReST API so you can log in using a GET request.  Jesse fixed a bug in the measurements API attempting an RRD XPORT even when there is nothing to fetch.  Christian added a ReST API for triggering a discovery ping-sweep.

* __Minion__

  Chandra's work on a ping sweep RPC module was merged into develop.  He also made the location configurable on the SNMP agent admin.  Jesse cleaned up the IP:nodeId cache including fixing null-foreign-source handling, and also improved locking.

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

* [HZN-790](https://issues.opennms.org/browse/HZN-790): Allow the “browser tab section” to be toggled/hidden
* [HZN-917](https://issues.opennms.org/browse/HZN-917): WMI failure
* [HZN-921](https://issues.opennms.org/browse/HZN-921): User can save the layout of the topology
* [HZN-924](https://issues.opennms.org/browse/HZN-924): test in poller/client-rpc assumes it's being run in the eastern US
* [HZN-926](https://issues.opennms.org/browse/HZN-926): Deprecate the SnmpAgentConfigFactory.getAgentConfig(InetAddress) method
* [HZN-929](https://issues.opennms.org/browse/HZN-929): Display the  header when viewing the WebUI in an iframe
* [HZN-930](https://issues.opennms.org/browse/HZN-930): Allow login via GET requests
* [NMS-8620](https://issues.opennms.org/browse/NMS-8620): Restarting OMNS results in numerous SNMP outage alarms and notifications
* [NMS-8665](https://issues.opennms.org/browse/NMS-8665): Measurements API can fail with exception when operating in relaxed mode
* [NMS-8707](https://issues.opennms.org/browse/NMS-8707): Integration test for Syslogd's new-suspect-on-message in Minion environment
* [NMS-8835](https://issues.opennms.org/browse/NMS-8835): Discovery duplicates nodes when foreign-source is set
* [NMS-8836](https://issues.opennms.org/browse/NMS-8836): InterfaceToNodeCache does not properly handle null locations
* [NMS-8840](https://issues.opennms.org/browse/NMS-8840): Several ICMPv6 tests fail with NoRouteToHostException
* [NMS-8841](https://issues.opennms.org/browse/NMS-8841): Minion packages fail to install on Amazon Linux release 2016.09
* [NMS-8842](https://issues.opennms.org/browse/NMS-8842): Permission denied errors when starting Minion
* [NMS-8843](https://issues.opennms.org/browse/NMS-8843): user detection in `install` is busted on some Linux systems
* [NMS-8844](https://issues.opennms.org/browse/NMS-8844): Minion fails to start when running as non-root

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->
