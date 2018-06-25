---
title: This Week in OpenNMS: June 25th, 2018
date: 13:42 06/25/2018
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [alarmd, enlinkd, kafka, collect, pollerd, jmx, sentinel, ksc, ouce]
---

It's time for This Week in OpenNMS!

In the last week we got back to continuing the various projects we've been working on.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2018-06-18 00:00:00' --until='2018-06-25 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->


## Github Project Updates

* __Internals, APIs, and Documentation__

  * Jesse and David continued their work on a next-generation Alarmd with full rules-based workflow management.
  * Antonio did more work on Enlinkd bug fixes and performance improvements.
  * Chandra added tests and documentation to his Kafka persistence work.
  * I fixed a small bug in the Collectd and Pollerd JMX MBeans that would cause task counts to be wrong.
  * Markus has been working on filling out system tests for the new Sentinel container.
  * Patrick worked on validating varbind matching in event config files.

* __Web & UI__

  * Patrick fixed the KSC dashlet when run in the ops board.
  * I worked (more) on fixing the heatmap when loaded in the front page.
  * Patrick worked on making dates more consistent in various parts of the UI.
  * David added correlated alarm support to the OpenNMS.js alarm DAO.

## Upcoming Events and Appearances

* **[OpenNMS User Conference Europe 2018 - September 20th through 21st, 2018](https://ouce.opennms.eu/)**

  [OUCE 2018](https://ouce.opennms.eu/) will be held at the [Rilano Hotel in Munich, Germany](https://www.rilano-hotel-muenchen.de/).
  A reception will be held on Wednesday the 19th, with talks and workshops the following Thursday and Friday.
  The [call for papers](https://ouce.opennms.eu/cfp/2018/) is now open for submissions.


## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HZN-477](https://issues.opennms.org/browse/HZN-477): Identify mandatory OIDs for Enhanced Linkd
* [HZN-1326](https://issues.opennms.org/browse/HZN-1326): Persist Situations in alarmd
* [HZN-1327](https://issues.opennms.org/browse/HZN-1327): Expose Situations via REST api
* [NMS-9202](https://issues.opennms.org/browse/NMS-9202): Event-Analysis Report shows incorrect numbers for big values in Top25 Events
* [NMS-9557](https://issues.opennms.org/browse/NMS-9557): Exceptions in Bridge Discovery
* [NMS-9741](https://issues.opennms.org/browse/NMS-9741): MBean "TasksCompleted" for Collectd and Pollerd returns wrong counters
* [NMS-9965](https://issues.opennms.org/browse/NMS-9965): Update Notification documentation with links to OpenNMS 101 videos
* [NMS-10172](https://issues.opennms.org/browse/NMS-10172): Karaf shell command to enumerate nodes that match a given filter
* [NMS-10191](https://issues.opennms.org/browse/NMS-10191): The KSC Dashlet for the Ops-Board is not working