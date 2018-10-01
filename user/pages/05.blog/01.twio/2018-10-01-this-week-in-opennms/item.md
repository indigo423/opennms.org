---
title: This Week in OpenNMS: October 1st, 2018
date: 10:57 10/01/2018
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [netflow, minion, situations, docker, enlinkd, compass, hacktoberfest, osmc, hackathon]
---

It's time for This Week in OpenNMS!

Last week we fixed the Android Compass crash, did more work on OpenNMS proxy, daemon, link, and collection infrastructure, and fixed a number of issues with the OpenNMS Docker images.  We also worked on a number of web UI improvements.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --color=always --since='2018-09-24 00:00:00' --until='2018-10-01 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->


## Github Project Updates

* __Internals, APIs, and Documentation__

  * Sebastian fixed the daemon tools to always produce success and failure events.
  * Dustin continued his work on single-port flow support.
  * Chandra fixed the `collections:collect` command to support setting the TTL on minions.
  * David worked on documentation for the new situation feedback UI.
  * Patrick did more work on unified HTTP proxy support for monitors and such.
  * Christian did some work on getting OpenNMS builds working with newer JDKs.
  * Jan Papež fixed a bug in our Docker container image, where the database name was not properly configured if your database wasn't called `opennms`. Images for 22.0.4 and higher should contain the fix.
  * `opennms-plugin-protocol-cifs` was added to the default Docker image in 22.0.4 and higher.


* __Web & UI__

  * Patrick worked on fixing the "change icon" feature in the topology UI.
  * For users with sufficient rights, Christian added support for linking from the node page to the relevant requisition editor page.
  * Antonio worked on refactoring Enlinkd and topology code.


## Compass 3.2.1

OpenNMS Compass, the OpenNMS mobile app, was [updated to version 3.2.1](https://compass.opennms.io/).
This version fixes the crash-on-launch bug when running on Android 8 (Oreo) and higher, as well as adding support for setting a timeout for slow connections or OpenNMS servers.


## [Hacktoberfest 2018](/hacktoberfest2018)

Every year, Github and DigitalOcean put on "Hacktoberfest," a way to celebrate and encourage open source contribution.
To participate, you only need to sign up and then make 5 pull requests to open source projects during the month of October.
For more details, see [the OpenNMS Hacktoberfest 2018 page](/hacktoberfest2018).


## Upcoming Events and Appearances

* **[OSMC 2018 Talk and Hackathon - November 5th through 8th, 2018](https://osmc.de/)**

  Tarus will be [speaking on Tuesday, November 6th](https://osmc.de/schedule/) about the latest features in OpenNMS including Minions, Telemetryd (flow support), Sextant (alarm correlation), and more.

  Also, some OpenNMS folks will be participating in the [OSMC hackathon](https://osmc.de/hackathon/).
  The hackathon will be on Thursday, November 8th and includes dinner Wednesday night and Thursday access.
  More details can be found at the [OpenNMS OSMC Hackathon meetup page](https://wiki.opennms.org/wiki/Meetups/OSMC2018-Hackathon).



## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [COMPASS-81](https://issues.opennms.org/browse/COMPASS-81): Compass crashes under Android 8
* [HELM-104](https://issues.opennms.org/browse/HELM-104): Publish Grafana with "OpenNMS Helm App" on Docker Hub
* [HZN-1353](https://issues.opennms.org/browse/HZN-1353): REST v2: Filter for alarms that are not situations and not in a situation
* [NMS-10331](https://issues.opennms.org/browse/NMS-10331): Optionally create new alarms when a problem reoccurs
* [NMS-10345](https://issues.opennms.org/browse/NMS-10345): VmwareMonitor should go down for an entity with unacknowledged vSphere-Alarms
* [NMS-10352](https://issues.opennms.org/browse/NMS-10352): Wrong data type for certain Cassandra JMX counters
* [NMS-10364](https://issues.opennms.org/browse/NMS-10364): Link Node Page to Node Requisition
* [NMS-10367](https://issues.opennms.org/browse/NMS-10367): Cannot override TTL when running the Karaf Command collections:collect through Minions
* [NMS-10370](https://issues.opennms.org/browse/NMS-10370): Erroneous INFO-level log messages during every forced node rescan
* [NMS-10373](https://issues.opennms.org/browse/NMS-10373): Improve concurrency in Vmware Connection Pool