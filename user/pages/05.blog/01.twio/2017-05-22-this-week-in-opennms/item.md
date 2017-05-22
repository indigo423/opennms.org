---
title: This Week in OpenNMS: May 22nd, 2017
date: 10:36 05/22/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, activemq, camel, karaf, requisitions, jdk, upgrades, icmp, ping, ipv4, rest, topology, telemanagement forum, tmforum, openhack, dev-jam]
---

It's time for This Week in OpenNMS!  In the last week we worked on various internal changes, documentation, and web code.

<!-- git log --all --no-merges --since='2017-05-15 00:00:00' --until='2017-05-22 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)' | sort | less -R -->

## Github Project Updates

* __Internals and Documentation__

  * Seth continued working on modernizing our bundled ActiveMQ, Camel, and Karaf versions.
  * Markus continued working on moving requisitions to the database.
  * Ronny updated the documentation for JDK installation, and I added installation documentation for safely dealing with OpenNMS upgrades while OpenNMS is running.
  * I fixed the new "best match" ping implementation code on systems that only support IPv4.
  * Christian worked on a tool for being able to manipulate credentials without starting Karaf.
  * Seth fixed an issue in the default ActiveMQ configuration that could cause disk usage to expand when connection is down.

* __Web__

  * Markus continued his work on improving the various status information provided on the front page.
  * Alejandro did more work on the v2 ReST API.
  * The asset to topology mapper has now been merged into mainline OpenNMS.


## OpenNMS Team Wins TeleManagement Forum's {open}:hack

  Craig Gallen and a team of students from Southampton Solent University won a contest to create a project collecting and aggregating smoke emissions data from ships collected by drones.  You can [url=https://www.opennms.org/en/blog/2017-05-22-tmforum-winner]read the full writup here[/url], it looks like it was a pretty cool challenge.


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

* [HZN-705](https://issues.opennms.org/browse/HZN-705): Upgrade Camel to version 2.16
* [HZN-1052](https://issues.opennms.org/browse/HZN-1052): Minion tarball distribution
* [HZN-1055](https://issues.opennms.org/browse/HZN-1055): Allow the credentials stored in scv to be configured without starting the Karaf container
* [HZN-1057](https://issues.opennms.org/browse/HZN-1057): Improve RPC performance by using async sends
* [HZN-1058](https://issues.opennms.org/browse/HZN-1058): Upgrade ActiveMQ to 5.13
* [NMS-6118](https://issues.opennms.org/browse/NMS-6118): Add additional relative time periods for resource graphs
* [NMS-7904](https://issues.opennms.org/browse/NMS-7904): JsonCollectionHandler does not handle list responses
* [NMS-9089](https://issues.opennms.org/browse/NMS-9089): grafanaBox needs a count limiter/pager
* [NMS-9128](https://issues.opennms.org/browse/NMS-9128): Asset to topology mapper
* [NMS-9316](https://issues.opennms.org/browse/NMS-9316): The geolocation provisioning adapter is not updating coordinates correctly
* [NMS-9325](https://issues.opennms.org/browse/NMS-9325): Calculation of KSC reports timespans "Last Week" and "This Week" broken
* [NMS-9331](https://issues.opennms.org/browse/NMS-9331): BestMatchPinger fails to initialize when IPv6 is not available
* [NMS-9332](https://issues.opennms.org/browse/NMS-9332): Add post-integration-test cleanup to container/standalone
* [NMS-9338](https://issues.opennms.org/browse/NMS-9338): geo-coder creates invalid latitude/longitude in assets table
* [NMS-9343](https://issues.opennms.org/browse/NMS-9343): osgi-pluginmanager: Jersey REST services not loading reliably in Karaf 4
* [NMS-9347](https://issues.opennms.org/browse/NMS-9347): Replace Poller lock with ReentrantLock
* [PRIS-133](https://issues.opennms.org/browse/PRIS-133): Initscript does not work with systemd
* [PRIS-138](https://issues.opennms.org/browse/PRIS-138): Fault in windows opennms-pris.bat script
