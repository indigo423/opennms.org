---
title: This Week in OpenNMS: June 5th, 2017
date: 10:59 06/05/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, ws-man, hikaricp, java9, enlinkd, javascript, alarms, rest, dev-jam]
---

It's time for This Week in OpenNMS!  In the last week we worked on various internal and web UI changes.

<!-- git log --all --no-merges --since='2017-05-30 00:00:00' --until='2017-06-05 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)' | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * Jesse fixed an issue with WS-Man thresholding.
  * Jesse fixed an issue with the HikariCP strategy failing to get new connections with a busy database.
  * Jesse did some initial work on fixing Java9 builds.
  * Antonio worked on some Enlinkd and topology bugs.
  * I worked on creating a JavaScript API for interacting with OpenNMS servers.
  * Ronny worked on documentation for the alarm alerts.

* __Web__

  * Christian worked on the ReST session code some more.
  * Craig and Jeff wrapped up the alarm alert browser support.
  * Jesse worked on various web UI bugs.

## Office Move

The OpenNMS Group has moved offices to Apex, NC.  This included moving a server closet full of equipment from one place to another and re-IP'ing a bunch of publicly-facing sites.  On the bright side, we've come out the other end with faster office internet and more IPs, so Bamboo [gets a real IP now...](https://bamboo.opennms.org/) ;)

If you notice any problems, please let us know.  If you join us for training in the future, you'll be happy to know we're now [upstairs from a brewery](http://www.southernpeakbrewery.com/).  Cheers! 🍻

## Upcoming Events and Appearances

* __[Dev-Jam 2017 - Concordia University - July 16th through 21st](http://www.opennms.com/opennms-dev-jam-registration)__

  Our annual developers' conference, Dev-Jam, will be held in Montreal, Canada this year.  For details, please see Tarus's [announcement on the OpenNMS blog](https://opennms.org/en/blog/2017-03-07-devjam-2017).  When you're ready to register, go to [the registration page](http://www.opennms.com/opennms-dev-jam-registration).  See you there!


## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HZN-950](https://issues.opennms.org/browse/HZN-950): Fix WarnChecksumPolicy warnings on startup
* [HZN-1065](https://issues.opennms.org/browse/HZN-1065): detect server capabilities in OpenNMS.js
* [HZN-1079](https://issues.opennms.org/browse/HZN-1079): Upgrade the jar, source and assembly Maven plugins
* [NMS-8093](https://issues.opennms.org/browse/NMS-8093): Privilege Escalation Bug with Grafana Plugin 
* [NMS-9265](https://issues.opennms.org/browse/NMS-9265): Topology Map ip like search produces duplicates
* [NMS-9291](https://issues.opennms.org/browse/NMS-9291): Logging for TCP output queue
* [NMS-9303](https://issues.opennms.org/browse/NMS-9303): Remove unused events and event definitions
* [NMS-9327](https://issues.opennms.org/browse/NMS-9327): Installation issues with OpenJDK JRE
* [NMS-9349](https://issues.opennms.org/browse/NMS-9349): VMware Provisioning Error
* [NMS-9379](https://issues.opennms.org/browse/NMS-9379): Improved visualization for large trees with the Hierarchy Layout
* [NMS-9381](https://issues.opennms.org/browse/NMS-9381): Erroneous outages/failures triggered when stopping OpenNMS
* [NMS-9386](https://issues.opennms.org/browse/NMS-9386): Breadcrumb for requisitions has extra "/app" in path
* [NMS-9387](https://issues.opennms.org/browse/NMS-9387): Increase default connection timeout for HikariCP
* [NMS-9390](https://issues.opennms.org/browse/NMS-9390): OpenNMS won't start after upgrade
