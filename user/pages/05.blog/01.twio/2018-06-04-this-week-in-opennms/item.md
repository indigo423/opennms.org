---
title: This Week in OpenNMS: June 4th, 2018
date: 10:58 06/04/2018
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [alarms, sentinel, notifd, config-tester, kafka, syslog, enlinkd, vacuumd, dev-jam, inog, ripe hackathon, ouce]
---

It's time for This Week in OpenNMS!

Sorry for missing it last week but I was out of town.  In the last 2 weeks, we did a bunch of work on alarm infrastructure and fixing other bugs.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2018-05-21 00:00:00' --until='2018-06-04 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * Patrick fixed a bug in parsing timestamps in the alarm change notifier.
  * I fixed some issues in the Sentinel container packaging.
  * Markus worked on getting flow support added to the Sentinel container.
  * Patrick wrapped up his changes to support validating properties in `$OPENNMS_HOME/etc` in the `config-tester` tool.
  * Chandra fixed a regression handling the `auto-acknowledge-alarm` tag in the Notifd configuration XML.
  * Markus refactored the AWS SQS sink implementation.
  * Chandra worked on consolidating Kafka client library usage.
  * Chandra added support for custom date formatting in the syslog northbounder.
  * Antonio continued his work refactoring and improving bridge discovery support in Enlinkd.
  * Jesse worked on creating a more flexible Drools-based replacement for automation handling previously done in Vacuumd.
  * Jesse and David started working on creating a new API for alarm handling and correlation called AlarmManager.
  * Markus started work on an event sink API.
  * Chandra worked on a Karaf shell command for filtering nodes and interfaces.

* __Web & UI__

  * Dustin and Christian did more work on improving the performance of the flow exporters ReST API.
  * Patrick fixed a bug where asset record updates in the UI would not update the user that made changes.
  * Jeff updated the data submission popup to link to our privacy policy.


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

* [HZN-1282](https://issues.opennms.org/browse/HZN-1282): AlarmChangeNotificationClient - Unable to parse time value
* [HZN-1290](https://issues.opennms.org/browse/HZN-1290): Add sentinel container to system test api
* [HZN-1304](https://issues.opennms.org/browse/HZN-1304): Upgrade elasticsearch-drift-plugin to be compatible with ES 6.2.4
* [HZN-1308](https://issues.opennms.org/browse/HZN-1308): Remove database-schema.xml from etc directory
* [HZN-1310](https://issues.opennms.org/browse/HZN-1310): Add debian package support for elasticsearch-drift-plugin
* [NMS-4254](https://issues.opennms.org/browse/NMS-4254): SnmpInterfacePoller ignores max vars per PDU
* [NMS-4486](https://issues.opennms.org/browse/NMS-4486): Adding a node via the 'Add Node' link does not fill in the site name
* [NMS-4654](https://issues.opennms.org/browse/NMS-4654): PageableGrid doesn't sort multi-page correctly
* [NMS-4748](https://issues.opennms.org/browse/NMS-4748): Error on event list when filtering out events based on UEI
* [NMS-5282](https://issues.opennms.org/browse/NMS-5282): The requisition policies to enable the SNMP Poller on primary interfaces is not working
* [NMS-5408](https://issues.opennms.org/browse/NMS-5408): When configuring SNMP data collection, you can no longer sort column headers in 1.10.3
* [NMS-6059](https://issues.opennms.org/browse/NMS-6059): Scan of auto-provisioned node does not pick up nodelabel
* [NMS-8413](https://issues.opennms.org/browse/NMS-8413): ConcurrentModificationException in DefaultEventHandlerImpl
* [NMS-9117](https://issues.opennms.org/browse/NMS-9117): config-tester doesn't check opennms.properties
* [NMS-9901](https://issues.opennms.org/browse/NMS-9901): Column widths in KSC reports
* [NMS-9913](https://issues.opennms.org/browse/NMS-9913): Unregistered product specification
* [NMS-9945](https://issues.opennms.org/browse/NMS-9945): The zooming capabilities of the regional status map are very limited
* [NMS-9954](https://issues.opennms.org/browse/NMS-9954): ROLE_READONLY = Access Denied
* [NMS-10085](https://issues.opennms.org/browse/NMS-10085): The auto-acknowledge-alarm tag with no content doesn't work on notifd-configuration.xml
* [NMS-10087](https://issues.opennms.org/browse/NMS-10087): Asset record is not being updated with user name that performed the update
* [NMS-10158](https://issues.opennms.org/browse/NMS-10158): Provide a way to configure the date formats used by the Syslog NBI
* [NMS-10161](https://issues.opennms.org/browse/NMS-10161): Typos in Horizon 22.0.0 release notes
* [NMS-10165](https://issues.opennms.org/browse/NMS-10165): Consolidate Kafka client library versions
* [NMS-10168](https://issues.opennms.org/browse/NMS-10168): opennms.service failed
* [NMS-10169](https://issues.opennms.org/browse/NMS-10169): Link to privacy policy from Data Choices UI elements