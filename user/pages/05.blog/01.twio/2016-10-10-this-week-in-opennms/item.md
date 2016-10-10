---
title: This Week in OpenNMS: October 10th, 2016
date: 11:26 10/10/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, data collection, snmp, graphs, elasticsearch, xmlcollector, jmx, trapd, provisiond, poller, rest, kafka, minion, leaflet, discovery, postgresql, ohio linux fest, dbatlanta, all things open, ato, mc frontalot, the doubleclicks, kings barcade, osmc]
---

In the last week we worked on data collection, Minion, maps, users and groups, and bug fixes.

<!-- git log --all --no-merges --since='2016-10-03 00:00:00' --until='2016-10-10 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)'  | sort | less -R -->

Github Project Updates
----------------------

* __Data Collection__

  Alejandro fixed an issue in SNMP counter wrap causing spikes in graphs.  Ronny added collection configuration for Elasticsearch stats (using the XmlCollector).  Seth cleaned up a bunch of graph definitions.  Chandra fixed the JMX Detector to be able to handle timeouts properly despite the Java JMX APIs being ancient and unable to handle it themselves. (but we're not bitter...)

* __Minion__

  Chandra worked on handling locations in SNMP config and fixed an issue with Trapd on shutdown.  He also worked on exposing location-based definitions in provisiond, poller, and ReST.  Pradeep added more Kafka metrics to be monitored through JMX.  I worked on cleaning up the Minion assembly and packaging, and making it so Minion can run as non-root.  Seth worked on renaming the `localhost` default location to `Default` to make it less confusing.

* __Maps__

  I updated our leaflet maps (geomaps) to the latest version of leaflet and the markercluster service.  Dustin fixed resource graph rendering in the topology map info panel.

* __Users and Groups__

  Alejandro did more work on migrating the info stored in `magic-users.properties` to `users.xml` including an upgrade script.

* __Bug Fixes__

  Seth fixed a regression in 18 that removed the ability to allow nodes to be discovered without a default foreign source.  Alejandro fixed a bug that prevented installation using PostgreSQL 9.6.  We've also been spending time fixing a bunch of smaller bugs and starting to identify blockers for 19.0.0, due in the next few months.

Upcoming Events and Appearances
-------------------------------

* __[DBAtlanta Meetup - October 12th, 2016](https://www.meetup.com/DBAtlanta/events/233373942/)__

  Jeff will be giving a talk about Newts, the time-series data store designed and built for OpenNMS.

* __[All Things Open - October 26th and 27th, 2016](https://allthingsopen.org/)__

  Tarus will be speaking at the All Things Open conference on the subject of The Internet of Silos.  A number of OpenNMS folks will be in attendance, so if you see us, don't hesitate to say "hi."  We'll be sponsoring an evening concert of [MC Frontalot and The Doubleclicks](http://www.adventuresinoss.com/2016/07/05/mc-frontalot-and-the-doubleclicks-at-all-things-open/) at [King's Barcade](http://www.kingsbarcade.com/) Wednesday night.

* __[Open Source Monitoring Conference - November 29th through December 2nd, 2016](https://www.netways.de/en/events_trainings/osmc/overview/)__

  Jeff will be speaking at OSMC on the current state of OpenNMS and what we're planning for the future.

Until Next Week…
----------------

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

Resolved Issues Since Last TWiO
-------------------------------

* [HZN-445](https://issues.opennms.org/browse/HZN-445): Implement ActiveMQ authentication mechanism
* [HZN-755](https://issues.opennms.org/browse/HZN-755): Use Backshift graphs in custom info panels
* [HZN-879](https://issues.opennms.org/browse/HZN-879): Extend snmp-config.xml to support location based definitions
* [HZN-902](https://issues.opennms.org/browse/HZN-902): Integrate location based Definitions in provision/poller/REST APIs
* [NMS-7106](https://issues.opennms.org/browse/NMS-7106): If a target node is rebooted the RRD/JRB files contains spikes because the sysUpTime check is not working
* [NMS-7908](https://issues.opennms.org/browse/NMS-7908): Replace the X with back button in the Angular provisioning WebUI
* [NMS-8327](https://issues.opennms.org/browse/NMS-8327): JMXDetector does not respect the 'timeout'
* [NMS-8545](https://issues.opennms.org/browse/NMS-8545): Create JMX monitoring definitions for Apache Kafka
* [NMS-8697](https://issues.opennms.org/browse/NMS-8697): Collect Elasticsearch stats via REST using the XmlCollector
* [NMS-8760](https://issues.opennms.org/browse/NMS-8760): Override ShutdownStrategy in Syslogd, Trapd Camel contexts
* [NMS-8761](https://issues.opennms.org/browse/NMS-8761): pb with Bridge Forwarding Table Links found by Enhanced Linkd
* [NMS-8790](https://issues.opennms.org/browse/NMS-8790): The search page for events is not working as expected

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->
