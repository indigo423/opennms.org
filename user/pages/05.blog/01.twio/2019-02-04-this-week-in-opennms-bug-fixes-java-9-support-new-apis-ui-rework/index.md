---
title: This Week in OpenNMS - February 4th, 2019 - Bug Fixes, Java 9+ Support, New APIs, and UI Rework Wrapup
date: 11:48 02/04/2019
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [kafka, topology, docker, liquibase, elasticsearch, dhcp, karaf, oia, drools, bootstrap, snmp, measurements]
---

It's time for This Week in OpenNMS!

Last week we did more bugfix, infrastructure, and Java 9+ updating, plus we started wrapping up the UI refresh and some other projects.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --color=always --since='2019-01-28 00:00:00' --until='2019-02-04 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->


## Github Project Updates

* __Internals, APIs, and Documentation__

  * Antonio continued his work exposing topology data to Kafka.
  * Ronny has been working on an official workflow for publishing OpenNMS/Minion/Sentinel Docker containers from CI.
  * I did more work on moving to Liquibase 3 for database schema management.
  * Markus continued to develop a new graph service/API.
  * Dustin wrapped up changing flow support to index by application rather than by port.
  * Jesse updated our test infrastructure to use Elasticsearch 6.5.
  * Christian did more work on modernizing our DHCP handling.
  * Chandra continued to develop a fix for handling notifications without associated nodes.
  * Jesse fixed a performance issue when loading a large number of nodes.
  * Patrick continued his work exposing the topology creator to the Karaf CLI.
  * David worked on updating some build infrastructure to work with Java 9+.
  * I fixed an issue with syslog parsing that could cause the wrong year to be used in some cases.
  * Jesse worked on requisition providers in OIA.
  * Jesse did some performance improvements on the Alarmd Drools context handling.

* __Web & UI__

  * Markus continued to do minor tweaks to the Bootstrap 4 UI rework, readying it for merging.
  * Jesse updated Helm to support the measurements API "relaxed" mode, allowing for queries to reference missing series.
  * Christian fixed the SNMP config page to select the "Default" location by default.
  * Sebastian fixed an issue with form validation in the notification editor.
  * Markus made some more changes to the daemon reload page.


## OpenNMS Mailing Lists Going Away

We had originally planned on decommissioning the mailing lists in August.

However, based on the feedback we got, it seemed that people wanted something additional between Stack Overflow and real-time chat suggested in the original announcement.

Since then, we have set up a Discourse that should give the ability to do most of what was done on the mailing lists, including getting email notifications of discussion threads you're interested in.

So with that in mind, here's what you need to know:

### List Shutdown & Archives

All OpenNMS mailing lists will be shut down on Friday, February 15th. 
If you wish to read historical messages, they are archived on marc.info:

* https://marc.info/?l=opennms-announce
* https://marc.info/?l=opennms-discuss
* https://marc.info/?l=opennms-install

...and so on.

### Real-Time Chat

If you wish to talk to OpenNMS developers and users, you can access our chat server at:

https://chat.opennms.com/

For old-skoolers, you can also connect through IRC, once you have created a user account on [chat.opennms.com](https://chat.opennms.com/).
To do so, connect to `chat.opennms.com` (port `6667`) with your IRC client, and then do:

`/msg mattermost login chat.opennms.com opennms <email> <password>`

### Discourse Forums

To access the OpenNMS Discourse, just go to:

https://opennms.discourse.group/

It works like most forum sites.

If you wish it to behave a bit more like the old mailing lists, you can go to your preferences and enable "Mailing List Mode" which will send you an email whenever new topics are created.

### Configuration Questions

There is technically an `opennms` tag on Stack Overflow, but Stack Overflow is really for development questions, not configuration questions.

Instead of posting to Stack Overflow, please use the _"Community Support"_ section of the Discourse:

https://opennms.discourse.group/c/community-support



<!--
## Upcoming Events and Appearances

* **[FOSDEM - Brussels, Belgium - February 2nd and 3rd, 2019](https://fosdem.org/2019/)**

  Craig Gallen will be giving a [lightning talk on OpenNMS and MQTT](https://fosdem.org/2019/schedule/track/lightning_talks/) at FOSDEM in Brussels this year.
-->

## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HZN-1232](https://issues.opennms.org/browse/HZN-1232): Update GWT to >= 2.8.2
* [HZN-1443](https://issues.opennms.org/browse/HZN-1443): Update the elasticsearch-drift-plugin to support Elasticsearch v6.5.x
* [HZN-1449](https://issues.opennms.org/browse/HZN-1449): Improve performance of DroolsAlarmContext alarm snapshot handling
* [HZN-1464](https://issues.opennms.org/browse/HZN-1464): Core structure/API of new Graph Service
* [HZN-1466](https://issues.opennms.org/browse/HZN-1466): Upgrade to Jetty 9.4.12
* [HZN-1467](https://issues.opennms.org/browse/HZN-1467): Upgrade Elasticsearch test server to use v6.5.x
* [NMS-10411](https://issues.opennms.org/browse/NMS-10411): Create documentation for the reloadable flag in service-configuration.xml
* [NMS-10497](https://issues.opennms.org/browse/NMS-10497): Track (flow) conversations by application instead of src/dst port
* [NMS-10506](https://issues.opennms.org/browse/NMS-10506): Node page very slow to load for nodes with more than 1000 events
* [NMS-10514](https://issues.opennms.org/browse/NMS-10514): SNMP configuration UI should select location "Default" by default, not the first location alphabetically
* [NMS-10533](https://issues.opennms.org/browse/NMS-10533): Make Topology Creator as Karaf command available
* [NMS-10541](https://issues.opennms.org/browse/NMS-10541): Recent Debian builds can't be installed on Ubuntu 14
* [NMS-10548](https://issues.opennms.org/browse/NMS-10548): syslog parsing of messages without a year will sometimes infer the wrong year
* [OCE-37](https://issues.opennms.org/browse/OCE-37): Build a map from two different OCE Datasets