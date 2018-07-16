---
title: This Week in OpenNMS: July 16th, 2018
date: 11:55 07/16/2018
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [sentinel, kafka, minion, alarmd, sextant, trapd, topology, enlinkd, hawtio, uknof, ouce]
---

It's time for This Week in OpenNMS!

Last week we continued development of the Sentinel container, RPC over Kafka, and Sextant, as well as other bug fixing.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2018-07-09 00:00:00' --until='2018-07-16 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->


## Github Project Updates

* __Internals, APIs, and Documentation__

  * Markus did more work on the Sentinel container, cleaning up what DAOs are accessible and other cleanup.
  * Markus has started work on a health check tool that will work across Sentinel and Minion containers.
  * Chandra did more work on support for RPC over Kafka.
  * Jesse and David continued their work on a next-generation Alarmd (codename: Sextant) with full rules-based workflow management.
  * Ronny did more work streamlining documentation.
  * Chandra fixed Trapd and SNMP configs to properly validate against the XSD.
  * David Hustace fixed a bug in alarm counter incrementing.
  * Cyrille Bollu fixed a path outage documentation bug.

* __Web & UI__

  * Antonio continued his work on fixing the topology UI showing enlinkd links properly.
  * Markus and Patrick worked on changes to make dates in the web UI consistent, and also configurable.
  * I worked on including the Hawtio webapp in the OpenNMS distribution.
  * David worked on adding Sextant support to Helm.
  * Brynjar Eide added support for overriding time intervals and max datapoints in Helm.


## Upcoming Events and Appearances

* **[UK Network Operators' Forum - September 11th, 2018](https://indico.uknof.org.uk/event/43)**

  Tarus will be [speaking at the UK Network Operators Forum](https://indico.uknof.org.uk/event/43/contributions) on September 11th, 2018.
  He'll be giving a talk called "What's Happening with OpenNMS" going over some of the recent enhancements to OpenNMS to extend scalability.


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

* [HELM-100](https://issues.opennms.org/browse/HELM-100): Allow specifying default and per query time intervals and max datapoints per query
* [HZN-1321](https://issues.opennms.org/browse/HZN-1321): Add ENTITY-MIB support for the 'entAliasMappingTable'
* [HZN-1322](https://issues.opennms.org/browse/HZN-1322): Add hardware info the node objects forwarded by the Kafka producer
* [HZN-1341](https://issues.opennms.org/browse/HZN-1341): Remove the karaf-extender from sentinel
* [HZN-1342](https://issues.opennms.org/browse/HZN-1342): Verify that all exposed DAOs for sentinel actually run on sentinel
* [HZN-1349](https://issues.opennms.org/browse/HZN-1349): Remove DemandPollDao and related classes as it is not used at the moment
* [HZN-1350](https://issues.opennms.org/browse/HZN-1350): Enhance REST API and HELM to allow datasource to be built from Situations
* [HZN-1352](https://issues.opennms.org/browse/HZN-1352): Allow any Alarm to be a Situation
* [NMS-8295](https://issues.opennms.org/browse/NMS-8295): bridge topology is wrong on nodelink.jsp
* [NMS-9925](https://issues.opennms.org/browse/NMS-9925): Can't install OpenNMS on Ubuntu 18.04
* [NMS-10195](https://issues.opennms.org/browse/NMS-10195): MIB2 interface errors are missing
* [NMS-10230](https://issues.opennms.org/browse/NMS-10230): repace current formatting in JSPs by custom tag
* [NMS-10231](https://issues.opennms.org/browse/NMS-10231): define a property in opnnms.properties for date formatting
* [NMS-10243](https://issues.opennms.org/browse/NMS-10243): apply custom tag to ncs-alarms.jsp
* [NMS-10255](https://issues.opennms.org/browse/NMS-10255): Bump asciidoctor from 1.5.6 to 1.5.7
* [NMS-10258](https://issues.opennms.org/browse/NMS-10258): enlinkd prints bridge forwarding table debug messages in output.log
