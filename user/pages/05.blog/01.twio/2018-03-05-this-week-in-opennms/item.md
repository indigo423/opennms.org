---
title: This Week in OpenNMS: March 5th, 2018
date: 10:23 03/05/2018
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, plugin manager, osgi, md4, radius, netflow, ipfix, sflow, webpack, drift, scale]
---

It's time for This Week in OpenNMS!

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2018-02-27 00:00:00' --until='2018-03-05 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * Craig did a few more fixes and enhancements to the plugin manager.
  * Markus did some work on running the DAOs in an OSGi container.
  * Dustin fixed MD4-handling in the Radius code.
  * Dustin and Christian did more work on Netflow 9, IPFIX, and sFlow support.

* __Web & UI__

  * Patrick worked on keyboard navigation of the menu.
  * I upgraded our asset build to Webpack 4 and did a bunch of build optimizations.
  * I worked on refactoring some of the in-progress Drift support in OpenNMS.js.

## Upcoming Events and Appearances

* __[SCaLE 16x - March 8th through 11th, 2018](https://www.socallinuxexpo.org/scale/16x/presentations/opennms-navigational-update)__

  Jeff Gehlbach will be [speaking at SCaLE on the current state of OpenNMS](https://www.socallinuxexpo.org/scale/16x/presentations/opennms-navigational-update) on Sunday, March 11th.

* __[Ohio State Open Source Club - March 22nd, 2018](https://opensource.osu.edu/events/)__

  Tarus will be [speaking at the Ohio State Open Source Club](https://opensource.osu.edu/events/) on Thursday, March 22nd.

## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HZN-46](https://issues.opennms.org/browse/HZN-46): How do XSD files can be used in the documentation
* [HZN-1243](https://issues.opennms.org/browse/HZN-1243): opennms-es-rest and alarm-change-notifier fails to install within Plugin Manager UI
* [NMS-6253](https://issues.opennms.org/browse/NMS-6253): VMware vSphere 5.5 Support
* [NMS-8180](https://issues.opennms.org/browse/NMS-8180): Service monitoring and data collection for VMware vSphere 6
* [NMS-9866](https://issues.opennms.org/browse/NMS-9866): OSGI plugin tests failing
* [PRIS-141](https://issues.opennms.org/browse/PRIS-141): Can't start PRIS with systemd
