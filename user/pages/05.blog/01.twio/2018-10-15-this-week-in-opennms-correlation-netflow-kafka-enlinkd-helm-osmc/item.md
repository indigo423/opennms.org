---
title: This Week in OpenNMS - October 15th, 2018 - Horizon 23 prep, Kafka Alarm Queueing, Enlinkd Refactoring, Integration API, Helm Alarm Table Improvements
date: 11:26 10/15/2018
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [correlation, netflow, kafka, enlinkd, helm, osmc, hackathon]
---

It's time for This Week in OpenNMS!

Last week worked on wrapping up various things targeted to Horizon 23, plus we continued work on new features relating to integration, refactoring of Enlinkd, the Helm UI, and more.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --color=always --since='2018-10-08 00:00:00' --until='2018-10-15 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->


## Github Project Updates

* __Internals, APIs, and Documentation__

  * Chandra added the `managed-object` field (used by the correlation engine) to the event API and eventconf XML.
  * Chandra did more improvements to the health check API.
  * Markus worked on removing the NCS integration code.
  * Chandra wrapped up some work on adding support for off-heap storage of sink API messages.
  * Patrick did more work on adding HTTP proxy support to all parts of the codebase that use HttpClient.
  * Markus worked with Dustin on adding support for multiple Netflow protocols on a single UDP port.
  * Jesse made some small enhancements to OCE startup.
  * David worked on wrapping up documentation for the new correlation feature(s).
  * Chandra worked on adding thresholds to the set of supported correlation alarms.
  * Matthew added queueing to the Kafka producer so it would not block alarm processing.
  * Jesse worked on the OpenNMS integration API layer.

* __Web & UI__

  * Antonio continued his work on refactoring Enlinkd and the topology code.
  * Christian did some work to add Situation support to the alarm browser web UI.
  * Sebastian continued his work on unifying the daemon reload API and giving it a web interface.
  * I made columns reorderable in the Helm alarm table configuration.


## Upcoming Events and Appearances

* **[OSMC 2018 Talk and Hackathon - November 5th through 8th, 2018](https://osmc.de/)**

  Tarus will be [speaking on Tuesday, November 6th](https://osmc.de/schedule/) about the latest features in OpenNMS including Minions, Telemetryd (flow support), Sextant (alarm correlation), and more.

  Also, some OpenNMS folks will be participating in the [OSMC hackathon](https://osmc.de/hackathon/).
  The hackathon will be on Thursday, November 8th and includes dinner Wednesday night and Thursday access.
  More details can be found at the [OpenNMS OSMC Hackathon meetup page](https://wiki.opennms.org/wiki/Meetups/OSMC2018-Hackathon).


## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HELM-62](https://issues.opennms.org/browse/HELM-62): Improved severity icon column
* [HELM-63](https://issues.opennms.org/browse/HELM-63): Allow the order of the columns to be changed
* [HELM-99](https://issues.opennms.org/browse/HELM-99): Add option to colorize only the 'Severity Icons' according to alarm severity
* [HZN-1374](https://issues.opennms.org/browse/HZN-1374): Sink API: Queue messages outside of the heap
* [HZN-1377](https://issues.opennms.org/browse/HZN-1377):  CDP topology REST Service
* [HZN-1406](https://issues.opennms.org/browse/HZN-1406): Support for the "managed object type" field in the alarm data of an event
* [NMS-10312](https://issues.opennms.org/browse/NMS-10312): Be able to use Proxy for any Monitor or Collector that uses HttpClientWrapper directly
* [NMS-10313](https://issues.opennms.org/browse/NMS-10313): Be able to use Proxy for any Monitor or Collector that uses HttpClient via UrlFactory
* [NMS-10401](https://issues.opennms.org/browse/NMS-10401): `find-java.sh` doesn't understand newer JDK output
* [NMS-10402](https://issues.opennms.org/browse/NMS-10402): int overflow in InstallerDb causes bamboo failures
* [OCE-3](https://issues.opennms.org/browse/OCE-3): Visualize the knowledge graph