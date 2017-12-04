---
title: This Week in OpenNMS: December 4th, 2017
date: 11:25 12/04/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, drift, events, jnlp, remote poller, enlinkd, netflow, topologyd, elasticsearch, karaf, javascript, webpack, rest, osgi, linuxconf, nznog]
---

It's time for This Week in OpenNMS!

Last week we did more work on the Drift telemetry project and other refactoring.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2017-11-27 00:00:00' --until='2017-12-04 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * I made it easier to pass additional JVM options during test builds.
  * Jeff fixed it so RTC subscription events aren't persisted to the database.
  * Seth continued to work on cleaning up JNLP launch of the remote poller.
  * Antonio continued to work on Enlinkd bridge discovery fixes.
  * Dustin and Markus continued to work on improving Netflow support in Topologyd.
  * Markus finished his changes to allow more flexible auth to Elasticsearch.
  * Craig did some improvements to his measurements API improvements.
  * Seth did some refactoring of inner classes to Java 8 lamdas.
  * Seth did more work on cleaning up our Karaf container artifacts.

* __Web UI__

  * I wrapped up support for pre-authentication in the OpenNMS web UI when behind a proxy.
  * I worked on refactoring our various JavaScript code to a single optimized webpack build.
  * Markus did more work on running ReST JAX-RS services in the OSGi container.
  * Jesse worked on mocking up queries for flow data.


## Upcoming Events and Appearances

* __[Linuxconf Australia Sysadmin Miniconf - January 23rd, 2018](https://linux.conf.au/programme/miniconfs/sysadmin/)__

  Tarus will be speaking at the Linuxconf Australia Systems Administration Miniconf on January 23rd.

* __[NZNOG 2018 - Queenstown, NZ - January 22nd - 26th, 2018](http://www.nznog.org/nznog18)__

  After Linuxconf, Tarus will speak at the New Zealand Network Operators Group event at [Rydges in Queenstown, NZ](http://www.nznog.org/nznog18/venue).

## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HZN-973](https://issues.opennms.org/browse/HZN-973): Make Jaxrs work within the osgi container and allow access from the OpenNMS Jetty Container
* [HZN-1182](https://issues.opennms.org/browse/HZN-1182): Allow defining authentication settings per elastic endpoint
* [HZN-1197](https://issues.opennms.org/browse/HZN-1197): Flow index setting customization
* [HZN-1204](https://issues.opennms.org/browse/HZN-1204): Upgrade Maven to version 3.5
* [NMS-8669](https://issues.opennms.org/browse/NMS-8669): Failing when doing a one-off discovery
* [NMS-9681](https://issues.opennms.org/browse/NMS-9681): Powered Off VMware VMs Removed from Requisition with importVMAll=true
* [NMS-9689](https://issues.opennms.org/browse/NMS-9689): HEAD requests to static resources in the UI don't work
* [NMS-9721](https://issues.opennms.org/browse/NMS-9721): The EXE installer of the remote poller on Windows is not working
* [NMS-9739](https://issues.opennms.org/browse/NMS-9739): Authentication proxy support
* [NMS-9743](https://issues.opennms.org/browse/NMS-9743): Jexl Measurements API enhancements
* [NMS-9746](https://issues.opennms.org/browse/NMS-9746): JNLP Remote Poller file logging broken because of Log4j2 version
* [NMS-9749](https://issues.opennms.org/browse/NMS-9749): The content of the clone foreign source definition dialog is misleading
* [NMS-9757](https://issues.opennms.org/browse/NMS-9757): Upgrading from 21.0.0 to 21.0.1-1 Fails