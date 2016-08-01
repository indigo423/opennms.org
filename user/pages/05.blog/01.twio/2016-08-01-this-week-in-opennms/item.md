---
title: This Week in OpenNMS: August 1st, 2016
date: 10:45 08/01/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, dev-jam, angularjs, gwt, bridge forwarding, enlinkd dscp, dontfragment, jicmp, provisioning, detectors, minion, sparklines, vmware, camel, kafka, syslogd, syslog, grok, pdf, geolocation, topology, newts, font awesome, eventd, ouce, training, all things open, ato, mc frontalot, the doubleclicks, kings barcade]
---

In the last week we had Dev-Jam, our yearly developer conference.

<!-- git log --all --no-merges --since='2016-07-25 00:00:00' --until='2016-08-01 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)'  | sort | less -R -->

Dev-Jam Project Updates
-----------------------

Since this week everyone was pretty much at Dev-Jam, I'm going to forgo the usual format and instead give a list of things that everyone worked on:

### Alejandro Galue

* converting AngularJS resources to a single build, normalizing configuration ([NMS-8640](http://issues.opennms.org/browse/NMS-8640))
* converting various GWT-based components to AngularJS ([NMS-8641](http://issues.opennms.org/browse/NMS-8641), [NMS-8642](http://issues.opennms.org/browse/NMS-8642), [NMS-8643](http://issues.opennms.org/browse/NMS-8643), [NMS-8644](http://issues.opennms.org/browse/NMS-8644), [NMS-8645](http://issues.opennms.org/browse/NMS-8645), [NMS-8646](http://issues.opennms.org/browse/NMS-8646), [NMS-8647](http://issues.opennms.org/browse/NMS-8647))

[plugin:youtube](https://www.youtube.com/watch?v=FkFVYTX1v6Y)

### Antonio Russo

* bridge forwarding table links ([NMS-8619](http://issues.opennms.org/browse/NMS-8619))
* NPE in bridge discovery ([NMS-8390](http://issues.opennms.org/browse/NMS-8390))
* location-aware Enlinkd ([NMS-8624](http://issues.opennms.org/browse/NMS-8624))

### Benjamin Reed

* DSCP and DontFragment bit support to JICMP and JICMP6 ([NMS-8617](http://issues.opennms.org/browse/NMS-8617))
* runtime error on install when using `dash` instead of `bash` ([NMS-8627](http://issues.opennms.org/browse/NMS-8627))

### Chandra Gorantla

* provisioning detectors on Minion

[plugin:youtube](https://www.youtube.com/watch?v=cwUmyYMTqqc)

### Christian Pape

* database trend charts, available in both a status page and the front landing page of OpenNMS ([HZN-852](http://issues.opennms.org/browse/HZN-852))
* VMware vertex topology provider ([NMS-8140](http://issues.opennms.org/browse/NMS-8140))

[plugin:youtube](https://www.youtube.com/watch?v=GofSs_CzBzU)

### Deepak Patel and Pavan Kumar

* camel, kafka, and syslogd Minion routing

[plugin:youtube](https://www.youtube.com/watch?v=5pg2mR0zTks)

### DJ Gregor

* tons of test infrastructure cleanup (time zones, normalize configs, parallel execution)

### Jesse White

* upgrading Drools integration to 6.4.0.Final ([NMS-8638](http://issues.opennms.org/browse/NMS-8638))
* use the location-aware SNMP client everywhere (polling, NRTG, etc.) for Minion-based SNMP querying
* implement a lightweight Minion in Go ([Underling](https://github.com/j-white/underling/))

[plugin:youtube](https://www.youtube.com/watch?v=AIZihIyDss4)

### Markus von Rüden

* VMware vertex topology provider ([NMS-8140](http://issues.opennms.org/browse/NMS-8140))
* make expensive operations in the build (jar signing, PDF-generation) disabled by default
* geolocation component for the topology UI ([HZN-853](http://issues.opennms.org/browse/HZN-853))

[plugin:youtube](https://www.youtube.com/watch?v=hGh5NxcNpyE)

### Matt Raykowski

* clean up webapp lib and fix Font Awesome display

### Mike Huot

* improved resource selection in Grafana plugin

### Ron Roskens

* file-descriptor leak when using the NewtsConverter ([NMS-8507](http://issues.opennms.org/browse/NMS-8507))
* converting KSC reports to Grafana

### Ronny Trommer

* Docker containers for OpenNMS
* modular configuration

[plugin:youtube](https://www.youtube.com/watch?v=N3iyeumWY_k)
[plugin:youtube](https://www.youtube.com/watch?v=xRRVNNid5qY)

### Seth Leger

* streams-based syslog parser using Grok ([HZN-533](http://issues.opennms.org/browse/HZN-533))
* ActiveMQ-based eventd bus ([HZN-855](http://issues.opennms.org/browse/HZN-855))

[plugin:youtube](https://www.youtube.com/watch?v=CkNhPlRrVDQ)


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

\- Ben

<!--
  http://issues.opennms.org/issues/?filter=13303
  :1,$s#^[^\t]*\t[^\t]*\t\([^\t]*\)\t#* [\1](http://issues.opennms.org/browse/\1): #
  :1,$s#[\t ]*$#\1#
-->
