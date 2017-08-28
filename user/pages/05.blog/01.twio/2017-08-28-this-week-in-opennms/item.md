---
title: This Week in OpenNMS: August 28th, 2017
date: 10:12 08/28/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, helm, meridian, horizon, docker, events, tests, rest, javascript, training, ohio linux fest, olf]
---

 It's time for This Week in OpenNMS!

 In the last week we have been working on wrapping up the Helm project, and continuing to finish up the work that will become Meridian 2017 and OpenNMS Horizon 21.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2017-08-22 00:00:00' --until='2017-08-28 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * I continued my work on getting OpenNMS integration tests to run cleanly in Docker containers.
  * Christian and Dustin did more work on moving event parms to a separate database table.
  * DJ worked on cleaning up test database creation, and fixing some tests that should be marked integration rather than unit.
  * Jesse wrote [proper documentation](https://docs.opennms.org/helm/branches/master/helm/latest/welcome/index.html) for Helm.
  * I renamed the Helm github project to `opennms-helm` and updated the packages to just be `opennms-helm` rather than `opennms-helm-app`.

* __Web and UI__

  * Seth did more work on his property-based search API for ReSTv2.
  * Markus and I did more work on making error-handling more consistent and useful in OpenNMS.js.
  * Jesse fixed light/dark theme handling in Helm, as well as doing other UI cleanup.
  * Markus made errors coming from opennms.js show in a more useful way in Helm.

## A Clarification On the New Release Schedule

In the last TWiO, I discussed moving to a regular monthly release cycle, but I was not clear about what types of releases that would affect.

The monthly release cycle is primarily for bug fix releases, to help guarantee that if you see a bug closed in JIRA, you know when that fix will make it into production.

We will attempt to also target the 3rd Thursday for new major releases (Horizon 21.0.0, etc.) for consistency's sake, but we are not _guaranteeing_ they will be done on a 3rd Thursday.


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

* __[OSMC - Nuremberg, Germany - November 21st through 24th, 2017](https://osmc.de/)__

  Ronny Trommer will be speaking at OSMC with a talk titled, _"Another Year with OpenNMS"_, discussing the progress made in the last 3 major releases of OpenNMS and what's on the
  roadmap going forward.

  [Ronny's talk](https://osmc.de/events/en-another-year-with-opennms/) will be on Thursday, November 23rd.  Full details of the schedule are available on [the OSMC site](https://osmc.de/schedule/).


## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HELM-11](https://issues.opennms.org/browse/HELM-11): Allow users to identify the originating datasource in the alarm table panel
* [HELM-38](https://issues.opennms.org/browse/HELM-38): Rename packages to opennms-helm
* [HELM-40](https://issues.opennms.org/browse/HELM-40): Document installation and basic walk through
* [HELM-42](https://issues.opennms.org/browse/HELM-42): Prevent users to use a non supported OpenNMS version with the OpenNMS FM datasource
* [HELM-43](https://issues.opennms.org/browse/HELM-43): Provide examples
* [HELM-45](https://issues.opennms.org/browse/HELM-45): Allow user to toggle between all and featured properties
* [HELM-48](https://issues.opennms.org/browse/HELM-48): Rename datasources
* [HZN-132](https://issues.opennms.org/browse/HZN-132): JMXMonitor
* [NMS-9513](https://issues.opennms.org/browse/NMS-9513): Programmable Northbounder Interfaces
* [NMS-9590](https://issues.opennms.org/browse/NMS-9590): RESTv2 API fails with 500 error due to mangled timestamps
* [NMS-9598](https://issues.opennms.org/browse/NMS-9598): ExceptionMapper does not update the entity type accordingly
* [ORG-59](https://issues.opennms.org/browse/ORG-59): Monitor CPU load
* [ORG-71](https://issues.opennms.org/browse/ORG-71): Monitor CPU usage
