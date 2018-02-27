---
title: This Week in OpenNMS: February 27th, 2018
date: 11:21 02/27/2018
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, blueprint, karaf, gemini, elasticsearch, netflow, ipfix, plugin manager, sqs, minion, cisco, kafka, scale, nethinks]
---

It's time for This Week in OpenNMS!

Sorry for the delay in getting this out, but last week I was [on a nerd cruise](https://jococruise.com/) and my flight home got delayed until yesterday.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2018-02-12 00:00:00' --until='2018-02-27 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * Seth worked on wrapping up his blueprint/karaf/gemini refactor.
  * Jesse made Elasticsearch connection and read timeouts configurable.
  * Dustin did more work on Netflow 9 and IPFIX support.
  * Craig did more fixes to the plugin manager.
  * Jesse fixed the flow API to sort top N results in a meaningful order.
  * Jeff updated SQS documentation to include sink and RPC parameters.
  * I fixed the Minion build to properly build all projects.
  * Jeff added a CLI tool to manage taking thread dumps.
  * Markus worked on cleaning up Elasticsearch config consistency between different parts of the codebase.
  * Jeff added an early morning category report.
  * Jeff added datacollection and graphing for Cisco ASA remote access and fixed a few other Cisco-related configs.
  * Jesse made a producer for forwarding events, alarms, and node data to Kafka topics.

* __Web & UI__

  * Markus continued his work on the flow application definition editor and ReST API.
  * Markus worked on fixing asset record ID inconsistencies in the ReST interface.
  * Chandra added a netflow indicator to the graph UI.
  * Markus worked on some improvements in the flow classification admin UI.
  * I added support for custom context-menu actions in Helm.
  * I fixed a few small bugs in OpenNMS.js and released version 1.0.3.

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

* [HELM-75](https://issues.opennms.org/browse/HELM-75): required Grafana-Server version is missing in docs
* [HELM-79](https://issues.opennms.org/browse/HELM-79): Add support for custom actions in the alarm table panel
* [HZN-1180](https://issues.opennms.org/browse/HZN-1180): Netflow 9 / IPFIX telemetryd adapter
* [HZN-1209](https://issues.opennms.org/browse/HZN-1209): Flow application definition UI
* [NMS-9761](https://issues.opennms.org/browse/NMS-9761): Refactor JavaScript Web Assets to Share Code
* [NMS-9830](https://issues.opennms.org/browse/NMS-9830): Plugin install fails
* [NMS-9846](https://issues.opennms.org/browse/NMS-9846): Improve event processing rate in alarmd (for databases with high latency)
* [NMS-9871](https://issues.opennms.org/browse/NMS-9871): Copyright dates need a bump for 2018
