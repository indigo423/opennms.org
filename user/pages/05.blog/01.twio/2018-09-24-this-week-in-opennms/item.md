---
title: This Week in OpenNMS: September 24th, 2018
date: 09:37 09/24/2018
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [netflow, alarmd, lombok, rest, topology, bootstrap, meridian, minion, docker, ouce, osmc]
---

It's time for This Week in OpenNMS!

Last week we were mostly busy with OUCE, but got a bit of other work done.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --color=always --since='2018-09-17 00:00:00' --until='2018-09-24 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->


## Github Project Updates

* __Internals, APIs, and Documentation__

  * Chandra did more work on creating on off-heap store for the sink API.
  * Dustin continued his work on single-port support for flow data.
  * Jesse added an API integration point for tracking archived alarms.
  * Patrick created a proof-of-concept using Lombok to simplify some of our code.

* __Web & UI__

  * Antonio kept working on his topology ReST service.
  * Markus did more work on refactoring our web UI HTML to use the latest Bootstrap.


## OUCE 2018

[OUCE 2018](https://ouce.opennms.eu/) was a lot of fun and there were a bunch of great talks.

Thanks to [Nethinks](https://www.nethinks.com/) for organizing the conference venue and food, it was all fantanstic.
And of course thanks to all of the attendees and speakers who made the event possible.

The talks were filmed and we'll be posting video to [our YouTube channel](https://youtube.com/opennms) as well as blog posts about what was presented as those materials become available.
Stay tuned!

## New Releases: Horizon 22.0.4 plus Meridian 2016, 2017, and 2018

Every third Thursday we put out new versions of every supported OpenNMS branch which has had changes worthy of release.

This last week was the September release, which included updates to Horizon, Meridian 2016, Meridian 2017, and Meridian 2018.

### Horizon 22.0.4

Horizon 22.0.4 contains a number of bug fixes and enhancements, including fixes in upgrades, flows, date handling, topology UI performance, and minion management.  For details, see [the release notes](https://www.opennms.org/en/blog/releases/2018-09-20-opennms-horizon-22.0.4).

DockerHub images for [Horizon](https://github.com/opennms-forge/docker-horizon-core-web/) and [Minion](https://github.com/opennms-forge/docker-minion/) have been updated to 22.0.4.

### Meridian 2016.1.16, 2017.1.11, and 2018.1.11

The Meridian releases mostly contain a few small bug fixes and UI changes:

Meridian 2018.1.1 most significantly includes a number of fixes for running and maintaining Minions.  You can view all the Meridian release announcements here:

* [2016.1.16](https://www.opennms.com/2018/09/20/opennms-meridian-2016-1-16-released/)
* [2017.1.11](https://www.opennms.com/2018/09/20/opennms-meridian-2017-1-11-released/)
* [2018.1.1](https://www.opennms.com/2018/09/20/opennms-meridian-2018-1-1-released/)


## Upcoming Events and Appearances

* **[OSMC 2018 - November 5th through 8th, 2018](https://osmc.de/)**

  Tarus will be [speaking on Tuesday, November 6th](https://osmc.de/schedule/) about the latest features in OpenNMS including Minions, Telemetryd (flow support), Sextant (alarm correlation), and more.

  Also, some OpenNMS folks will be participating in the [OSMC hackathon](https://osmc.de/hackathon/).  The hackathon will be on Thursday, November 8th and includes dinner Wednesday night and Thursday access.


## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HZN-1382](https://issues.opennms.org/browse/HZN-1382): Persist collection sets from telemetry adapters in Newts on Sentinel