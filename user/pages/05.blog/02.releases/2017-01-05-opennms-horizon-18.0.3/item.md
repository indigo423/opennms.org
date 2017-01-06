---
title: OpenNMS Horizon 18.0.3
date: 18:00 01/05/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: release
    tag: [release]
---

OpenNMS 18.0.3 (code name: [Dugong](https://en.wikipedia.org/wiki/Dugong)) is now available.

This release has been a long time coming, with tons of bug fixes including a fix for a discovery/provisioning regression over Horizon 17.


Notable Changes
===============

* many improvements and fixes to SNMP graph definitions
* a number of GUI tweaks and fixes (event search, alarm details, ops board colors, node link details)
* Newts fixes: improved Measurements API compatibility for graphing, fixed retrying when Cassandra is unavailable
* better handling of invalid or unlikely SNMP error responses from agents
* some fixes to JMX-related code (trap counters, the config command-line tool)
* fixes to a number of crashes and exceptions in various subsystems (BSMD, Enlinkd, SNMP)
* the JIRA ticketer now handles HTTPS properly and now supports additional fields
* bug fixes and improvements to WS-MAN collection

For more details, see the complete [Release Notes](https://docs.opennms.org/opennms/releases/latest/releasenotes/releasenotes.html).

Fixing Duplicate Nodes
======================

Due to a bug in the new Discovery daemon introduced in 18.0.0 ([NMS-8682](https://issues.opennms.org/browse/NMS-8682)), OpenNMS would create (identical) duplicate nodes when discovering using the default foreign source.

You can get the list of duplicate nodes by running the following query in PostgreSQL (`psql -U opennms`):

    SELECT "ID"
      FROM (SELECT nodeid AS "ID",
                   ROW_NUMBER() OVER (PARTITION BY nodelabel ORDER BY nodeid) AS "row_num"
              FROM node) AS foo
    WHERE foo."row_num" > 1);

If you are satisfied that the nodes are safe to delete, the next step is to actually delete them. First, [back up your database](https://wiki.opennms.org/wiki/Backup_and_Restore#Backing_Up_the_Database). Then, run the following query in PostgreSQL:

    DELETE
      FROM node
     WHERE nodeid
        IN (SELECT "ID"
              FROM (SELECT nodeid AS "ID",
                           ROW_NUMBER() OVER (PARTITION BY nodelabel ORDER BY nodeid) AS "row_num"
                      FROM node) AS foo
     WHERE foo."row_num" > 1);
