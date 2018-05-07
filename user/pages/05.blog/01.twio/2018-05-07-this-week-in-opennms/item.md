---
title: This Week in OpenNMS: May 7th, 2018
date: 09:04 05/07/2018
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [snmp, minion, sentinel, karaf, enlinkd, kafka, angularjs, ais, dev-jam, ouce]
---

It's time for This Week in OpenNMS!

In the last week we worked on Sentinel and a bunch of Minion and other fixes.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2018-04-30 00:00:00' --until='2018-05-07 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * Chandra worked on making the SNMP interface monitor location-aware (and, by extension, Minion-compatible).
  * I did more work on the Sentinel standalone Karaf assemblies.
  * Jesse made the internal service registry lookup timeouts more robust.
  * Antonio did more work on squashing bugs and improving the performance of Enlinkd bridge discovery.
  * I worked on handling thresholding configuration errors better.
  * Chandra fixed the Kafka provider to automatically attempt to connect to alternate brokers.
  * Markus worked on making it possible to proxy configuration DAO access over ReST.
  * Chandra fixed the bug that keeps you from deleting interfaces from a node that still have services.
  * Patrick fixed the page sequence monitor on Minion.

* __Web & UI__

  * Chandra finished improving our AngularJS table load behavior.


## Upcoming Events and Appearances

* **[Dev-Jam 2018 - June 10th through 16th, 2018](https://wiki.opennms.org/wiki/Dev-Jam_2018)**

  The OpenNMS developers conference, Dev-Jam, will return again this year to the University of Minnesota in Minneapolis.
  Dev-Jam is a week of fun -- half hackathon, half social get-together.  More information is available on [the OpenNMS wiki](https://wiki.opennms.org/wiki/Dev-Jam_2018) and [registration is now open](http://www.opennms.com/opennms-dev-jam-registration) -- please join us!  All are welcome.

* **[iNOG 10 + RIPE Hackathon - June 21st through 24th, 2018](https://inog.net/)**

  Craig Gallen and Ronny Trommer will be attending [iNOG](https://ti.to/inog/10) and the [RIPE Hackathon](https://labs.ripe.net/Members/becha/join-network-operators-tools-hackathon) starting Thursday, June 21st in Dublin.  Join them for a fun weekend of socializing, hacking, and networking (of all kinds).

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

* [HZN-1285](https://issues.opennms.org/browse/HZN-1285): Initial Karaf assembly for Sentinel
* [HZN-1301](https://issues.opennms.org/browse/HZN-1301): Intermittent failures in loading telemetryd adapters on startup
* [NMS-9759](https://issues.opennms.org/browse/NMS-9759): Threshold expression can't handle metric names with leading zero
* [NMS-9932](https://issues.opennms.org/browse/NMS-9932): Wrong initial message displayed on AngularJS based tables.