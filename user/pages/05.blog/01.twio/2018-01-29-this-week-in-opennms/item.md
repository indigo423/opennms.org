---
title: This Week in OpenNMS: January 29th, 2018
date: 10:56 01/29/2018
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, collectd, sflow, telemetryd, karaf, nxos, kafka, amqp, camel, javascript, webpack, selenium, nethinks]
---

It's time for This Week in OpenNMS!

In the last week we did more work on Drift telemetry, Kafka metrics, Karaf refactoring, web UI bug fixes, and refactoring our JavaScript.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2018-01-22 00:00:00' --until='2018-01-29 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * Seth fixed calling collection commands over the RPC interface.
  * Chandra did more work on generic resource collection.
  * Dustin did the groundwork for sFlow support in Telemetryd.
  * Ronny updated the help page to use HTTPS links.
  * Seth fixed logging issues in Karaf.
  * Chandra fixed NXOS packet parsing.
  * Chandra added graphs for Kafka metrics.
  * Jesse fixed AMQP compatibility by using Camel's connection factory.

* __Web & UI__

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

* [HZN-1217](https://issues.opennms.org/browse/HZN-1217): Create Mbeans for Kafka Offset and add to jmx collection
* [HZN-1224](https://issues.opennms.org/browse/HZN-1224): Flow REST API for deep dive tooling
* [HZN-1226](https://issues.opennms.org/browse/HZN-1226): Measurements API: Allow SNMP interfaces to be referenced by ifIndex
* [NMS-9684](https://issues.opennms.org/browse/NMS-9684): Refactor the compatibility matrix in the documentation
* [NMS-9695](https://issues.opennms.org/browse/NMS-9695): ClassNotFoundException for org.apache.logging.log4j.core.util.ExecutorServices in output.log
* [NMS-9773](https://issues.opennms.org/browse/NMS-9773): logging does not work for OSGI bundles
* [NMS-9799](https://issues.opennms.org/browse/NMS-9799): Event parameter refactor breaks Auto-Acknowledgements for Notifications
* [NMS-9832](https://issues.opennms.org/browse/NMS-9832): Change links to docs in help page using https