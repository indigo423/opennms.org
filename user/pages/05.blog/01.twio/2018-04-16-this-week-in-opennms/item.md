---
title: This Week in OpenNMS: April 16th, 2018
date: 11:27 04/16/2018
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [jasper, plugin manager, kafka, drift, ldap, spring security, elasticsearch, karaf, helm, afnog, ais, dev-jam, ouce]
---

It's time for This Week in OpenNMS!

In the last week we did a bunch of work on Drift and the Kafka producer, as well as a number of other bug fixes in anticipation of the Horizon and Meridian releases this week.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2018-04-09 00:00:00' --until='2018-04-16 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * Markus did more work on a Jasper Studios fix.
  * Craig worked on some plugin manager updates.
  * Chandra worked on periodic sync support for the Kafka producer.
  * Patrick did some query index optimization in the Drift flow API.
  * Dustin made a change to the LDAP authorities Spring Security support to allow for configuring default roles.
  * Markus worked on fixing some smoke test timing issues.
  * Jesse wrapped up his support for multiple Elasticsearch versions in our index code.
  * David started work on some Alarm correlation PoC code.
  * Jesse made a number of performance improvements to the Kafka producer.
  * Christian finished the Karaf 4.1.5 update.

* __Web & UI__

  * I did additional work on cleaning up timeout support in OpenNMS.js and Helm.


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

* [COMPASS-77](https://issues.opennms.org/browse/COMPASS-77): The SLM/RTC table summary is not being rendered correctly
* [HELM-86](https://issues.opennms.org/browse/HELM-86): Configurable query timeouts
* [HZN-1258](https://issues.opennms.org/browse/HZN-1258): Kafka Alarm Stream -  Perform periodic synchronization
* [HZN-1263](https://issues.opennms.org/browse/HZN-1263): Make "delete existing rules" optional when importing rules from csv
* [HZN-1276](https://issues.opennms.org/browse/HZN-1276): Event and alarm templates fail with Elasticsearch 6.x
* [HZN-1289](https://issues.opennms.org/browse/HZN-1289): ClassificationRulePageIT flapping
* [HZN-1293](https://issues.opennms.org/browse/HZN-1293): Remove Converter from Flow API
* [NMS-9905](https://issues.opennms.org/browse/NMS-9905): /bin/config-tester show error on "out of box" config.
* [NMS-9929](https://issues.opennms.org/browse/NMS-9929): A Karaf issue with SSH sessions makes unusable the metrics:stress command