---
title: This Week in OpenNMS: March 20th, 2017
date: 11:40 03/20/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, xml, jaxb, castor, cdp, ospf, enlinkd, elasticsearch, dns, xmlcollector, minion, assets, topology, provisiond, requisitions, percona live, hackathon]
---

It's time for This Week in OpenNMS!  In the last week we worked on various internals, the Minion, and the web UI.

<!-- git log --all --no-merges --since='2017-03-13 00:00:00' --until='2017-03-20 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)' | sort | less -R -->

## Github Project Updates

* __Internals__

  Jesse and I finished converting XML parsing to JAXB.  All that's left is to remove some final references to Castor and then it's gone.  I also did a bunch of work changing our JAXB objects to use Java 8's `Optional` class for return values.  Antonio did more work on bugs in CDP and OSPF discovery in Enlinkd.  Seth did more work on improving the Elasticsearch integration.

* __Minion__

  Jesse added DNS and XmlCollector collector support to the Minion.

* __Web UI__

  Markus and Craig worked on more cleanups to Craig's asset -> topology mapper.  Christian and Markus did more work on refactoring Provisiond and requisition handling.


## Upcoming Events and Appearances

* __[Percona Live - April 24th through 27th, 2017](https://www.percona.com/live/17/)__

  Jesse [will be speaking at Percona](https://www.percona.com/live/17/users/jesse-white) in Santa Clara, California on April 25th, 2017.

* __[OpenNMS Hackathon - April 28th through April 30th, 2017](http://doodle.com/poll/khqydbip8ee76ine)__

  Markus is arranging an OpenNMS hackathon in Fulda, Germany at the end of April.  If you'd like to hack on the OpenNMS code fixing bugs, implementing features, or just want to talk with other OpenNMS, please follow this link to let them know you're interested in joining: http://doodle.com/poll/khqydbip8ee76ine


## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HZN-1035](https://issues.opennms.org/browse/HZN-1035): Service opennms doesn't start after upgrade from 18.0.4 to 19.0.1
* [NMS-8897](https://issues.opennms.org/browse/NMS-8897): NPE in CdpLink.toString()
* [NMS-9134](https://issues.opennms.org/browse/NMS-9134): Migrate remaining XSDs from Castor to JAXB
* [NMS-9201](https://issues.opennms.org/browse/NMS-9201): SyslogParser should not assume UTC timestamps
* [NMS-9213](https://issues.opennms.org/browse/NMS-9213): PSQL Exception When Acknowledging Alarms
* [NMS-9226](https://issues.opennms.org/browse/NMS-9226): OpenNMS won't start after upgrade to version 19
* [NMS-9230](https://issues.opennms.org/browse/NMS-9230): Randomize ES1 cluster names so tests don't join each others' clusters