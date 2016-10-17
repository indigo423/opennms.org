---
title: This Week in OpenNMS: October 10th, 2016
date: 11:26 10/17/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, jmx, data collection, minion, packaging, rpm, topology maps, resource graphs, breadcrumbs, users, bug fixes, all things open, ato, mc frontalot, the doubleclicks, kings barcade, osmc]
---

In the last week we worked on data collection, Minion, maps, users and groups, and bug fixes.

<!-- git log --all --no-merges --since='2016-10-10 00:00:00' --until='2016-10-17 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)' | sort | less -R -->

Github Project Updates
----------------------

* __Data Collection__

  Chandra added logging for JMX task completion.

* __Minion__

  I worked more on Minion packaging and making the Minion packages run as a normal user on non-privileged ports by default.  Christian updated the node page filters and node search to deal with monitoring location.  Jesse cleaned up Minion startup to be faster and avoid unnecessary refreshes, as well as working on some Minion UI proof-of-concept code.

* __Maps__

  Dustin worked on fixing resource graph rendering in info panels.  Markus worked on history-tracking and breadcrumbs in the topology maps.

* __Users and Groups__

  Alejandro continued his work on migrating the info stored in `magic-users.properties` to `users.xml` including an upgrade script.

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

* [HZN-857](https://issues.opennms.org/browse/HZN-857): Change Trapd's SNMPv3 REST operations to use RestClient
* [HZN-858](https://issues.opennms.org/browse/HZN-858): Implement a Pinger RPC Module able to ping from local and remote locations
* [HZN-871](https://issues.opennms.org/browse/HZN-871): Merge magic-users.properties into users.xml
* [HZN-895](https://issues.opennms.org/browse/HZN-895): History feature in Topology is no longer working
* [NMS-7957](https://issues.opennms.org/browse/NMS-7957): Asset page give a Null Pointer exception enter empty data
* [NMS-8714](https://issues.opennms.org/browse/NMS-8714): Minion code throws "javax.jms.IllegalStateException: The Session is closed"
* [NMS-8717](https://issues.opennms.org/browse/NMS-8717): Geographical Maps do not show images
* [NMS-8775](https://issues.opennms.org/browse/NMS-8775): RRDtool 1.6 doesn't like vames called ds
* [NMS-8779](https://issues.opennms.org/browse/NMS-8779): Installer script doesn't work with PostgreSQL 9.6
* [NMS-8780](https://issues.opennms.org/browse/NMS-8780): Upgrade LeafLet JS to its latest version
* [NMS-8781](https://issues.opennms.org/browse/NMS-8781): Docker tests fail if Minion SSH service refreshes while SSH is being checked
* [NMS-8783](https://issues.opennms.org/browse/NMS-8783): Elasticsearch Test Cluster is started even if tests are skipped
* [NMS-8786](https://issues.opennms.org/browse/NMS-8786): Bug in juniper graphs
* [NMS-8794](https://issues.opennms.org/browse/NMS-8794): The "Recent Events" in the node page, shows HTML tags on the message
* [NMS-8802](https://issues.opennms.org/browse/NMS-8802): Bundles are refreshed many times during Minion startup

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->
