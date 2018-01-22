---
title: This Week in OpenNMS: January 22nd, 2018
date: 10:50 01/22/2018
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, drift, telemetryd, kafka, karaf, jmx, netflow, ipfix, ksc reports, javascript, helm, linuxconf, nznog, nethinks]
---

It's time for This Week in OpenNMS!

In the last week we did more work on Drift telemetry, Kafka metrics, Karaf refactoring, web UI bug fixes, and refactoring our JavaScript.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2018-01-16 00:00:00' --until='2018-01-22 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * Chandra continued to work on exposing Kafka metrics to collection by making JMX collection support generic resource types.
  * Seth continued his work making our bundles load properly with blueprints.
  * Markus worked on telemetry data validation.
  * Dustin worked on Netflow 9 and IPFIX support.
  * Ronny did more work on cleaning up the help/support page(s).
  * Jesse continued to work on exposing telemetry data for graphing.

* __Web & UI__

  * Markus fixed an issue with geo coordinates being truncated.
  * Markus fixed the KSC report search sometimes not returning entries.
  * I continued my work on refactoring our various JavaScript code to a single optimized webpack build.
  * Jesse worked on flow query support in OpenNMS.js and Helm.

## OpenNMS Horizon 21.0.3 and Meridian 2017.1.4 Released

This month's releases are now available.

For details on what's changed, see the blog announcements:

* [Horizon 21.0.3](https://www.opennms.org/en/blog/releases/2018-01-18-opennms-horizon-21.0.3)
* [Meridian 2017.1.4](https://www.opennms.com/2018/01/18/opennms-meridian-2017-1-4-released/)

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

* [HZN-1161](https://issues.opennms.org/browse/HZN-1161): Improve efficiency of applying package filters in telemetryd
* [HZN-1219](https://issues.opennms.org/browse/HZN-1219): Geocoordinates truncated to 5 decimal places
* [HZN-1223](https://issues.opennms.org/browse/HZN-1223): Enhance Elasticsearch integration tests to support loading plugins
* [MIS-71](https://issues.opennms.org/browse/MIS-71): SMTP ALERTING
* [NMS-9771](https://issues.opennms.org/browse/NMS-9771): Split Help/Support in "Documentation" and "Support"
* [NMS-9776](https://issues.opennms.org/browse/NMS-9776): The typeahead widget for KSC Report Search on front page is not working
* [NMS-9777](https://issues.opennms.org/browse/NMS-9777): The geographical maps on large installations is unusable
* [NMS-9818](https://issues.opennms.org/browse/NMS-9818): alarm-change-notifier feature fails to install due to missing dependencies