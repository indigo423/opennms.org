---
title: This Week in OpenNMS: April 25th, 2016
date: 15:41 04/25/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, bsm, compass, grafana, mattermost, opennms compass, opennms horizon, slack, topology maps, tsrm]
---

In the last week we worked on BSM, topology maps, the TSRM ticketing plugin, Slack and Mattermost notifications, Grafana, Compass, and Horizon 18 bug fixes.

Github Project Updates
----------------------

* __Business Service Monitor and Topology Maps__

This week was Jesse, Ronny, and Markus continued their work on wrapping up BSM for Horizon 18, with topology UI cleanups, documentation, and more bug squashing.  Antonio&#8217;s fixes to the Enlinkd topology provider have also been merged into Foundation 2016 as of this morning.

* __TSRM Ticketing Plugin__

Chandra&#8217;s IBM TSRM plugin works an this week he has been working on adding support for more field mappings between OpenNMS ticketing and TSRM.

* __Slack and Mattermost Notification Plugins__

Jeff added support for [Slack](https://slack.com) and [Mattermost](http://www.mattermost.org) as notification targets.  Additionally, the Mattermost plugin uses Mattermost&#8217;s enhanced markdown support for formatting.

* __Grafana 3.0 Plugin__

Jesse re-engineered the [OpenNMS Grafana plugin](https://www.opennms.org/wiki/Grafana) for Grafana 3.0.  It is now available directly from the [Grafana plugin marketplace](https://grafana.net/plugins/opennms-datasource) so it no longer requires installing extra packages.

* __Compass__

Compass 2.1.0 betas are progressing with a number of fixes and small improvements.  The memory-usage crash has been squashed, and there are just a few more small things to tweak before I release it.  If you&#8217;d like to help beta test, see [the Compass web site](https://compass.opennms.io/#beta).

* __Bug Fixes__

A lot of other minor bug fixes have been going in in preparation for OpenNMS Horizon 18.

OpenNMS Horizon 18 Imminent
---------------------------

The BSM branch has been merged and we have a few more pull requests pending before we can branch for release.  If you have a test setup, please give the OpenNMS 18 snapshots a try and let us know if you run into any issues; this is shaping up to be a really nice release.  Just change your yum or apt configuration to use `snapshot` instead of `stable` and you&#8217;ll get the snapshot builds.  When we branch for 18, `snapshot` will point to the release branch, rather than develop.

Upcoming Events and Appearances
-------------------------------

* __[OpenNMS Training – June 13th though 17th, 2016](http://www.opennms.com/training)__

  The OpenNMS Group has scheduled our next training session in Pittsboro, NC for June 13th through 17th.  For more details on OpenNMS training and signing up, see [The OpenNMS.com training page](http://www.opennms.com/training/).

* **[Dev-Jam 2016 – July 25th through 30th, 2016](https://www.opennms.org/wiki/Dev-Jam_2016)**

  Dev-Jam 2016 is sneaking up on is, but there is still plenty of time to join us in Minnesota.  For more information, see [The Dev-Jam 2016 wiki page](https://www.opennms.org/wiki/Dev-Jam_2016).
  Mike Huot has written up a proposal letter you can use to help explain to management why attending Dev-Jam is a good idea.  Feel free to [copy this letter](https://docs.google.com/document/d/1VerZYe5LwMT_1j5ISAsNU9-ZGcwY_zdA_4DODNlBpYg/edit?usp=sharing) and join us in Minnesota this year!

Until Next Week…
----------------

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to <a href="mailto:twio@opennms.org).

– Ben

Resolved Issues Since Last TWiO
-------------------------------

* [HZN-645](http://issues.opennms.org/browse/HZN-645): IBM TSRM Ticketing Plugin
* [HZN-649](http://issues.opennms.org/browse/HZN-649): Load features/poller/monitors/core as an OSGi bundle
* [HZN-651](http://issues.opennms.org/browse/HZN-651): Prototype Atlas Topology Provider
* [HZN-652](http://issues.opennms.org/browse/HZN-652): Refactor ServiceMonitorLocator to use onmsgi to look up ServiceMonitors
* [HZN-662](http://issues.opennms.org/browse/HZN-662): Create an OSGI-INF blueprint to expose ServiceMonitors as OSGi services
* [HZN-666](http://issues.opennms.org/browse/HZN-666): Generate alarms for business services
* [HZN-703](http://issues.opennms.org/browse/HZN-703): Change blueprint-trapd-handler-minion.xml to use Minion ActiveMQ Component
* [HZN-710](http://issues.opennms.org/browse/HZN-710): The Threshold Function should be explained
* [HZN-711](http://issues.opennms.org/browse/HZN-711): Highest severity above is inclusive
* [HZN-713](http://issues.opennms.org/browse/HZN-713): Root cause and impact analysis should also show the entire map
* [NMS-6521](http://issues.opennms.org/browse/NMS-6521): PageSequenceMonitor fails to unmarshal configuration
* [NMS-7792](http://issues.opennms.org/browse/NMS-7792): NPE in JmxRrdMigratorOffline
* [NMS-7854](http://issues.opennms.org/browse/NMS-7854): Translated events with a new UEI do not receive the description, severity and alarm-data of the new event if new UEI&#8217;s eventconf is present after original UEI&#8217;s eventconf
* [NMS-7872](http://issues.opennms.org/browse/NMS-7872): 303 See Other on requisitions response breaks the usage of the Requisitions ReST API
* [NMS-7922](http://issues.opennms.org/browse/NMS-7922): Null pointer exceptions with whitespace in requisition name
* [NMS-7976](http://issues.opennms.org/browse/NMS-7976): Merge OSGi Plugin Manager into Admin UI
* [NMS-8041](http://issues.opennms.org/browse/NMS-8041): Refactor Enhanced Linkd Topology
* [NMS-8080](http://issues.opennms.org/browse/NMS-8080): VLAN name is not displayed
* [NMS-8096](http://issues.opennms.org/browse/NMS-8096): JMX detector connection errors use wrong log level
* [NMS-8098](http://issues.opennms.org/browse/NMS-8098): PageSequenceMonitor sometimes gives poor failure reasons
* [NMS-8129](http://issues.opennms.org/browse/NMS-8129): Disallow restricted characters from foreign source and foreign ID
* [NMS-8330](http://issues.opennms.org/browse/NMS-8330): Switching Topology Providers causes Exception
* [NMS-8334](http://issues.opennms.org/browse/NMS-8334): Implement org.opennms.timeseries.strategy=evaluate to facilitate the sizing process
* [NMS-8336](http://issues.opennms.org/browse/NMS-8336): Set the required fields when not specified while adding events through ReST
* [NMS-8337](http://issues.opennms.org/browse/NMS-8337): Non-existing resources or attributes break JasperReports when using the Measurements API
* [NMS-8346](http://issues.opennms.org/browse/NMS-8346): Add Mattermost and Slack notification strategies
* [NMS-8349](http://issues.opennms.org/browse/NMS-8349): Update screenshots with 18 theme in user documentation
* [NMS-8366](http://issues.opennms.org/browse/NMS-8366): OpenNMS Incompatible with Debian Stretch and Ubuntu 16.04
* [NMS-8371](http://issues.opennms.org/browse/NMS-8371): The contents of the info panel should refresh when the vertices and edges are refreshed
