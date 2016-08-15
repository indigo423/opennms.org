---
title: This Week in OpenNMS: August 15th, 2016
date: 12:57 08/15/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, icmp, jetty, drools, jasper, minion, poller, syslog, traps, imap, ldap, rest, gwt, angularjs, jms, activemq, eventd, ouce, ohio linux fest, all things open, ato, mc frontalot, the doubleclicks, kings barcade, osmc]
---

In the last week we worked on ICMP, upgrading to Jetty 9, Minion, SSL, ReST updates, replacing GWT with AngularJS, and Eventd.

<!-- git log --all --no-merges --since='2016-08-08 00:00:00' --until='2016-08-15 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)'  | sort | less -R -->

Github Project Updates
----------------------

* __ICMP Enhancements__

  Since a bit before Dev-Jam, I have been working on a big update to the ICMP code, which includes adding support for the "Don't Fragment" bit, DSCP traffic control, and being able to ping as non-root.  This work is getting wrapped up and will be merged into `develop` (future OpenNMS 19.x).

* __Jetty/Drools/Jasper Update__

  As part of the work to update to the latest Jetty (with websocket and HTTP/2 support), Jesse has been also working on some dependencies that conflict, including updating our Drools and JasperReports to the latest versions.

* __Minion__

  Jesse and Markus did more work on making code location-aware for Minion support.  Chandra continued work on getting poller support in the Minion.  Seth spent more time on improving the syslog and trap code.

* __SSL Detector Support__

  Cyrille added an IMAPS detector, and cleaned up documentation for LDAPS support.

* __ReST API Updates__

  Alejandro spent some time fixing ReST bugs and updating ReST documentation.

* __GWT Widget Replacement__

  Alejandro wrapped up and merged his Dev-Jam project of replacing GWT widgets with lightweight AngularJS components as well as improving our JavaScript/AngularJS build system.

* __JMS Eventd__

  Seth continued work on replacing Eventd with ActiveMQ.

Upcoming Events and Appearances
-------------------------------

* __[OpenNMS User Conference Europe - September 13th through September 15th, 2016](https://ouce.opennms.eu)__

  OUCE 2016 will be at the University of Applied Science in Fulda, Germany from September 13th through 15th. The schedule, venue information, and ticketing is all available at the [OUCE site](https://ouce.opennms.eu).

* __[Ohio Linux Fest - October 7th and 8th, 2016](https://ohiolinux.org/)__

  Jeff will be speaking at Ohio Linux Fest on the current state of OpenNMS and what we're planning for the future.

* __[All Things Open - October 26th and 27th, 2016](https://allthingsopen.org/)__

  Tarus will be speaking at the All Things Open conference on the subject of The Internet of Silos.  A number of OpenNMS folks will be in attendance, so if you see us, don't hesitate to say "hi."  We'll be sponsoring an evening concert of [MC Frontalot and The Doubleclicks](http://www.adventuresinoss.com/2016/07/05/mc-frontalot-and-the-doubleclicks-at-all-things-open/) at [King's Barcade](http://www.kingsbarcade.com/) Wednesday night.

* __[Open Source Monitoring Conference - November 29th through December 2nd, 2016](https://www.netways.de/en/events_trainings/osmc/overview/)__

  Jeff will be speaking at OSMC on the current state of OpenNMS and what we're planning for the future.

Until Next Week…
----------------

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

- Ben

Resolved Issues Since Last TWiO
-------------------------------

* [HZN-487](http://issues.opennms.org/browse/HZN-487): Modularize Discovery
* [HZN-783](http://issues.opennms.org/browse/HZN-783): Modularize Provisiond
* [HZN-860](http://issues.opennms.org/browse/HZN-860): Add support for using an external broker
* [HZN-861](http://issues.opennms.org/browse/HZN-861): Update queue and topic names to support multi-tenancy
* [NMS-7236](http://issues.opennms.org/browse/NMS-7236): Syslogd may not associate messages with new nodes without a restart
* [NMS-8521](http://issues.opennms.org/browse/NMS-8521): Documentation for the Requisition ReST API is confusing
* [NMS-8604](http://issues.opennms.org/browse/NMS-8604): Missing documentation for ifservices ReST end point.
* [NMS-8629](http://issues.opennms.org/browse/NMS-8629): Missing documentation for categories ReST end point.
* [NMS-8637](http://issues.opennms.org/browse/NMS-8637): The categories ReST end point returns HTTP 500 when querying it with a browser.
* [NMS-8675](http://issues.opennms.org/browse/NMS-8675): Upgrade protobuf to 2.6.1 (from 2.2.0)
* [NMS-8676](http://issues.opennms.org/browse/NMS-8676): Upgrade Drools to 6.4.0.Final (from 6.0.1.Final)

<!--
  http://issues.opennms.org/issues/?filter=13303
  :1,$s#^[^\t]*\t[^\t]*\t\([^\t]*\)\t#* [\1](http://issues.opennms.org/browse/\1): #
  :1,$s#[\t ]*$#\1#
-->
