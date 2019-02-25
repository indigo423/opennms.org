---
title: This Week in OpenNMS - February 25th, 2019 - Correlation, Data Collection, and Topology
date: 11:21 02/25/2019
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [drools, oia, jdbc, minion, java9, correlation, oce, enlinkd, topology, helm, nethinks, training, osmc]
---

It's time for This Week in OpenNMS!

Last week we worked on Java 9+ fixes, correlation, data collection in OIA, and topology.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --color=always --since='2019-02-19 00:00:00' --until='2019-02-25 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->


## Github Project Updates

* __Internals, APIs, and Documentation__

  * I wrapped up my fixes to the new refactored `opennms`, `runjava` and `find-java` scripts.
  * Jesse continued to work on updating the correlation engine to use Drools internally.
  * Chandra continued to work on data collection support in the integration API.
  * Dustin did more work on arbitrary node metadata support.
  * Chandra worked on JDBC driver loading on Minions.
  * Matt did more work on building with Java 9+.
  * David worked on making the inventory model used by the correlation engine configurable.
  * Matt continued to work on adapting topology code to the new refactored Enlinkd and adding tests.

* __Web & UI__

  * I worked on wrapping up release stuff for Helm 3.0.


## Horizon and Meridian Releases

We released OpenNMS Horizon 23.0.3 and Meridians 2016.1.18, 2017.1.14, and 2018.1.5.

The majority of the changes were bug fixes, along with a number of performance improvements in Horizon and in Meridian 2018.

For a complete list of changes, see the relevant release announcements:

* [Horizon 23.0.3](https://www.opennms.org/en/blog/releases/2019-02-21-opennms-horizon-23.0.3)
* [Meridian 2016.1.18](https://www.opennms.com/2019/02/22/opennms-meridian-2016-1-18-released/)
* [Meridian 2017.1.14](https://www.opennms.com/2019/02/22/opennms-meridian-2017-1-14-released/)
* [Meridian 2018.1.5](https://www.opennms.com/2019/02/22/opennms-meridian-2018-1-5-released/)


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

* [HZN-1468](https://issues.opennms.org/browse/HZN-1468): Remove features-maven-plugin from the build
* [HZN-1482](https://issues.opennms.org/browse/HZN-1482): Update the topology generator so that topology is sent to the TopologyDAO
* [NMS-10549](https://issues.opennms.org/browse/NMS-10549): Typo in Northbound registerNorthnounders method
* [NMS-10566](https://issues.opennms.org/browse/NMS-10566): Update default Syslog parser to use the RadixTreeSyslogParser
* [NMS-10567](https://issues.opennms.org/browse/NMS-10567): Browser crashes when browser notifications are enabled and OpenNMS gets unreachable
* [NMS-10579](https://issues.opennms.org/browse/NMS-10579): Start with the start script throws bad substitution error
* [OIA-5](https://issues.opennms.org/browse/OIA-5): Add support for Ticketing Plugin in Integration API