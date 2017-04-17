---
title: This Week in OpenNMS: April 17th, 2017
date: 11:14 04/17/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, drools, xmp, datacollection, syslog, grok, assets, topology, percona live, hackathon, dev-jam]
---

It's time for This Week in OpenNMS!  In the last week we worked on various internal changes, and the web UI.

<!-- git log --all --no-merges --since='2017-04-10 00:00:00' --until='2017-04-17 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)' | sort | less -R -->

## Github Project Updates

* __Internals__

  Alejandro updated our embedded Drools to 6.5.0 and added support for saving/restoring state.  Jesse updated the XMP collector to the new collection set API, and cleaned up more legacy collection API usage.  Seth added support for customizing the new grok-based syslog parser.

* __Web UI__

  Craig did some more work on his asset -> topology adapter.


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

* [HZN-1028](https://issues.opennms.org/browse/HZN-1028): Add support for setting the node location using provision.pl
* [MIS-61](https://issues.opennms.org/browse/MIS-61): get-involved page links to bugzilla, not JIRA
* [NMS-3560](https://issues.opennms.org/browse/NMS-3560): WebUI Discovery general settings "retries" will not be set as default
* [NMS-4532](https://issues.opennms.org/browse/NMS-4532): Resource Graphs last page is empty
* [NMS-6330](https://issues.opennms.org/browse/NMS-6330): allow multiple syslogd configuration elements to support multiple syslogd listeners and forwarding-regexp patterns
* [NMS-6500](https://issues.opennms.org/browse/NMS-6500): HTTPS modules fail because of algorithm constraints
* [NMS-7829](https://issues.opennms.org/browse/NMS-7829): Refresh loop possible in setOffset() -> refresh() ->setOffset() in onmsList code
* [NMS-8961](https://issues.opennms.org/browse/NMS-8961): Tooltips for heatmap rectangles
* [NMS-9068](https://issues.opennms.org/browse/NMS-9068): opennms.conf can break the snmp-request command
* [NMS-9205](https://issues.opennms.org/browse/NMS-9205): New resource types are not available in the Web UI until it is restarted
* [NMS-9223](https://issues.opennms.org/browse/NMS-9223): Problems associated with SNMP4J affects OpenNMS performance (contention issues)
* [NMS-9234](https://issues.opennms.org/browse/NMS-9234): SNMP timeouts generate Unexpected exception warnings
* [NMS-9248](https://issues.opennms.org/browse/NMS-9248): Make the location field on the requisition UI to be a "select" instead of an "input" field.
* [NMS-9274](https://issues.opennms.org/browse/NMS-9274): NodeTopologyBridge fails on Cisco Switch ME36/ME34/ME35 
* [NMS-9279](https://issues.opennms.org/browse/NMS-9279): Upgrade Drools to 6.5.0
* [NMS-9283](https://issues.opennms.org/browse/NMS-9283): datachoices bundle missing quartz dependency
* [NMS-9285](https://issues.opennms.org/browse/NMS-9285): Placeholder for port number in xml-datacollection-config.xml
