---
title: Restart Detection
date: 20:50 2017-05-04
author: Marcel Fuhrmann
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: wiki
    tag: [threshold, wiki]
---
Most of today's servers run in virtual environments and Java applications in containers.
Sometimes these applications or servers unexpectedly restart and can often go unnoticed because a restart can be much faster then a polling cycle. 

If SNMP is enabled, the hrSystemUptime can detect restarts from Windows or Linux machines.
Similarly, this concept can also be applied to Java application restart detection via JMX and the JVM uptime metric.
This article describes how to use the OpenNMS threshold features to detect server and Java application restarts and create events for alerting or logging.

Would you like to know more? -> [Restart Detection](https://wiki.opennms.org/wiki/Restart_Detection)
