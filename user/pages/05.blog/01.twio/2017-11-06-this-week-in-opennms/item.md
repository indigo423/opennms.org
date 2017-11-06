---
title: This Week in OpenNMS: November 6th, 2017
date: 13:48 11/06/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, provisiond, traps, amazon, sqs, slack, mattermost, surveillance, telemetryd, netflow, jms, minion, jti, cubaconf, osmc]
---

It's time for This Week in OpenNMS!

Last week we did a lot of Telemetryd work and a few other bug fixes targeting the November releases.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2017-10-30 00:00:00' --until='2017-11-06 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * Jesse wrapped up the work on fixing an SNMP thread leak while provisioning.
  * Alejandro fixed some logging on the branch for handling traps without descriptions.
  * Alejandro and Jesse did more work on Amazon SQS code.
  * Jeff wrapped up the mattermost/slack format changes.
  * Jeff improved the "unable to locate resource" logs to be more helpful.
  * mmahacek submitted a few more documentation fixes.
  * I fixed some NPEs in the surveillance view editor.
  * Dustin did more work on netflow support in Telemetryd.
  * Jesse split out JMS components so they can be disabled on the Minion.
  * Chandra continued his work on JTI support in Telemetryd.
  * I fixed validation of requisitions when they are persisted.
  * Jesse made it so NaN values can be marshaled & unmarshaled for collection.

* __Web, UI, and Mobile__

  * I worked on fixing ReST API issues in Compass on Android.


## Upcoming Events and Appearances

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

* [NMS-9276](https://issues.opennms.org/browse/NMS-9276): Elasticsearch integration avoid parm name conflicts for severity as integer
* [NMS-9362](https://issues.opennms.org/browse/NMS-9362): Tweak Mattermost notification docs not to specify a channel
* [NMS-9388](https://issues.opennms.org/browse/NMS-9388): INFO-level "unable to locate resource" log messages for interfaces not persisted by policy
* [NMS-9508](https://issues.opennms.org/browse/NMS-9508): Add AsciiBinder framework and migrate the admin documentation
* [NMS-9510](https://issues.opennms.org/browse/NMS-9510): Migrate installation guide to AsciiBinder
* [NMS-9524](https://issues.opennms.org/browse/NMS-9524): Northbounders implementation are not sending feedback events for reloadDaemonConfig
* [NMS-9656](https://issues.opennms.org/browse/NMS-9656): Incorrect logging of exceptions in Slack and Mattermost notifications
* [NMS-9691](https://issues.opennms.org/browse/NMS-9691): Implement the Sink pattern using AWS SQS
* [NMS-9709](https://issues.opennms.org/browse/NMS-9709): Duty schedules with embedded newlines break startup
* [NMS-9718](https://issues.opennms.org/browse/NMS-9718): Unexpected errors while generating event definitions from TRAP-TYPE without a DESCRIPTION field
* [NMS-9722](https://issues.opennms.org/browse/NMS-9722): Null pointer exception in SurvellianceViewConfigurationCategoryWindow.java
* [NMS-9726](https://issues.opennms.org/browse/NMS-9726): Documentation error: Admin Guide 5.2.13 for Xmp refers to WMI