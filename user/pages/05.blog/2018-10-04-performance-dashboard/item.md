---
title: Grafana Performance Dashboards
date: 18:32 2018-10-04
author: Marcel Fuhrmann
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: wiki
    tag: [grafana]
---

As Administrator it is sometimes necessary to diagnose performance characteristics between different servers.
There are two diagnostic dashboards which can be used to compare performance metrics from SNMP agents running on Microsoft Windows and Linux.
The performance metrics are collected with the out-of-the box configuration on a _OpenNMS Horizon_ and _OpenNMS Meridian_ and are published on the [Grafana dashboard repository](https://grafana.com/dashboards?search=opennms).

<p style="text-align: center">
<iframe src="https://www.youtube.com/embed/qgc7GXMN6Gc?ecver=2" width="750" height="480"
frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</p>

You can just install them by importing the dashboards with an unique ID, the JSON files are automatically downloaded from the Grafana dashboard portal:

* [Linux Multi-Row Performance (ID: 6073)](https://grafana.com/dashboards/6073)
* [Windows Multi-Row Performance (ID: 6164)](https://grafana.com/dashboards/6164)

If you like to modify and tweak them to your needs, feel free to fork them from our public [OpenNMS Grafana dashboard repository on GitHub](https://github.com/opennms-forge/grafana-dashboards).
