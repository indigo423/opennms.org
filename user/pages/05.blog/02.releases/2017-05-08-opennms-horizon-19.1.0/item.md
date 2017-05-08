---
title: OpenNMS Horizon 19.1.0 (Octopush) Released
date: 13:44 05/08/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: release
    tag: [release]
---

OpenNMS 19.1.0 (code name: [Octopush](https://en.wikipedia.org/wiki/Octopush)) is now available.

This release contains a large number of bug fixes and infrastructure updates, as well as a few new features:

* updated Camel, CXF, Drools, Quartz, SNMP4J, and Spring dependencies
* Drools now persists working memory on OpenNMS shutdown and loads it back up on startup
* a new syslog parser (`RadixTreeSyslogParser`) has been introduced which supports most syslog formats and uses Grok for parsing
* the TCP persister now supports string values
* a number of web UI improvements have been added 

While it's not a _gigantic_ change over 19.0, we felt that there were enough changes and new features to justify bumping the version to 19.1.  For details on what has changed, see the complete [change log](https://docs.opennms.org/opennms/releases/19.1.0/releasenotes/releasenotes.html#releasenotes-changelog-19.1.0).

More Info
---------

For complete info on what has changed since Horizon 18, see the [release notes](https://docs.opennms.org/opennms/releases/19.1.0/releasenotes/releasenotes.html).
