---
title: This Week in OpenNMS: September 12th, 2016
date: 11:26 09/12/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, data collection, minion, jmx, heartbeat, topology, linkd, provisioning, provisiond, dns, gwt, angular, ksc, snmp, snmp4j, osgi, ouce, ohio linux fest, dbatlanta, all things open, ato, mc frontalot, the doubleclicks, kings barcade, osmc]
---

In the last week we worked on data collection, the Minion, the topology UI, provisioning, web UI cleanup, SNMP, roles and authentication, and the OSGi plugin manager.

<!-- git log --all --no-merges --since='2016-08-29 00:00:00' --until='2016-09-12 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)'  | sort | less -R -->

Github Project Updates
----------------------

* __Data Collection__

  Jesse improved the datacollection APIs and modernized the HTTP, JDBC, JMX, NSClient, TCA, VMware, WMI, and XML collectors.

* __Minion__

  Pradeep, Pavan, and Seth worked on JMX collection in the minion.  Dustin improved the minion's heartbeat support as well as the handling of node location changes.

* __Topology UI__

  Jesse changed the edge path drawing to use quadratic bezier curves to improve the visibility when there are multiple links.

* __Provisioning__

  Christian has been working on support for minion requisition creation.  Chandra added support for querying DNS from the minion's point-of-view and integrated support for that into Provisiond.

* __Web UI Cleanup__

  Alejandro did more work on the GWT to Angular conversion in the web UI, fixing unit tests and asset page access, as well as improving report search and KSC ReST access.  He also cleaned up user role editing to be clearer, and fixed marker-cluster rendering in the geomaps.

* __SNMP__

  Seth worked on some low-level SNMP API code for improved handling of SNMP4J PDUs.  Jeff fixed the display of some SNMP trap and sysName data.

* __Roles and Authentication__

  Alejandro did some work on obsoleting `magic-users.properties`, merging it into `users.xml`. (Editor's note: "WHOOOOOO!")

* __OSGi Plugin Manager__

  Craig fixed the plugin loader to make sure the license manager is loaded first.  He also added support for handling alarm memo changes.

Upcoming Events and Appearances
-------------------------------

* __[OUCE 2016 - Sad News](http://www.opennms.eu/2016/08/ouce-2016-sad-news/)__

  The OpenNMS User Conference Europe 2016 has been canceled. If you need assistance canceling a hotel reservation, the Foundation staff is ready to help.

* __[Ohio Linux Fest - October 7th and 8th, 2016](https://ohiolinux.org/)__

  Jeff will be speaking at Ohio Linux Fest on the current state of OpenNMS and what we're planning for the future.

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

* [HZN-739](http://issues.opennms.org/browse/HZN-739): Minion SNMP support
* [HZN-863](http://issues.opennms.org/browse/HZN-863): Change ID of camel route for SyslogReceiverCamelNettyImpl
* [HZN-865](http://issues.opennms.org/browse/HZN-865): Create method that converts PDU objects into SNMP bytes
* [NMS-2598](http://issues.opennms.org/browse/NMS-2598): Edit surveillance category shows deleted nodes
* [NMS-7934](http://issues.opennms.org/browse/NMS-7934): No event for Informational syslog
* [NMS-8035](http://issues.opennms.org/browse/NMS-8035): IE11 and Firefox Browsers Display Double Scroll Bars for the RTC: Service Monitoring Table in the Ops Panel
* [NMS-8527](http://issues.opennms.org/browse/NMS-8527): Find a faster way of determining root-cause or impacting vertices
* [NMS-8647](http://issues.opennms.org/browse/NMS-8647): Replace GWT with Angular: choose resources (part of KSC editor wizard)
* [NMS-8702](http://issues.opennms.org/browse/NMS-8702): View current Site outages does not filter for "building"
* [NMS-8718](http://issues.opennms.org/browse/NMS-8718): vmwarecimquery and vmwareconfigbuilder tools is not working
* [NMS-8719](http://issues.opennms.org/browse/NMS-8719): Mark-Clusters are not rendered properly on GeoMaps (develop only)


<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->
