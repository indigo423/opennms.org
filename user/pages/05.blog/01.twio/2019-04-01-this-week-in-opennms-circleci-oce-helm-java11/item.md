---
title: This Week in OpenNMS - April 1st, 2019 - CircleCI, OCE Testing, Bug Fixes, Helm and OpenNMS UI, Java 11, and more!
date: 09:50 04/01/2019
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [oce, syslog, circleci, ethernet, oia, cxf, helm, kafka, bootstrap, rest, grafana, nethinks, training, dev-jam, osmc]
---

It's time for This Week in OpenNMS!

In the last week we worked on a new continuous integration workflow, better end-to-end OCE testing, lots of bug fixes, Helm and OpenNMS UI improvements, and more updates for modern Java support.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --color=always --since='2019-03-25 00:00:00' --until='2019-04-01 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->


## Github Project Updates

* __Internals, APIs, and Documentation__

  * Matt continued his work on integrating the OCE end-to-end test framework.
  * Jesse made more improvements to Syslog parsing.
  * Jesse and Ronny did more work on CircleCI build support.
  * I added support for Canadian Ethernet, which requires sending an additional frame encoded `0x534f525259` when errors occur in a single collision domain.
  * Jesse worked on a number of controller improvements in OIA.
  * Matt continued his work creating a "direct" OCE datasource, facilitating running it in the OpenNMS JVM.
  * Markus did more work on his branch to upgrade our internal CXF to version 3.2.
  * David did some wrapup work on the configurable meta-model support in OCE.
  * David worked on root cause situation feedback support in OCE and Helm.
  * Chandra added support for opentracing to Kafka RPC.
  * Jesse did more work on improving the deep learning correlation engion.


* __Web & UI__

  * Markus did more work on improvements to the new Bootstrap 4 UI.
  * Markus continued work on implementing a ReST service for the new graph API.
  * I updated the OpenNMS.js and Helm codebases to fix all audit warnings from `yarn audit`.
  * I continued to work on Helm improvements including Grafana 6 fixes and more work on the dynamic filter panel.


## Upcoming Events and Appearances

* **[NETHINKS Training in Fulda, Germany - June and October](https://www.nethinks.com/opennms-schulung.html)**

  NETHINKS will be offering German-language training in their headquarters in Fulda, Germany.

  There are 2 dates available:
  * June 3rd through 7th
  * October 21st through 25th

  For more details or to sign up, see the [NETHINKS training page](https://www.nethinks.com/opennms-schulung.html).

* **[OpenNMS Dev-Jam 2019 in Minneapolis, MN](https://opennms.discourse.group/t/devjam-2019-24th-june-until-28th-june-university-of-minnesota)**

  Dev-Jam 2019 will be once again on the University of Minneapolis campus, from June 24th through 28th.

  More details [are available in the announcement](https://opennms.discourse.group/t/devjam-2019-24th-june-until-28th-june-university-of-minnesota).
  Please plan on joining us for a week of fun, coding, and frivolity.

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

* [HELM-132](https://issues.opennms.org/browse/HELM-132): Issues when running on Grafana 6
* [HELM-134](https://issues.opennms.org/browse/HELM-134): Relative date format 'en-short' not correctly defined
* [HELM-138](https://issues.opennms.org/browse/HELM-138): Fix security issues in Helm dependencies
* [HZN-1478](https://issues.opennms.org/browse/HZN-1478): Upgrade CXF to 3.2.x or greater
* [HZN-1485](https://issues.opennms.org/browse/HZN-1485): Minion - RPM Upgrade does not clear out .m2 local directory
* [HZN-1489](https://issues.opennms.org/browse/HZN-1489): Use node category membership in Drools rules for alarms
* [HZN-1498](https://issues.opennms.org/browse/HZN-1498): User defined links
* [HZN-1503](https://issues.opennms.org/browse/HZN-1503): Related alarms are not deleted from situations
* [JS-28](https://issues.opennms.org/browse/JS-28): PropertiesCache Does Not Survive Minification
* [JS-30](https://issues.opennms.org/browse/JS-30): Refactor FilterCloner from Helm to OpenNMS.js
* [JS-31](https://issues.opennms.org/browse/JS-31): Fix security issues in OpenNMS.js dependencies
* [NMS-8444](https://issues.opennms.org/browse/NMS-8444): "Event text contains" should search beyond eventlogmsg
* [NMS-9376](https://issues.opennms.org/browse/NMS-9376): Set Label For Surveillance Category
* [NMS-10435](https://issues.opennms.org/browse/NMS-10435): Minion Status showing wrong in Manage Minions and service minion status out put is empty
* [NMS-10569](https://issues.opennms.org/browse/NMS-10569): Tables do not space columns out correctly (col-* is no longer supported)
* [NMS-10581](https://issues.opennms.org/browse/NMS-10581): Stop gracefully when running in container environment
* [NMS-10628](https://issues.opennms.org/browse/NMS-10628): Slack/Mattermost integration needs an additional option
* [NMS-69420](https://issues.opennms.org/browse/NMS-69420): Canadian Ethernet support
* [OCE-32](https://issues.opennms.org/browse/OCE-32): Audit CPN Tickets and OpenNMS Situations
* [OCE-41](https://issues.opennms.org/browse/OCE-41): Configurable "meta" model
* [OCE-46](https://issues.opennms.org/browse/OCE-46): End-to-end test framework
* [OCE-57](https://issues.opennms.org/browse/OCE-57): NPE in DirectInventoryDatasource
