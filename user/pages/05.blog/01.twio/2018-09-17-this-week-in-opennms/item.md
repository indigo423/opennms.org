---
title: This Week in OpenNMS: September 17th, 2018
date: 12:55 09/17/2018
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [sentinel, alarmd, netflow, vsphere, vmware, kafka, minion, newts, cdp, ouce, osmc]
---

It's time for This Week in OpenNMS!

Last week we continued to wrap up projects in anticipation of Horizon 23.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --color=always --since='2018-09-10 00:00:00' --until='2018-09-17 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->


## Github Project Updates

* __Internals, APIs, and Documentation__

  * Matthew did more work on leader election in Sentinel containers.
  * David Hustace did a few more changes to the single-alarm feature.
  * Dustin continued his work on supporting multiple flow protocols on a single port.
  * Christian added support for VSphere alarms in the VmwareMonitor.
  * Chandra worked on using H2 as a data store for storing sync queue messages.
  * Alejandro worked on a Kafka auth issue on Minion.
  * Markus worked on making Newts persistence work in Sentinel.

* __Web & UI__

  * I wrapped up my fixes to the navbar in the node maps.
  * Sebastian did more work on creating a web UI for reloading daemons.
  * Patrick worked on fixing an issue with the change icon feature in topology maps.
  * Antonio did more work on the CDP topology ReST service.


## Upcoming Events and Appearances

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

* [HZN-1384](https://issues.opennms.org/browse/HZN-1384): Extend /api/v2/alarms to provide better support for situations
* [NMS-5223](https://issues.opennms.org/browse/NMS-5223): Expose list of nodes under outage
* [NMS-9747](https://issues.opennms.org/browse/NMS-9747): add polling interval definition on service UI
* [NMS-10332](https://issues.opennms.org/browse/NMS-10332): Memory related env-variables from /etc/sysconfig/minion are not honored
* [NMS-10340](https://issues.opennms.org/browse/NMS-10340): Implement a OSGi-aware CollectionAgentFactory
* [NMS-10342](https://issues.opennms.org/browse/NMS-10342): navbar.ftl not rendering
* [NMS-10356](https://issues.opennms.org/browse/NMS-10356): Jdbc Query Monitor fails with nullPointerExecption