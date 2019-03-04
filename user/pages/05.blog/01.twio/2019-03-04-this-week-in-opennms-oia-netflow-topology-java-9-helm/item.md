---
title: This Week in OpenNMS - March 4th, 2019 - OIA, Netflow, Topology, Java 9+, Helm, and More!
date: 10:40 03/04/2019
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [jdbc, minion, topology, karaf, netflow, ipfix, snmp, datacollection, oce, alarmd, measurements, helm, nethinks, training, dev-jam, osmc]
---

It's time for This Week in OpenNMS!

Last week we worked on more OpenNMS Integration API implementations, Netflow fixes, topology data updates, the Karaf 4.2 upgrade for Java 9+ support, performance fixes, and Helm updates.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --color=always --since='2019-02-25 00:00:00' --until='2019-03-04 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->


## Github Project Updates

* __Internals, APIs, and Documentation__

  * Chandra updated the documentation to describe how to add 3rd-party JDBC drivers to the Minion.
  * Matt did more work on getting topology data from Enlinkd into OCE.
  * Patrick updated the `events:stress` Karaf command to handle node ID and interface options properly when using JEXL.
  * Dustin worked on supporting Netflow 9 and IPFIX flows that intermix templates and data in a single packet.
  * Markus continued his work on updating our embedded Karaf to 4.2.
  * Dustin and David did more work on the feature to add arbitrary metadata to nodes.
  * Chandra continued his work integrating SNMP datacollection configuration into the OIA.
  * David worked on updating OCE to use the JSR-233 inventory model internally.
  * Antonio added some examples to the topology test generator.
  * Jesse worked on fixing a deadlock in Alarmd while waiting for transactions to commit.

* __Web & UI__

  * Jesse worked on an update to the measurements API to improve performance when using filters.
  * I fixed a bug in the new Helm templating that broke when using nested parentheses in variables.
  * Chandra updated the web UI to show managed object type and instance on the alarm details page.


## Updates to the Discourse Forum

Ronny has updated the knowledge base section of [the Discourse forum](https://opennms.discourse.group/) to be in "wiki" mode, so anyone can update and improve knowledge base posts over time.

Additionally, there is now support for marking a topic as "solved" so if you have asked a question and someone gave a good answer, you can make it easier for others to find the solution.

Thanks to everyone who has been using it, we've gotten a ton of great conversations and additions to the knowledge base already.



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

* [HZN-1479](https://issues.opennms.org/browse/HZN-1479): Enable instant refresh in topology generator based on the recent changes in the topology code
* [HZN-1480](https://issues.opennms.org/browse/HZN-1480): Telemetry UdpListener - False Positive Log Message Condition
* [HZN-1482](https://issues.opennms.org/browse/HZN-1482): Update the topology generator so that topology is sent to the TopologyDAO
* [NMS-10591](https://issues.opennms.org/browse/NMS-10591): Update webapp copyright dates to 2019
