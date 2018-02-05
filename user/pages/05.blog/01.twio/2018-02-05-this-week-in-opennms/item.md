---
title: This Week in OpenNMS: February 5th, 2018
date: 10:56 02/05/2018
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, alarmd, netflow, ipfix, telemetryd, nx-os, karaf, plugin manager, elasticsearch, minion, json, javascript, webpack, selenium, nethinks]
---

It's time for This Week in OpenNMS!

In the last week we did more work on Drift telemetry, the event bus, Karaf refactoring, web UI bug fixes, and refactoring our JavaScript.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2018-01-29 00:00:00' --until='2018-02-05 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * Jesse enhanced the event listener API to make them multi-threaded (including alarm processing).
  * Dustin continued his work on Netflow 9 and IPFIX support in Telemetryd.
  * Chandra did more work on NX-OS Telemetryd support.
  * Seth is close to wrapping up his Karaf blueprint cleanup.
  * Craig worked on plugin manager fixes.
  * Jesse did more fixes to Elasticsearch basic auth handling.
  * I fixed the Minion packaging to handle the `$MINION_HOME/data` directory more gracefully.
  * Alejandro added JSON support to NX-OS Telemetryd support.
  * Markus worked on improving the performance of flow data enrichment in Telemetryd.

* __Web & UI__

  * Markus is working on a flow configuration UI.
  * I continued my work on refactoring our various JavaScript code to a single optimized webpack build, including fixing our smoke tests to run under Selenium 3.

## Upcoming Events and Appearances

* __[NETHINKS Webinar - February 21st, 2018](https://www.nethinks.com/blog/it-ueberwachung/opennms-webinar-am-21-februar-einfuehrung-in-grafana/)__

  NETHINKS will be doing [a German-language webinar](https://www.nethinks.com/blog/it-ueberwachung/opennms-webinar-am-21-februar-einfuehrung-in-grafana) on Grafana, Helm, and OpenNMS on February 21st.

## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [NMS-9836](https://issues.opennms.org/browse/NMS-9836): AMQP forwarders do not support AMQP 1.0.0
* [NMS-9840](https://issues.opennms.org/browse/NMS-9840): About Java.lang.OutOfMemoryError on windows 10