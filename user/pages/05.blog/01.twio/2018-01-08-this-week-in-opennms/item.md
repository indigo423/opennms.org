---
title: This Week in OpenNMS: January 8th, 2018
date: 10:59 01/08/2018
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, telemetryd, collectd, asciidoctor, drift, webpack, linuxconf, nznog]
---

It's time for This Week in OpenNMS!

In the last week we did more work on Drift telemetry, refactoring Collectd, enlinkd, and refactoring our JavaScript.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2018-01-02 00:00:00' --until='2018-01-08 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * Seth did more work on refactoring Collectd.
  * Ronny worked on Asciidoctor documentation rendering.
  * Jesse did more work on accessing interface and top N data in Drift queries.
  * Antonio worked on bridge topology fixes in Enlinkd.
  * I fixed an issue that could cause an NPE when validating config files.

* __Web & UI__

  * I continued my work on refactoring our various JavaScript code to a single optimized webpack build.


## Upcoming Events and Appearances

* __[Linuxconf Australia Sysadmin Miniconf - January 23rd, 2018](https://linux.conf.au/programme/miniconfs/sysadmin/)__

  Tarus will be speaking at the Linuxconf Australia Systems Administration Miniconf on January 23rd.

* __[NZNOG 2018 - Queenstown, NZ - January 22nd - 26th, 2018](http://www.nznog.org/nznog18)__

  After Linuxconf, Tarus will speak at the New Zealand Network Operators Group event at [Rydges in Queenstown, NZ](http://www.nznog.org/nznog18/venue).

## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HZN-1218](https://issues.opennms.org/browse/HZN-1218): Top N queries for flow applications and conversations
* [NMS-9766](https://issues.opennms.org/browse/NMS-9766): Notification storm causes JVM crash with: Native memory allocation (mmap) failed
* [NMS-9785](https://issues.opennms.org/browse/NMS-9785): Cannot create user groups through the WebUI (NPE)