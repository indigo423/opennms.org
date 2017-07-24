---
title: This Week in OpenNMS: July 24th, 2017
date: 11:10 07/24/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, statsd, documentation, asciibinder, datacollection, tests, alarms, northbounder, bsf, drools, enlinkd, ifttt, windows, osgi, topology, javascript, training, ohio linux fest, olf]
---

It's time for This Week in OpenNMS!  Last week we were at Dev-Jam, our annual developer conference hackathon.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2017-07-17 00:00:00' --until='2017-07-24 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * Alejandro fixed a threading issue in Statsd.
  * Ronny did lots of work on converting documentation to be rendered by AsciiBinder
  * Jesse worked on APIs for handling merged datacollection configuration files
  * DJ did some cleanup of test infrastructure
  * Alejandro implemented alarm northbounders that can feed into BSF scripting or Drools
  * Seth worked on cleaning out a bunch of unused code
  * Antonio worked on fixing Enlinkd issues
  * Christian made a daemon that can trigger IFTTT webhooks from alarms
  * Ron fixed unicode handling in the Win32ServiceDetector
  * Alejandro worked on being able to reload drools configurations

* __Web and UI__

  * Markus and Christian added new status views to the front page
  * Markus did more work on exposing web services through OSGi
  * Seth worked on a unified quick search for the web UI
  * Dustin did more work on the scriptable vertex handling for topology
  * I worked on making opennms.js work properly when pulled into node, and fixed generation of minified and un-minified code

## Upcoming Events and Appearances

* __[AusNOG - Melbourne, Australia - September 7th and 8th, 2017](http://www.ausnog.net/)__

  Tarus Balog will be speaking at this year's AusNOG conference being held in Melbourne, Australia in September.
  [AusNOG](http://www.ausnog.net/) is the premier technical and professional networking event for Internet Service Providers, Telcos, Hosting Providers, and Content Providers in Australia.
  Tarus will be presenting a talk entitled _"Monitoring at Scale with OpenNMS"_.

* __[OpenNMS Training – Apex, NC - September 11th through 15th, 2017](http://www.opennms.com/training/)__

  The OpenNMS Group's next training session in Apex, NC will be September 11th through 15th.
  For more details on OpenNMS training and to sign up, see [The OpenNMS.com training page](http://www.opennms.com/training/).

* __[Ohio Linux Fest - Columbus, OH - September 29th through 30th, 2017](https://ohiolinux.org/tarus-balog-to-keynote-ohio-linuxfest-2017/)__

  Tarus Balog will be the keynote speaker at Ohio Linux Fest in Columbus.
  His talk is titled _"A Short History of an Open Source Business"_ and will be about the history of OpenNMS, decisions that were made, problems that were faced, and things we'd do different.

  For details, see [the Ohio Linux Fest announcement](https://ohiolinux.org/tarus-balog-to-keynote-ohio-linuxfest-2017/).

## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [NMS-4000](https://issues.opennms.org/browse/NMS-4000): Sortable Service input fields
* [NMS-5833](https://issues.opennms.org/browse/NMS-5833): Scheduled Outages Node Label Field Search is Case Sensitive
* [NMS-7408](https://issues.opennms.org/browse/NMS-7408): Size of the search type in IP interface table is too small
* [NMS-8229](https://issues.opennms.org/browse/NMS-8229): OpenNMS Starts and then stops
* [NMS-8686](https://issues.opennms.org/browse/NMS-8686): grafana-opennms-datasource query returns incorrect values
* [NMS-9341](https://issues.opennms.org/browse/NMS-9341): No class found exception in OSGi for org.osgi.service.jdbc.DataSourceFactory
* [NMS-9478](https://issues.opennms.org/browse/NMS-9478): "query" parameter allows SQL injection
* [NMS-9514](https://issues.opennms.org/browse/NMS-9514): Rename integration tests that are currently running as unit tests