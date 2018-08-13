---
title: This Week in OpenNMS: August 13th, 2018
date: 11:31 08/13/2018
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [metrics, syslogd, karaf, eventd, sextant, ksc, enlinkd, bootstrap, uknof, ouce]
---

It's time for This Week in OpenNMS!

Last week we worked on health check tools, karaf command shell enhancements, additional daemon reload support, Sextant alarm classification, Enlinkd in the topology UI, and more.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2018-08-06 00:00:00' --until='2018-08-13 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->


## Github Project Updates

* __Internals, APIs, and Documentation__

  * Markus did some more fixes to his new health check features.
  * Jesse cleaned up some metric-related APIs and did more work on metric checks in the health check tool.
  * Matthew fixed syslog events to be associated with the host name and/or IP that sent them, if possible.
  * Chandra added support for reloading demons from the Karaf command shell.
  * Malatesh fixed an issue with configuring the number of threads in Eventd.
  * David did more work on situation classification.
  * Chandra fixed a bug handling legacy KSC reports in recent releases.
  * Patrick made it so pollers and monitors that use HTTP are capable of honoring system proxy settings.

* __Web & UI__

  * Antonio continued his work on fixing the topology UI showing enlinkd links properly.
  * Patrick continued work on changes to make dates in the web UI consistent, and also configurable.
  * Christian fixed an issue with mis-reporting certain closed outages as current in the ReST API/donut charts.
  * Markus did more work on migrating to an updated Bootstrap theme.


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

* [HZN-1343](https://issues.opennms.org/browse/HZN-1343): Enable syslog system tests before merging features/sentinel back to develop
* [HZN-1366](https://issues.opennms.org/browse/HZN-1366): Provide tests for all *FlowAdapters
* [HZN-1369](https://issues.opennms.org/browse/HZN-1369): Display metrics from the com.codahale.metrics.MetricRegistry in the Karaf shell
* [HZN-1370](https://issues.opennms.org/browse/HZN-1370): Expose HealthChecks for registered Adapters
* [HZN-1371](https://issues.opennms.org/browse/HZN-1371): Register HealthCheck when registering a listener on minion side, similar to Adapters on Sentinel
* [HZN-1372](https://issues.opennms.org/browse/HZN-1372): Stopping the Listener- or AdapterManager bundle throws ConcurrentModificationException
* [NMS-8891](https://issues.opennms.org/browse/NMS-8891): LDAPMonitor causes Errors in ldap logfiles
* [NMS-10200](https://issues.opennms.org/browse/NMS-10200): Allow use of placeholders in parameter values of monitors
* [NMS-10212](https://issues.opennms.org/browse/NMS-10212): Radius Login Problem
* [NMS-10252](https://issues.opennms.org/browse/NMS-10252): Update Syslogd to respond to reload configuration events
* [NMS-10268](https://issues.opennms.org/browse/NMS-10268): render dateformat for Vaadin
* [NMS-10271](https://issues.opennms.org/browse/NMS-10271): Syslog messages should default to using the time at which they were received
* [NMS-10272](https://issues.opennms.org/browse/NMS-10272): Syslog messages should default to being associated with the hosts from which they were received
* [NMS-10275](https://issues.opennms.org/browse/NMS-10275): Document notifd's match-all parameter
* [NMS-10293](https://issues.opennms.org/browse/NMS-10293): Doughnut chart shows certain closed outages as "current"
* [NMS-10308](https://issues.opennms.org/browse/NMS-10308): SNMP monitor doesn't take service down
* [NMS-10309](https://issues.opennms.org/browse/NMS-10309): KSC Report Changes Destroys Existing Reports
* [NMS-10310](https://issues.opennms.org/browse/NMS-10310): Kafka consumers on Sentinel are not shown on kafka-manager