---
title: This Week in OpenNMS: September 18th, 2017
date: 11:28 09/18/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, jti, helm, meridian, remote poller, vmware, asciibinder, snmp, css, provisioning, bsm, ohio linux fest, olf, cubaconf, osmc]
---

It's time for This Week in OpenNMS!

Last week was more development work on JTI support, wrapping up of Helm, and prepping for Meridian 2017 and a new Horizon release.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2017-09-11 00:00:00' --until='2017-09-18 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * Seth and I worked on fixing logging in the remote poller.
  * Jesse and Chandra worked on implementing JTI stream data collection.
  * Jesse fixed location-handling in newSuspect events.
  * Christian worked on fixing some import errors in the VMware adapter.
  * Ronny worked on migrating docs to AsciiBinder for rendering.
  * Jesse fixed a potential resource leak caused by SNMP sessions that fail.

* __Web and UI__

  * I cleaned up a bunch of hardcoded/bad values in various CSS themes.
  * Jesse fixed the "quick add node" button in the provisioning UI.
  * I fixed the BSM admin page to give a visual indication when the user triggers a config reload.


## Meridian 2017 and Horizon 20.1.0 Coming Soon

Assuming any last blockers are closed out, the plan is to release Meridian 2017.1.0 this week, as well as an interim Horizon 20 release.

Horizon 21 is not quite ready yet (we still have a number of planned updates that won't meet this month's release), but we wanted to make sure a version of Horizon was available that would support the new Helm plugin for Grafana.  Horizon 20.1.0 will be based on Horizon 20, but contains other ReST work and a few other features that were originally slated for Horizon 21.


## Upcoming Events and Appearances

* __[Ohio Linux Fest - Columbus, OH - September 29th through 30th, 2017](https://ohiolinux.org/tarus-balog-to-keynote-ohio-linuxfest-2017/)__

  Tarus Balog will be the keynote speaker at Ohio Linux Fest in Columbus.
  His talk is titled _"A Short History of an Open Source Business"_ and will be about the history of OpenNMS, decisions that were made, problems that were faced, and things we'd do different.

  For details, see [the Ohio Linux Fest announcement](https://ohiolinux.org/tarus-balog-to-keynote-ohio-linuxfest-2017/).

* __[CubaConf - Havana, Cuba - November 7th through 9th, 2017](http://www.cubaconf.org/)__

  Alejandro Galue and Tarus Balog will be representing OpenNMS at the second annual Cubaconf to be held in Havana, Cuba, in November.

* __[OSMC - Nuremberg, Germany - November 21st through 24th, 2017](https://osmc.de/)__

  Ronny Trommer will be speaking at OSMC with a talk titled, _"Another Year with OpenNMS"_, discussing the progress made in the last 3 major releases of OpenNMS and what's on the roadmap going forward.

  [Ronny's talk](https://osmc.de/events/en-another-year-with-opennms/) will be on Thursday, November 23rd.
  Full details of the schedule are available on [the OSMC site](https://osmc.de/schedule/).


## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HELM-54](https://issues.opennms.org/browse/HELM-54): Document severity colors and icons
* [HZN-1155](https://issues.opennms.org/browse/HZN-1155): OSGi-based notification strategies
* [HZN-1156](https://issues.opennms.org/browse/HZN-1156): Upgrade to JNA 4.3.0
* [NMS-7646](https://issues.opennms.org/browse/NMS-7646): Synology MIB files
* [NMS-9108](https://issues.opennms.org/browse/NMS-9108): "Manually Add an Interface" seems broken
* [NMS-9178](https://issues.opennms.org/browse/NMS-9178): java.lang.OutOfMemoryError: unable to create new native thread
* [NMS-9406](https://issues.opennms.org/browse/NMS-9406): Allow provisiond to perform reverse lookups without requiring an A record (foundation-2016)
* [NMS-9420](https://issues.opennms.org/browse/NMS-9420): No bounds-checking in processing of DHCP Options
* [NMS-9606](https://issues.opennms.org/browse/NMS-9606): The remote-poller.sh script looks for the remote-poller.jar file in the wrong location
* [NMS-9607](https://issues.opennms.org/browse/NMS-9607): Allow use of %% to escape a percent sign in the eventconf
* [NMS-9608](https://issues.opennms.org/browse/NMS-9608): Unable to modify poller packages through the Monitoring Locations UI
* [NMS-9611](https://issues.opennms.org/browse/NMS-9611): vmware importer fails with NPE
* [NMS-9615](https://issues.opennms.org/browse/NMS-9615): Basic syslog messages with Informational severity turn into unknown events
* [NMS-9618](https://issues.opennms.org/browse/NMS-9618): quick add node is broken
* [NMS-9631](https://issues.opennms.org/browse/NMS-9631): Remote Poller log path incorrect when using the NSIS installer
