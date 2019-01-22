---
title: This Week in OpenNMS - January 22nd, 2019 - Kafka Updates, WS-Man Support, UI Refresh, Helm, and more!
date: 09:55 01/22/2019
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [syslogd, kafka, rpc, dhcp, minion, elasticsearch, ws-man, karaf, helm, bootstrap, osgi, wallboard, bsm]
---

It's time for This Week in OpenNMS!

Last week we worked on a number of Kafka-related fixes and improvements, improved minion monitor support, the Bootstrap 4 UI rework, and a bunch of other bug fixes and enhancements.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --color=always --since='2019-01-14 00:00:00' --until='2019-01-22 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->


## Github Project Updates

* __Internals, APIs, and Documentation__

  * Chandra worked on an issue where syslog events could trigger notifications when they are not supposed to.
  * Antonio continued his work on exposing topology data to Kafka.
  * Jesse fixed an issue where some event parameter names would be too long to be persisted to the database.
  * Chandra did more work on supporting large buffer sizes in Kafka RPC.
  * Christian worked on modernizing the DHCP monitor to be Minion-capable.
  * Jesse continued to work on updating pushing data to Elasticsearch.
  * Chandra did more changes to the poller API support in OIA.
  * Dino worked on supporting getting provisioning asset information from WS-Man.
  * Jesse added support for printing runtime event configuration from the Karaf CLI.
  * Jesse added Helm documentation for the performance datasource.
  * Jesse fixed some issues in the Minion WS-Man support.
  * Matt continued to work on tools to help evaluate alarm and situation coverage.

* __Web & UI__

  * Markus, Sebastian, and Ronny continued their work on moving to Bootstrap 4 for our web UI.
  * Markus fixed an issue with exceptions in OSGi-provided ReST services getting eaten.
  * Christian worked on an issue where the wallboard UI would show "Nothing to display".
  * Markus fixed a problem where the Business Service Status panel would not show.
  * I worked on making it possible to use node or resource labels and names in Helm datasource labels.
  * Dustin did some refactoring of the code for supporting browser notifications.
  * Brynjar Eide worked on adding some missing thread pool information from Collectd and Pollerd's instrumentation.
  * Dustin worked on making Helm's queries to the measurements API have a consistent order.

## OpenNMS Meridian and Horizon Releases

Last week we released Meridian 2018.1.4 and Horizon 23.0.2.

Both were primarily bugfix releases that also included a number of performance improvements to topology map loading.

For a complete list of changes, see the release announcements:

* [Meridian 2018.1.4](https://www.opennms.com/2019/01/18/opennms-meridian-2018-1-4-released/)
* [Horizon 23.0.2](https://www.opennms.org/en/blog/releases/2019-01-17-opennms-horizon-23.0.2)

<!--
## Upcoming Events and Appearances

* **[OpenNMS Training - December 10th through 14th, 2018](https://www.opennms.com/training/)**

  The OpenNMS Group will be [offering hands-on OpenNMS training](https://www.opennms.com/training/) in our Apex, NC office.
-->

## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HZN-1458](https://issues.opennms.org/browse/HZN-1458): No stack-traces for exceptions thrown by REST services in OSGi
* [HZN-1460](https://issues.opennms.org/browse/HZN-1460): Add option to syslogd to include the raw syslog message as a parameter in the generated event
* [NMS-10357](https://issues.opennms.org/browse/NMS-10357): Improve Collectd and Pollerd's ThreadPool graphs
* [NMS-10404](https://issues.opennms.org/browse/NMS-10404): Support provisioning asset information via wsman
* [NMS-10441](https://issues.opennms.org/browse/NMS-10441): Update favicon.ico for higher resolutions
* [NMS-10446](https://issues.opennms.org/browse/NMS-10446): Support large buffer sizes in Kafka RPC
* [NMS-10449](https://issues.opennms.org/browse/NMS-10449): Use the DaemonService to reload a daemon instead of the DaemonNameEnum
* [NMS-10518](https://issues.opennms.org/browse/NMS-10518): refactor/clean up `opennms` script
* [NMS-10527](https://issues.opennms.org/browse/NMS-10527): Remove unused Topology Plugin "org.opennms.features.topology.plugins.ssh"
* [NMS-10529](https://issues.opennms.org/browse/NMS-10529): BusinessServiceVertexStatusInfoPanelItem is broken
* [NMS-10530](https://issues.opennms.org/browse/NMS-10530): Flow query fails with NPE if it returns no data
* [OIA-1](https://issues.opennms.org/browse/OIA-1): Add support for ServiceMonitors
