---
title: Monitor LXC container processes using HostResourceSwRunMonitor
date: 10:23 2017-12-14
author: Marcel Fuhrmann
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: wiki
    tag: [use-case, configuration, snmp, wiki]
---

A monitoring solution should always help in bad situations and provide a useful overview of your system health status.
Service availability monitors are especially handy to ensure that all services are running on the correct machines.

In past, I have run into an problem which was more of an issue with documentation than a classical monitor alarming issue.
We had some servers with [LXC](https://en.wikipedia.org/wiki/LXC) containers running.
Unfortunately these and other server went down because of some hypervisor issues.
After restarting all of them, the LXC containers didn't come online again because of incorrect autostart configurations...

The biggest issue was:
We didn't know which servers the LXC containers had run on in the past, so we had to do a lot of research to find them all.

To get back to service availability monitoring mentioned above, I want to show you an example for LXC container monitoring based on OpenNMS' [process monitor](https://opennms.org/en/blog/2017-05-09-process-monitoring-snmp).

Wiki article: [LXC Container Monitoring](https://wiki.opennms.org/wiki/LXC_container_monitoring)
