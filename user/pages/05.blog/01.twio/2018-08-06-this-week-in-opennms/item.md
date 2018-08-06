---
title: This Week in OpenNMS: August 6th, 2018
date: 12:13 08/06/2018
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [vmware, radius, provisiond, sflow, kafka, sextant, alarmd, minion, topology, enlinkd, bootstrap, uknof, ouce]
---

It's time for This Week in OpenNMS!

Last week we continued work on RPC over Kafka, Sextant, Enlinkd, and other bug fixes.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2018-07-30 00:00:00' --until='2018-08-06 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->


## Github Project Updates

* __Internals, APIs, and Documentation__

  * Christian wrapped up his VMware cleanups.
  * Markus wrapped up fixes for a RADIUS authentication bug.
  * Jeff fixed a logging issue in provisioning that could cause excess logs relating to "not-polled" services.
  * Christian did more work on handling non-directional SFlow data.
  * Chandra did more work on support for RPC over Kafka.
  * David continued implementing a feedback mechanism for training/tuning Sextant correlations.
  * David Hustace did more work on his branch to clean up the handling of alarm clearing.
  * Jesse worked added some metric checks to the health check tool.
  * Markus updated the internal service API to support timing out, along with some other refactoring.
  * Markus did more work on the health check tool.
  * I worked on implementing a minion status tracker to update the minion status in the minion UI.

* __Web & UI__

  * Markus continued his experiment with simplifying our Bootstrap-based theme code.
  * Patrick continued work on changes to make dates in the web UI consistent, and also configurable.
  * Sebastian did more work on a daemon-reload page in the admin UI.
  * Antonio continued his work on fixing the topology UI showing enlinkd links properly.
  * Jesse added MD5 checksum handling to Helm.
  * David worked on Sextant feedback support in Helm.

## OUCE Is Coming Up Fast!

Don't forget to sign up for next month's [OpenNMS User Conference Europe 2018](https://ouce.opennms.eu/) in Munich, Germany.

A number of folks from the core OpenNMS development team will be there speaking on a variety of subjects from development to integration to advanced configuration.

[Join us September 20th-21st in Munich!](https://ouce.opennms.eu/)


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

* [HZN-1329](https://issues.opennms.org/browse/HZN-1329): warnings and exceptions in telemetryd.log with sflow
* [HZN-1334](https://issues.opennms.org/browse/HZN-1334): Streamline documentation for installation of OpenNMS and Minion
* [HZN-1339](https://issues.opennms.org/browse/HZN-1339): Rework features definition for sentinel
* [HZN-1340](https://issues.opennms.org/browse/HZN-1340): Get DefaultSnmpCollectionAgent to run on sentinel
* [HZN-1348](https://issues.opennms.org/browse/HZN-1348): Allow Drools rule for Alarmd to be customized
* [HZN-1363](https://issues.opennms.org/browse/HZN-1363): Wrong descriptions for Quantile in Percentile and Outlier measurement filters
* [NMS-8204](https://issues.opennms.org/browse/NMS-8204): VMWare-Center-Monitoring make for every virtual machine a login/logout
* [NMS-10213](https://issues.opennms.org/browse/NMS-10213): Event Search Broken
* [NMS-10215](https://issues.opennms.org/browse/NMS-10215): Add support for persisting Data Collection to Kafka
* [NMS-10221](https://issues.opennms.org/browse/NMS-10221): Supporting flow records without direction field (ingress/egress)
* [NMS-10228](https://issues.opennms.org/browse/NMS-10228): use user defined time zone for date formatting
* [NMS-10269](https://issues.opennms.org/browse/NMS-10269): Update log4j2.xml with kafka logging
* [NMS-10282](https://issues.opennms.org/browse/NMS-10282): Change in JMS NBI Date Format
* [NMS-10291](https://issues.opennms.org/browse/NMS-10291): DefaultProvisionService logs noisily for monitored service having state "N"
* [NMS-10303](https://issues.opennms.org/browse/NMS-10303): ServiceLookup and TelemetryAdapterRegistry don't wait properly
* [NMS-10304](https://issues.opennms.org/browse/NMS-10304): Refactor timeseries applicationContext xml files with 'timeseries' prefix