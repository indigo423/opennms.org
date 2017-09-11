---
title: This Week in OpenNMS: September 11th, 2017
date: 10:29 09/11/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, helm, meridian, javascript, jti, dhcp, syslog, vmware, rest, css, grafana, ohio linux fest, olf, osmc]
---

It's time for This Week in OpenNMS!

Last week was more Helm wrap-up and fixing issues to prepare for the release of Meridian 2017.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2017-09-06 00:00:00' --until='2017-09-11 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * Seth did some cleanup of misformatted APC eventconf entries.
  * Jesse started working on adding support for Juniper Telemetry Interface.
  * Christian fixed the startup path in the remote poller script.
  * Seth fixed the criteria API to handle stacking join conditions.
  * I fixed our DHCP handler to deal with malformed packets better.
  * Seth fixed the syslog handler to parse `INFORMATIONAL` messages correctly.
  * Christian improved IP-address probing logic in the VMware integration.

* __Web and UI__

  * Seth fixed model update logic in the ReSTv2 API.
  * I cleaned up some of our CSS to be parameterized rather than hardcoding colors.
  * Jesse added an alarm detail link API to OpenNMS.js.
  * Jesse fixed the OpenNMS.js Grafana adapter to properly set authentication headers.
  * Jesse added support for multi-select in the Helm alarm list.
  * Jesse did some other UI polishing in Helm.

## Upcoming Events and Appearances

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

* [HELM-3](https://issues.opennms.org/browse/HELM-3): Allow alarms to be classified by type
* [HELM-28](https://issues.opennms.org/browse/HELM-28): Usability improvements to filtering
* [HELM-53](https://issues.opennms.org/browse/HELM-53): Multi-select support
* [HELM-55](https://issues.opennms.org/browse/HELM-55): Add a link to the associated alarm in OpenNMS
* [HELM-56](https://issues.opennms.org/browse/HELM-56): Hide the ticketing tab in the alarm details modal when ticketing is not used
* [HELM-58](https://issues.opennms.org/browse/HELM-58): MomentJS warning after running sample code
* [HZN-1107](https://issues.opennms.org/browse/HZN-1107): Could not read 'SecurityProtocols.properties' from classpath!
* [HZN-1146](https://issues.opennms.org/browse/HZN-1146): RESTv2 alarm endpoint: Support searching for a single event parameter key-value pair on lastEvent
* [HZN-1150](https://issues.opennms.org/browse/HZN-1150): Allow acknowledging alarms on behalf of another user without require admin
* [NMS-5593](https://issues.opennms.org/browse/NMS-5593): provisiond hangs
* [NMS-9278](https://issues.opennms.org/browse/NMS-9278): Finishing the implementation of the missing endpoints for ReST v2
* [NMS-9497](https://issues.opennms.org/browse/NMS-9497): The alarm-type for BSM event definitions is conceptually incorrect
* [NMS-9587](https://issues.opennms.org/browse/NMS-9587): Expose ticketing url (when enabled) via the rest endpoint
* [NMS-9599](https://issues.opennms.org/browse/NMS-9599): offset=0 is rendering as offset=null in ReSTv2 collections
* [NMS-9609](https://issues.opennms.org/browse/NMS-9609): Remove any mention of using Atomikos as a valid DB Connection Pool to avoid unwanted side effects
* [NMS-9622](https://issues.opennms.org/browse/NMS-9622): installing OpenNms: faillure to start the service because of the database connection
