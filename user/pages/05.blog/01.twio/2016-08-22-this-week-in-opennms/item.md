---
title: This Week in OpenNMS: August 15th, 2016
date: 12:57 08/22/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, icmp, dscp, don't fragment, cxf, drools, jetty, jasper, quartz, minion, kafka, discovery, trapd, topology, gwt, angularjs, ohio linux fest, all things open, ato, mc frontalot, the doubleclicks, kings barcade, osmc]
---

In the last week we worked on ICMP enhancements, modernizing dependencies, Minion, Topology Maps, and GWT to AngularJS conversion.

<!-- git log --all --no-merges --since='2016-08-15 00:00:00' --until='2016-08-22 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)'  | sort | less -R -->

Github Project Updates
----------------------

* __ICMP Enhancements__

  Since a bit before Dev-Jam, I have been working on a big update to the ICMP code, which includes adding support for the "Don't Fragment" bit, DSCP traffic control, and (eventually) being able to ping as non-root.  This work is finished and will be merged into `develop` (future OpenNMS 19.x) after code review.

* __Modernized Dependencies__

  Jesse has continued his work on modernizing CXF, Drools, Jetty, and Jasper support. Seth is working on updating Quartz.

* __Minion__

  Chandra, Jesse, and Seth continued the work on getting poller support in the Minion.  Pradeep did some more work on Kafka integration.  Seth worked on cleaning up the interface-to-node caching used by both discovery and trapd as well as other trapd and Kafka-related code.

* __Topology Maps__

  Markus did some work on making it possible to easily see and select multiple types of links between devices by giving them varying arcs.

* __GWT Widget Replacement__

  Alejandro did some more work on converting GWT code to AngularJS, as well as extending smoke test coverage.


Upcoming Events and Appearances
-------------------------------

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

* [HZN-266](http://issues.opennms.org/browse/HZN-266): Migrate discovery to Hibernate
* [HZN-270](http://issues.opennms.org/browse/HZN-270): Migrate syslogd to Hibernate
* [HZN-636](http://issues.opennms.org/browse/HZN-636): Add ability to fetch Trapd config via REST
* [HZN-741](http://issues.opennms.org/browse/HZN-741): Write kafka blueprint for trapd
* [HZN-742](http://issues.opennms.org/browse/HZN-742): write junits for blueprint-syslog-handler-kafka.xml
* [HZN-744](http://issues.opennms.org/browse/HZN-744): write junit for blueprint-trapd-handler-kafka.xml
* [HZN-747](http://issues.opennms.org/browse/HZN-747): Provide authentication for SNMP v3 via REST call
* [HZN-750](http://issues.opennms.org/browse/HZN-750): Write jUnit for authentication for SNMP v3 via REST call
* [HZN-752](http://issues.opennms.org/browse/HZN-752): Load feature opennms-trapd-handler-kafka as an OSGi bundle
* [HZN-753](http://issues.opennms.org/browse/HZN-753): Resolve opennms-syslogd-handler-kafka dependency issues
* [HZN-779](http://issues.opennms.org/browse/HZN-779): Write blueprint-syslog-handler-kafka-default.xml for Syslog
* [HZN-780](http://issues.opennms.org/browse/HZN-780): Write blueprint-trapd-handler-kafka-default.xml for Trapd
* [HZN-781](http://issues.opennms.org/browse/HZN-781): Write jUnit for blueprint-syslog-handler-kafka-default.xml
* [HZN-782](http://issues.opennms.org/browse/HZN-782): Write jUnit for blueprint-trapd-handler-kafka-default.xml
* [HZN-816](http://issues.opennms.org/browse/HZN-816): Syslog IP-to-node-ID cache needs to be location-aware
* [HZN-829](http://issues.opennms.org/browse/HZN-829): Make the changes to fix duplicate trap varbinds for kafka blueprints
* [NMS-8605](http://issues.opennms.org/browse/NMS-8605): ClassNotFoundException lombok.javac.apt.Processor while compiling Jasper Reports
* [NMS-8635](http://issues.opennms.org/browse/NMS-8635): There is no IMAPS monitor
* [NMS-8641](http://issues.opennms.org/browse/NMS-8641): Replace GWT with Angular: IP/SNMP Interfaces panel on the node page.
* [NMS-8642](http://issues.opennms.org/browse/NMS-8642): Replace GWT with Angular: search box for resources page on front page.
* [NMS-8643](http://issues.opennms.org/browse/NMS-8643): Replace GWT with Angular: search box for KSC reports on front page.
* [NMS-8646](http://issues.opennms.org/browse/NMS-8646): Replace GWT with Angular: choose resources page
* [NMS-8674](http://issues.opennms.org/browse/NMS-8674): Upgrade Jetty to latest 9.3.x
* [NMS-8677](http://issues.opennms.org/browse/NMS-8677): Upgrade JasperReports to 6.3.0 (from 6.1.1)
* [NMS-8678](http://issues.opennms.org/browse/NMS-8678): Upgrade Jetty to 9.3.11.v20160721

<!--
  http://issues.opennms.org/issues/?filter=13303
  :1,$s#^[^\t]*\t[^\t]*\t\([^\t]*\)\t#* [\1](http://issues.opennms.org/browse/\1): #
  :1,$s#[\t ]*$#\1#
-->
