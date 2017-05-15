---
title: This Week in OpenNMS: May 1st, 2017
date: 11:21 05/01/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, storebyforeignsource, capsd, packaging, jmx, ssl, minion, rest, bsm, youtube, opennms 101, dev-jam]
---

It's time for This Week in OpenNMS!  In the last week we worked on various internal changes, Minion, and web APIs.

<!-- git log --all --no-merges --since='2017-04-24 00:00:00' --until='2017-05-01 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)' | sort | less -R -->

## Github Project Updates

* __Internals__

  Christian worked more on fixing some issues in resource storage with storeByForeignSource turned on.  Ronny did more work on removing old legacy Capsd events.  I worked on upgrade-packaging issues when OpenNMS is running.  Markus added support for custom JMX URLs, as well as support for using JMX over SSL by default.

* __Minion__

  I finished up packaging Minion for Debian.  Seth worked on improving the Minion heartbeat code.

* __Web__

  Alejandro did more work on his improvements to the v2 ReST API.  Markus worked on adding a BSM status box to the front page.


## OpenNMS 101

Last week, Tarus wrapped up his [OpenNMS 101](https://www.opennms.org/en/blog/opennms-101) video series on YouTube, which goes over a lot of the content in the [OpenNMS training sessions](https://www.opennms.com/training).  It covers everything from installation and getting started, to working with events, alarms, notifications, service monitoring, data collection, and thresholds.

If you haven't checked them out yet, give them a shot.  There is a _ton_ of information packed into these videos.


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

* [HZN-151](https://issues.opennms.org/browse/HZN-151): PageSequenceMonitor
* [NMS-7562](https://issues.opennms.org/browse/NMS-7562): scrollbars displayed for RrdDashlet title box
* [NMS-8142](https://issues.opennms.org/browse/NMS-8142): The Topology Map does not support persisting collapsible search criteria
* [NMS-8610](https://issues.opennms.org/browse/NMS-8610): opennms-ackd shouldn't load component-service.xml Spring contexts
* [NMS-9110](https://issues.opennms.org/browse/NMS-9110): The ReST API is not location aware
* [NMS-9143](https://issues.opennms.org/browse/NMS-9143): Persist Drools working memory to disk when stopping and starting OpenNMS
* [NMS-9225](https://issues.opennms.org/browse/NMS-9225): OpenNMS False nodeLostService events for Minion-Heartbeat
* [NMS-9233](https://issues.opennms.org/browse/NMS-9233): Possible thread leak in SnmpUtils
* [NMS-9269](https://issues.opennms.org/browse/NMS-9269): Requisition UI breaks when percentage sign is used inside Foreign ID input field
