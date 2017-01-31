---
title: This Week in OpenNMS: August 29th, 2016
date: 11:26 08/29/2016
author: Jeff Gehlbach
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, icmp, minion, gwt, angularjs, ouce, ohio linux fest, dbatlanta, all things open, ato, mc frontalot, the doubleclicks, kings barcade, osmc]
---

In the last week we worked on Minion, Elasticsearch integration, GWT to AngularJS conversion, non-privileged ICMP operations, and the OSGi plugin manager.

<!-- git log --all --no-merges --since='2016-08-22 00:00:00' --until='2016-08-29 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)'  | sort | less -R -->

Github Project Updates
----------------------

* __Detector and Poller Refactoring__

  Chandra and Jesse did some refactoring in both the core and the periphery (local and Minion) of Pollerd and Provisiond.

* __Elasticsearch Integration__

  Craig fixed a few dependencies to enable a backport of the ES ReST service endpoint.

* __Web UI GWT to Angular Conversion__

  Alejandro replaced more GWT web components with Angular equivalents, in areas including the node asset editor, resource graphs, and KSC reports workflows.

* __Least-Privilege Runtime__

  Ben laid some more pavers on the long road toward getting ICMP working as a non-root user, specifically in the JNA library.

* __OSGi Plugin Manager__

  Craig bolstered the foundation for the plugin manager that he's been working on for some time now.

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

- Jeff

Resolved Issues Since Last TWiO
-------------------------------

* [NMS-8644](http://issues.opennms.org/browse/NMS-8644): Replace GWT with Angular: add to KSC report on the resource graphs page.
* [NMS-8650](http://issues.opennms.org/browse/NMS-8650): Replace GWT with Angular: configure SNMP data collection per interface
* [NMS-8695](http://issues.opennms.org/browse/NMS-8695): OpenNMS version in release 18.0.1 branch is not the same as in stable

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->
