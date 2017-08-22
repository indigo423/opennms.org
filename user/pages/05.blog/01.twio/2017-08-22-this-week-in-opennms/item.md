---
title: This Week in OpenNMS: August 22nd, 2017
date: 10:12 08/22/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, eventd, camel, docker, plugin manager, pagerduty, osgi, helm, javascript, rest, cxf, training, ohio linux fest, olf]
---

 It's time for This Week in OpenNMS! In the last week we worked on internals, documentation, and web APIs.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2017-08-14 00:00:00' --until='2017-08-22 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * Seth did more work on converting eventd to use Camel routes.
  * I continued my work on getting OpenNMS integration tests to run cleanly in Docker containers.
  * Alejandro added documentation on creating custom security roles in recent OpenNMS versions.
  * Craig did more work on license and product management in the plugin manager.
  * Jesse wrote a PagerDuty notification strategy, as well as making it so notification strategies
    can be exposed through the OSGi registry.
  * Jesse wrote initial documentation for Helm.

* __Web and UI__

  * Jesse worked on a proof of concept for creating enhanced DTOs for the ReST API.
  * Seth got a property-based search API implmented in ReSTv2.
  * Markus improved null property handling in OpenNMS.js and Helm.
  * I changed date-handling in OpenNMS.js to work around a CXF bug.
  * Markus worked on date, date-range, and comparator handling in Helm.
  * I added support for passing a user when un-acknowledging an alarm in OpenNMS.js.
  * Markus added support for using the grafana user's account when performing OpenNMS
    actions in Helm (where possible).
  * Markus did a lot of other UI cleanup in Helm.


## OpenNMS Horizon 20.0.2 ([Ruby Rhod](http://fifth-element.wikia.com/wiki/Ruby_Rhod)) Released

20.0.2 is primarily a stabilization release, fixing a bunch of bugs (including the Enlinkd startup bug) and adding only a few enhancements (like support for reloading Drools config on-the-fly).

If you are running Horizon 20 it is strongly recommended that you upgrade.

For a complete list of changes in 20.0.2, see [the release notes](http://bit.ly/opennms-changes-20-0-2).


## OpenNMS Meridian 2015.1.6 and OpenNMS Meridian 2016.1.6 Released

Alongside Horizon 20.0.2, new Meridian 2015 and 2016 releases came out, containing a number of important bug fixes.  Release notes can be found on [the Meridian site](https://meridian.opennms.com/).

__Please note__: while the goal of Meridian releases is to try not to change files in `$OPENNMS_HOME/etc` to ease upgrade, it was determined important enough to fix the `vacuumd-configuration.xml` file to fix the operation that deletes old cleared alarms based on status.  For details, see [NMS-4648](https://issues.opennms.org/browse/NMS-4648).


## Monthly Release Schedule: 3rd Thursday of the Month

After some discussions within the team, we have decided to move to a monthly release schedule for regular bug fix updates.  Horizon 20.0.2, Meridian 2015.1.6, and Meridian 2016.1.6 are the first releases done on this schedule.

New releases of the current Horizon stable release and any actively supported Meridian releases will be done on the __3rd Thursday of the month__.  If there are any bug fixes committed in that time frame, a release will be made.


## Upcoming Events and Appearances

* __[AusNOG - Melbourne, Australia - September 7th and 8th, 2017](http://www.ausnog.net/)__

  Tarus Balog will be speaking at this year's AusNOG conference being held in Melbourne, Australia in September.
  [AusNOG](http://www.ausnog.net/) is the premier technical and professional networking event for Internet Service Providers, Telcos, Hosting Providers, and Content Providers in Australia.
  Tarus will be presenting a talk entitled _"Monitoring at Scale with OpenNMS"_.

* __[OpenNMS Training – Apex, NC - September 11th through 15th, 2017](http://www.opennms.com/training/)__

  The OpenNMS Group's next training session in Apex, NC will be September 11th through 15th.
  For more details on OpenNMS training and to sign up, see [The OpenNMS.com training page](http://www.opennms.com/training/).

* __[Ohio Linux Fest - Columbus, OH - September 29th through 30th, 2017](https://ohiolinux.org/tarus-balog-to-keynote-ohio-linuxfest-2017/)__

  Tarus Balog will be the keynote speaker at Ohio Linux Fest in Columbus.
  His talk is titled _"A Short History of an Open Source Business"_ and will be about the history of OpenNMS, decisions that were made, problems that were faced, and things we'd do different.

  For details, see [the Ohio Linux Fest announcement](https://ohiolinux.org/tarus-balog-to-keynote-ohio-linuxfest-2017/).

* __[OSMC - Nuremberg, Germany - November 21st through 24th, 2017](https://osmc.de/)__

  Ronny Trommer will be speaking at OSMC with a talk titled, _"Another Year with OpenNMS"_, discussing the progress made in the last 3 major releases of OpenNMS and what's on the
  roadmap going forward.

  [Ronny's talk](https://osmc.de/events/en-another-year-with-opennms/) will be on Thursday, November 23rd.  Full details of the schedule are available on [the OSMC site](https://osmc.de/schedule/).


## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HELM-1](https://issues.opennms.org/browse/HELM-1): Issues related to the REST API and Javascript client
* [HELM-2](https://issues.opennms.org/browse/HELM-2): Issues related to the Grafana application and plugins
* [HELM-12](https://issues.opennms.org/browse/HELM-12): Alarm filtering based on time range
* [HELM-15](https://issues.opennms.org/browse/HELM-15): Allow users to acknowledge and un-acknowledge alarm from the alarm table panel
* [HELM-17](https://issues.opennms.org/browse/HELM-17): Allow users to perform create, close and update ticket actions on the alarms
* [HELM-19](https://issues.opennms.org/browse/HELM-19): Use the logged in user for performing actions when possible
* [HELM-23](https://issues.opennms.org/browse/HELM-23): FM Query Editor: Can't change OR condition back to AND
* [HELM-24](https://issues.opennms.org/browse/HELM-24): FM Query Editor: Handling comparators on type change
* [HELM-25](https://issues.opennms.org/browse/HELM-25): FM Query Editor: Selecting a value before selecting an attribute
* [HELM-26](https://issues.opennms.org/browse/HELM-26): Review alarm to table mappings
* [HELM-27](https://issues.opennms.org/browse/HELM-27): Default filter for FM data source
* [HELM-33](https://issues.opennms.org/browse/HELM-33): Problems working with nested queries
* [HELM-35](https://issues.opennms.org/browse/HELM-35): Defer null value handling to opennms.js client
* [HELM-36](https://issues.opennms.org/browse/HELM-36): The target filter is updated twice
* [HELM-41](https://issues.opennms.org/browse/HELM-41): The ClientDelegate initialises the clientWithMetadata even if the connection failed (opennms is not reachable)
* [HZN-1129](https://issues.opennms.org/browse/HZN-1129): Evaluate using DTOs in REST v2 API
* [JS-19](https://issues.opennms.org/browse/JS-19): Add user to unack
* [JS-20](https://issues.opennms.org/browse/JS-20): Make handling of null value handling easier to deal with user input
* [NMS-7223](https://issues.opennms.org/browse/NMS-7223): org.opennms.netmgt.dao.NodeDaoTest has test method order dependency for success
* [NMS-8685](https://issues.opennms.org/browse/NMS-8685): NRPE monitor problem with SSL
* [NMS-8785](https://issues.opennms.org/browse/NMS-8785): Restarting OpenNMS: SNMP data collection (false) alarm for several nodes
* [NMS-8919](https://issues.opennms.org/browse/NMS-8919): Add foreignSource and foreignId parameters when sending events as an alternative to nodeId
* [NMS-9349](https://issues.opennms.org/browse/NMS-9349): VMware Provisioning Error
* [NMS-9416](https://issues.opennms.org/browse/NMS-9416): EAP-TTLS tunneling protocol for RADIUS poller/detector
* [NMS-9545](https://issues.opennms.org/browse/NMS-9545): Possible FileDescriptor Leak in Provisiond
* [NMS-9550](https://issues.opennms.org/browse/NMS-9550): The reason parameter for a nodeLostService event is limited to 255 characters
* [NMS-9562](https://issues.opennms.org/browse/NMS-9562): Add support for targeting a specific Minion with a RPC
* [NMS-9569](https://issues.opennms.org/browse/NMS-9569): Expose the ticketer config via opennms rest api
* [NMS-9579](https://issues.opennms.org/browse/NMS-9579): Custom security roles files is not mentioned on the documentation
