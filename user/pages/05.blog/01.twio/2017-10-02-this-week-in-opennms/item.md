---
title: This Week in OpenNMS: October 2nd, 2017
date: 10:27 10/02/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, asciibinder, spectrum, ws-man, wmi, slack, mattermost, topology maps, opennms.js, meridian, compass, olf, cubaconf, osmc]
---

It's time for This Week in OpenNMS!

Last week we released Meridian 2017, as well as maintenance releases of Meridian 2015 and 2016.  We continued progress towards releasing Horizon 21.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2017-09-25 00:00:00' --until='2017-10-02 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * Ronny continued working on migrating our documentation to AsciiBinder.
  * Dustin continued working on the location:node cache.
  * Jeff added support for `clear-alarm` in the Spectrum event importer.
  * Jeff cleaned up WS-Man collection to match WMI.
  * Jeff fixed exception logging in the Slack and Mattermost notification plugins.

* __Web and UI__

  * Markus fixed a vertex rendering issue in the topology map when no vertexes match.
  * Markus added the alarm ID to the event list display.

## New Releases

Meridian 2017 was released last Thursday.  Meridian 2017 is based on Horizon 19 minus the Minion (which is slated to be officially supported in Meridian 2018), plus a number of the enhancements that went into Horizon 20.

Read more in the [Meridian 2017 release announcement](http://bit.ly/opennms-meridian-2017-1-0).

Additionally, maintentance releases Meridian [2015.1.7](http://bit.ly/opennms-meridian-2015-1-7) and [2016.1.7](http://bit.ly/opennms-meridian-2016-1-7) came out alongside Meridian 2017.

[Compass 3.1](http://bit.ly/compass-3-1) was released, adding iOS 11 support and making a bunch of performance improvements.  It also now supports 1Password/LastPass auto-fill of passwords on iOS.

Finally, the Horizon OpenNMS and Minion Docker images have been updated to use OpenNMS Horizon 20.1.0.  They are available on Docker Hub:

* [OpenNMS Horizon](https://hub.docker.com/r/opennms/horizon-core-web/)
* [Horizon Minion](https://hub.docker.com/r/opennms/minion/)

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

* [NMS-9372](https://issues.opennms.org/browse/NMS-9372): Incorrect sysoid for the systemDef Juniper J-Routers
* [NMS-9468](https://issues.opennms.org/browse/NMS-9468): Cleanup job for "provided services"
* [NMS-9497](https://issues.opennms.org/browse/NMS-9497): The alarm-type for BSM event definitions is conceptually incorrect
* [NMS-9588](https://issues.opennms.org/browse/NMS-9588): Event Delivery Error
* [NMS-9640](https://issues.opennms.org/browse/NMS-9640): yum error when upgrading from Meridian 2016 to Meridian 2017 with XML protocol package
* [NMS-9641](https://issues.opennms.org/browse/NMS-9641): Changed thresholds file in Meridian 2017
* [NMS-9642](https://issues.opennms.org/browse/NMS-9642): notifd-configuration file wrong in Meridian 2017
* [NMS-9643](https://issues.opennms.org/browse/NMS-9643): Misordered collections in datacollection-config.xml
* [NMS-9644](https://issues.opennms.org/browse/NMS-9644): Meridian 2017.1.0 needs some packages from yum.opennms.org repo
* [NMS-9653](https://issues.opennms.org/browse/NMS-9653): re-fix BSM alarm types