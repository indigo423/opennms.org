---
title: This Week in OpenNMS: May 14th, 2018
date: 11:10 05/14/2018
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [datacollection, sentinel, snmp, enlinkd, docker, dev-jam, inog, ripe hackathon, ouce]
---

It's time for This Week in OpenNMS!

In the last week we mostly worked on wrapping up bug fixes in anticipation of this week's releases.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2018-05-07 00:00:00' --until='2018-05-14 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * Ronny continued to work on cleaning up data collection configurations.
  * I did more work on Sentinel container packaging.
  * Chandra continued to work on cleaning up initialization of trap handling and SNMPv3.
  * Christian fixed an NPE bug in Enlinkd.
  * Jeff worked on fixing updating `ack-user` and `ack-time` from alarm data on reduction.

<!--
* __Web & UI__

  * Chandra finished improving our AngularJS table load behavior.
-->

## Security: Horizon Docker Images Updated

The [Horizon Docker images](https://github.com/opennms-forge/docker-horizon-core-web) have been updated to use the latest floating release of OpenJDK to [fix a security issue](https://access.redhat.com/errata/RHSA-2018:1191).


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

* [HZN-1245](https://issues.opennms.org/browse/HZN-1245): Update the SnmpInterfacePoller to be location aware
* [HZN-1286](https://issues.opennms.org/browse/HZN-1286): RPM packages for Sentinel
* [HZN-1287](https://issues.opennms.org/browse/HZN-1287): Debian packages for Sentinel
* [HZN-1288](https://issues.opennms.org/browse/HZN-1288): Tarball distribution for Sentinel
* [NMS-708](https://issues.opennms.org/browse/NMS-708): Layer 2 Device Tracking Feature
* [NMS-715](https://issues.opennms.org/browse/NMS-715): Interpret parameters sent in a trap to human readable text
* [NMS-810](https://issues.opennms.org/browse/NMS-810): RRD name collision causes error message in collectd.log about "minimum one second step"
* [NMS-827](https://issues.opennms.org/browse/NMS-827): Problem with Network Interfaces page when duplicate node labels exist
* [NMS-9064](https://issues.opennms.org/browse/NMS-9064): ONMS starts with broken threshold configuration file
* [NMS-9506](https://issues.opennms.org/browse/NMS-9506): Interface delete from a node does not work
* [NMS-9678](https://issues.opennms.org/browse/NMS-9678): Access Denied With Surveillance View In Ops Board
* [NMS-9807](https://issues.opennms.org/browse/NMS-9807): Release notes are duplicated with every release
* [NMS-9852](https://issues.opennms.org/browse/NMS-9852): Enlinkd startup fails due to NPE in BroadcastDomain class
* [NMS-9882](https://issues.opennms.org/browse/NMS-9882): PageSequenceMonitor broken in Minion
* [NMS-9910](https://issues.opennms.org/browse/NMS-9910): Thousands of non harmful errors on ipc.log when using Kafka
* [NMS-9917](https://issues.opennms.org/browse/NMS-9917): SNMP Interface Poller shows wrong information on the logs
* [NMS-9946](https://issues.opennms.org/browse/NMS-9946): Cannot see StrafePing graphs when using Backshift.
* [NMS-9958](https://issues.opennms.org/browse/NMS-9958): Correct sysoidmask lines in default datacollection files
* [NMS-9959](https://issues.opennms.org/browse/NMS-9959): Improve performance of newts.indexing to avoid overwhelm Cassandra cluster
* [NMS-9961](https://issues.opennms.org/browse/NMS-9961): foreign-id with space (%20) at end causes issues with Newts
* [NMS-9962](https://issues.opennms.org/browse/NMS-9962): Enhance SSLCertMonitor.java warning message
* [NMS-10069](https://issues.opennms.org/browse/NMS-10069): Downtime model documentation is deprecated