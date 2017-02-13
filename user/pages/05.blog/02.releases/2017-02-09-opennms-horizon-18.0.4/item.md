---
title: OpenNMS Horizon 18.0.4
date: 18:00 02/09/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: release
    tag: [release]
---

OpenNMS 18.0.4 (code name: [Kiwa Hirsuta](https://en.wikipedia.org/wiki/Kiwa_hirsuta)) is now available.

This release contains a number of bug fixes and enhancements, including a fix for a deadlock that can be triggered by using the topology UI, and a rather large performance fix for startup if you are using BSM.

Notable Changes
===============

* many fixes to graph templates and RRD/JRB storage and querying
* a fix to a filehandle leak in the JIRA ticketer
* a number of BSM fixes including fixing long startup times when you have a large number of services
* a fix to a deadlock in the topology UI

For more details, see the complete [Release Notes](https://docs.opennms.org/opennms/releases/18.0.4/releasenotes/releasenotes.html).

