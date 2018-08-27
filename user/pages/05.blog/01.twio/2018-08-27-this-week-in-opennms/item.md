---
title: This Week in OpenNMS: August 27th, 2018
date: 13:40 08/27/2018
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [sextant, topology, linkd, kafka, activemq, alarmd, uknof, ouce]
---

It's time for This Week in OpenNMS!

Last week we did a lot of finishing work on in-progress projects and fixed a bunch of bugs.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2018-08-20 00:00:00' --until='2018-08-27 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->


## Github Project Updates

* __Internals, APIs, and Documentation__

  * David did more work on the correlation feedback support in Sextant.
  * Patrick did a few more updates to Linkd calculation performance in Topology.
  * Chandra merged Malatesh's work to provide a Kafka/ActiveMQ event sink.
  * Christian fixed the properties cache to use a time-based cache to save memory.
  * David Hustace wrapped up his single-alarm tracking changes, including documenting Alarmd.
  * I finished up my minion status tracker branch.
  * Christian fixed the JavaMailer to properly set `Content-Type`.
  * Jesse did some fixes to the way alarm statuses propagate to Situations.

* __Web & UI__

  * I wrapped up the JS custom date format enhancements.
  * Patrick did more changes to the way exceptions are shown in the web UI.
  * David and Jesse worked on Sextant feedback support in OpenNMS.js and Helm.


## Upcoming Events and Appearances

* **[UK Network Operators' Forum - September 11th, 2018](https://indico.uknof.org.uk/event/43)**

  Tarus will be [speaking at the UK Network Operators Forum](https://indico.uknof.org.uk/event/43/contributions) on September 11th, 2018.
  He'll be giving a talk called "What's Happening with OpenNMS" going over some of the recent enhancements to OpenNMS to extend scalability.


* **[OpenNMS User Conference Europe 2018 - September 20th through 21st, 2018](https://ouce.opennms.eu/)**

  [OUCE 2018](https://ouce.opennms.eu/) will be held at the [Rilano Hotel in Munich, Germany](https://www.rilano-hotel-muenchen.de/).
  A reception will be held on Wednesday the 19th, with talks and workshops the following Thursday and Friday.


## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HELM-71](https://issues.opennms.org/browse/HELM-71): Error messages from validateTarget() are never shown to the user
* [HELM-102](https://issues.opennms.org/browse/HELM-102): Display and Accept Alarm Correlation Feedback in HELM
* [HZN-1331](https://issues.opennms.org/browse/HZN-1331): Consume events from Kafka
* [HZN-1378](https://issues.opennms.org/browse/HZN-1378): Evaluate leader election strategies for Sentinel
* [NMS-3974](https://issues.opennms.org/browse/NMS-3974): maxRetCode in HttpDetector does not work
* [NMS-9027](https://issues.opennms.org/browse/NMS-9027): Content-Type tag wrong in emailed reports
* [NMS-9267](https://issues.opennms.org/browse/NMS-9267): The upgrade task for magic-users.properties fails because of the read-only attribute
* [NMS-9921](https://issues.opennms.org/browse/NMS-9921): Investigate OutOfMemoryException on demo.opennms.org
* [NMS-10072](https://issues.opennms.org/browse/NMS-10072): Normalize date formats across the WebUI
* [NMS-10232](https://issues.opennms.org/browse/NMS-10232): render dateformat for AngularJS
* [NMS-10233](https://issues.opennms.org/browse/NMS-10233): render date for Javascript with moment.js
* [NMS-10295](https://issues.opennms.org/browse/NMS-10295): implement minion "status" field
* [NMS-10319](https://issues.opennms.org/browse/NMS-10319): Flow: Ingress/egress traffic is improperly reported when filtering by ifIndex
* [NMS-10325](https://issues.opennms.org/browse/NMS-10325): Getting Java.Null exception error message when trying to delete notification path.