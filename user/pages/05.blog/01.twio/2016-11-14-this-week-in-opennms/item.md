---
title: This Week in OpenNMS: November 14th, 2016
date: 10:31 11/14/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, documentation, pollerd, opennms.conf, users, groups, roles, cdp, maps, google maps, newts, snmp, bsmd, sni, ssl, ping, web ui, rest, outages, availability, assets, categories, filtering, alarms, osmc]
---

In the last week we worked on documentation and configuration files, maps, Newts, various polling and provisioning internals, the web UI, ReST, and bug fixes.

<!-- git log --all --no-merges --since='2016-11-07 00:00:00' --until='2016-11-14 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)' | sort | less -R -->

Github Project Updates
----------------------

* __Documentation and Configuration__

  Ronny did documentation updates for Pollerd and poll-outages configuration files, as well as documentation about how users, groups, and roles work.  Alejandro put together an example `opennms.conf` file.

* __Maps__

  Markus fixed an issue with retrieving CDP topology information in the maps.  He also fixed some other NPEs and Google Maps API and coordinate handling.

* __Newts__

  Jesse updated Newts and the Newts integration to use a minimum step size of 5 minutes.

* __Internals, Provisioning, and Polling__

  I finished my work on improving our handling of SNMP "error-status" responses.  I also did a bunch of work on handling hostname updates (node label and iphostname) properly during various stages of provisioning.  Markus fixed a startup issue in bsmd. Jesse worked on SNI handling in the SSLCertMonitor.  Christian updated the ILR to provide node label.  Jesse updated pinger code to use the PingerFactory and Pinger RPC.

* __Web UI and ReST__

  Alejandro fixed date range handling in the outages-for-node ReST API, as well as the availability box on the node detail page.  He also worked on dealing with updating assets and categories through ReST.  Jesse fixed Backshift display of incomplete string values.  Markus fixed the display of node link detail info.  Dustin added support for filtering by severity in the alarm list.

* __Bug Fixes__

  We've been spending time fixing a bunch of smaller bugs and starting to identify blockers for 19.0.0, due in the next few months.

Upcoming Events and Appearances
-------------------------------

* __[Open Source Monitoring Conference - November 29th through December 2nd, 2016](https://www.netways.de/en/events_trainings/osmc/overview/)__

  Jeff will be speaking at OSMC on the current state of OpenNMS and what we're planning for the future.

Until Next Week…
----------------

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

Resolved Issues Since Last TWiO
-------------------------------

* [HZN-852](https://issues.opennms.org/browse/HZN-852): Trend Charts
* [NMS-6323](https://issues.opennms.org/browse/NMS-6323): Enhance SSLCertMonitor with TLS+SNI support with node label
* [NMS-7195](https://issues.opennms.org/browse/NMS-7195): When the DNS name of a discovered node changes, Provisiond doesn't update the node label.
* [NMS-8033](https://issues.opennms.org/browse/NMS-8033): JMX Datacollection for JBoss is broken in 16 and 17
* [NMS-8121](https://issues.opennms.org/browse/NMS-8121): Missing image in provisioning doc
* [NMS-8498](https://issues.opennms.org/browse/NMS-8498): Inconsistencies with the Measurements API when using Newts
* [NMS-8550](https://issues.opennms.org/browse/NMS-8550): Pollerd
* [NMS-8616](https://issues.opennms.org/browse/NMS-8616): Wrong A record of hostname gives no security manager: "RMI class loader disabled"-exception
* [NMS-8671](https://issues.opennms.org/browse/NMS-8671): Any SNMP error-status > 5 treated as unrecognized, aborts AggregateTracker
* [NMS-8721](https://issues.opennms.org/browse/NMS-8721): Create a more useful example content for opennms.conf
* [NMS-8771](https://issues.opennms.org/browse/NMS-8771): The Alarms Details widget on the OpsBoard shows the text on green instead of black
* [NMS-8808](https://issues.opennms.org/browse/NMS-8808): Blank content when clicking on "View Node Link Detailed Info"
* [NMS-8823](https://issues.opennms.org/browse/NMS-8823): Outage ReST service forNode use case calculates dates incorrectly
* [NMS-8847](https://issues.opennms.org/browse/NMS-8847): Backshift shows the name of the string variables when the value is not available
* [NMS-8853](https://issues.opennms.org/browse/NMS-8853): NPE when starting bsmd
* [NMS-8858](https://issues.opennms.org/browse/NMS-8858): Make the ILR put the node label alongside the package/IPADDR/Service tuple
* [NMS-8872](https://issues.opennms.org/browse/NMS-8872): NPE when using the Enlinkd Topology
* [NMS-8873](https://issues.opennms.org/browse/NMS-8873): Investigate poller-config.properties
* [NMS-8874](https://issues.opennms.org/browse/NMS-8874): The ipinterface.iphostname field is not updated after changing the FQDN associated with a given IP address
* [NMS-8875](https://issues.opennms.org/browse/NMS-8875): Topology is slow due to geocoding failures
* [NMS-8880](https://issues.opennms.org/browse/NMS-8880): The label of unreachable auto-discovered nodes is set to the IP after a rescan.
* [NMS-8882](https://issues.opennms.org/browse/NMS-8882): Unable to ping nodes with Minion due to missing class org.opennms.netmgt.icmp.jni6.Jni6Pinger
* [NMS-8883](https://issues.opennms.org/browse/NMS-8883): Provisiond does not support overlapping IP addresses in a requisition

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->
