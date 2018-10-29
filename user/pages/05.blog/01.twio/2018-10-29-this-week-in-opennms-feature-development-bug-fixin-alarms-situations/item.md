---
title: This Week in OpenNMS - October 29th, 2018 - Feature Development, Bug Fixin', Alarms & Situations, & More
date: 13:15 10/29/2018
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [netflow, newts, cassandra, telemetryd, situations, pris, enlinkd, vaadin, osmc, hackathon, nethinks]
---

It's time for This Week in OpenNMS!

Last week we continued work on some outstanding feature development, fixed a lot of bugs, and made many improvements to alarm and situation workflows, among other things.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --color=always --since='2018-10-22 00:00:00' --until='2018-10-29 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->


## Github Project Updates

* __Internals, APIs, and Documentation__

  * Markus worked on tests for the single-port flow feature.
  * Ronny made a fix to the Cassandra/Newts thread pool metrics.
  * Christian fixed script reloading in Telemetryd.
  * Chandra did more work on adding timestamps to alarm/situation associations.
  * Ronny did more work on simplified views for SQL reporting.
  * Matthew worked on handling duplicate entities in the correlation inventory.
  * David worked on propagating situation and alarm acknowledgements.
  * Jesse continued his work on the OpenNMS Integration API.
  * Ronny did some updates and documentation changes to PRIS.
  * David updated situations so the severity is escalated relative to the situation's alarms.
  * Chandra worked on preventing cyclic graphs in situations.
  * Patrick did more work on HTTP proxy support.
  * Jesse did some refactoring of alarm testing.
  * Jesse reimplemented the alarm change notifier (alarms -> ES) by implementing the `AlarmLifecycleListener` API rather than relying on triggers.
  * Antonio added XLSX support to PRIS.
  * Alejandro bumped PRIS to a newer Jetty version.

* __Web & UI__

  * Markus fixed a timing issue with some smoke tests.
  * David made some improvements to the alarm/situation ReST APIs.
  * Markus removed the remote poller map.
  * Antonio worked on some Enlinkd and Topology enhancements.
  * Markus worked on modernizing our Vaadin infrastructure.


## Horizon 23.0.0 Released

OpenNMS Horizon 23.0.0 is the first release of the stable 23 series.

It contains a number of bug fixes and enhancements, including support for alarm correlation, running OpenNMS components in an external container, and many other improvements.

For a high-level overview of what's changed in OpenNMS 23, see [What's New in OpenNMS 23](https://docs.opennms.org/opennms/releases/23.0.0/releasenotes/releasenotes.html#releasenotes-23).

The codename for 23.0.0 is _[Granny Weatherwax](https://en.wikipedia.org/wiki/Granny_Weatherwax)_.


## Docker Updates

A number of fixes and improvements have been made to our Docker containers:

* Ronny updated the OpenNMS container to [OpenJDK 1.8.0 u191](https://access.redhat.com/errata/RHSA-2018:2942)
* Alejandro improved the Minion image to make it easier to [use Kafka and configure UDP listeners](https://github.com/opennms-forge/docker-minion#advanced-environment-variables)
* Jesse and Matt extended the Docker image with [an overlay directory to inject files into /opt/opennms](https://github.com/opennms-forge/docker-horizon-core-web#using-overlay-for-custom-arbitrary-configuration)
* Containers have been updated to 23.0.0 for Horizon and Minion
* Note that as of version 23.0.0, the Docker image for Minion runs as non-root user by default. [See the documentation for notes on updating.](https://github.com/opennms-forge/docker-minion#run-as-root-or-non-root)


## Upcoming Events and Appearances

* **[OSMC 2018 Talk and Hackathon - November 5th through 8th, 2018](https://osmc.de/)**

  Tarus will be [speaking on Tuesday, November 6th](https://osmc.de/schedule/) about the latest features in OpenNMS including Minions, Telemetryd (flow support), Sextant (alarm correlation), and more.

  Also, some OpenNMS folks will be participating in the [OSMC hackathon](https://osmc.de/hackathon/).
  The hackathon will be on Thursday, November 8th and includes dinner Wednesday night and Thursday access.
  More details can be found at the [OpenNMS OSMC Hackathon meetup page](https://wiki.opennms.org/wiki/Meetups/OSMC2018-Hackathon).

* **[NETHINKS Asset Topology Provider Webinar - November 14th, 2018](https://www.nethinks.com/blog/it-ueberwachung/jetzt-anmelden-opennms-webinar-zu-asset-topology-provider/)**

  NETHINKS will be doing a German-language webinar on the Asset Topology Provider on November 14th, 2018.  Registration is required, you can sign up on [the NETHINKS site](https://www.nethinks.com/blog/it-ueberwachung/jetzt-anmelden-opennms-webinar-zu-asset-topology-provider/).

* **[OpenNMS Training - December 10th through 14th, 2018](https://www.opennms.com/training/)**

  The OpenNMS Group will be offering hands-on OpenNMS training in our Apex, NC office.


## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HZN-1333](https://issues.opennms.org/browse/HZN-1333): "Change Icon" In Topology Map Fails
* [HZN-1368](https://issues.opennms.org/browse/HZN-1368): Link on About page in GUI is dead
* [HZN-1396](https://issues.opennms.org/browse/HZN-1396): REST v2: Filter for situations using greater than operator (affectedNodeCount, relatedAlarmCount)
* [HZN-1398](https://issues.opennms.org/browse/HZN-1398): Situation model - prevent cyclic graphs
* [HZN-1403](https://issues.opennms.org/browse/HZN-1403): Acknowledging situations
* [HZN-1417](https://issues.opennms.org/browse/HZN-1417): Increment Severity of Situations
* [HZN-1418](https://issues.opennms.org/browse/HZN-1418): OpenNMS Integration API
* [HZN-1422](https://issues.opennms.org/browse/HZN-1422): Remove NCS components and tables from source
* [NMS-9710](https://issues.opennms.org/browse/NMS-9710): Be able to use Proxy for any Monitor or Collector that uses HttpClient
* [NMS-10379](https://issues.opennms.org/browse/NMS-10379): Other classes that use Http
* [NMS-10418](https://issues.opennms.org/browse/NMS-10418): Add SQL views to simplify SQL based reporting
* [OCE-15](https://issues.opennms.org/browse/OCE-15): Handling of duplicate inventory objects in the OpenNMS datasource
* [OCE-16](https://issues.opennms.org/browse/OCE-16): Rename 'incident' to 'situation'
* [OCE-18](https://issues.opennms.org/browse/OCE-18): Race condition on engine init
* [PRIS-140](https://issues.opennms.org/browse/PRIS-140): Maintenance dependencies
* [PRIS-147](https://issues.opennms.org/browse/PRIS-147): Can't provision node with multiple IP addresses with XLS source