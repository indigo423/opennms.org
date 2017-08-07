---
title: This Week in OpenNMS: August 7th, 2017
date: 13:54 08/07/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, events, spectrum, varbinds, plugin manager, enlinkd, remedy, javascript, notifications, jaxb, osgi, rest, opennms.js, cli, helm, rpm, debian, dev-jam, ausnog, training, ohio linux fest, olf]
---

It's time for This Week in OpenNMS!  In the last week we worked on internals, documentation, and web APIs.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2017-07-31 00:00:00' --until='2017-08-07 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * Dustin and Christian worked on moving event parameters into a separate table in the database.
  * Jesse fixed an ordering bug in event processing that could happen when eventconf is live-reloaded.
  * Jeff cleaned up his tool for importing events from CA Spectrum.
  * Jesse fixed some issues with custom varbind processing in events.
  * Craig did some work on improving the plugin manager to handle subscriptions and individual "product" categories.
  * Antonio fixed the Enlinkd startup/lock-up bug introduced in Horizon 20.
  * Jeff added documentation on supported Remedy versions for ticketing integration.

* __Web and UI__

  * Alejandro worked on fixes for javascript URL resolution.
  * Alejandro fixed a UI bug in the notification editor that was broken by JAXB changes.
  * Seth continued his work on the ReSTv2 APIs.
  * Alejandro made it possible to specify foreign source and foreign ID when sending
    events through the events ReST service.
  * Markus fixed OSGi ReST services so they are not shadowed in the `/osgi/` namespace.
  * I added support for ReSTv2 to the event and node APIs in OpenNMS.js.
  * I added a command-line tool to be installed by Node.js for interacting with OpenNMS
    instances over ReST.
  * Markus fixed some bug in ReST response handling and debugging in OpenNMS.js.
  * I improved comparator matching in OpenNMS.js filter processing.
  * Jesse completed support for displaying, editing, and deleting sticky notes in Helm
    (and OpenNMS.js).
  * Ronny and I set up the Helm project to have a documentation framework and get it published
    on docs.opennms.org.
  * I added support for creating RPM and Debian packages from Helm and publishing them to the
    OpenNMS yum and apt repositories (in `bleeding` for now).
  * Jesse did more style cleanup in the alarm panel view of Helm.
  * Markus did a bunch of work improving filter configuration in Helm.


## Dev-Jam 2017 Wrap-Up

We've been super busy here in OpenNMS land, so we're a bit behind on wrapping up our yearly developer conference, Dev-Jam.  Tarus has finished his series of blog posts on what all went on this year, so if you haven't read them already, check them out:

* [Day 0](https://www.adventuresinoss.com/2017/07/18/2017-dev-jam-day-0/)
* [Day 1](https://www.adventuresinoss.com/2017/07/18/2017-dev-jam-day-1/)
* [Day 2](https://www.adventuresinoss.com/2017/07/19/2017-dev-jam-day-two/)
* [Day 3](https://www.adventuresinoss.com/2017/07/20/2017-dev-jam-day-3/)
* [Days 4 & 5](https://www.adventuresinoss.com/2017/08/03/2017-dev-jam-days-4-and-5/)


## Introducing OpenNMS.js

I've written up a blog post about one of our new tools for JavaScript programmers and admins: [OpenNMS.js](https://github.com/OpenNMS/opennms-js/tree/master).  It was created to provide an API for interacting with the OpenNMS ReST API using JavaScript, but also provides a command-line tool giving access to a lot of the functionality from a user shell.

Read more here: [Introducing OpenNMS.js](https://www.opennms.org/en/blog/2017-08-07-introducing-opennms-js)


## Upcoming Events and Appearances

* __[AusNOG - Melbourne, Australia - September 7th and 8th, 2017](http://www.ausnog.net/)__

  Tarus Balog will be speaking at this year's AusNOG conference being held in Melbourne, Australia in September.
  [AusNOG](http://www.ausnog.net/) is the premier technical and professional networking event for Internet Service Providers, Telcos, Hosting Providers, and Content Providers in Australia.
  Tarus will be presenting a talk entitled _"Monitoring at Scale with OpenNMS"_.

* __[OpenNMS Training – Apex, NC - September 11th through 15th, 2017](http://www.opennms.com/training/)__

  The OpenNMS Group's next training session in Apex, NC will be September 11th through 15th.
  For more details on OpenNMS training and to sign up, see [The OpenNMS.com training page](http://www.opennms.com/training/).

* __[Ohio Linux Fest - Columbus, OH - September 29th through 30th, 2017](https://ohiolinux.org/tarus-balog-to-keynote-ohio-linuxfest-2017/)__

  Tarus Balog will be the keynote speaker at Ohio Linux Fest in Columbus.
  His talk is titled _"A Short History of an Open Source Business"_ and will be about the history of OpenNMS, decisions that were made, problems that were faced, and things we'd do different.

  For details, see [the Ohio Linux Fest announcement](https://ohiolinux.org/tarus-balog-to-keynote-ohio-linuxfest-2017/).

## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HELM-6](https://issues.opennms.org/browse/HELM-6): Create initial Asciibinder layout
* [HELM-7](https://issues.opennms.org/browse/HELM-7): RPM Packaging
* [HELM-8](https://issues.opennms.org/browse/HELM-8): Debian Packaging
* [HELM-10](https://issues.opennms.org/browse/HELM-10): Allow users to edit journal and sticky notes
* [HELM-18](https://issues.opennms.org/browse/HELM-18): Add support for using template variables as query parameters
* [HELM-21](https://issues.opennms.org/browse/HELM-21): Deletion of restriction does not update target filter
* [HELM-22](https://issues.opennms.org/browse/HELM-22): Add support for quering all existing/supported fields of alarms when building the datasource query
* [HELM-29](https://issues.opennms.org/browse/HELM-29): Help prevent upgrades to unsupported versions of Grafana
* [JS-1](https://issues.opennms.org/browse/JS-1): OpenNMS Javascript Client
* [JS-10](https://issues.opennms.org/browse/JS-10): AlarmDao with v1 API fails when only a single alarm is present
* [JS-11](https://issues.opennms.org/browse/JS-11): add API for retrieving ReST v2 search properties
* [JS-12](https://issues.opennms.org/browse/JS-12): Debugging tests with Webstorm 2017.2 under MacOS does not work
* [NMS-8046](https://issues.opennms.org/browse/NMS-8046): noSuchInstance causing problems during provision scan
* [NMS-8431](https://issues.opennms.org/browse/NMS-8431): Security issue for all admin vaadin applications exposed as OSGI Service
* [NMS-9505](https://issues.opennms.org/browse/NMS-9505): EnhancedLinked blocks service startup
* [NMS-9507](https://issues.opennms.org/browse/NMS-9507): Using varbind to match event definition doesn't work (when using the same UEI in many definitions)
* [NMS-9511](https://issues.opennms.org/browse/NMS-9511): ConcurrentModificationException thrown by Statsd
* [NMS-9548](https://issues.opennms.org/browse/NMS-9548): initial-delay="null" when adding a new destination path
* [NMS-9549](https://issues.opennms.org/browse/NMS-9549): Oracle JDK 8u112 is expired