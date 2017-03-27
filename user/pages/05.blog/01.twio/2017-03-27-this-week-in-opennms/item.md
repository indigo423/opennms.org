---
title: This Week in OpenNMS: March 27th, 2017
date: 12:34 03/27/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, jaxb, syslog, provisiond, requisitions, enlinkd, assets, topology, percona live, hackathon, dev-jam]
---

It's time for This Week in OpenNMS!  In the last week we worked on various internals and cleanup, and topology.

<!-- git log --all --no-merges --since='2017-03-20 00:00:00' --until='2017-03-27 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)' | sort | less -R -->

## Github Project Updates

* __Internals__

  I did more work on using Java 8's `Optional` in our JAXB classes and other cleanups.  Seth did more work on refactoring our syslog parser.  Markus continued his Provisiond refactor, moving requisition data into the database.  Antonio fixed more Enlinkd-related issues.

* __Topology__

  Markus and Craig worked more on Craig's asset -> topology mapper.


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

* [NMS-8542](https://issues.opennms.org/browse/NMS-8542): Simulation mode is ended when clicking on "Set as focal point"
* [NMS-9135](https://issues.opennms.org/browse/NMS-9135): Cleanup and remove Castor related dependencies
* [NMS-9141](https://issues.opennms.org/browse/NMS-9141): wrong statement in JDBCQueryMonitor documentation
* [NMS-9218](https://issues.opennms.org/browse/NMS-9218): OSPF Router Id not properly updated
