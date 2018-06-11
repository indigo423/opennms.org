---
title: This Week in OpenNMS: June 11th, 2018
date: 9:58 06/11/2018
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [karaf, alarmd, poller, drift, enlinkd, dev-jam, inog, ripe hackathon, ouce]
---

It's time for This Week in OpenNMS!

In the last week we continued to work on an Alarmd refactor, as well as other bug fixing.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2018-06-04 00:00:00' --until='2018-06-11 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->

## DEV JAM!

This week is OpenNMS Dev Jam, at the University of Minnesota campus.  Dev Jam is a week that we get OpenNMS community folks together and have a hackathon.  Traditionally, it's a combination social and work week, with people hanging out, having fun, and working on pet projects.


## Github Project Updates

* __Internals, APIs, and Documentation__

  * Chandra did more work on enhancing Karaf shell commands.
  * Jesse and David continued their work on a next-generation Alarmd with full rules-based workflow management.
  * Markus moved the critical path configuration from the (vestigial) `opennms-server.xml` to the poller config.
  * Markus fixed the node:interface cache so it can refresh itself.
  * Dustin worked on making it possible to receive multiple types of flow data on a single port.
  * Antonio continued to work on his refactor of Enlinkd bridge discovery support.

* __Web & UI__

  * Christian continued his work improving performance of the exporters endpoint.
  * Patrick fixed a calculation bug in the Top 25 event-analysis report.


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

* [HELM-96](https://issues.opennms.org/browse/HELM-96): Document the new flow datasource
* [HZN-1280](https://issues.opennms.org/browse/HZN-1280): Improve performance of /rest/flows/exporters endpoint
* [HZN-1309](https://issues.opennms.org/browse/HZN-1309): Refactor opennms-server.xml to only reflect Path Outage configurations
* [HZN-1311](https://issues.opennms.org/browse/HZN-1311): Make InterfaceToNodeCache refresh periodically
* [HZN-1315](https://issues.opennms.org/browse/HZN-1315): Rework ipc modules to have client and server bundles available for jms, kafka and sqs
* [HZN-1318](https://issues.opennms.org/browse/HZN-1318): Database model for "situations"
* [NMS-9804](https://issues.opennms.org/browse/NMS-9804): Documentation: Install Guide: Compatibility Matrix Outdated
* [NMS-10164](https://issues.opennms.org/browse/NMS-10164): Support customizing the default time zone when parsing dates in syslog messages
* [ORG-68](https://issues.opennms.org/browse/ORG-68): The probably most practical alarming signal
* [ORG-75](https://issues.opennms.org/browse/ORG-75): How to monitor LXC container