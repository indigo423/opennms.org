---
title: This Week in OpenNMS - January 14th, 2019 - Correlation, Kafka, Syslog, Docker, and more!
date: 11:44 01/14/2019
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [alarmd, kafka, oia, minion, hikaricp, syslogd, docker, helm]
---

It's time for This Week in OpenNMS!

Last week we did more alarm correlation updates, lots of Kafka fixes and enhancements, worked on a new SNMP collector, and did a lot of other smaller changes.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --color=always --since='2019-01-07 00:00:00' --until='2019-01-14 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->


## Github Project Updates

* __Internals, APIs, and Documentation__

  * Jesse worked on handling clock skew when triggering alarms in Alarmd.
  * Matt worked on making it possible for the integration API to handle situation feedback without Kafka.
  * Antonio continued his work to publish topology data to Kafka.
  * Patrick started work on a new SnmpCollector that works with Minions.
  * Chandra did more work on handling caching/large buffer sizes in Kafka RPC.
  * I did some more fixes to my `opennms` shell refactor.
  * I worked on attempting to update to a newer version of HikariCP.
  * Matt added support for optionally attaching the raw syslog message to Syslogd-generated events.
  * Ronny worked on refactoring/replacing our Docker test images.

* __Web & UI__

  * I fixed some issues in the group-by-node portion of Helm's alarm details tab.


<!--
## Upcoming Events and Appearances

* **[OpenNMS Training - December 10th through 14th, 2018](https://www.opennms.com/training/)**

  The OpenNMS Group will be [offering hands-on OpenNMS training](https://www.opennms.com/training/) in our Apex, NC office.
-->

## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HELM-121](https://issues.opennms.org/browse/HELM-121): Related alarm view should show the node label
* [HZN-1433](https://issues.opennms.org/browse/HZN-1433): Update integration api to handle alarm feedback without Kafka
* [HZN-1441](https://issues.opennms.org/browse/HZN-1441): Send inventory to OCE without Kafka using integration API
* [HZN-1452](https://issues.opennms.org/browse/HZN-1452): POC of a Graph Service which tackles all existing issues with the current Topology appraoch + allows exposing graphs via Rest
* [NMS-9273](https://issues.opennms.org/browse/NMS-9273): Create Topology Service Updates in enlinkd
* [NMS-9659](https://issues.opennms.org/browse/NMS-9659): BestMatchPingerFactory returns NullPinger when better options are available
* [NMS-10454](https://issues.opennms.org/browse/NMS-10454): Support Additional EIF Protocol Version
* [OCE-33](https://issues.opennms.org/browse/OCE-33): Flag devices and ignore comparison when clock skew is detected
* [OCE-34](https://issues.opennms.org/browse/OCE-34): Match and classify CPN Tickets and OpenNMS Situations
* [OCE-35](https://issues.opennms.org/browse/OCE-35): Match CPN Events and OpenNMS Events