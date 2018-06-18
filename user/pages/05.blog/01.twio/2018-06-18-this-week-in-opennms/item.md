---
title: This Week in OpenNMS: June 18th, 2018
date: 14:41 06/18/2018
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [alarmd, correlation, provisiond, plugin manager, mqtt, nx-os, grpc, minion, kafka, grafana, javascript, drools, groovy, hibernate, servicenow, dev-jam, inog, ripe hackathon, ouce]
---

It's time for This Week in OpenNMS!

In the last week we had Dev Jam, our annual developer conference conference.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2018-06-11 00:00:00' --until='2018-06-18 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->

## DEV JAM!

Last week was OpenNMS Dev Jam, a week in which we get OpenNMS community folks together and have a hackathon.  As is tradition, on Friday people presented about what they worked on and we filmed it.  Video with be forthcoming but in the meantime Tarus did a good job of summarizing what people talked about:

* [Jesse presented](https://twitter.com/sortova/status/1007696073337516039) on the correlation work that he and David Smith have been doing.  It involves refactoring Alarmd to have better rules-based handling of things traditionally handled by Vacuumd, as well as providing an API for performing additional arbitrary correlations and rolling alarms up into meta-alarms called "situations."
* [Christian talked](https://twitter.com/sortova/status/1007701088743710722) about writing a new provisioning policy that allows you to write arbitrary groovy scripts to transform node data before it is persisted, during the node scan phase.
* [Craig spoke](https://twitter.com/sortova/status/1007708313738530816) about his recent work enhancing the plugin manager for adding extensions to OpenNMS, as well as a feature that allows registering OpenNMS as an MQTT broker.
* [Alejandro discussed](https://twitter.com/sortova/status/1007716060072693761) his proof-of-concept work writing a gRPC bridge that allows NX-OS telemetry to be delivered to OpenNMS as if it came from a Minion.
* [Ron](https://twitter.com/sortova/status/1007725926606688257), [Jess](https://twitter.com/sortova/status/1007726548458393605), and [Ronny](https://twitter.com/sortova/status/1007730479607504898) went over multiple related efforts to improve discoverability, usefulness, and navigation of both documentation and the OpenNMS web site(s) as a whole. Ron reworked the install guide to flow better; Jess talked about plans to consolidate web site resources and improve the organization of information on our web sites; Ronny combined the user and admin guides.
* [Chandra showed](https://twitter.com/sortova/status/1007748187623510017) his recent work developing a way of exporting time series data over Kafka.
* [DJ exhibited](https://twitter.com/sortova/status/1007757885177237505) his work streamlining database-handling in unit and integration tests and working to remove `create.sql` entirely.
* [Marcel demoed](https://twitter.com/sortova/status/1007759695807991808) his data collection updates to get advanced stats from Ubiquiti AirMax devices, as well as a Grafana dashboard showing those statistics.
* [David Schlenk crafted](https://twitter.com/sortova/status/1007768777482792960) an update to the pollers to allow poll-time-configuration of many operations based on dynamic data like node labels, hostnames, and node asset fields.
* [Mike created](https://twitter.com/sortova/status/1007773131090681857) some useful Grafana dashboards for Liebert UPCs and VMware vCenter.
* [Jeff revealed](https://twitter.com/sortova/status/1007776374814322688) his proof-of-concept of a trouble ticketing plugin for ServiceNow.
* I was under the weather and also helping film, so I was not up for presenting, but during Dev Jam I worked on adding features to OpenNMS.js as well as Compass bug fixes and build system updates.  :)

We also had a few customers and partners with us and it was great hanging out with them, as well as other community members who popped in to say hi.

Thanks to everyone who made this year another Dev Jam success!



## Github Project Updates

* __Internals, APIs, and Documentation__

  * Jesse and David continued their work on a next-generation Alarmd with full rules-based workflow management.
  * Christian worked on a groovy-based provisioning policy.
  * Ron worked on a fix to a regression in GenericResourceType resolution.
  * Ronny worked on merging the user and admin guides.
  * Chandra implemented support for RFC and data collection persistene over Kafka.
  * DJ converted the unit test framework to initialize using LiquiBase.
  * David Schlenk added parameterization support to a number of poller monitors.
  * David Smith experimented with switching to Gradle as our build system.
  * Will worked on updating to Drools 7.7.0.
  * David Smith worked on upgrading to a newer version of Hibernate.
  * Jeff implemented a basic (creation-only) ServiceNow ticketer plugin.
  * Ron worked on reorganizing the install guide.
  * Craig worked on updating to the latest version of the plugin manager.

* __Web & UI__

  * Markus worked on improving navigation of alarms, events, and outages.
  * I updated OpenNMS.js's build to use the latest versions of typescript and webpack, as well as a number of other small dependency updates.  I also refactored model parsing to be generic and to support future POST support.  There is also a new API for retrieving node resource information (as well as displaying nodes and resources in the CLI).
  * I fixed Compass's build to work with updated build tools.  I also worked on fixing an Android crash that appears to be caused by permissions issues.


## Upcoming Events and Appearances

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

* [HZN-1330](https://issues.opennms.org/browse/HZN-1330): ScriptPolicy for provisioning nodes
* [NMS-8524](https://issues.opennms.org/browse/NMS-8524): The ReST API used to return XMLs with namespace, and now it doesn't
* [NMS-9923](https://issues.opennms.org/browse/NMS-9923): Upgrade Drools to 7.x
* [NMS-10204](https://issues.opennms.org/browse/NMS-10204): Incorrect Release Notes Link
* [NMS-10210](https://issues.opennms.org/browse/NMS-10210): Ubiquiti AirMax 8 support