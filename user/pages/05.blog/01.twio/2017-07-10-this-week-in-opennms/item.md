---
title: This Week in OpenNMS: July 10th, 2017
date: 10:16 07/10/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, trapd, spring, path outages, rest, osgi, topology, dev-jam, training, ohio linux fest, olf]
---

It's time for This Week in OpenNMS!  In the last week we worked on various internals and web code.

<!-- git log --all --no-merges --since='2017-07-05 00:00:00' --until='2017-07-10 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)' | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * Jesse improved agent address handling in Trapd.
  * Seth worked on upgrading our internal Spring version to 4.3.
  * I fixed a bug on generic resource handling.
  * Alejandro fixed path-outage clearing to handle event times properly.

* __Web and UI__

  * Markus worked on changes related to accessing ReST code from the OSGi container.
  * Seth did more work on ReST v2, fixing criteria handling for notifications and outages.
  * Markus fixed topology IP search.
  * Markus fixed ReST v2 monitoring location DELETE operations.
  * Jesse added a modal "alarm details" popup to the Helm UI.
  * Markus did other UI cleanup in Helm.
  * Jesse worked on integrating the existing OpenNMS Grafana plugin to Helm.

## Upcoming Events and Appearances

* __[Dev-Jam 2017 - Concordia University - July 16th through 21st](http://www.opennms.com/opennms-dev-jam-registration)__

  Our annual developers' conference, Dev-Jam, will be held in Montreal, Canada this year.  For details, please see Tarus's [announcement on the OpenNMS blog](https://opennms.org/en/blog/2017-03-07-devjam-2017).  When you're ready to register, go to [the registration page](http://www.opennms.com/opennms-dev-jam-registration).  See you there!

* __[OpenNMS Training – Apex, NC - September 11th through 15th, 2017](http://www.opennms.com/training/)__

  The OpenNMS Group's next training session in Apex, NC will be September 11th through 15th.  For more details on OpenNMS training and to sign up, see [The OpenNMS.com training page](http://www.opennms.com/training/).

* __[Ohio Linux Fest - Columbus, OH - September 29th through 30th, 2017](https://ohiolinux.org/tarus-balog-to-keynote-ohio-linuxfest-2017/)__

  Tarus Balog will be the keynote speaker at Ohio Linux Fest in Columbus.  His talk is titled _"A Short History of an Open Source Business"_ and will be about the history of OpenNMS, decisions that were made, problems that were faced, and things we'd do different.

  For details, see [the Ohio Linux Fest announcement](https://ohiolinux.org/tarus-balog-to-keynote-ohio-linuxfest-2017/).

## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [NMS-9454](https://issues.opennms.org/browse/NMS-9454): VMware provisioning not working anymore
* [NMS-9460](https://issues.opennms.org/browse/NMS-9460): Fix JSP issues related to JAXB update
* [NMS-9475](https://issues.opennms.org/browse/NMS-9475): Document the logic behind the response time value reported by the SnmpMonitor
* [NMS-9493](https://issues.opennms.org/browse/NMS-9493): Fix ownership of users.xml