---
title: This Week in OpenNMS: May 23rd, 2016
date: 11:45 05/23/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, activemq, bamboo, bsm, camel, compass, database, dev-jam, graphing, karaf, minion, newts, opennms compass, topology maps, training]
---

In the last week we worked on ActiveMQ, Camel, Karaf, Minion, Topology Maps, BSM, Newts, graphs, database access, Bamboo, and Compass.

Github Project Updates
----------------------

* __ActiveMQ, Camel, and Karaf Updates__

  Seth has been working on updating our ActiveMQ, Camel, and Karaf infrastructure, to resolve a number of bugs found in testing.


* __Minion__

  Chandra has been working on improving the minion code that communicates with OpenNMS.  Also, I continued work on associating nodes with locations for future minion support.


* __Topology Maps and Business Service Monitor__

  Markus, Dustin, and Jesse have also continued to work on [Project Atlas](https://www.opennms.org/wiki/DevProjects/Atlas), with the goal of improving navigation through support of topology layers, and support for moving node map functionality to the topology UI.  Jesse also did some work on BSM data in events.


* __Newts__

  Jesse created a Newts 1.3.6 release with a driver update to Cassandra 3.0.1 as well as support for setting the replication factor when initializing a schema.  The download will be available soon.  Newts support in OpenNMS has also been updated to take advantage of these changes and to provide better data on ring buffer usage.


* __Graphs__

  Jesse added support for trending/forecasting in Backshift graphs, and integrated it into OpenNMS.  He also switched NRTG graphs to use Backshift, and added a control for opening an individual graph in a separate window.


* __Database Access__

  Alejandro did some work evaluating updated database code (JDBC drivers and C3P0 pooling).


* __Bamboo Updates__

  We&#8217;ve been spending a lot of time trying to clean up our continuous integration environment.  That work is still ongoing&#8230; ;)


* __Compass 3.0.1__

  I released a small update to Compass with a few tiny cosmetic fixes and features.  As always, you can download the latest version from the Google Play or Apple App Stores.

Upcoming Events and Appearances
-------------------------------

* __[OpenNMS Training – August 15th through 19th, 2016](http://www.opennms.com/training)__

  The OpenNMS Group has moved the next training session in Pittsboro, NC to August 15th through 19th.  For more details on OpenNMS training and signing up, see [The OpenNMS.com training page](http://www.opennms.com/training/).

* __[Dev-Jam 2016 – July 25th through 30th, 2016](https://www.opennms.org/wiki/Dev-Jam_2016)__

  Dev-Jam 2016 is sneaking up on is, but there is still plenty of time to join us in Minnesota.  For more information, see [The Dev-Jam 2016 wiki page](https://www.opennms.org/wiki/Dev-Jam_2016).
  Mike Huot has written up a proposal letter you can use to help explain to management why attending Dev-Jam is a good idea.  Feel free to [copy this letter](https://docs.google.com/document/d/1VerZYe5LwMT_1j5ISAsNU9-ZGcwY_zdA_4DODNlBpYg/edit?usp=sharing) and join us in Minnesota this year!

Until Next Week…
----------------

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

– Ben

Resolved Issues Since Last TWiO
-------------------------------

* [HZN-311](http://issues.opennms.org/browse/HZN-311): Associate nodes with monitoringLocations via foreign key
* [HZN-336](http://issues.opennms.org/browse/HZN-336): Newts Graphing and Reporting Related Components
* [HZN-640](http://issues.opennms.org/browse/HZN-640): Refactor monitoringLocation to have UUID primary key
* [HZN-760](http://issues.opennms.org/browse/HZN-760): Write smoke tests for the GraphML topology provider
* [HZN-762](http://issues.opennms.org/browse/HZN-762): Enhance the CSV conversion tool to support layers
* [HZN-770](http://issues.opennms.org/browse/HZN-770): Validate that the JMX collection definitions we have for 2.1x also work with 3.0.x
* [HZN-778](http://issues.opennms.org/browse/HZN-778): GraphML validation: Allow duplicate edge and node ids in the document
* [NEWTS-100](http://issues.opennms.org/browse/NEWTS-100): Enhance the SchemaManager to support setting the replication factor.
* [NEWTS-101](http://issues.opennms.org/browse/NEWTS-101): Upgrade the cassandra driver to v3.0.1
* [NMS-8202](http://issues.opennms.org/browse/NMS-8202): Undefined variable ifHCOutOctets.ifHighSpeed using Newts
* [NMS-8340](http://issues.opennms.org/browse/NMS-8340): QuickAddNodeIT flapping during tearDown()
* [NMS-8360](http://issues.opennms.org/browse/NMS-8360): If the persistence layer is not available or unresponsive the WebUI becomes unavailable or extremely slow and key components stop working
* [NMS-8363](http://issues.opennms.org/browse/NMS-8363): Exceptions thrown by the Newts Conversion Tool for certain RRDs and no data on Cassandra
* [NMS-8392](http://issues.opennms.org/browse/NMS-8392): Upgrade Log4j2 (there are several performance improvements)
* [NMS-8393](http://issues.opennms.org/browse/NMS-8393): Return X-Frame-Options HTTP header to prevent x-frame scripting and clickjacking
* [NMS-8404](http://issues.opennms.org/browse/NMS-8404): storeByForeignSource breaks node[N] style resource IDs
* [NMS-8423](http://issues.opennms.org/browse/NMS-8423): BSM attributes not available in events and alarms
* [NMS-8427](http://issues.opennms.org/browse/NMS-8427): WebMonitor returns false negative poll results
* [NMS-8428](http://issues.opennms.org/browse/NMS-8428): Upgrade Newts to 1.3.6
* [NMS-8429](http://issues.opennms.org/browse/NMS-8429): Add a new control to open Backshift graphs in their own window
* [NMS-8430](http://issues.opennms.org/browse/NMS-8430): Ring buffer entries exceed capacity
* [NMS-8433](http://issues.opennms.org/browse/NMS-8433): Icons "Center on Map" and "Remove from Focus" are not visible anymore
* [NMS-8435](http://issues.opennms.org/browse/NMS-8435): Update NRTG to use Backshift instead of rrdgraph.js
* [NMS-8436](http://issues.opennms.org/browse/NMS-8436): Provide a stress tool that can be used to stress the active persistence layer
* [NMS-8437](http://issues.opennms.org/browse/NMS-8437): Newts: String properties are persisted using the "collector" thread
* [NMS-8439](http://issues.opennms.org/browse/NMS-8439): Newts: The number of sample processing threads do not match the number of writer threads
* [NMS-8449](http://issues.opennms.org/browse/NMS-8449): Upgrade JAXB to version 2.2.11
