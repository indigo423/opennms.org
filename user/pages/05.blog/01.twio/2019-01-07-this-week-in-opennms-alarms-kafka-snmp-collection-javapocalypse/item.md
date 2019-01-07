---
title: This Week in OpenNMS - January 7th, 2019 - Alarms, Kafka, SNMP Collection, and the Javapocalypse
date: 11:56 01/07/2019
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [alarmd, kafka, correlation, elasticsearch, snmp, javapocalypse]
---

It's time for This Week in OpenNMS!

Last week was a little light, with some folks still out and lots of post-holiday catching up to do. We worked on alarm handling and export, and the SNMP collector.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --color=always --since='2019-01-02 00:00:00' --until='2019-01-07 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->


## Github Project Updates

* __Internals, APIs, and Documentation__

  * Matt worked on improving the efficiency of incremental alarm handling in the Kafka producer.
  * David fixed some issues in alarm de-escalation.
  * Jesse updated some correlation engine documentation.
  * Jesse did more work on indexing alarms in Elasticsearch.
  * Patrick continued to work on modernizing the SNMP collector.

<!--
* __Web & UI__

  * Dustin refactored his work on browser notifications a bit.


## Upcoming Events and Appearances

* **[OpenNMS Training - December 10th through 14th, 2018](https://www.opennms.com/training/)**

  The OpenNMS Group will be [offering hands-on OpenNMS training](https://www.opennms.com/training/) in our Apex, NC office.
-->

## Dealing With the Javapocalypse

### The Current State of Java

As you may or may not have heard, [Oracle will be discontinuing public Java 8 support starting this year](https://www.oracle.com/technetwork/java/java-se-support-roadmap.html).
While there is obviously still time to transition, it is time to start talking about our plans going forward.

First of all, Oracle will still be providing public updates for end users, but officially you will need to get commercial support to be supported as a commercial user starting now.
Additionally, [RedHat has committed to continue to support OpenJDK 8 until 2023](https://developers.redhat.com/blog/2018/09/24/the-future-of-java-and-openjdk-updates-without-oracle-support/).
While we prefer Oracle JDK for a number of performance and scalability reasons, OpenJDK 8 has been improving steadily and should be fine for many workloads.
If you will be sticking with existing Meridian releases for a while, it is a good idea to try out OpenJDK in your test environment and see if it performs well with your workload.

### Next Steps

We are currently working on support for JDK 9 and up, and hope to have it ready as part of Horizon 24.

OpenNMS is running in JDK 9 in a development branch, with only a few more things that need fixing.
Supporting JDK 10 and up will require some additional changes as APIs that used to be bundled with the JDK must now be provided separately.
Work on that will commence as soon as JDK 9 is working smoothly.

After that, we will work on making the codebase *build* with JDK 9 and up, which is a separate, more complicated task as our build system has a lot of moving parts (and maven plugins `<grin>`).
Eventually, this will turn to *requiring* JDK 9 and up, but for now we're hoping to continue to support running OpenNMS on JDK 8 and higher.

Stay tuned for more details.


## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [NMS-10522](https://issues.opennms.org/browse/NMS-10522): Situation Severity is not adjusted downward as related alarms clear
* [NMS-10523](https://issues.opennms.org/browse/NMS-10523): Syslog test failures due to year offset in eventConverter