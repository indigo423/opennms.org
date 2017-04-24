---
title: This Week in OpenNMS: April 24th, 2017
date: 11:21 04/24/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, newts, grafana, grok, syslog, drools, provisiond, karaf, compass, backshift, packaging, minion, vmware, rest, percona live, hackathon, dev-jam]
---

It's time for This Week in OpenNMS!  In the last week we worked on various internal changes, documentation, Compass, Minion, and the web UI.

<!-- git log --all --no-merges --since='2017-04-17 00:00:00' --until='2017-04-24 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)' | sort | less -R -->

## Github Project Updates

* __Internals and Documentation__

  Jesse worked on optimizing some of the time series calculation code.  I worked on making sure OpenNMS wouldn't upgrade over itself if it is running.  Christian added documentation for the Grafana dashboard widget, and Seth documented the new grok-based syslog parser.  Alejandro worked on making Drools state persist across OpenNMS restarts.  Markus worked more on the provisiond database refactor.  Seth worked on upgrading our embedded Karaf to 4.

* __Compass__

  I released a small bug fix version of Compass 3.0, and also a beta for Compass 3.1 which adds Backshift graphing fixes, 1Password/LastPass auto-fill support on iOS, and a bunch of framework updates that should improve performance.  See [the Compass site](https://compass.opennms.io/#beta) for info on becoming a beta tester.

* __Minion__

  I worked on Debian packages for the Minion.  Seth worked on adding test coverage for Minion restarts and heartbeats.  Jesse added VMware monitor support to the Minion.

* __Web UI__

  Jesse improved support for using `location` in ReST API calls, and Alejandro did some other general improvements to the v2 ReST API.  I fixed the requisition UI and `provision.pl` to properly handle foreign sources and foreign IDs with URL-unsafe characters in them.


## Upcoming Events and Appearances

* __[Percona Live - April 24th through 27th, 2017](https://www.percona.com/live/17/)__

  Jesse [will be speaking at Percona](https://www.percona.com/live/17/users/jesse-white) in Santa Clara, California on April 25th, 2017.

* __[OpenNMS Hackathon - April 28th through April 30th, 2017](http://doodle.com/poll/khqydbip8ee76ine)__

  Markus is arranging an OpenNMS hackathon in Fulda, Germany at the end of April.  If you'd like to hack on the OpenNMS code fixing bugs, implementing features, or just want to talk with other OpenNMS developers, please follow this link to let them know you're interested in joining: [OpenNMS Hackathon Doodle](http://doodle.com/poll/khqydbip8ee76ine)

* __[Dev-Jam 2017 - Concordia University - July 16th through 21st](http://www.opennms.com/opennms-dev-jam-registration)__

  Our annual developers' conference, Dev-Jam, will be held in Montreal, Canada this year.  For details, please see Tarus's [announcement on the OpenNMS blog](https://opennms.org/en/blog/2017-03-07-devjam-2017).  When you're ready to register, go to [the registration page](http://www.opennms.com/opennms-dev-jam-registration).  See you there!


## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HZN-1021](https://issues.opennms.org/browse/HZN-1021): Vmware requisition handler
* [HZN-1047](https://issues.opennms.org/browse/HZN-1047): Allow users to override RadixTreeSyslogParser patterns with config file
* [NMS-8135](https://issues.opennms.org/browse/NMS-8135): Delete a service from the WebUI is not working
* [NMS-9132](https://issues.opennms.org/browse/NMS-9132): update log4j2 to 2.8.1
* [NMS-9224](https://issues.opennms.org/browse/NMS-9224): Ops Board Grafana Dashlet
* [NMS-9280](https://issues.opennms.org/browse/NMS-9280): Redefine the start ordering of the OpenNMS daemons during bootstrap.
* [NMS-9282](https://issues.opennms.org/browse/NMS-9282): Make TCP output queue parameters configurable
* [NMS-9286](https://issues.opennms.org/browse/NMS-9286): GraphML JAXB classes are missing package-info.java
* [NMS-9289](https://issues.opennms.org/browse/NMS-9289): syslogd logs "No hideMessage configured" though it is really not needed
* [NMS-9292](https://issues.opennms.org/browse/NMS-9292): Problem startup 19.0.1 
* [NMS-9296](https://issues.opennms.org/browse/NMS-9296): Upgrade Apache CXF to 3.1.9
* [NMS-9305](https://issues.opennms.org/browse/NMS-9305): rrdtool can't be installed because of unmet dependencies
