---
title: This Week in OpenNMS: October 30th, 2017
date: 11:26 10/30/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, telemetryd, drift, helm, compass, amazon, sqs, minion, cisco, nexus, vaadin, spring, netflow, camel, topology, cubaconf, osmc]
---

It's time for This Week in OpenNMS!

Last week we did a lot of work on the new telemetry daemon for the Drift project, released Helm 1.0.0 packages, and did some UI cleanup work on Compass.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2017-10-23 00:00:00' --until='2017-10-30 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * Alejandro continued his work implementing an Amazon SQS-based sink adapter for Minion forwarding.
  * Alejandro fixed a bug where `reloadDaemonConfigSuccessful` and `reloadDaemonConfigFailed` were not being sent on a northbounder daemon reload.
  * Chandra started adding Telemetryd support for Cisco Nexus NX-OS streams.
  * Markus worked on fixing an issue with Vaadin themes being unloadable in Horizon 21.
  * Seth worked on updating our Spring to 4.3.
  * Markus, Christian, and Dustin did more work on Telemetryd Netflow support.
  * Jesse worked on cleaning up the Minion telemetry wire protocol to be more efficient.
  * mmahacek fixed a few tyops in the admin guide.
  * Jonathan Heard fixed an issue with provisioning honoring default `rescan-existing` config.
  * Markus added some additional changes to his code to validate database time at install.
  * Alejandro fixed an issue generating trap configs when `DESCRIPTION` is missing.
  * Jesse did some work refactoring our camel RPC to handle different routing strategies.

* __Web and UI__

  * Markus cleaned up some dependency issues in the topology code.
  * I worked on fixing some UI issues in Compass related to rendering on iPhone X.
  * We prepped Helm 1.0.0 for release.


## Helm 1.0.0 Released

We are still waiting for the Grafana project to add our new plugin to the plugin registry for installation using `grafana-cli`, but the RPM/deb packaged version of Helm 1.0.0 is now available.  It obsoletes the original OpenNMS data source plugin, and adds a Grafana _application_ that provides an alarm console.

Details on installation are available in [the Helm documentation](http://docs.opennms.org/helm/releases/latest/helm/latest/welcome/index.html), including a section on [migrating from the old data source](http://docs.opennms.org/helm/releases/latest/helm/latest/getting_started/migrating_from_opennms_datasource.html).


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

* [HELM-68](https://issues.opennms.org/browse/HELM-68): Build with Grafana 4.6.0
* [HELM-69](https://issues.opennms.org/browse/HELM-69): Upgrading from Bleeding to Stable removes plugin from Grafana
* [HZN-1163](https://issues.opennms.org/browse/HZN-1163): Improve wire format for telemetry messages from Minion
* [HZN-1164](https://issues.opennms.org/browse/HZN-1164): System tests for handling JTI payloads
* [HZN-1170](https://issues.opennms.org/browse/HZN-1170): Netflow 5 flow persistence in Elastisearch
* [HZN-1171](https://issues.opennms.org/browse/HZN-1171): Retrieve Netflow 5 flows and flow summaries via REST
* [NMS-9448](https://issues.opennms.org/browse/NMS-9448): Installer should check DB time
* [NMS-9694](https://issues.opennms.org/browse/NMS-9694): Typo prevents FIQL query values from being URI-encoded
* [NMS-9700](https://issues.opennms.org/browse/NMS-9700): Typo in regional status geo map: Unacknowledges (for unacknolwedged)
* [NMS-9701](https://issues.opennms.org/browse/NMS-9701): Typo: "not elegible" for SNMP primary N enumeration
* [NMS-9705](https://issues.opennms.org/browse/NMS-9705): Problem retrieving available plugin data
* [NMS-9707](https://issues.opennms.org/browse/NMS-9707): Admin Guide Typos
* [NMS-9708](https://issues.opennms.org/browse/NMS-9708): Telemetryd does not respond to reloadDaemonConfig events
* [NMS-9716](https://issues.opennms.org/browse/NMS-9716): Topology Default Theme has too many dependencies