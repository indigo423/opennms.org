---
title: This Week in OpenNMS: May 31st, 2016
date: 15:21 05/31/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, bamboo, bsm, database, dev-jam, minion, topology maps, training]
---

In the last week we worked on Minion, the database backend, topology maps and BSM, and Bamboo.

Github Project Updates
----------------------


* __Minion__

  Chandra has continued working on improving the minion code that communicates with OpenNMS.  Jesse has been working on supporting location-aware SNMP requests that can transparently proxy to remote minion systems.  Seth has been working on evaluating and updating the syslog branch including improving throughput of syslog messages from Minions.


* __Database Access__

  Alejandro and I did some work on updating database code (JDBC drivers and C3P0 pooling).  We have also introduced a new alternative pool library, [HikariCP](https://github.com/brettwooldridge/HikariCP), which promises much better database performance.


* __Topology Maps and Business Service Monitor__

  Markus, Dustin, and Jesse have also continued to work on [Project Atlas](https://www.opennms.org/wiki/DevProjects/Atlas), with the goal of improving navigation through support of topology layers, and support for moving node map functionality to the topology UI.


* __Bamboo Updates__

  I&#8217;ve been spending more time on our smoke test infrastructure, porting Jesse&#8217;s Minion System Tests to be a more generic test framework for spawning tests to run against a dockerized OpenNMS install.

Upcoming Events and Appearances
-------------------------------

* __[OpenNMS Training – August 15th through 19th, 2016](http://www.opennms.com/training)__

  The OpenNMS Group has moved the next training session in Pittsboro, NC to August 15th through 19th.  For more details on OpenNMS training and signing up, see [The OpenNMS.com training page](http://www.opennms.com/training/).

* **[Dev-Jam 2016 – July 25th through 30th, 2016](https://www.opennms.org/wiki/Dev-Jam_2016)**

  Dev-Jam 2016 is sneaking up on is, but there is still plenty of time to join us in Minnesota.  For more information, see [The Dev-Jam 2016 wiki page](https://www.opennms.org/wiki/Dev-Jam_2016).
  Mike Huot has written up a proposal letter you can use to help explain to management why attending Dev-Jam is a good idea.  Feel free to [copy this letter](https://docs.google.com/document/d/1VerZYe5LwMT_1j5ISAsNU9-ZGcwY_zdA_4DODNlBpYg/edit?usp=sharing) and join us in Minnesota this year!


Until Next Week…
----------------

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

– Ben

Resolved Issues Since Last TWiO
-------------------------------

* [HZN-655](http://issues.opennms.org/browse/HZN-655): Add a Camel context to applicationContext-pollerd.xml to route monitor calls
* [HZN-656](http://issues.opennms.org/browse/HZN-656): Create a Minion blueprint.xml for features/poller/monitors/core
* [HZN-658](http://issues.opennms.org/browse/HZN-658): Integrate opennms-poller-monitors-core into the Minion RPM build
* [HZN-707](http://issues.opennms.org/browse/HZN-707): IBM TSRM ticket creation gives "exceeds the maximum field length exception"
* [HZN-719](http://issues.opennms.org/browse/HZN-719): Allow administatrors to know which Minions are currently active
* [HZN-736](http://issues.opennms.org/browse/HZN-736): Prevent the user to change the icon from the Topology UI when a GraphML Topology Provider is selected
* [HZN-754](http://issues.opennms.org/browse/HZN-754): Generalize the GenericInfoPanelItem
* [HZN-760](http://issues.opennms.org/browse/HZN-760): Write smoke tests for the GraphML topology provider
* [HZN-769](http://issues.opennms.org/browse/HZN-769): Recommend Cassandra 3.0.x instead of 2.1.x
* [HZN-785](http://issues.opennms.org/browse/HZN-785): Navigating to the "regions" layer should show all of the regions by default
* [HZN-798](http://issues.opennms.org/browse/HZN-798): Fix problems in MonitoredServiceTask.calculateTaskTimeout()
* [NMS-6331](http://issues.opennms.org/browse/NMS-6331): When using storeByFS a provisioning group cannot contain whitespace
* [NMS-8400](http://issues.opennms.org/browse/NMS-8400): Classloader issues with queuingservice
* [NMS-8432](http://issues.opennms.org/browse/NMS-8432): GraphMLMetaTopologyFactory does not cleanup properly when "unregistering"
* [NMS-8438](http://issues.opennms.org/browse/NMS-8438): Upgrade PostgreSQL Driver and C3P0
* [NMS-8448](http://issues.opennms.org/browse/NMS-8448): Forecast metrics using Backshift
* [NMS-8450](http://issues.opennms.org/browse/NMS-8450): Topology redirects to localhost (127.0.0.1)

