---
title: This Week in OpenNMS: May 21st, 2018
date: 11:57 05/21/2018
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [sentinel, snmp, enlinkd, telemetryd, netflow, sflow, maps, backshift, helm, dev-jam, inog, ripe hackathon, ouce]
---

It's time for This Week in OpenNMS!

In the last week we mostly worked on wrapping up bug fixes in anticipation of this week's releases.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --since='2018-05-14 00:00:00' --until='2018-05-21 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->

## Github Project Updates

* __Internals, APIs, and Documentation__

  * Markus did more work getting various components running in the Sentinel container.
  * Ronny did some more cleanup of SNMP configs in anticipation of the Horizon 22 release.
  * Antonio did more work on Enlinkd improvements.
  * Jesse improved the Flow APIs to provide application names (rather than just ports) in conversation queries.
  * Christian and Dustin wrapped up some Netflow/sFlow changes.
  * Chandra wrapped up his fixes to SNMPv3 trap receiving.
  * Markus and Jesse wrote a bunch of Telemetryd documentation.
  * Patrick finished up his enhancements to make the `config-tester` tool handle `opennms.properties` and similar.

* __Web & UI__

  * Sebastian Grund fixed node maps to allow a wider range of zooming.
  * I changed the default graphing strategy to use Backshift now, regardless of which storage strategy is used.
  * Jesse added a "deep dive tool" for flow data to Helm.
  * I fixed some bugs in OpenNMS.js relating to handling errors when expecting list data from APIs (including flow exporters).


## OpenNMS Releases for May 2018

Normally we release on the 3rd Thursday of the month, but we ended up with a backlog of merges in preparation for the release of Horizon 22, so we decided to push back the release until today.

So without further ado, today you will see the release of Meridian 2016.1.13, 2017.1.8, and Horizon 22.0.0.

The Meridian releases are just small releases with relatively little changed.

Horizon 22, however, introduces Telemetryd. Telemetryd adds core support support for real-time telemetry data in a variety of formats, including JTI (Junos Telemetry Interface), Netflow 5 and 9, IPFIX, SFlow, and Cisco NX-OS.
This data is then enriched and passed on to Elasticsearch, and can then be accessed through a new ReST API bridge and viewed in [Helm for Grafana](https://docs.opennms.org/helm/releases/latest/helm/latest/welcome/introduction.html).

Watch for the release announcements later today.


## Upcoming Events and Appearances

* **[Dev-Jam 2018 - June 10th through 16th, 2018](https://wiki.opennms.org/wiki/Dev-Jam_2018)**

  The OpenNMS developers conference, Dev-Jam, will return again this year to the University of Minnesota in Minneapolis.
  Dev-Jam is a week of fun -- half hackathon, half social get-together.  More information is available on [the OpenNMS wiki](https://wiki.opennms.org/wiki/Dev-Jam_2018) and [registration is now open](http://www.opennms.com/opennms-dev-jam-registration) -- please join us!  All are welcome.

* **[iNOG 10 + RIPE Hackathon - June 21st through 24th, 2018](https://inog.net/)**

  Craig Gallen and Ronny Trommer will be attending [iNOG](https://ti.to/inog/10) and the [RIPE Hackathon](https://labs.ripe.net/Members/becha/join-network-operators-tools-hackathon) starting Thursday, June 21st in Dublin.  Join them for a fun weekend of socializing, hacking, and networking (of all kinds).

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

* [HELM-91](https://issues.opennms.org/browse/HELM-91): interfacesOnExporterNodeWithFlows query fails if there are no exporters
* [HELM-92](https://issues.opennms.org/browse/HELM-92): Cannot edit 'Filter' or 'Expression' queries
* [HELM-93](https://issues.opennms.org/browse/HELM-93): Flow analyzer (deep dive tool) dashboard
* [HZN-1205](https://issues.opennms.org/browse/HZN-1205): Add Elasticsearch 6 support to the smoke tests
* [HZN-1299](https://issues.opennms.org/browse/HZN-1299): Review and validate JFlow v5 support
* [HZN-1302](https://issues.opennms.org/browse/HZN-1302): Identify application in Netflow conversations
* [HZN-1303](https://issues.opennms.org/browse/HZN-1303): Retrieve performance counters via sFlow
* [NMS-2189](https://issues.opennms.org/browse/NMS-2189): Netware Disk Monitoring How-To
* [NMS-2239](https://issues.opennms.org/browse/NMS-2239): Add comments about specific events
* [NMS-9900](https://issues.opennms.org/browse/NMS-9900): Value of ${nodeLabel} for PSM services apparently not eagerly updated
* [NMS-9919](https://issues.opennms.org/browse/NMS-9919): Flows API doesn't recognize the exporters
* [NMS-9936](https://issues.opennms.org/browse/NMS-9936): Datacollection for Cisco Call Manager has old OID
* [NMS-9938](https://issues.opennms.org/browse/NMS-9938): Alarm favorite link URL does not have AddRefreshHeader-30 applied
* [NMS-9939](https://issues.opennms.org/browse/NMS-9939): Revisit the current documentation of Drift
* [NMS-10008](https://issues.opennms.org/browse/NMS-10008): Home Page Map does not display node details
* [NMS-10009](https://issues.opennms.org/browse/NMS-10009): Can't receive SNMP v3 Trap
* [NMS-10067](https://issues.opennms.org/browse/NMS-10067): Enhance AlarmPersisterImpl to support updating acknowledgment values on reduction
* [NMS-10134](https://issues.opennms.org/browse/NMS-10134): /rest/flows/exporters throws NPE when no flows are found
* [NMS-10135](https://issues.opennms.org/browse/NMS-10135): Add button is not working in "Add Ranges" in opennms
* [NMS-10136](https://issues.opennms.org/browse/NMS-10136): Remove Dell Open-Manage from all Net-SNMP devices
* [NMS-10138](https://issues.opennms.org/browse/NMS-10138): Remove default PoE data collection
* [NMS-10139](https://issues.opennms.org/browse/NMS-10139): Make interface octet counter 64bit as default instead of 32bit
* [NMS-10141](https://issues.opennms.org/browse/NMS-10141): Remove overlapping data collections for MIB2-X-Interfaces
* [NMS-10142](https://issues.opennms.org/browse/NMS-10142): Remove Checkpoint Firewall data collection from all Windows devices
* [NMS-10143](https://issues.opennms.org/browse/NMS-10143): Remove default data collection for Compaq Insight Manager stats from all Windows Server
* [NMS-10144](https://issues.opennms.org/browse/NMS-10144): Remove Cisco Call Manager statistics from all Windows Servers
* [NMS-10148](https://issues.opennms.org/browse/NMS-10148): wrong statement in event description for serviceDeleted
* [NMS-10149](https://issues.opennms.org/browse/NMS-10149): NPEs when making REST requests to the /flows endpoints when no data is present
* [NMS-10152](https://issues.opennms.org/browse/NMS-10152): Make Backshift the Default Graph Strategy
* [NMS-10153](https://issues.opennms.org/browse/NMS-10153): Backport intermittent SNMPv3 failures to foundation-2016
* [NMS-10157](https://issues.opennms.org/browse/NMS-10157): Website not display Error 503