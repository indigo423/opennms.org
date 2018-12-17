---
title: This Week in OpenNMS - December 17th, 2018 - OIA, Flows, Bug Fixing and Code Debt, Topology, Helm, and Holidays! &#x2744; &#x1F381;
date: 12:19 12/17/2018
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [netflow, oce, kafka, jexl, dhcp, alarmd, oia, elasticsearch, snmp, helm, bsm, topology, notifications, bootstrap, holiday]
---

It's time for This Week in OpenNMS!

Sorry I missed last week, but I was out for a bit and by the time I was back figured I'd just punt to this week.

In the last two weeks we did more work on moving code to using OIA, improved flow persistence, fixed a bunch of alarm bugs, worked on a bunch of code debt, did more topology UI work, and made lots of improvements to Helm.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --color=always --since='2018-12-03 00:00:00' --until='2018-12-17 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->


## Github Project Updates

* __Internals, APIs, and Documentation__

  * Chandra continued his work on service detector support in OIA.
  * Dustin worked on making it possible to use JSR-223 scripting to modify flow data before it is persisted.
  * David has been working on adding explicit priority support to events for more predictable ordering.
  * Matt worked on being able to send inventory directly to in-JVM OCE without using Kafka.
  * Christian added support for transforming nodeId and interface in JEXL when using the `event:stress` command.
  * Jesse worked on optimizing alarm (re)publishing to occur only if `lastModified` or `ackTime` have changed.
  * Christian updated the DHCP service monitor to use dhcp4java.
  * Chandra did more work on service monitor support in OIA.
  * Jesse continued develpment indexing alarm history in Elasticsearch.
  * Dustin worked on tracking flows by application rather than source and destination port.
  * Jesse worked on an example set of Drools alarm rules to create "nag" notification events.
  * Matt added correlation feedback support to OIA.
  * Matt did more work on fixing support for additional syslog formats.
  * Christian fixed a bug where `linkDown` alarms would not be generated if `ifIndex` is unknown.
  * Matt worked on improving performance of alarm snapshotting in the Drools context.
  * Patrick started on the thankless job of modernizing the SnmpCollector. (Thanks!)
  * Patrick worked on normalizing a number of places where we convert integers from strings.
  * Jesse did a number of fixes to improve edge cases and failures in the new alarm handling.

* __Web & UI__

  * I did a ton of enhancements to Helm (mostly in the alarm table code) in preparation for a 3.0 release.
  * Christian added applications to edges in the BSM topology view.
  * Antonio continued his work on a topology ReST service.
  * Dustin added support for using the browser notification API for getting notifications.
  * Dustin fixed the measurements API to return responses in the same column order as requested.
  * Patrick worked on wrapping up his topology performance enhancements.
  * Sebastian continued to work on the Bootstrap 4 UI refactor.


## [OpenNMS Discourse](https://opennms.discourse.group)

As many of you are surely aware, traffic on our e-mail discussion lists has steadily declined for a long time.
People have, for the most part, been moving to other venues for asking questions, and a lot of folks have embraced https://chat.opennms.com/ as a way to get real-time help from other community members.

Thanks to the fine folks at [Discourse](https://www.discourse.org/), we now have a community forum that can hopefully meet the needs of folks who traditionally used the e-mail lists.
I realize it's no replacement for the oldskool listservs I still hold in my heart, but it at least provides a lot of tools for notifications and replying by e-mail to give some amount of equivalence to the mailing lists.

For more details, please read Ronny's [post about updating our community spaces](https://www.opennms.org/en/blog/2018-12-13-opennms-and-discourse), and if you want to dive right in, go to [https://opennms.discourse.group](https://opennms.discourse.group).


## OpenNMS Holiday Break and Releases

The OpenNMS Group will be on break next week for the holidays, and we will resume normal operations in the new year.

Also, a note: normally we'd do releases on the third Thursday of the month, but this time around that is... the day before we disappear for a week.
So obviously that's not the greatest idea, and we'll be skipping this month's releases.
The next Horizon and Meridian update scheduled is Thursday, January 17th.

I hope everyone has a happy holiday and a good new year!
See you in 2019!

<!--
## Upcoming Events and Appearances

* **[OpenNMS Training - December 10th through 14th, 2018](https://www.opennms.com/training/)**

  The OpenNMS Group will be [offering hands-on OpenNMS training](https://www.opennms.com/training/) in our Apex, NC office.
-->

## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HELM-98](https://issues.opennms.org/browse/HELM-98): Alarm Table text bold if 'Style with severity' is checked
* [HELM-115](https://issues.opennms.org/browse/HELM-115): Drag'n Drop doesn't work with Safari
* [HELM-116](https://issues.opennms.org/browse/HELM-116): Alarm table no longer respects column sizing
* [HELM-117](https://issues.opennms.org/browse/HELM-117): Unable to deselect a row in the Alarm Table
* [HELM-118](https://issues.opennms.org/browse/HELM-118): Enable Table panel to display durations
* [HELM-120](https://issues.opennms.org/browse/HELM-120): Sorting by number of alarms in the alarm table panel
* [HELM-121](https://issues.opennms.org/browse/HELM-121): Related alarm view should show the node label
* [HELM-123](https://issues.opennms.org/browse/HELM-123): Drag&drop-reordering of columns broken in Firefox 63 and Internet Explorer 11
* [HELM-124](https://issues.opennms.org/browse/HELM-124): Limit number of alarms returned by the FM DS
* [HELM-125](https://issues.opennms.org/browse/HELM-125): Add the ability to see the complete alarm JSON from the alarm details view
* [HELM-126](https://issues.opennms.org/browse/HELM-126): white text when Style With Severity=Row is hard to read
* [HZN-1437](https://issues.opennms.org/browse/HZN-1437): Cannot clear alarms
* [HZN-1440](https://issues.opennms.org/browse/HZN-1440): Create tool to audit syslog message parsing
* [HZN-1449](https://issues.opennms.org/browse/HZN-1449): Improve performance of DroolsAlarmContext alarm snapshot handling
* [NMS-8622](https://issues.opennms.org/browse/NMS-8622): jmx config generator test failing
* [NMS-10337](https://issues.opennms.org/browse/NMS-10337): Replaced jdhcp with dhcp4java
* [NMS-10405](https://issues.opennms.org/browse/NMS-10405): Allow Applications to be added as an edge to a Business Service
* [NMS-10439](https://issues.opennms.org/browse/NMS-10439): Apply initial loading improvements to IsIs, lldp, ospf protocols
* [NMS-10459](https://issues.opennms.org/browse/NMS-10459): Meassure and improve performance of Interface loading and mapping
* [NMS-10461](https://issues.opennms.org/browse/NMS-10461): Alarm list pagination broken with situations
* [NMS-10473](https://issues.opennms.org/browse/NMS-10473): duplicate key exceptions in alarmd
* [NMS-10475](https://issues.opennms.org/browse/NMS-10475): When using the events:stress command, the node-id or interface passed as parameters are ignored when using jexl
* [NMS-10477](https://issues.opennms.org/browse/NMS-10477): Use a utility function instead of Integer.getInteger
* [NMS-10479](https://issues.opennms.org/browse/NMS-10479): Alarm Dashlet CriteriaBuilder In-Restriction not working
* [NMS-10480](https://issues.opennms.org/browse/NMS-10480): Standard output get wasted with "Unknown record type: 0 / 2209" messages
* [NMS-10483](https://issues.opennms.org/browse/NMS-10483): Make favicons in the web application great again
* [NMS-10487](https://issues.opennms.org/browse/NMS-10487): Meassure and improve performance of Cdp/Lldp/IsIsElement loading
* [NMS-10494](https://issues.opennms.org/browse/NMS-10494): Drools alarm may update alarms unnecessarily on snapshot
* [NMS-10502](https://issues.opennms.org/browse/NMS-10502): Create Application Icon for BSM Topology
* [OIA-2](https://issues.opennms.org/browse/OIA-2): Add support for ServiceDetectors