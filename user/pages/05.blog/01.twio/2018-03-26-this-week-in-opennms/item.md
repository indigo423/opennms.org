---
title: This Week in OpenNMS: March 26th, 2018
date: 11:53 03/26/2018
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [sflow, telemetryd, elasticsearch, kafka, netty, tests, statsd, classification, helm]
---

It's time for This Week in OpenNMS!

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2018-03-19 00:00:00' --until='2018-03-26 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * Christian did more work on sFlow support in Telemetryd.
  * Markus fixed a recursion error in the Elasticsearch client code.
  * Chandra added support for filtering events before passing them on to Kafka.
  * Markus fixed some errors in our netty implementation.
  * Jeff put event configuration info from the wiki into the admin guide.
  * Markus worked on refactoring the smoke test infrastructure.
  * Jesse improved the algorithm for determining flow direction.
  * Dustin fixed an issue with binding listeners in Telemetryd.

* __Web & UI__

  * I fixed some issues with the new JS build infrastructure.
  * Patrick worked on improvements to the classification ReST API.
  * I added `X-Requested-With` headers to OpenNMS.js so basic auth is handled properly.
  * Jesse added a new datasource for handling flows in Helm.

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

* [HZN-1152](https://issues.opennms.org/browse/HZN-1152): Drift: Streaming Telemetry
* [HZN-1227](https://issues.opennms.org/browse/HZN-1227): Drift: Flow indicator icon on MIB-2 traffic utilization graphs
* [HZN-1249](https://issues.opennms.org/browse/HZN-1249): Consistent behavior when writing to Elasticsearch
* [HZN-1261](https://issues.opennms.org/browse/HZN-1261): Enhance ClassificationRestService to be used in a simple link
* [HZN-1262](https://issues.opennms.org/browse/HZN-1262): Provide input field to define file name for csv download
* [HZN-1268](https://issues.opennms.org/browse/HZN-1268): features-flows-elastic - Flow documents are logged against incorrect index strategy name
* [HZN-1271](https://issues.opennms.org/browse/HZN-1271): Web UI - Help Section - Button for Admin Guide missing
* [HZN-1273](https://issues.opennms.org/browse/HZN-1273): Document Kibana Dashboard release process
* [HZN-1274](https://issues.opennms.org/browse/HZN-1274): Suspicious warnings on web.log related with the Flows API
* [HZN-1275](https://issues.opennms.org/browse/HZN-1275): Review flow conversation directionality
* [HZN-1277](https://issues.opennms.org/browse/HZN-1277): Correct typo in IndexStrategy
* [NMS-9667](https://issues.opennms.org/browse/NMS-9667): NettyServerTCPWorker warnings in eventd.log
* [NMS-9763](https://issues.opennms.org/browse/NMS-9763): RADIUS Poller: MD4 MessageDigest not available
* [NMS-9775](https://issues.opennms.org/browse/NMS-9775): Text not displayed in correct fonts in graphs
* [NMS-9783](https://issues.opennms.org/browse/NMS-9783): Suppress HTTP Basic Auth Requests for AJAX Calls
* [NMS-9855](https://issues.opennms.org/browse/NMS-9855): Node ReST service not handling assets and deleting properly
* [NMS-9918](https://issues.opennms.org/browse/NMS-9918): Not possible to use the SNMP Poller with useCriteriaFilters="true"
* [NMS-9920](https://issues.opennms.org/browse/NMS-9920): Possible StackOverflow in DefaultRequestExecutor
* [NMS-9927](https://issues.opennms.org/browse/NMS-9927): Backshift graph fails to load with jQuery error