---
title: OpenNMS Horizon 19.0.0
date: 17:30 02/13/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: release
    tag: [release]
---

The long-awaited OpenNMS Horizon 19 (code name: [Ice Hockey](https://en.wikipedia.org/wiki/Ice_hockey)) is here!

It is chock full of bug fixes and new features, most notably full support for OpenNMS's polling and data collection APIs on the Minion.

New in Horizon 19
=================

* **OpenNMS Minion**: Minion systems now have full support for most management features of OpenNMS:
  * Discovery
  * Provisioning
  * Polling
  * SNMP data collection
  * SNMP link discovery
  * Syslog reception (sent to OpenNMS via JMS or Apache Kafka)
  * SNMPv1/v2/v3 trap reception (sent to OpenNMS via JMS or Apache Kafka)
* **Automatic provisioning of Minions**: Minion devices will be added to the _Minions_ requisition and monitored for connectivity with OpenNMS.
* **GraphML Topology Provider**: A new Topology Provider is available that reads GraphML formatted graphs and displays them in the the Topology UI.
* **OpenNMS Elasticsearch ReST Forwarder**: This Elasticsearch forwarder can store events, alarms, and alarm state changes in Elasticsearch for archival or searching. It is compatible with all currently supported versions of Elasticsearch.
* **Unified JAAS Authentication**: The web UI, the Apache Karaf OSGi console, and the built-in ActiveMQ broker all use unified authentication.
* **Monitoring Location Events**: Events will be sent when Monitoring Locations are added, updated, or deleted.
* **Exponential propogation**: There is a new exponential propogation function available for Business Services.
* **External JMS broker**: It is possible to configure OpenNMS to use an external JMS broker if desired.
* **ICMP traffic class and don't-fragment support**: It is possible to configure OpenNMS to set DSCP traffic class and "don't fragment" bits when polling ICMP.
* **Geographical Maps**: Geographical maps are now included by default in the center of the Web UI front page.
* **Web UI improvements**: Location information has been added to many places in the UI, and a number of pages have been enhanced including the BSM editor and topology UI.

Breaking Changes/Upgrading
==========================

There are a few changes that may require updating configuration files.  See [the upgrade notes](http://docs.opennms.org/opennms/releases/19.0.0/releasenotes/#_important_upgrade_notes) for full details on things that may need changes.

More Info
=========

For complete info on what has changed since Horizon 18, see the [Release Notes](https://docs.opennms.org/opennms/releases/19.0.0/releasenotes/releasenotes.html).

