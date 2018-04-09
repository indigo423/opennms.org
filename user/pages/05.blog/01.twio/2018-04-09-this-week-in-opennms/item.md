---
title: This Week in OpenNMS: April 9th, 2018
date: 11:54 04/09/2018
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [windows, elasticsearch, kafka, karaf, camel, afnog, ais, dev-jam, ouce]
---

It's time for This Week in OpenNMS!

In the last week we released Helm 1.1.0, continued to do more work in preparation for Drift in Horizon 22, and worked on various integrations with other tools.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2018-04-02 00:00:00' --until='2018-04-09 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * I fixed a bug that would cause some event comparisons to not match properly.
  * Jesse, David, and I fixed some bugs in building on Windows.
  * Jesse fixed an issue with template compatibility across different Elasticsearch versions.
  * Chandra did more work on Kafka integration.
  * Christian updated our embedded Karaf to 4.1.5 to fix some Karaf shell issues.
  * Jesse refactored our Camel sink implementation.

* __Web & UI__

  * I wrapped up my fixes for Helm and ReST timeouts.
  * I implemented support for fallback attributes (eg, handling ifHCInOctets/ifInOctets gracefully) in Helm
  * I fixed a bug in the Helm perf-ds that would cause it to not report errors properly on timeout.


## OpenNMS Helm 1.1.0 Released

A new version of our Grafana integration, OpenNMS Helm, has been released.  It includes a number of bug fixes and features, including Grafana 5 support as well as support for defining custom actions in the alarm table panel.

Packages are available in our Debian and RPM repositories, as well as directly in the Grafana plugin registry.

The [DockerHub image for Helm](https://hub.docker.com/r/opennms/helm/tags/) has been updated as well, with Helm 1.1.0 and Grafana 5.0.4.


## Upcoming Events and Appearances

* **[Africa Internet Summit - April 29th through May 11th, 2018](http://internetsummitafrica.org/)**

  Tarus Balog will be [conducting a one day workshop on OpenNMS](https://www.internetsummit.africa/agenda/programme) at the [Africa Network Operators group](https://afnog.org/)'s annual [Africa Internet Summit (AIS)](http://internetsummitafrica.org/) to be held in Dakar, Senegal.
  The training is currently scheduled for Sunday, May 6th.

* **[Dev-Jam 2018 - June 10th through 16th, 2018](https://wiki.opennms.org/wiki/Dev-Jam_2018)**

  The OpenNMS developers conference, Dev-Jam, will return again this year to the University of Minnesota in Minneapolis.
  Dev-Jam is a week of fun -- half hackathon, half social get-together.  More information is available on [the OpenNMS wiki](https://wiki.opennms.org/wiki/Dev-Jam_2018) and [registration is now open](http://www.opennms.com/opennms-dev-jam-registration) -- please join us!  All are welcome.

* **[OpenNMS User Conference Europe 2018 - September 20th through 21st, 2018](https://ouce.opennms.eu/)**

  [OUCE 2018](https://ouce.opennms.eu/) will be held at the [Rilano Hotel in Munich, Germany](https://www.rilano-hotel-muenchen.de/).
  A reception will be held on Wednesday the 19th, with talks and workshops the following Thursday and Friday.
  The [call for papers](https://ouce.opennms.eu/cfp/2018/) is now open for submissions.


## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HELM-78](https://issues.opennms.org/browse/HELM-78): Allow users to query flow data
* [HELM-86](https://issues.opennms.org/browse/HELM-86): Configurable query timeouts
* [HELM-87](https://issues.opennms.org/browse/HELM-87): Support for "fallback" attributes
* [HELM-88](https://issues.opennms.org/browse/HELM-88): PM datasource does not fail gracefully when the query time outs
* [HZN-1199](https://issues.opennms.org/browse/HZN-1199): Horizontally scaling telemetryd (research)
* [HZN-1200](https://issues.opennms.org/browse/HZN-1200): Review existing Karaf container assemblies
* [HZN-1201](https://issues.opennms.org/browse/HZN-1201): Review uber bundle strategy
* [HZN-1202](https://issues.opennms.org/browse/HZN-1202): Review structure of DAO related application contexts
* [HZN-1203](https://issues.opennms.org/browse/HZN-1203): Review Karaf feature definitions
* [HZN-1255](https://issues.opennms.org/browse/HZN-1255): Create RPM packages for the elasticsearch-drift-plugin
* [NMS-9885](https://issues.opennms.org/browse/NMS-9885): collection:collect command fails with ClassCastException
* [NMS-9941](https://issues.opennms.org/browse/NMS-9941): EventUtils.eventsMatch() fails if nodeId is greater than 127
* [NMS-9942](https://issues.opennms.org/browse/NMS-9942): webpack compilation fails on Windows (due to invalid path separator)
* [NMS-9943](https://issues.opennms.org/browse/NMS-9943): compilation fails on windows due to checkstyle exceptions
* [NMS-9947](https://issues.opennms.org/browse/NMS-9947): Java not found properly when building from Windows CMD proc
* [NMS-9948](https://issues.opennms.org/browse/NMS-9948): Vaadin Maven Plugin fails on Windows