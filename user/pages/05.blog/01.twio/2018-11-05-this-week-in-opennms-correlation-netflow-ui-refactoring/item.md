---
title: This Week in OpenNMS - November 5th, 2018 - Correlation, Netflow, and UI Refactoring
date: 11:32 11/05/2018
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [elasticsearch, enlinkd, oce, netflow, kafka, ticketing, topology, vaadin, osmc, hackathon, nethinks]
---

It's time for This Week in OpenNMS!

Last week we worked primarily on OCE-related infrastructure, some netflow work, and UI refactoring.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --color=always --since='2018-10-29 00:00:00' --until='2018-11-05 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->


## Github Project Updates

* __Internals, APIs, and Documentation__

  * Jesse did a little more work on his alarm -> ElasticSearch refactor.
  * Antonio continued to work on Enlinkd refactoring.
  * Jesse worked on converting OCE to use the new integration API.
  * Markus did more work on wrapping up testing for single-port flow support.
  * Matthew fixed an issue in Kafka alarm sync.
  * Matthew worked on exposing alarm feedback to Kafka.
  * Chandra worked on adding situation support to the ticketing API.
  * Chandra added retries to Kafka sink so it can recover from outages.
  * David updated OCE to garbage collect deleted situations.

* __Web & UI__

  * David continued his work on the topology graph UI for alarms and situations.
  * Patrick worked on performance improvements in the topology UI.
  * Markus worked on updating Vaadin to 8.
  * Sebastian did more work on creating a UI for daemon reload.
  * Jeff made some improvements to the scheduled outage UI.


## Upcoming Events and Appearances

* **[Scylla Summit 2018 - November 5th through 7th, 2018](https://scyllasummit2018.sched.com/)**

  Jesse will be [speaking on Wednesday, November 7th](https://scyllasummit2018.sched.com/event/Herv/scaling-your-time-series-data-with-newts) about Newts, our scalable time-series database.

* **[OSMC 2018 Talk and Hackathon - November 5th through 8th, 2018](https://osmc.de/)**

  Tarus will be [speaking on Tuesday, November 6th](https://osmc.de/schedule/) about the latest features in OpenNMS including Minions, Telemetryd (flow support), Sextant (alarm correlation), and more.

  Also, some OpenNMS folks will be participating in the [OSMC hackathon](https://osmc.de/hackathon/).
  The hackathon will be on Thursday, November 8th and includes dinner Wednesday night and Thursday access.
  More details can be found at the [OpenNMS OSMC Hackathon meetup page](https://wiki.opennms.org/wiki/Meetups/OSMC2018-Hackathon).

* **[NETHINKS Asset Topology Provider Webinar - November 14th, 2018](https://www.nethinks.com/blog/it-ueberwachung/jetzt-anmelden-opennms-webinar-zu-asset-topology-provider/)**

  NETHINKS will be doing a German-language webinar on the Asset Topology Provider on November 14th, 2018.  Registration is required, you can sign up on [the NETHINKS site](https://www.nethinks.com/blog/it-ueberwachung/jetzt-anmelden-opennms-webinar-zu-asset-topology-provider/).

* **[OpenNMS Training - December 10th through 14th, 2018](https://www.opennms.com/training/)**

  The OpenNMS Group will be [offering hands-on OpenNMS training](https://www.opennms.com/training/) in our Apex, NC office.


## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HZN-1397](https://issues.opennms.org/browse/HZN-1397): The alarm_situations table should contain a timestamp
* [HZN-1398](https://issues.opennms.org/browse/HZN-1398): Situation model - prevent cyclic graphs
* [HZN-1429](https://issues.opennms.org/browse/HZN-1429): Refactor alarmd scenario & test driver so that it can be used by other modules
* [NMS-10348](https://issues.opennms.org/browse/NMS-10348): Harmonizing the reload Events for the Daemons
* [NMS-10400](https://issues.opennms.org/browse/NMS-10400): Discovery UI should not allow selection of Minions as Foreign Source
* [NMS-10403](https://issues.opennms.org/browse/NMS-10403): Reloading of Script in telemetry collection is broken
* [NMS-10423](https://issues.opennms.org/browse/NMS-10423): Kafka Producer:  Sync pushes all alarms when suppressIncrementalAlarms=false
* [NMS-10428](https://issues.opennms.org/browse/NMS-10428): Typo in BSFMonitor Documentation
* [OCE-1](https://issues.opennms.org/browse/OCE-1): Switch simulator for e2e testing
* [OCE-20](https://issues.opennms.org/browse/OCE-20): Gargabe collect situations
