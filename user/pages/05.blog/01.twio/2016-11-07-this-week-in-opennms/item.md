---
title: This Week in OpenNMS: November 7th, 2016
date: 10:31 11/07/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, topology, maps, jnlp, jmx, snmp, http, eventd, newts, provisioning, ops board, outages, rest, osmc]
---

In the last week we worked on maps, various internal fixes and polling, the web UI, ReST, and bug fixes.

<!-- git log --all --no-merges --since='2016-10-31 00:00:00' --until='2016-11-07 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)' | sort | less -R -->

Github Project Updates
----------------------

* __Maps__

  Markus did more work cleaning up history and session handling in the topology UI.

* __Internals and Polling__

  I did some cleanup of jar-signing for JNLP during the build, as well as fixing the JMX config generator command-line tool.  I also worked on improving our handling of SNMP "error-status" responses.  Ron fixed the HTTP POST monitor to handle an empty banner config properly.  David fixed date-handling and some other mapping issues in the alarm northbounder code.  Jesse did a bunch of performance improvement work on event handling, as well as some bug fixing for Newts.

* __Web UI__

  Jeff fixed some threshold editor wording, as well as fixing the rendering of the logo in the ops board.  Alejandro fixed some issues with the node view in the provisioning UI, as well as adding support for handling autocompletion/selection of new categories more cleanly.

* __ReST__

  Alejandro worked on fixing the outages-for-node ReST API.

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

* [HZN-718](https://issues.opennms.org/browse/HZN-718): Core Minion Services
* [HZN-869](https://issues.opennms.org/browse/HZN-869): SVG display issue in Internet explorer
* [HZN-915](https://issues.opennms.org/browse/HZN-915): Add a REST endpoint for submitting ad-hoc Discovery scans
* [HZN-925](https://issues.opennms.org/browse/HZN-925): Update the SNMP config editor to support lookup and edits by location
* [HZN-935](https://issues.opennms.org/browse/HZN-935): Allow multiple events to be expanded in parallel
* [HZN-938](https://issues.opennms.org/browse/HZN-938): Implement Ping Sweep RPC Module
* [NEWTS-103](https://issues.opennms.org/browse/NEWTS-103): MIN/MAX aggregation functions return incorrect values when there are no samples
* [NEWTS-105](https://issues.opennms.org/browse/NEWTS-105): Upgrade the Cassandra driver to 3.1.1
* [NMS-8532](https://issues.opennms.org/browse/NMS-8532): Cannot validate remote-poller code certificate JRE 8u74 or newer
* [NMS-8670](https://issues.opennms.org/browse/NMS-8670): Newts: When Cassandra Cluster is unavailable, OpenNMS gives up on trying to contact it again
* [NMS-8768](https://issues.opennms.org/browse/NMS-8768): Event advanced search does not work because of encoded &s
* [NMS-8789](https://issues.opennms.org/browse/NMS-8789): SNMP web configurator does not allow zero retries
* [NMS-8800](https://issues.opennms.org/browse/NMS-8800): After installing opennms-jmx-config-generator, the jmx-config-generator cannot be executed
* [NMS-8808](https://issues.opennms.org/browse/NMS-8808): Blank content when clicking on "View Node Link Detailed Info"
* [NMS-8814](https://issues.opennms.org/browse/NMS-8814): Provisioning UI: The filtered list of nodes is not updated after removing a node
* [NMS-8837](https://issues.opennms.org/browse/NMS-8837): Make additional fields available for replacement in NorthboundAlarms
* [NMS-8846](https://issues.opennms.org/browse/NMS-8846): Update ticket ID and state in Alarms via REST
* [NMS-8848](https://issues.opennms.org/browse/NMS-8848): Provisioning UI: Improve the suggestions for categories and services while editing requisitions
* [NMS-8855](https://issues.opennms.org/browse/NMS-8855): Wallboard / Ops board renders product logo strangely
* [NMS-8863](https://issues.opennms.org/browse/NMS-8863): NonUniqueResultException when retrieving CDP links
* [NMS-8864](https://issues.opennms.org/browse/NMS-8864): HttpPostMonitor logs exception when banner is not defined.
* [NMS-8865](https://issues.opennms.org/browse/NMS-8865): Make feature "opennms-topology-runtime-linkd" uninstallable
* [NMS-8867](https://issues.opennms.org/browse/NMS-8867): linkednode.jsp  ->  query did not return a unique result -> CDP Links

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->
