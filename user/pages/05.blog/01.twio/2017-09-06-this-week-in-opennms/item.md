---
title: This Week in OpenNMS: September 6th, 2017
date: 10:29 09/06/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, ausnog, training, ohio linux fest, olf]
---

 It's time for This Week in OpenNMS!

Last week was a short week because of the Labor Day holiday, but we continued wrapping up Helm changes and working on bug fixes in preparation for Meridian 2017.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2017-08-28 00:00:00' --until='2017-09-06 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * I continued my work on getting OpenNMS integration tests to run cleanly in Docker containers.  I have the `foundation` and `foundation-2016` branches building cleanly, and have managed to run them on Elastic Bamboo instances, so we're in the home stretch.
  * Christian and Dustin wrapped up their work moving event parms to a separate database table.
  * Jesse worked on a Pagerduty client and notification strategy.
  * Antonio did some refactoring of the bridge topology DAO.

* __Web and UI__

  * Markus fixed a bug in how the ReST API throws errors.
  * Jesse did more work on being able to "extend" model objects with extra information in ReST.
  * Markus exposed the ticketing URL in alarm ReSTv2 so it can be used in the UI.
  * Alejandro changed the graph results page to pop-up forecasts like NRTG.
  * I did a bunch of work investigating CXF date-parsing.  It turns out it works as designed, FIQL is just weird.
  * Seth worked on improved outage and node list pages with search and typeahead.
  * I fixed UTF-8 handling in ReST integration tests.
  * Jesse worked on making a role that allows acknowledging alarms on behalf of other users.
  * Markus finished up our error handling work in OpenNMS.js.
  * Jesse and Markus added event label, location, and ticket link to the OpenNMS.js model.
  * I fixed ReSTv2 URL-encoding for FIQL in OpenNMS.js.
  * Markus fixed IP address display in Helm.
  * Jesse and Markus added event label, location, and ticket information to Helm.
  * Jesse did other UI cleanup in helm.

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

* [HELM-4](https://issues.opennms.org/browse/HELM-4): Move event parameters into their own table
* [HELM-13](https://issues.opennms.org/browse/HELM-13): Display the event label in the alarms table
* [HELM-31](https://issues.opennms.org/browse/HELM-31): Provide a link to the ticket in the alarm details modal
* [HELM-39](https://issues.opennms.org/browse/HELM-39): Show a non crypting error message to the user
* [HELM-46](https://issues.opennms.org/browse/HELM-46): Provide autocompletion functionality for the "frequently used attributes"
* [HELM-50](https://issues.opennms.org/browse/HELM-50): Persisted nested Queries are not restored properly
* [HELM-51](https://issues.opennms.org/browse/HELM-51): Redefine the defaults of the Alarm Table Panel
* [HELM-52](https://issues.opennms.org/browse/HELM-52): Show event parameter key/values in the alarm table panel
* [HZN-1098](https://issues.opennms.org/browse/HZN-1098): Enhance the v2 REST API to return endpoint meta-data
* [HZN-1143](https://issues.opennms.org/browse/HZN-1143): Use DTOs in REST v2 endpoints for events and alarms
* [HZN-1147](https://issues.opennms.org/browse/HZN-1147): Move event parameters into their own table
* [JS-13](https://issues.opennms.org/browse/JS-13): Improper error code handling
* [JS-22](https://issues.opennms.org/browse/JS-22): Add capability to fetch values from ReST endpoint
* [JS-23](https://issues.opennms.org/browse/JS-23): Map troubleTicketLink
* [JS-24](https://issues.opennms.org/browse/JS-24): troubleTicketState is not mapped properly
* [NMS-3915](https://issues.opennms.org/browse/NMS-3915): Adaptive size of interface list on node page
* [NMS-5356](https://issues.opennms.org/browse/NMS-5356): Sort a Nodes IP and Physical Interface List
* [NMS-6207](https://issues.opennms.org/browse/NMS-6207): Rebooting a linux node results in SNMP spikes
* [NMS-8856](https://issues.opennms.org/browse/NMS-8856): Resource graph forecast page lacks header
* [NMS-9456](https://issues.opennms.org/browse/NMS-9456): ClassNotFoundException when running vmwarecimquery/vmwareconfigbuilder
* [NMS-9555](https://issues.opennms.org/browse/NMS-9555): reloadDaemonConfig doesn't work for Eventd, only eventsConfigChange works
* [NMS-9578](https://issues.opennms.org/browse/NMS-9578): Apache CXF is not decoding url parameters correctly.
* [NMS-9602](https://issues.opennms.org/browse/NMS-9602): EventParameterMigratorOffline task fails when eventparms contains empty strings
* [NMS-9605](https://issues.opennms.org/browse/NMS-9605): Error loading node list page (column "event_id" does not exist)
