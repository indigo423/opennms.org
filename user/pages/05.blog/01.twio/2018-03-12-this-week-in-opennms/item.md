---
title: This Week in OpenNMS: March 12th, 2018
date: 11:11 03/12/2018
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, sentinel, minion, elasticsearch, sflow, telemetryd, jstl, rest, drift, helm, grafana, ohio state]
---

It's time for This Week in OpenNMS!

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2018-03-05 00:00:00' --until='2018-03-12 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * Markus worked on Sentinel documentation and proof-of-concept code.
  * I backported my fixes for the Minion build to the 2017 foundation branch.
  * Markus did some improvements to Elasticsearch configuration and testing.
  * Christian worked on sFlow support in Telemetryd.

* __Web & UI__

  * Chandra worked on fixing a JSTL bug that was causing Statsd reports to not render.
  * Patrick fixed keyboard navigation issues in the web UI menus.
  * Markus worked on fixing a node asset ReST bug.
  * I refactored the OpenNMS.js Drift support a bit and added the ability to publish snapshot/development builds to the NPM archive.
  * I did some work integrating the Drift updates into Helm, as well as working on Grafana 5 support.

## Upcoming Events and Appearances

* __[Ohio State Open Source Club - March 22nd, 2018](https://opensource.osu.edu/events/)__

  Tarus will be [speaking at the Ohio State Open Source Club](https://opensource.osu.edu/events/) on Thursday, March 22nd.

## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HZN-1260](https://issues.opennms.org/browse/HZN-1260):  Missing Plug-in Manager in Windows installation
* [JS-27](https://issues.opennms.org/browse/JS-27): Add support for flow related endpoints
* [NMS-9865](https://issues.opennms.org/browse/NMS-9865): opennms-flows feature does not depend on opennms-web-api
* [NMS-9867](https://issues.opennms.org/browse/NMS-9867): Inconsistent handling of keyboard navigation on top menu
* [NMS-9878](https://issues.opennms.org/browse/NMS-9878): Improve spaces and label in the Test Classification panel
* [NMS-9879](https://issues.opennms.org/browse/NMS-9879): Improve placeholder in Test Classification field
* [NMS-9880](https://issues.opennms.org/browse/NMS-9880): Error message is not cleared in Test Classification Panel
* [NMS-9883](https://issues.opennms.org/browse/NMS-9883): Cached values interfere with typeahead functionality in "Test Classification" form