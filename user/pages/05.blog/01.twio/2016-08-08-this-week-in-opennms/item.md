---
title: This Week in OpenNMS: August 8th, 2016
date: 12:57 08/08/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, minion, syslogd, trapd, jmx, kafka, provisioning, detectors, pdf, jar, jnlp, freebsd, jna, jms, eventd, activemq, camel, gwt, angularjs, ouce, training, all things open, ato, mc frontalot, the doubleclicks, kings barcade]
---

In the last week we worked on minion, topology maps and BSM, JNA ICMP, replacing Eventd with JMS, and replacing GWT widgets with AngularJS.

<!-- git log --all --no-merges --since='2016-08-01 00:00:00' --until='2016-08-08 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)'  | sort | less -R -->

Github Project Updates
----------------------

* __Minion__

  Pradeep, Malatesh, and Deepak did more work on minion syslog, trap, JMX, and kafka code.  Chandra did more work on provisioning detector support in the minion.

* __Topology Maps and Business Service Monitor__

  Christian did more work on his trend charts.

* __Build System__

  Markus's changes to speed up builds of OpenNMS got merged to the `develop` branch.  Now PDF-generation, jar signing, and JNLP signing are off by default and can be optionally enabled with the `-Prun-expensive-tasks` profile option.

* __FreeBSD Support__

  Ron did some work on updating our FreeBSD support in the JNA ICMP code.

* __JMS Eventd__

  Seth did more work on replacing Eventd with ActiveMQ, including adding support for using Camel `@Consume` annotations for event listeners rather than the custom `@EventHandler` annotation.

* __GWT Widget Replacement__

  Alejandro continued his Dev-Jam project of replacing GWT widgets with lightweight AngularJS components.

* __Web UI Skunkworks__

  Jesse, Ronny, Christian, Dustin, and Markus worked on a project to mock up some new web UI code, inspired by a discussion at Dev-Jam.

Upcoming Events and Appearances
-------------------------------

* __[OpenNMS User Conference Europe - Call for Papers Deadline - August 1st, 2016](http://www.opennms.eu/2016/06/call-for-papers-ouce-2016/)__

  If you wish to speak at OUCE 2016, the deadline for submitting a talk is August 1st, 2016.  You can find out more about submitting your talk [here](http://www.opennms.eu/2016/06/call-for-papers-ouce-2016/).

* __[OpenNMS Training - August 15th through 19th, 2016](http://www.opennms.com/training)__

  The OpenNMS Group has moved the next training session in Pittsboro, NC to August 15th through 19th.  For more details on OpenNMS training and signing up, see [The OpenNMS.com training page](http://www.opennms.com/training/).

* __[OpenNMS User Conference Europe - September 13th through September 15th, 2016](https://ouce.opennms.eu)__

  OUCE 2016 will be at the University of Applied Science in Fulda, Germany from September 13th through 15th.  More details will be posted as we get closer to the event.

* __[All Things Open - October 26th and 27th, 2016](https://allthingsopen.org/)__

  Tarus will be speaking at the All Things Open conference on the subject of The Internet of Silos.  Also, a bunch of OpenNMS folks will be there attending talks and stationed at the booth, so please feel free to stop by and say "hi."  We'll be sponsoring an evening concert of [MC Frontalot and The Doubleclicks](http://www.adventuresinoss.com/2016/07/05/mc-frontalot-and-the-doubleclicks-at-all-things-open/) at [King's Barcade](http://www.kingsbarcade.com/) Wednesday night.

Until Next Week…
----------------

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

- Ben

Resolved Issues Since Last TWiO
-------------------------------

* [HZN-838](http://issues.opennms.org/browse/HZN-838): Add support for all detectors to the LocationAwareDetectorClient
* [NMS-8627](http://issues.opennms.org/browse/NMS-8627): install script errors when running with dash
* [NMS-8640](http://issues.opennms.org/browse/NMS-8640): Organize and centralize all JavaScript dependencies used in opennms-webapp
* [NMS-8648](http://issues.opennms.org/browse/NMS-8648): Normalize the KSC ReST end point to show consistent content in XML an JSON
* [NMS-8649](http://issues.opennms.org/browse/NMS-8649): Create ReST end-point for assets suggestions
* [NMS-8654](http://issues.opennms.org/browse/NMS-8654): Database Reports Are Emailed When "Email report" is Unchecked
* [NMS-8655](http://issues.opennms.org/browse/NMS-8655): Custom Resource graphs draw magenta lines if "Blue" is selected
* [NMS-8658](http://issues.opennms.org/browse/NMS-8658): SVG maps shows minimum alarm severity color instead of maximum
* [NMS-8660](http://issues.opennms.org/browse/NMS-8660): Exceptions are truncated in generic info panel items

<!--
  http://issues.opennms.org/issues/?filter=13303
  :1,$s#^[^\t]*\t[^\t]*\t\([^\t]*\)\t#* [\1](http://issues.opennms.org/browse/\1): #
  :1,$s#[\t ]*$#\1#
-->
