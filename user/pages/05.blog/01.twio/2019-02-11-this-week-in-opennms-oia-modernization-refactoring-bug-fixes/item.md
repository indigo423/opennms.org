---
title: This Week in OpenNMS - February 11th, 2019 - Integration API Extensions, Modernization and Refactoring, and Bug Fixes!
date: 12:06 02/11/2019
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [pollerd, oia, assets, rest, java9, dhcp, slack, collectd, requisitions, elasticsearch, minion, snmp, newts, topology, activemq, jetty, bootstrap]
---

It's time for This Week in OpenNMS!

Last week we added a ton of extensions to the OpenNMS Integration API, did more wrap-up on various modernization and refactoring projects, and fixed more bugs.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --color=always --since='2019-02-04 00:00:00' --until='2019-02-11 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->


## Github Project Updates

* __Internals, APIs, and Documentation__

  * Jesse did some work on refactoring poller configuration handling.
  * Jesse added node assets, event handling, and graphs to the OIA.
  * Markus did more work on the new core graph API and ReST service.
  * David and Matt worked on a number of changes to our maven build to facilitate Java 9+ support.
  * Christian worked on wrapping up his DHCP monitor and detector refactor.
  * Jeff fixed a configuration consistency issue in the Slack notification strategy.
  * Chandra worked on collector support in the OIA.
  * Jesse made some enhancements to the requisition support in OIA.
  * Dustin has been working on adding support for arbitrary node metadata in requisitions.
  * I added test coverage and fixed a few bugs in the `opennms` and `runjava` CLI scripts.
  * Jesse did some wrap-up on Elasticsearch alarm indexing support.
  * Jesse added support for configuring connection pooling options for Newts.
  * Ronny added some documentation for SNMP trap reception in Minion.
  * Patrick added support for unit testing topology providers using the refactored topology generator API.
  * Chandra improved collection-handling to log exceptions in a useful manner.
  * Chandra fixed health check to only check ActiveMQ connectivity if it's enabled for sink/RPC.

* __Web & UI__

  * Matt did some fixes to some header defaults in Jetty.
  * Matt fixed some bugs in locale handling in the web UI.
  * Dustin fixed Helm so it the order of responses always matches the query.
  * Markus did some refactoring of the daemon reload web UI work.
  * I added linting to the Helm codebase and cleaned up some warnings.
  * Dustin finished up his work on browser notification support.
  * Markus did some more tweaks to the Bootstrap 4 UI refactor based on feedback.


## Upcoming Events and Appearances

* **[NETHINKS Training in Fulda, Germany - June and October](https://www.nethinks.com/opennms-schulung.html)**

  NETHINKS will be offering German-language training in their headquarters in Fulda, Germany.

  There are 2 dates available:
  * June 3rd through 7th
  * October 21st through 25th

  For more details or to sign up, see the [NETHINKS training page](https://www.nethinks.com/opennms-schulung.html).

* **[OSMC 2019 in Nuremberg, Germany - November 4th through 7th](https://osmc.de/)**

  We will be at OSMC in November.
  Details are still forthcoming but we're hoping to do a 1-day workshop.

  For more information on OSMC, see [their website](https://osmc.de/).


## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HELM-128](https://issues.opennms.org/browse/HELM-128): Measurements API does not preserve series order
* [HELM-129](https://issues.opennms.org/browse/HELM-129): Allow queries with missing attributes
* [HZN-956](https://issues.opennms.org/browse/HZN-956): Support Browser Notification API
* [HZN-1198](https://issues.opennms.org/browse/HZN-1198): CDP Topology not discovered on Cisco Nexus devices
* [HZN-1231](https://issues.opennms.org/browse/HZN-1231): Upgrade the maven-war-plugin
* [HZN-1420](https://issues.opennms.org/browse/HZN-1420): Index alarms and alarm history in Elasticsearch
* [HZN-1471](https://issues.opennms.org/browse/HZN-1471): Provide capability to expose GraphContainerProviders with only one graph (SingleGraphContainerProvider)
* [HZN-1472](https://issues.opennms.org/browse/HZN-1472): Make GraphRepository accessible via OSGI
* [NMS-8185](https://issues.opennms.org/browse/NMS-8185): Create a reload daemon configuration page
* [NMS-10486](https://issues.opennms.org/browse/NMS-10486): syslog events are creating notifications and disregarding rules in place
* [NMS-10496](https://issues.opennms.org/browse/NMS-10496): Update flow classification rules to match either the src or dst ports
* [NMS-10557](https://issues.opennms.org/browse/NMS-10557): Upgrade liquibase to 3.x
* [OCE-38](https://issues.opennms.org/browse/OCE-38): Add log rotation support to the kafka-event-mirrorer