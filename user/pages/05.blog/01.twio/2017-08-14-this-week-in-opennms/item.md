---
title: This Week in OpenNMS: August 14th, 2017
date: 10:35 08/14/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, twilio, events, jna, icmp, upgrade, rpm, systemd, maven, charts, alarms, rest, ticketer, webjars, javascript, helm, ausnog, training, ohio linux fest, olf, osmc]
---

It's time for This Week in OpenNMS!  In the last week we worked on internals, documentation, and web APIs.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2017-08-07 00:00:00' --until='2017-08-14 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * Jeff did more work on the Twilio notification strategy.
  * Craig continued his work on the OpenNMS plugin manager.
  * Christian worked on moving event parms to a separate table.
  * I worked on cleaning up our exception-handling in JNA ICMP code.
  * I fixed an RPM bug where `users.xml` would be overwritten upon upgrade.
  * I fixed an issue where systemd service installation would fail if using RPM relocation prefixes.
  * I worked on our features maven plugin to fix downloads honoring `settings.xml`.

* __Web and UI__

  * Markus did some more work on the front-page donut charts.
  * Markus worked on some improvements to alarm handling in the ReST endpoints as well as exposing ticketer configuration through ReST.
  * Ron Roskens worked on a proof of concept replacing our JavaScript dependencies with webjars.
  * Seth did more work on the ReSTv2 APIs.
  * Jesse worked on a proof-of-concept DTO implementation in the ReSTv2 APIs.
  * I fixed filter parsing in opennms.js.
  * I added basic support for date parameters in opennms.js.
  * Markus added ticketer plugin config handling to opennms.js.
  * Markus added alarm clear/escalate user support to Helm.
  * Jesse cleaned up a bunch of UI issues in Helm.
  * Markus fixed Helm to show ticketing operations only if ticketing is configured.


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

* __[OSMC - Nuremberg, Germany - November 21st through 24th, 2017](https://osmc.de/)__

  Ronny Trommer will be speaking at OSMC with a talk titled, _"Another Year with OpenNMS"_, discussing the progress made in the last 3 major releases of OpenNMS and what's on the
  roadmap going forward.

  The date of his talk is not yet set, but details should be available
  [on the schedule](https://osmc.de/schedule/) soon.


## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HELM-14](https://issues.opennms.org/browse/HELM-14): Helm logo and icons
* [HELM-16](https://issues.opennms.org/browse/HELM-16): Allow users to clear and escalate alarms from the alarm table panel
* [HELM-20](https://issues.opennms.org/browse/HELM-20): Refresh dashboard after any updates to alarms
* [HELM-30](https://issues.opennms.org/browse/HELM-30): Automatically deploy .deb and .rpm packages from the master branch
* [HELM-32](https://issues.opennms.org/browse/HELM-32): Use consistent term "Outstanding" vs. "Pending"
* [HZN-1110](https://issues.opennms.org/browse/HZN-1110): Convert Eventd TCP/UDP listeners to camel-netty4 endpoints
* [JS-15](https://issues.opennms.org/browse/JS-15): OpenNMS.js does not currently convert dates in parameters to something OpenNMS ReST can handle
* [JS-17](https://issues.opennms.org/browse/JS-17): Include the TicketerConfig in the ServerMetadata object
* [NMS-8879](https://issues.opennms.org/browse/NMS-8879): Updating assets/categories through ReST affects Forced Unmanaged services.
* [NMS-9249](https://issues.opennms.org/browse/NMS-9249): Add support for CNAME, TXT, PTR lookups to DnsResolutionMonitor
* [NMS-9290](https://issues.opennms.org/browse/NMS-9290): Reload Drools configuration without restart OpenNMS
* [NMS-9373](https://issues.opennms.org/browse/NMS-9373): Add new parameter for DNSResolutionMonitor
* [NMS-9378](https://issues.opennms.org/browse/NMS-9378): The neither test in DNSResolutionMonitorTest fails
* [NMS-9383](https://issues.opennms.org/browse/NMS-9383): DNS test-api should support more than just A or AAAA records.
* [NMS-9465](https://issues.opennms.org/browse/NMS-9465): add HTTPS response time datacollection and graph defintions
* [NMS-9516](https://issues.opennms.org/browse/NMS-9516): Update copyright date in docs
* [NMS-9538](https://issues.opennms.org/browse/NMS-9538): Document supported products and versions for Remedy integration
* [NMS-9542](https://issues.opennms.org/browse/NMS-9542): Microsoft IE and Edge doesn't like relative path on Angular apps
* [NMS-9551](https://issues.opennms.org/browse/NMS-9551): Eventd does not respect event configuration order when reloading
* [NMS-9561](https://issues.opennms.org/browse/NMS-9561): Check LOG printTopology
* [NMS-9563](https://issues.opennms.org/browse/NMS-9563): Donut chart status links do not work anymore
* [NMS-9573](https://issues.opennms.org/browse/NMS-9573): users.xml being overwritten on installation
* [ORG-70](https://issues.opennms.org/browse/ORG-70): Hamburger icon on mobile is not shown correctly