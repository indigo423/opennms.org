---
title: OpenNMS Horizon 20.0.0
date: 15:14 06/08/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: release
    tag: [release, horizon]
---

OpenNMS Horizon 20.0.0 (code name: [Leeloo](http://fifth-element.wikia.com/wiki/Leeloo)) is now available!

This release is focused more on fixes and tuning of existing subsystems, as well as plenty of code cleanup and updates in the process of bringing Minion monitoring up to the level of the rest of the codebase.

New in OpenNMS Horizon 20
=========================

Breaking Changes
----------------

-   [NMS-9303](https://issues.opennms.org/browse/NMS-9303): Deprecated Capsd and Linkd event definitions are removed. Otherwise unused event definitions are also cleaned up and removed from the code and configurations. For a detailed list of all removed events see [NMS-9303](https://issues.opennms.org/browse/NMS-9303). For people maintaining databases prior to OpenNMS 1.8, we provide a maintenance script for Linux and Windows in the *opennms-contrib* package to clean up old events in the database. The script is named `NMS-9303-cleanup-deprecated-events.sh` and executes a SQL script. In case you run PostgreSQL on Windows, you can use `psql.exe -d opennms -U opennms -W -a -f NMS-9303-cleanup-deprecated-events.sql` to run the maintenance script.

Important Upgrade Notes
-----------------------

-   **JAXB XML Parsing**: We have finished removing our use of Castor for XML processing. While we have tried to adjust XSDs where needed to provide a seamless transition, there are a LOT of changes and it’s possible there may still be issues with some config files that are being treated more strictly than they used to be. If you run into any config files that can’t be parsed in OpenNMS 20, please open an issue.
-   **org.opennms.newts.nan\_on\_counter\_wrap**: If you are using Newts, returning NaN when a counter-wrap is encountered now defaults to true. If you relied on the old behavior, you can change it back by setting `org.opennms.newts.nan_on_counter_wrap=false` in a file in `opennms.properties.d`.

New Features
------------

-   **IBM Tivoli Event Integration Facility**: Support has been added to bridge EIF events into OpenNMS Horizon. [(more details)](https://docs.opennms.org/opennms/releases/latest/guide-admin/guide-admin.html#ga-events-sources-eif)
-   **Asset Topology Provider**: The Asset Topology Provider generates a GraphML topology based on node metadata including asset fields. [(more details)](http://docs.opennms.org/opennms/releases/latest/guide-admin/guide-admin.html#_asset_topology_provider).
-   **Alarm Sounds**: The web UI can now optionally flash and play an alert sound when alarms are created and optionally updated. [(more details)](http://docs.opennms.org/opennms/releases/latest/guide-admin/guide-admin.html#ga-alarm-sounds).
-   **Minion Updates**: The Minion has improved quite a bit over the previous release, adding support for more collectors and more robust tracking of Minion availability.
-   Polling now reports an "unknown" poll status when the Minion doesn’t respond, rather than "down".
-   The minion now supports using JICMP and JICMP6 for ICMP requests, providing more performant ping requests than the previous default JNA implementation.
-   Debian packages are now provided for the Minion.
-   Requisition handling now delegates properly to the Minion when appropriate.
-   The HTTP, JDBC, JMX, NSClient, TCA, WMI, WS-Man, and XML collectors now work on the Minion.
-   VMware provisioning, collection, and monitoring all work on the Minion now.
-   Collectors can all be run remotely on Minions manually from the OpenNMS Karaf shell.

More Info
=========

For complete info on what has changed since Horizon 19, see the [Release Notes](https://docs.opennms.org/opennms/releases/20.0.0/releasenotes/releasenotes.html).

