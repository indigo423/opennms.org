---
title: This Week in OpenNMS: January 23rd, 2017
date: 11:18 01/23/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, internals, testing, web ui, bug fixes, bsm, windows, jasper, jira, ticketing, nrtg, backshift, floss weekly, opennms 101, open technologies for growth, fosdem, training]
---

In the last week we worked on internals, testing, the web UI, and bug fixes.

<!-- git log --all --no-merges --since='2017-01-17 00:00:00' --until='2017-01-23 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)' | sort | less -R -->

## Github Project Updates

* __Internals and Testing__

  Dustin cleaned up a couple of strategy tests.  I worked on improving the very flappy BSM smoke tests.  Markus fixed a performance problem in looking up a large number of reduction keys at BSM startup.  Dustin continued to work on fixing resource paths to work properly on Windows.  Markus did some more work on on-the-fly Jasper report/subreport compilation.  Markus also fixed a filehandle leak in the JIRA ticketing plugin.

* __Web UI__

  Jesse fixed rate displaying in the NRTG UI (well, technically in Backshift).

* __Bug Fixes__

  We've been spending time fixing blockers and other bugs for 19.0.0, due early this year.


## [FLOSS Weekly](https://twit.tv/shows/floss-weekly)

Tarus and Jeff were on last week's FLOSS Weekly.  You can [watch or listen here](https://twit.tv/shows/floss-weekly/episodes/418).

[plugin:youtube](https://www.youtube.com/watch?v=AOWx_Nk70ek)


## [OpenNMS 101](https://www.youtube.com/playlist?list=PLsXgBGH3nG7iZSlssmZB3xWsAJlst2j2z)

Tarus has been working on a series of videos loosely based on the OpenNMS training courses.  There is currently [an introduction module and 5 more videos](https://www.youtube.com/playlist?list=PLsXgBGH3nG7iZSlssmZB3xWsAJlst2j2z) related to installation, startup, events, and notifications.

[plugin:youtube](https://www.youtube.com/watch?v=GJzmkshdjiI)


## Upcoming Events and Appearances

* __[Open Technologies for Growth - February 2nd, 2017](http://lata.org.lv/konference2017_eng/)__

  Tarus will be speaking on open source business at the Open Tech conference in Riga, Latvia on February 2nd.

* __[FOSDEM 2017 - February 4th and 5th, 2017](https://fosdem.org/2017/)__

  Craig Gallen will be at FOSDEM 2017 and OpenNMS will have a booth there.

* __[Training - February 27th through March 3rd, 2017](https://www.opennms.com/opennms-training-dates-announced-for-february-2017/)__

  The OpenNMS Group will be holding training at OpenNMS Headquarters in Pittsboro, NC, USA the week of February 27th, 2017.

## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

## Resolved Issues Since Last TWiO

* [HZN-985](https://issues.opennms.org/browse/HZN-985): Add location column to alarm list in UI
* [HZN-987](https://issues.opennms.org/browse/HZN-987): Add location column to notifications list in UI
* [HZN-988](https://issues.opennms.org/browse/HZN-988): Add location awareness to path outages
* [NMS-6284](https://issues.opennms.org/browse/NMS-6284): Karaf log is separate from other OpenNMS logs
* [NMS-8620](https://issues.opennms.org/browse/NMS-8620): Restarting OMNS results in numerous SNMP outage alarms and notifications
* [NMS-8778](https://issues.opennms.org/browse/NMS-8778): SyslogTest.canReceiveSyslogMessages() failed with AMQ classloader error
* [NMS-8907](https://issues.opennms.org/browse/NMS-8907): Invalid graph templates
* [NMS-8947](https://issues.opennms.org/browse/NMS-8947): JIRA Ticketer: java.net.SocketException: Too many open files
* [NMS-8978](https://issues.opennms.org/browse/NMS-8978): BSMD takes a huge amount of time to start when it has a large amount of services
* [NMS-9001](https://issues.opennms.org/browse/NMS-9001): BSM documentation: explanation of threshold menu is missing
* [NMS-9005](https://issues.opennms.org/browse/NMS-9005): NRT Graphing does not show SNMP counter values correctly

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->
