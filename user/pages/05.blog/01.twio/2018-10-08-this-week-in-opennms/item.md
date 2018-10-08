---
title: This Week in OpenNMS - October 8th, 2018 - Integration API, Kafka and Karaf updates, Enlinkd, Helm, and more!
date: 10:57 10/08/2018
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [api, netflow, sentinel, kafka, vmware, enlinkd, helm, osmc, hackathon]
---

It's time for This Week in OpenNMS!

Last week we started work on a generic OpenNMS integration API, Kafka and Karaf feature updates, Enlinkd, Helm, and more.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --color=always --since='2018-10-01 00:00:00' --until='2018-10-08 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->


## Github Project Updates

* __Internals, APIs, and Documentation__

  * Chandra worked on reloadable daemons some more.
  * Ronny continued his earlier work on cleaning up and refactoring the documentation.
  * Jeff changed JVM startup to enable the attach listener by default.
  * Jesse worked on creating a non-version-specific API for external tools to integrate with OpenNMS.
  * Marcel added new datacollection config and graphs for new APC devices.
  * Dustin continued to work on his branch to support multiple Netflow protocols on a single UDP port.
  * Ron fixed some errors in the documentation.
  * Matthew worked on improving Sentinel feature startup support.
  * Chandra added health check support for Kafka Sink & RPC.
  * Christian added timeouts to the VMware provisioner.

* __Web & UI__

  * Antonio continued to work on refactoring Enlinkd and topology code.
  * I worked on improving the "Severity" column in Helm.


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

* [NMS-10294](https://issues.opennms.org/browse/NMS-10294): LSB init script does not start Minion on Ubuntu/Debian
* [NMS-10330](https://issues.opennms.org/browse/NMS-10330): Sentinel init scripts fail to start the Karaf instance
* [NMS-10371](https://issues.opennms.org/browse/NMS-10371): Build tool to create a large tolology
* [NMS-10381](https://issues.opennms.org/browse/NMS-10381): webpack build runs even if source files are unchanged
* [NMS-10384](https://issues.opennms.org/browse/NMS-10384): Set JVM flag to start Attach listener by default
* [NMS-10387](https://issues.opennms.org/browse/NMS-10387): Class paths for collectd selector strategy in documentation is not correct
* [NMS-10392](https://issues.opennms.org/browse/NMS-10392): DNS Monitor doesn't allow for generally assumed parameters