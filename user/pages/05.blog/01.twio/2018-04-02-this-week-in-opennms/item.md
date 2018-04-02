---
title: This Week in OpenNMS: April 2nd, 2018
date: 10:42 04/02/2018
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [sflow, telemetryd, kafka, karaf, elasticsearch, grafana, helm]
---

It's time for This Week in OpenNMS!

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2018-03-26 00:00:00' --until='2018-04-02 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * Christian did more work on sFlow support in Telemetryd.
  * Markus added more test coverage for the index strategy and fixed UTC time-handling.
  * Chandra and Jesse did more work on the Kafka producer.
  * Markus improved our internal cache API to be more configurable.
  * Markus worked on improving OID storage in Elasticsearch.
  * Markus added support for a single flow dispatcher adapter.
  * Jesse fixed the Karaf CLI collection command (and the `DefaultCollectionAgent` API it invokes).

* __Web & UI__

  * Patrick enhanced the classification UI to allow specifying the filename for CSV export.
  * I added `X-Requested-With` header support to OpenNMS.js.
  * I fixed the OpenNMS.js Grafana HTTP adapter to support configuring timeouts.
  * Jesse added a new flow datasource to Helm.
  * I added support for configuring timeouts to Helm.

<!--
## Upcoming Events and Appearances

* __[Ohio State Open Source Club - March 22nd, 2018](https://opensource.osu.edu/events/)__

  Tarus will be [speaking at the Ohio State Open Source Club](https://opensource.osu.edu/events/) on Thursday, March 22nd.
-->

## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HZN-1216](https://issues.opennms.org/browse/HZN-1216): sFlow support
* [HZN-1253](https://issues.opennms.org/browse/HZN-1253): Error setting up IPFIX / Netflow 9 listeners
* [HZN-1255](https://issues.opennms.org/browse/HZN-1255): Create RPM packages for the elasticsearch-drift-plugin
* [HZN-1257](https://issues.opennms.org/browse/HZN-1257): Kafka Event Stream - Add support for filtering
* [HZN-1278](https://issues.opennms.org/browse/HZN-1278): flowDocument.getTimestamp() returning time based on system timezone and not UTC
* [NMS-9925](https://issues.opennms.org/browse/NMS-9925): Can't install OpenNMS on Ubuntu 18.04
* [NMS-9926](https://issues.opennms.org/browse/NMS-9926): Subsume "Event Configuration How-To" from wiki into admin guide
* [NMS-9931](https://issues.opennms.org/browse/NMS-9931): Make NodeCache configurable
* [NMS-9934](https://issues.opennms.org/browse/NMS-9934): Update docs section of devel guide with section on migrating info from wiki