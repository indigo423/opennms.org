---
title: Smart Debug Logging
date: 18:32 2018-08-05
author: Marcel Fuhrmann
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: wiki
    tag: [logging, use-case, debugging]
---

Sometimes you have to set a specific OpenNMS deamon to DEBUG mode to find issues in your configuration. 
Depending of the environments size OpenNMS can create many log entries while being in DEBUG mode.
But in some cases the log rotation is faster than an editor can open a log file and the amount of logs is increasing heavily.
Especially collectd can be extremely chatty and it seems to be impossible to grep the needed parts out of it.

But the solution is simple. Since OpenNMS uses Log4j2 it's possible to create specific rules to pipe out node and deamon related logs into a seperate log file.

Follow our wiki article to get more information: https://wiki.opennms.org/wiki/Seperate-collectd-log
