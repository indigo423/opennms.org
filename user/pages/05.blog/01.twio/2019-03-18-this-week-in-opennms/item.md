---
title: This Week in OpenNMS - March 18th, 2019 - Karaf Upgrade, Correlation, Bug Fixing, and Much Much More!
date: 11:43 03/18/2019
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [syslog, alarmd, jdbc, minion, karaf, sentinel, oce, netflow, kafka, tensorflow, openshift, helm, bootstrap, nethinks, training, dev-jam, osmc]
---

It's time for This Week in OpenNMS!

I'm sorry for missing last week's TWiO, but I was [busy in the Caribbean with a bunch of nerds](https://jococruise.com).
Meanwhile, everyone was apparently very busy and much more productive without me.
Maybe I should get back on the boat.

In the last couple of weeks we did a ton of bug fixing, updated our embedded Karaf to 4.2, and did a ton of work on correlation.
Plus a whole lot of other great stuff.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --color=always --since='2019-03-04 00:00:00' --until='2019-03-18 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->


## Github Project Updates

* __Internals, APIs, and Documentation__

  * David worked on fixing up flapping syslog time tests.
  * Jesse did more work on fixing potential deadlocks in Alarmd.
  * Chandra did more work making sure 3rd-party JDBC drivers can be loaded on Minion.
  * Markus wrapped up his work to update our embedded Karaf to 4.2.
  * Patrick did more work making improvements to the `events:stress` command.
  * Antonio made enhancements to bridge topology generation when events are sent.
  * Matt updated OCE test infrastructure to use a vanilla Sentinel container and worked on integrating the old OCE end-to-end tests into OpenNMS's build.
  * David did more work on the configurable meta-model for OCE.
  * Ronny worked on RPM CI and deployment for OCE.
  * Dustin did more work on handling flow packets that mix templates and data.
  * Antonio fixed an issue with ack escalation events.
  * Matt did more work integrating links from enlinkd into the OCE graph.
  * Matt fixed an issue with the Kafka datasource blocking OCE engine initialization.
  * Ronny started working on a documentation pipeline for OCE.
  * Jesse started work on an alternative OCE plugin that uses TensorFlow for clustering alarms.
  * Chandra fixed an issue with leftover artifacts in `.m2` after upgrading the Minion.
  * Jesse made a number of changes to expose useful data including node model updates, exposing requisition providers, and event listeners in the API.
  * Jesse added support to snapshotting data in OCE.
  * Chandra fixed a bug in the Minion status poller config that could cause timeouts or incorrect status.
  * David Hustace improved the documentation for the OCE project.
  * Alejandro improved our Docker images so they can run on OpenShift infrastucture without requiring root permissions. These changes should available alongside the release of Horizon 24.

* __Web & UI__

  * I got a working inventory datasource put together for Helm, and started on a filter panel using it.
  * Chandra fixed an issue in the ReST adapters that could cause values to be truncated to `MAX_INT`.
  * Markus did a few fixes and improvements in the new Bootstrap 4 UI.
  * Alejandro fixed an issue in the MIB parser UI.


## Upcoming Events and Appearances

* **[Official OpenNMS Training in Apex, NC - March 25th through 29th](https://opennms.discourse.group/t/official-opennms-training-in-apex-25th-until-29th-march-2019/239)**

  The OpenNMS Group will be doing training at our headquarters in Apex, NC the week of March 25th.

  You can register online at [the OpenNMS web site](https://www.opennms.com/training/).

* **[NETHINKS Training in Fulda, Germany - June and October](https://www.nethinks.com/opennms-schulung.html)**

  NETHINKS will be offering German-language training in their headquarters in Fulda, Germany.

  There are 2 dates available:
  * June 3rd through 7th
  * October 21st through 25th

  For more details or to sign up, see the [NETHINKS training page](https://www.nethinks.com/opennms-schulung.html).

* **OpenNMS Dev-Jam 2019 in Minneapolis, MN**

  Dev-Jam 2019 will be once again on the University of Minneapolis campus, from June 24th through 28th.

  More details will be forthcoming as we start to put together plans,
  but please plan on joining us for a week of fun, coding, and frivolity.

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

* [HELM-131](https://issues.opennms.org/browse/HELM-131): Template Variables Don't Support Nested Parenthesis
* [HZN-1474](https://issues.opennms.org/browse/HZN-1474): Node Meta-Data / KVP Support
* [HZN-1475](https://issues.opennms.org/browse/HZN-1475): Extend topology generator and test suite to support bridge topology
* [HZN-1481](https://issues.opennms.org/browse/HZN-1481): Show managed object type and instance on alarm details page
* [HZN-1483](https://issues.opennms.org/browse/HZN-1483): Update topology code to make the topology that is sent via Kafka more convenient for consumption
* [HZN-1484](https://issues.opennms.org/browse/HZN-1484): Templates are dropped if intermixed with data in wrong order
* [HZN-1487](https://issues.opennms.org/browse/HZN-1487): Maximum number of services in node details page should be configurable
* [NMS-10516](https://issues.opennms.org/browse/NMS-10516): Collection results via Minion is limited to MAX_INT
* [NMS-10539](https://issues.opennms.org/browse/NMS-10539): Upgrade to Karaf 4.2.3
* [NMS-10558](https://issues.opennms.org/browse/NMS-10558): Upgrade to Jetty 9.4.12
* [NMS-10559](https://issues.opennms.org/browse/NMS-10559): JDBC via Minion fails to find 3rd party classes
* [NMS-10589](https://issues.opennms.org/browse/NMS-10589): Poor performance when using filters in the Measurements API
* [NMS-10593](https://issues.opennms.org/browse/NMS-10593): Alarmd get stucks in dead-lock and stops processing events
* [NMS-10596](https://issues.opennms.org/browse/NMS-10596): Flapping Syslog Parser Integration Test
* [NMS-10601](https://issues.opennms.org/browse/NMS-10601): @PreserveOnRefresh not working for embedded Vaadin UIs
* [NMS-10603](https://issues.opennms.org/browse/NMS-10603): Fix ack Event Supporting AckAction
* [NMS-10606](https://issues.opennms.org/browse/NMS-10606): HwEntityAlias fails to be persisted
* [OCE-38](https://issues.opennms.org/browse/OCE-38): Add log rotation support to the kafka-event-mirrorer
* [OCE-40](https://issues.opennms.org/browse/OCE-40): Links from Enlinkd in the OCE graph
* [OCE-45](https://issues.opennms.org/browse/OCE-45): Prevent the opennms kafka datasource from blocking the initialization of the engine forever
* [OCE-47](https://issues.opennms.org/browse/OCE-47): Create documentation pipeline
* [OCE-49](https://issues.opennms.org/browse/OCE-49): Enable the "Edit this page" feature in the published docs
* [OCE-50](https://issues.opennms.org/browse/OCE-50): Add Math support in documentation
* [OCE-52](https://issues.opennms.org/browse/OCE-52): Deep learning engine
* [OCE-56](https://issues.opennms.org/browse/OCE-56): Kafka streams error when handling edges
* [OIA-3](https://issues.opennms.org/browse/OIA-3): Extend the SNMP datacollection configuration
* [OIA-6](https://issues.opennms.org/browse/OIA-6): Add support for provisiond requisition providers
* [OIA-7](https://issues.opennms.org/browse/OIA-7): Consume events by registering event listeners
* [OIA-9](https://issues.opennms.org/browse/OIA-9): Expose operinstruct element in EventDefinition interface