---
title: This Week in OpenNMS: July 31st, 2017
date: 11:20 07/31/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, rancid, enlinkd, drools, bsf, alarms, docker, snmp, helm, javascript, graphml, charts, rest, ausnog, training, ohio linux fest, olf]
---

It's time for This Week in OpenNMS!  In the last week we worked on internals, documentation, and web APIs.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2017-07-24 00:00:00' --until='2017-07-31 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * I got rid of the RANCID "rws-not-configured" exception when it's not configured.
  * Jesse worked on cleaning up some code in Enlinkd.
  * Markus enabled the IFTTT integration in the main codebase.
  * Alejandro did more work on wrapping up his Drools and BSF alarm northbounders.
  * I worked on fixing integration test code to run inside docker cleanly.
  * I worked on handling errors more cleanly in the SNMP table tracker.
  * Ronny worked on setting up documentation in the Helm project.

* __Web and UI__

  * Markus fixed javascript URL resolution in some browsers (IE, I'm looking at you)
  * Seth did more work on the global search UI.
  * Dustin merged his GraphML scriptable vertex code.
  * Markus did more wrap-up on his front page status chart enhancements.
  * Seth worked on instrumenting query metadata in the alarm ReSTv2 API.
  * I implemented trouble ticket create/update/close in opennms.js.
  * Jesse implemented alarm sticky note and journal editing in opennms.js and Helm.
  * I implemented auto-compilation and bundling of the opennms.js and Helm projects
    `develop` branches into `master`.

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

* [HZN-1063](https://issues.opennms.org/browse/HZN-1063): Add scriptable vertex status support to GraphML topologies
* [HZN-1073](https://issues.opennms.org/browse/HZN-1073): Grafana datasource for OpenNMS alarms
* [HZN-1112](https://issues.opennms.org/browse/HZN-1112): IFTTT integration
* [NMS-8229](https://issues.opennms.org/browse/NMS-8229): OpenNMS Starts and then stops
* [NMS-9328](https://issues.opennms.org/browse/NMS-9328): Add status charts to index page to indicate overall status