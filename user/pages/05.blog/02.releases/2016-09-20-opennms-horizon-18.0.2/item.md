---
title: OpenNMS Horizon 18.0.2
date: 16:05 09/20/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: release
    tag: [release]
---

OpenNMS 18.0.2 (code name: [Muskrat](https://en.wikipedia.org/wiki/Muskrat)) is now available.

This is a reasonably small bug-fix release, with a few fixes and enhancements, as well as a fix for a cross-site-scripting vulnerability.

Notable Changes
===============

* improvements to bridge link discovery in Enlinkd
* fixed SVG alarm status
* fixed ReST API for categories and nodes
* fixed caching of nodes/interfaces when receiving syslog messages
* fixed negative availability sometimes showing in the dashboard
* fixed the VMware CIM query and config builder command-line tools
* fixed overriding system properties in `$OPENNMS_HOME/etc/opennms.properties.d`

For more details, see the complete [Release Notes](https://docs.opennms.org/opennms/releases/18.0.2/releasenotes/releasenotes.html).
