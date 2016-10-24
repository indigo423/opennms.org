---
title: This Week in OpenNMS: October 24th, 2016
date: 11:26 10/24/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, topology maps, breadcrumbs, castor, jaxb, eventd, minion, rpms, location, trapd, rest, rpc, bug fixes, all things open, ato, mc frontalot, the doubleclicks, kings barcade, osmc]
---

In the last week we worked on maps, various internals, Minion, and bug fixes.

<!-- git log --all --no-merges --since='2016-10-17 00:00:00' --until='2016-10-24 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)' | sort | less -R -->

Github Project Updates
----------------------

* __Maps__

  Markus fixed a singleton/scope bug, as well as doing more work on breadcrumbs/history in the topology maps.

* __Internals__

  Jesse converted more configuration file parsing from the old Castor parser to JAXB.  He also worked on some code to stress-test Eventd.

* __Minion__

  I finished my work on Minion packaging and making the Minion packages run as a normal user on non-privileged ports by default.  Jesse continued Seth's work on cleaning up "default location" in various parts of the code.  Malatesh updated Trapd's config retrieval calls to use RestClient.  Chandra made an RPC module for requesting a ping sweep from the Minion.

* __Bug Fixes__

  We've been spending time fixing a bunch of smaller bugs and starting to identify blockers for 19.0.0, due in the next few months.

Upcoming Events and Appearances
-------------------------------

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

* [HZN-316](https://issues.opennms.org/browse/HZN-316): Add location filter to node list in UI
* [HZN-621](https://issues.opennms.org/browse/HZN-621): Run as a 'minion' user instead of 'root'
* [HZN-887](https://issues.opennms.org/browse/HZN-887): Breadcrumbs should reflect the (navigation) path
* [HZN-920](https://issues.opennms.org/browse/HZN-920): Improve PingWindow to support locations and ip interfaces of associated node
* [NMS-8261](https://issues.opennms.org/browse/NMS-8261): Unused sequences in the database: reportnxtid, mapnxtid
* [NMS-8420](https://issues.opennms.org/browse/NMS-8420): Enlinkd Topology: Cannot search for nodes without alarms
* [NMS-8749](https://issues.opennms.org/browse/NMS-8749): Change default monitoring location name from "localhost" to "Default"
* [NMS-8812](https://issues.opennms.org/browse/NMS-8812): Broken default location handling in snmp-config.xml
* [NMS-8827](https://issues.opennms.org/browse/NMS-8827): Minion console is unresponsive

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->
