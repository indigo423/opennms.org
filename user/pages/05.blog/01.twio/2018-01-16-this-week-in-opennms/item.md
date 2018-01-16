---
title: This Week in OpenNMS: January 16th, 2018
date: 10:16 01/16/2018
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, drift, telemetryd, kafka, karaf, elasticsearch, snmp, linuxconf, nznog, nethinks]
---

It's time for This Week in OpenNMS!

In the last week we did more work on Drift telemetry, Kafka metrics, Karaf refactoring, web UI bug fixes, and refactoring our JavaScript.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2018-01-08 00:00:00' --until='2018-01-16 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * Chandra continued to work on exposing Kafka metrics to collection.
  * Jesse did performance improvements when aggregating Drift data from Elasticsearch.
  * Ronny cleaned up Net-SNMP collections.
  * Seth worked on making our bundles load properly with blueprints.
  * Ronny did more work on cleaning up the help/support page(s).

* __Web & UI__

  * Jesse worked on fixing a performance issue with the node geographical maps.
  * I continued my work on refactoring our various JavaScript code to a single optimized webpack build.


## Upcoming Events and Appearances

* __[Linuxconf Australia Sysadmin Miniconf - January 23rd, 2018](https://linux.conf.au/programme/miniconfs/sysadmin/)__

  Tarus will be speaking at the Linuxconf Australia Systems Administration Miniconf on January 23rd.

* __[NZNOG 2018 - Queenstown, NZ - January 22nd - 26th, 2018](http://www.nznog.org/nznog18)__

  After Linuxconf, Tarus will speak at the New Zealand Network Operators Group event at [Rydges in Queenstown, NZ](http://www.nznog.org/nznog18/venue).

* __[NETHINKS Webinar - February 21st, 2018](https://www.nethinks.com/blog/it-ueberwachung/opennms-webinar-am-21-februar-einfuehrung-in-grafana/)__

  NETHINKS will be doing [a German-language webinar](https://www.nethinks.com/blog/it-ueberwachung/opennms-webinar-am-21-februar-einfuehrung-in-grafana) on Grafana, Helm, and OpenNMS on February 21st.

## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HZN-1014](https://issues.opennms.org/browse/HZN-1014): Combine container/standalone and container/karaf projects
* [HZN-1221](https://issues.opennms.org/browse/HZN-1221): Ingress and egress support for Netflow 5
* [NMS-9731](https://issues.opennms.org/browse/NMS-9731): Fedora 25 / 26 repo definitions identify as Fedora 24
* [NMS-9792](https://issues.opennms.org/browse/NMS-9792): snmp failed after restart
* [NMS-9808](https://issues.opennms.org/browse/NMS-9808): Bump AsciiDoc dependencies to 1.5.6
* [NMS-9812](https://issues.opennms.org/browse/NMS-9812): No fc27 RPMs exist
* [NMS-9816](https://issues.opennms.org/browse/NMS-9816): Monitor Linux disk performance with Net-SNMP by default