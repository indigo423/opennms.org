---
title: This Week in OpenNMS: May 30th, 2017
date: 12:22 05/30/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, activemq, camel, karaf, bsm, alarms, dns, icmp, minion, heartbeat, rest, topology, dev-jam]
---

It's time for This Week in OpenNMS!  In the last week we worked on various internal changes, the Minion, and web code.

<!-- git log --all --no-merges --since='2017-05-22 00:00:00' --until='2017-05-30 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)' | sort | less -R -->

## Github Project Updates

* __Internals__

  * Seth continued working on modernizing our bundled ActiveMQ, Camel, and Karaf versions.
  * Jesse added an event for knowing when alarms are deleted (and fixed BSM to track them).
  * Antonio worked on more bug fixes to Enlinkd.
  * Jesse added support for doing reverse DNS lookups even when a A record does not exist.

* __Minion__

  * I added support for using native JICMP/JICMP6 ping APIs to the Minion.
  * Seth fixed an issue with spamming messages when the ActiveMQ connection is lost.
  * Jesse fixed the heartbeat to update the "last updated" field more accurately.

* __Web__

  * Antonio worked on improving BSM performance.
  * Dustin worked on making sure the ReST APIs do not create sessions. (This will not affect using ReST APIs if you already have a session.)
  * Markus did more work on his new front-page summary updates.
  * Jesse worked on improving large tree visualization in the hierarchy topology layout.

## Upcoming Events and Appearances

* __[Dev-Jam 2017 - Concordia University - July 16th through 21st](http://www.opennms.com/opennms-dev-jam-registration)__

  Our annual developers' conference, Dev-Jam, will be held in Montreal, Canada this year.  For details, please see Tarus's [announcement on the OpenNMS blog](https://opennms.org/en/blog/2017-03-07-devjam-2017).  When you're ready to register, go to [the registration page](http://www.opennms.com/opennms-dev-jam-registration).  See you there!


## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [BSHIFT-165](https://issues.opennms.org/browse/BSHIFT-165): Consolidated values are not updated in streaming mode 
* [HZN-492](https://issues.opennms.org/browse/HZN-492): Investigate adding jicmp6 support to Minion JVM
* [NMS-9127](https://issues.opennms.org/browse/NMS-9127): opennms stays running when during a rpm/yum/dnf update
* [NMS-9203](https://issues.opennms.org/browse/NMS-9203): ActiveMQ dead letter queue fills up all the available storage
* [NMS-9261](https://issues.opennms.org/browse/NMS-9261): Make org.opennms.newts.nan_on_counter_wrap=true by default
* [NMS-9319](https://issues.opennms.org/browse/NMS-9319): Update Camel code to use Netty 4
* [NMS-9345](https://issues.opennms.org/browse/NMS-9345): provision.pl does not create interfaces
* [NMS-9361](https://issues.opennms.org/browse/NMS-9361): Thresholding on WSMan datasources appears broken
* [NMS-9364](https://issues.opennms.org/browse/NMS-9364): BSM Admin add Edge BSM service is slow
* [NMS-9368](https://issues.opennms.org/browse/NMS-9368): OpenNMS Won't Start on Windows
* [NMS-9369](https://issues.opennms.org/browse/NMS-9369): Business service states are not properly updated when alarms are deleted
* [NMS-9370](https://issues.opennms.org/browse/NMS-9370): Colors on trend graph differ from OpenNMS styling
* [NMS-9371](https://issues.opennms.org/browse/NMS-9371): Minions generate storm of heartbeats after being disconnected from ActiveMQ for a long period of time
* [NMS-9374](https://issues.opennms.org/browse/NMS-9374): Insert/Update OspfElement: null value in column "ospfrouteridifindex" violates not-null constrain
* [NMS-9382](https://issues.opennms.org/browse/NMS-9382): Recommend using the failover: protocol when configuring Minion
