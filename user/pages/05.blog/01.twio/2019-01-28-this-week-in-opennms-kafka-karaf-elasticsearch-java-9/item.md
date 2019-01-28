---
title: This Week in OpenNMS - January 28th, 2019 - Kafka, Karaf, Elasticsearch, and Java 9
date: 12:42 01/28/2019
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [kafka, karaf, topology, snmp, notifd, postgresql, bootstrap, jetty]
---

It's time for This Week in OpenNMS!

Last week we continued a lot of existing projects as well as more bugfixes.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --color=always --since='2019-01-22 00:00:00' --until='2019-01-28 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->


## Github Project Updates

* __Internals, APIs, and Documentation__

  * Antonio continued his work exposing topology data to Kafka.
  * Patrick worked on porting/refactoring the tool to generate test topologies to the Karaf CLI.
  * Markus did more work on a new graph service API.
  * I worked on updating our embedded Karaf to 4.2.2.
  * Patrick did more work on his SNMP collector refactor/replacement.
  * Chandra worked on an issue with notifications being sent with no associated nodes.
  * Jesse continued to tune his updates to Elasticsearch support.
  * Jesse refactored the event configuration Karaf shell tool to rely only on the OIA.
  * I worked on updating us to the latest PostgreSQL JDBC driver.

* __Web & UI__

  * Sebastian did some more work on the daemon refactor and reload page.
  * Markus, Sebastian, and Ronny continued their work on moving to Bootstrap 4 for our web UI.
  * I worked on updating us to the latest version of Jetty 9.


## Upcoming Events and Appearances

* **[FOSDEM - Brussels, Belgium - February 2nd and 3rd, 2019](https://fosdem.org/2019/)**

  Craig Gallen will be giving a [lightning talk on OpenNMS and MQTT](https://fosdem.org/2019/schedule/track/lightning_talks/) at FOSDEM in Brussels this year.


## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HELM-84](https://issues.opennms.org/browse/HELM-84): Display human readable values from nodeResources and nodeFilter
* [HZN-1442](https://issues.opennms.org/browse/HZN-1442): Update the SnmpCollector to use the CollectionSetBuilder
* [HZN-1461](https://issues.opennms.org/browse/HZN-1461): View event configuration definitions from the Karaf shell
* [NMS-9711](https://issues.opennms.org/browse/NMS-9711): Minion WSMAN collector is not functional due to dependency missing
* [NMS-10477](https://issues.opennms.org/browse/NMS-10477): Use a utility function instead of Integer.getInteger
* [NMS-10505](https://issues.opennms.org/browse/NMS-10505): Add karaf logging configuration for Minion/Sentinel
* [NMS-10515](https://issues.opennms.org/browse/NMS-10515): Wallboard URLs with board name should be permalinks, but return "Nothing to display" instead
* [NMS-10525](https://issues.opennms.org/browse/NMS-10525): Event parameters table have strong limits for the columns
* [OCE-36](https://issues.opennms.org/browse/OCE-36): Export data from OpenNMS (stored in ES) to an OCE Dataset
