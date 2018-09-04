---
title: This Week in OpenNMS: September 4th, 2018
date: 11:08 09/04/2018
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [sentinel, sextant, cdp, json, minion, kafka, helm, uknof, ouce, osmc]
---

It's time for This Week in OpenNMS!

Last week we made improvements to Sentinel, CDP support, correlation feedback, and more.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2018-08-27 00:00:00' --until='2018-09-04 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->


## Github Project Updates

* __Internals, APIs, and Documentation__

  * Markus worked on some improvements to the Sentinel container code.
  * David worked on adding additional filtering support to Sextant.
  * Patrick did some performance improvements to CDP topology calculation.
  * Jesse fixed JSON collection on the minion.
  * Dustin continued his work to support multiple flow protocols on a single UDP port.
  * Matthew worked on high availability and leader election for Sentinel containers.
  * Matthew added support for skipping publishing alarm updates to Kafka if the change only affects event count or last time.
  * Chandra worked on queueing sink messages to disk until communication comes back online.

* __Web & UI__

  * Antonio worked on a ReST service to expose CDP topology.
  * Christian added a button to delete a minion in the minion status UI.
  * I fixed an old regression in the web UI to make "1 day" the default graph period again (and made it configurable).
  * David worked on improving alarm and summary data in OpenNMS.js and Helm.
  * David also worked on cleaning up and finalizing the alarm correlation feedback UI in Helm.


## Upcoming Events and Appearances

* **[UK Network Operators' Forum - September 11th, 2018](https://indico.uknof.org.uk/event/43)**

  Tarus will be [speaking at the UK Network Operators Forum](https://indico.uknof.org.uk/event/43/contributions) on September 11th, 2018.
  He'll be giving a talk called "What's Happening with OpenNMS" going over some of the recent enhancements to OpenNMS to extend scalability.


* **[OpenNMS User Conference Europe 2018 - September 20th through 21st, 2018](https://ouce.opennms.eu/)**

  [OUCE 2018](https://ouce.opennms.eu/) will be held at the [Rilano Hotel in Munich, Germany](https://www.rilano-hotel-muenchen.de/).
  A reception will be held on Wednesday the 19th, with talks and workshops the following Thursday and Friday.


* **[OSMC 2018 - November 5th through 8th, 2018](https://osmc.de/)**

  Tarus will be [speaking on Tuesday, November 6th](https://osmc.de/schedule/) about the latest features in OpenNMS including Minions, Telemetryd (flow support), Sextant (alarm correlation), and more.

## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HZN-1373](https://issues.opennms.org/browse/HZN-1373): Revisit the sentinel branch and remove all introduced TODOs
* [HZN-1381](https://issues.opennms.org/browse/HZN-1381): Situation severity should be set to max related alarm severity
* [NMS-7555](https://issues.opennms.org/browse/NMS-7555): UI stack trace is truncated
* [NMS-10286](https://issues.opennms.org/browse/NMS-10286): NoClassDefFoundError for net/sf/json/JSONSerialize with the JSON collector on Minion
* [NMS-10306](https://issues.opennms.org/browse/NMS-10306): Create karaf shell commands for reload daemon
* [NMS-10317](https://issues.opennms.org/browse/NMS-10317): Improve CDP topology calculation performance
* [NMS-10321](https://issues.opennms.org/browse/NMS-10321): Minions can't be deleted from minion menu
* [NMS-10324](https://issues.opennms.org/browse/NMS-10324): Set the default resource graph time range to "Last Day"
* [NMS-10329](https://issues.opennms.org/browse/NMS-10329): Flow: Classification should not depend on direction