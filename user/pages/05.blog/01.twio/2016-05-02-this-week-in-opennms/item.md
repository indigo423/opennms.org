---
title: This Week in OpenNMS: May 2nd, 2016
date: 12:41 05/02/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, bsm, cassandra, compass, data collection, dev-jam, documentation, enlinkd, jmx, karaf, minion, newts, opennms compass, opennms horizon, requisitions, topology maps, training, tsrm]
---

In the last week we worked on the BSM, topology maps, Minion, the TSRM ticketing plugin, JMX data collection configuration, Newts, Documentation, Requisitions, Compass, and bug fixes.

Github Project Updates
----------------------

* __Business Service Monitor and Topology Maps__

  This week was more of Jesse, Ronny, and Markus wrapping up BSM for Horizon 18. Jesse did a ton of performance work on loading Enlinkd data into the topology UI, bringing his test set load time down from 5 minutes down to 5 seconds.

* __OSGi Updates and Minion__

  Seth spent some time working on various issues related to Karaf &#8212; updating our embedded Karaf container, as well as more work on getting Minion-related code loading.

* __TSRM Ticketing Plugin__

  Chandra finished wrapping up the IBM TSRM plugin and has merged it into the Horizon 18 branch.

* __JMX Data Collection__

  Jesse updated the JMX data collection configuration to support split files in the `jmx-datacollection-config.d` directory.

* __Newts and Cassandra Performance Investigation__

  Jesse spent some time investigating a performance issue reported by a number of our customers related to Newts and Cassandra.  It turns out the issue was related to default logging levels and the Cassandra driver, and the fix was as simple as adding this to your OpenNMS `log4j2.xml` file:


    <logger name="com.datastax.driver" additivity="false" level="INFO">
        <appender-ref ref="RoutingAppender"/>
    </logger>

* __Documentation__

Chandra, Seth, Ronny, Jesse, and Sven Rei&szlig;mann have updated documentation in multiple places in preparation for Horizon 18.  It is also now possible to view the documentation in the `opennms-doc` package from the OpenNMS web UI by default.

* __Requisitions__

Alejandro has done a bit more cleanup and fixing of the Requisitions UI for Horizon 18.

* __Compass__

I spent more time this last week cleaning up small things and fixing a few bugs in Compass.  I also beefed up the (almost nonexistent) analytics inside Compass, and added an opt-out for analytics tracking.  If you&#8217;d like to help beta test Compass, see [the Compass web site](https://compass.opennms.io/#beta).

* __Bug Fixes__

A lot of other minor bug fixes have been going in in preparation for OpenNMS Horizon 18.

OpenNMS Horizon 18 Due Monday, May 9th
--------------------------------------

Barring any last-minute bugs we may discover in testing, the Horizon 18 branch is finished and our plan is to release next Monday, May 9th.  If you have a test setup, please give the OpenNMS 18 snapshots a try and let us know if you run into any issues; this is shaping up to be a really nice release.  Just change your yum or apt configuration to use `snapshot` instead of `stable` and you&#8217;ll get the snapshot builds.  While we are prepping 18, `snapshot` points to the release branch, rather than develop.
Upcoming Events and Appearances


* __[OpenNMS Training – June 13th though 17th, 2016](http://www.opennms.com/training)__

  The OpenNMS Group has scheduled our next training session in Pittsboro, NC for June 13th through 17th.  For more details on OpenNMS training and signing up, see [The OpenNMS.com training page](http://www.opennms.com/training/).

* **[Dev-Jam 2016 – July 25th through 30th, 2016](https://www.opennms.org/wiki/Dev-Jam_2016)**

  Dev-Jam 2016 is sneaking up on is, but there is still plenty of time to join us in Minnesota.  For more information, see [The Dev-Jam 2016 wiki page](https://www.opennms.org/wiki/Dev-Jam_2016).
  Mike Huot has written up a proposal letter you can use to help explain to management why attending Dev-Jam is a good idea.  Feel free to [copy this letter](https://docs.google.com/document/d/1VerZYe5LwMT_1j5ISAsNU9-ZGcwY_zdA_4DODNlBpYg/edit?usp=sharing) and join us in Minnesota this year!

Until Next Week…
----------------

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

– Ben

Resolved Issues Since Last TWiO
-------------------------------

* [BSHIFT-11](http://issues.opennms.org/browse/BSHIFT-11): traffic in/out utilization does not render properly
* [HZN-645](http://issues.opennms.org/browse/HZN-645): IBM TSRM Ticketing Plugin
* [HZN-652](http://issues.opennms.org/browse/HZN-652): Refactor ServiceMonitorLocator to use onmsgi to look up ServiceMonitors
* [HZN-657](http://issues.opennms.org/browse/HZN-657): Write a Minion feature definition for opennms-poller-monitors-core
* [HZN-688](http://issues.opennms.org/browse/HZN-688): Create user documentation for the BSM components
* [HZN-715](http://issues.opennms.org/browse/HZN-715): Define a model for &#8220;sub graphs"
* [HZN-716](http://issues.opennms.org/browse/HZN-716): Design Atlas
* [HZN-717](http://issues.opennms.org/browse/HZN-717): Prototype import of the data
* [HZN-726](http://issues.opennms.org/browse/HZN-726): Use &#8220;vm" ActiveMQ transport by default
* [NMS-5915](http://issues.opennms.org/browse/NMS-5915): The retry handler used with HttpClient is not going to do what we expect
* [NMS-7731](http://issues.opennms.org/browse/NMS-7731): Remote poller dies when trying to use the PageSequenceMonitor
* [NMS-7846](http://issues.opennms.org/browse/NMS-7846): Slow LinkdTopologyProvider/EnhancedLinkdTopologyProvider in bigger enviroments
* [NMS-7976](http://issues.opennms.org/browse/NMS-7976): Merge OSGi Plugin Manager into Admin UI
* [NMS-8080](http://issues.opennms.org/browse/NMS-8080): VLAN name is not displayed
* [NMS-8198](http://issues.opennms.org/browse/NMS-8198): Provisioning UI indication for changed nodes is too bright
* [NMS-8353](http://issues.opennms.org/browse/NMS-8353): Plugin Manager fails to load
* [NMS-8361](http://issues.opennms.org/browse/NMS-8361): Incorrect documentation for org.opennms.newts.query.heartbeat
* [NMS-8362](http://issues.opennms.org/browse/NMS-8362): nodelink.jsp shared segment without ports
* [NMS-8365](http://issues.opennms.org/browse/NMS-8365): Add metric counter for drop counts when the ring buffer is full
* [NMS-8366](http://issues.opennms.org/browse/NMS-8366): OpenNMS Incompatible with Debian Stretch and Ubuntu 16.04
* [NMS-8373](http://issues.opennms.org/browse/NMS-8373): The placeholder {diffTime} is not supported by Backshift.
* [NMS-8374](http://issues.opennms.org/browse/NMS-8374): The logic to find event definitions confuses the Event Translator when translating SNMP Traps
* [NMS-8375](http://issues.opennms.org/browse/NMS-8375): License / copyright situation in release notes introduction needs simplifying
* [NMS-8377](http://issues.opennms.org/browse/NMS-8377): Applying some organizational changes on the Requisitions UI (Grunt, JSHint, Dist)
* [NMS-8379](http://issues.opennms.org/browse/NMS-8379): Sluggish performance with Cassandra driver
* [NMS-8381](http://issues.opennms.org/browse/NMS-8381): dashboard and ops board not working
