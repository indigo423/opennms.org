---
title: This Week in OpenNMS: February 12th, 2018
date: 11:33 02/12/2018
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, drift, telemetryd, minion, nx-os, gemini, karaf, netflow, ipfix, jdbc, enlinkd, plugin manager, javascript, helm, scale, nethinks]
---

It's time for This Week in OpenNMS!

In the last week we worked on the Drift telemetry project, turning the Minion into an appliance, Karaf, bug fixes, the plugin manager, Helm, and refactoring our JavaScript.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2018-02-05 00:00:00' --until='2018-02-12 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * Tarus is working making a Minion appliance distro using [Project Atomic](https://www.projectatomic.io/).
  * Chandra continued his work on a NX-OS adapter for Telemetryd.
  * Seth did more work on making a clean Gemini blueprint environment for loading OpenNMS features into Karaf.
  * Markus worked on improving the performance of flow enrichment.
  * Markus fixed the index strategy to not be case-sensitive.
  * Chandra fixed some issues in his enhancement to add collection groups to the JMX collector.
  * Dustin did more work on Netflow 9 and IPFIX support in Telemetryd.
  * Chandra fixed classloading so JDBC drivers can be loaded properly by the JDBC detector.
  * Antonio worked on some Enlinkd bug fixes.
  * Craig did more work on bug fixes to the plugin manager.

* __Web & UI__

  * Markus did more work on the flow application definition editor and ReST API.
  * I wrapped up my JavaScript and CSS asset refactor.
  * I worked on an enhancement to Helm to be able to add custom actions to the alarm table context menu.

## Upcoming Events and Appearances

* __[SCaLE 16x - March 8th through 11th, 2018](https://www.socallinuxexpo.org/scale/16x/presentations/opennms-navigational-update)__

  Jeff Gehlbach will be [speaking at SCaLE on the current state of OpenNMS](https://www.socallinuxexpo.org/scale/16x/presentations/opennms-navigational-update) on Sunday, March 11th.

* __[NETHINKS Webinar - February 21st, 2018](https://www.nethinks.com/blog/it-ueberwachung/opennms-webinar-am-21-februar-einfuehrung-in-grafana/)__

  NETHINKS will be doing [a German-language webinar](https://www.nethinks.com/blog/it-ueberwachung/opennms-webinar-am-21-februar-einfuehrung-in-grafana) on Grafana, Helm, and OpenNMS on February 21st.

## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HZN-1177](https://issues.opennms.org/browse/HZN-1177): NX-OS adapter for telemetryd
* [HZN-1208](https://issues.opennms.org/browse/HZN-1208): Flow application definition REST API
* [HZN-1220](https://issues.opennms.org/browse/HZN-1220): Modify JMXCollector to save collection for a group of resources
* [HZN-1236](https://issues.opennms.org/browse/HZN-1236): Document the Classification Rest API
* [HZN-1237](https://issues.opennms.org/browse/HZN-1237): Enrichment of flows takes longer than persisting flows to elastic
* [HZN-1240](https://issues.opennms.org/browse/HZN-1240): IndexStrategyFactory is case-sensitive but should not be
* [NMS-9699](https://issues.opennms.org/browse/NMS-9699): ES REST plugin not doing preemptive basic auth
* [NMS-9744](https://issues.opennms.org/browse/NMS-9744): Hello, I have a problem when viewing: Maps, Topology and geographical does not show me the images.
* [NMS-9824](https://issues.opennms.org/browse/NMS-9824): Commands asset-topology: in Karaf console take no arguments
* [NMS-9833](https://issues.opennms.org/browse/NMS-9833): Minion RPM and DEB packaging completely removes Karaf data directory
* [NMS-9835](https://issues.opennms.org/browse/NMS-9835): bsmd: avoid processing alarm lifecycle events when no rules are defined