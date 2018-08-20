---
title: This Week in OpenNMS: August 20th, 2018
date: 13:40 08/20/2018
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [alarmd, minion, ws-man, elasticsearch, sextant, enlinkd, angular, uknof, ouce]
---

It's time for This Week in OpenNMS!

Last week we released new Meridian and Horizon versions, and worked on Minion status, WS-Man, reports, Sextant flows, event sinks, Enlinkd, and web UI improvements.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2018-08-13 00:00:00' --until='2018-08-20 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->


## Github Project Updates

* __Internals, APIs, and Documentation__

  * David Hustace did some final work on his alarm state changes, as well as adding additional documentation for alarms.
  * I finished up some final changes to the minion status tracker.
  * Patrick added documentation for the HttpDetector.
  * Dino worked on a WS-Man WQL detector.
  * Christian fixed an issue with rendering 95th percentile reports for some users.
  * Dustin continued his work on supporting multiple flow formats on a single port.
  * Jesse updated the flow query Elasticsearch template to handle the new flow direction behavior.
  * Chandra and Malatesh did some work on the event sink code.
  * Patrick did some work cleaning up various Enlinkd model objects and adding some tests.

* __Web & UI__

  * I added a JavaScript tool + AngularJS service, filter, and directive to allow using Patrick's custom date formats.
  * Patrick updated exception handling in the web UI to show a complete stack trace to admin users.


## OpenNMS Meridian and Horizon Releases

OpenNMS Meridian 2015.1.10, 2016.1.15, and 2017.1.10 were released last week, in addition to OpenNMS Horizon 22.0.3.

These were all primarily bug fix releases, most notably fixing a critical bug in how RADIUS authentication was handled.  Users doing any combination of RADIUS authentication or RADIUS monitoring are **strongly** recommended to upgrade.

For a complete list of changes, see the release notes for each respective version:

* [OpenNMS Meridian 2015.1.10](http://meridian.opennms.com/releasenotes/2015/latest/#_release_meridian_2015_1_10)
* [OpenNMS Meridian 2016.1.15](http://meridian.opennms.com/releasenotes/2016/latest/#_release_meridian_2016_1_15)
* [OpenNMS Meridian 2017.1.10](http://meridian.opennms.com/releasenotes/2017/latest/#_release_meridian_2017_1_10)
* [OpenNMS Horizon 22.0.3](http://docs.opennms.org/opennms/releases/22.0.3/releasenotes/releasenotes.html#releasenotes-changelog-22.0.3)



## Upcoming Events and Appearances

* **[UK Network Operators' Forum - September 11th, 2018](https://indico.uknof.org.uk/event/43)**

  Tarus will be [speaking at the UK Network Operators Forum](https://indico.uknof.org.uk/event/43/contributions) on September 11th, 2018.
  He'll be giving a talk called "What's Happening with OpenNMS" going over some of the recent enhancements to OpenNMS to extend scalability.


* **[OpenNMS User Conference Europe 2018 - September 20th through 21st, 2018](https://ouce.opennms.eu/)**

  [OUCE 2018](https://ouce.opennms.eu/) will be held at the [Rilano Hotel in Munich, Germany](https://www.rilano-hotel-muenchen.de/).
  A reception will be held on Wednesday the 19th, with talks and workshops the following Thursday and Friday.
  The [call for papers](https://ouce.opennms.eu/cfp/2018/) is open for submissions.


## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HZN-1338](https://issues.opennms.org/browse/HZN-1338): Provide documentation for sentinel
* [HZN-1355](https://issues.opennms.org/browse/HZN-1355): Create REST API for Situation Correlation Feedback
* [HZN-1358](https://issues.opennms.org/browse/HZN-1358): Persist Alarm Correlation Feedback in Elasticsearch
* [HZN-1375](https://issues.opennms.org/browse/HZN-1375): Move navbar.ftl from opennms-webapp jar to webapp directory to make changes easier
* [NMS-9288](https://issues.opennms.org/browse/NMS-9288): Topology on Map is not properly displayed
* [NMS-9875](https://issues.opennms.org/browse/NMS-9875): Failed to run Jasper report local_Serial-Interface-Utilization-Summary:  Key receive rate is duplicated in pie dataset
* [NMS-10164](https://issues.opennms.org/browse/NMS-10164): Support customizing the default time zone when parsing dates in syslog messages
* [NMS-10273](https://issues.opennms.org/browse/NMS-10273): Add support for Cisco Syslog Message formats to the RadixTreeSyslogParser
* [NMS-10301](https://issues.opennms.org/browse/NMS-10301): expose datetimeformat in InfoService REST Endpoint
* [NMS-10305](https://issues.opennms.org/browse/NMS-10305): Support  reload daemon for Trapd
* [PRIS-144](https://issues.opennms.org/browse/PRIS-144): Support xlsx Files