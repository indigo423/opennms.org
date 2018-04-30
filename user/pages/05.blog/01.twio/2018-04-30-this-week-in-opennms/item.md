---
title: This Week in OpenNMS: April 30th, 2018
date: 11:07 04/30/2018
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [minion, drift, karaf, sentinel, enlinkd, correlation, kafka, groovy, elasticsearch, flow, snmp, newts, afnog, ais, dev-jam, ouce]
---

It's time for This Week in OpenNMS!

In the last week we worked on Drift flow support and optimization, Sentinel, and other bug fixes.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2018-04-23 00:00:00' --until='2018-04-30 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * I fixed a bunch of Minion-related tests to run properly in the Meridian branch.
  * Markus made some updates to the Drift classification rules and UI, as well as improving cache handling.
  * I worked on creating a common Karaf container to use for both the Minion and Sentinel.
  * Antonio did more work fixing bugs and improving performance in Enlinkd.
  * Graeme Fowler fixed the warning for certificate expiry in the SSL certificate monitor.
  * David did more work on a correlation proof-of-concept using the entity alias table to correlate inventory.
  * Jesse fixed the Kafka producer alarm sync to handle alarm filters.
  * Chandra did more work on the groovy script reload watcher.
  * Dustin made some performance improvements to the Elasticsearch flow query engine.
  * Christian worked on adding support for flow algorithms that use sampling to estimate packet statistics.
  * Markus worked on fixing DAO loading for Sentinel.

* __Web & UI__

  * Chandra worked on improving the UI for showing SNMP interfaces when data is still being loaded.
  * Jesse worked on fixing strafeping graphing in Backshift with Newts.


## Upcoming Events and Appearances

* **[Africa Internet Summit - April 29th through May 11th, 2018](http://internetsummitafrica.org/)**

  Tarus Balog will be [conducting a one day workshop on OpenNMS](https://www.internetsummit.africa/agenda/programme) at the [Africa Network Operators group](https://afnog.org/)'s annual [Africa Internet Summit (AIS)](http://internetsummitafrica.org/) to be held in Dakar, Senegal.
  The training is currently scheduled for Sunday, May 6th.

* **[Dev-Jam 2018 - June 10th through 16th, 2018](https://wiki.opennms.org/wiki/Dev-Jam_2018)**

  The OpenNMS developers conference, Dev-Jam, will return again this year to the University of Minnesota in Minneapolis.
  Dev-Jam is a week of fun -- half hackathon, half social get-together.  More information is available on [the OpenNMS wiki](https://wiki.opennms.org/wiki/Dev-Jam_2018) and [registration is now open](http://www.opennms.com/opennms-dev-jam-registration) -- please join us!  All are welcome.

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

* [HZN-1266](https://issues.opennms.org/browse/HZN-1266): Review the definition of classification rules
* [HZN-1279](https://issues.opennms.org/browse/HZN-1279): Make the telemetry groovy scripts reloadable
* [NMS-9964](https://issues.opennms.org/browse/NMS-9964): Kafka Producer: Alarm datasync does not respect alarm filter