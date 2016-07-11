---
title: This Week in OpenNMS: June 20th, 2016
date: 14:07 06/20/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, bamboo, bsm, dev-jam, eventd, instrumentation, jmx, minion, ouce, performance improvements, release, rmi, smoke tests, statistics, topology maps, training]
---

In the last week we worked on Bamboo smoke tests, Minion, Topology Maps and BSM, JMX RMI authentication, statistics and instrumentation, performance improvements, and release blockers.
Github Project Updates
----------------------

* __Bamboo Updates__

I did some more cleanup of timing issues with the new dockerized Bamboo smoke tests, but other than that they&#8217;ve started settling down.

* __Minion__

We finished up some cleanup of the branch to associate nodes with locations, and should be merging it to develop this week.  Chandra has been working on making detectors run remotely in the Minion container.

* __Topology Maps and Business Service Monitor__

Markus has been working on more cleanup in the Topology UI, including putting breadcrumbs into the info panel and fixing up the menu-handling code.  Dustin has been working on [adding new severity propagation algorithms to the BSM](http://issues.opennms.org/browse/HZN-820).

* __JMX RMI (JAAS) Authentication__

  I finished up my work on cleaning up JMX authentication.  Documentation is available in [the admin guide](http://docs.opennms.org/opennms/branches/develop/guide-admin/guide-admin.html#ga-rmi).

* __Statistics__

Jesse added more instrumentation of Newts and JVM statistics to make it easier to monitor OpenNMS&#8217;s performance.

* __Performance__

Seth worked on fixing up a locking bottleneck in Eventd that should speed up event processing.

* __Meridian 2016/Horizon 18.0.1 Blockers__

We spent more time cleaning up bugs that should be fixed before Meridian 2016 and Horizon 18.0.1 are released.

Upcoming Events and Appearances
-------------------------------

* __[](https://www.opennms.org/wiki/Dev-Jam_2016">Dev-Jam 2016 – July 25th through 30th, 2016</a>__

Dev-Jam 2016 is sneaking up on is, but there is still plenty of time to join us in Minnesota.  For more information, see [The Dev-Jam 2016 wiki page](https://www.opennms.org/wiki/Dev-Jam_2016).
Mike Huot has written up a proposal letter you can use to help explain to management why attending Dev-Jam is a good idea.  Feel free to [copy this letter](https://docs.google.com/document/d/1VerZYe5LwMT_1j5ISAsNU9-ZGcwY_zdA_4DODNlBpYg/edit?usp=sharing) and join us in Minnesota this year!

* __[OpenNMS User Conference Europe – Call for Papers Deadline – August 1st, 2016](http://www.opennms.eu/2016/06/call-for-papers-ouce-2016/)__

If you wish to speak at OUCE 2016, the deadline for submitting a talk is August 1st, 2016.  You can find out more about submitting your talk [here](http://www.opennms.eu/2016/06/call-for-papers-ouce-2016/).

* __[OpenNMS Training – August 15th through 19th, 2016](http://www.opennms.com/training)__

The OpenNMS Group has moved the next training session in Pittsboro, NC to August 15th through 19th.  For more details on OpenNMS training and signing up, see [The OpenNMS.com training page](http://www.opennms.com/training/).

* __[OpenNMS User Conference Europe – September 13th through September 15th, 2016](https://ouce.opennms.eu)__

OUCE 2016 will be at the University of Applied Science in Fulda, Germany from September 13th through 15th.  More details will be posted as we get closer to the event.

Until Next Week…
----------------

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

– Ben

Resolved Issues Since Last TWiO
-------------------------------

* [HZN-791](http://issues.opennms.org/browse/HZN-791): Navigation controls should indicate the target layer
* [HZN-792](http://issues.opennms.org/browse/HZN-792): Add breadcrumbs for layer navigation
* [HZN-818](http://issues.opennms.org/browse/HZN-818): Detectors invoked by the Minion should be thread safe
* [HZN-819](http://issues.opennms.org/browse/HZN-819): Add support for invoking asynchronous detectors via the Minion Karaf shell
* [NMS-4505](http://issues.opennms.org/browse/NMS-4505): db sql prepared statement insert logging could be improved
* [NMS-5937](http://issues.opennms.org/browse/NMS-5937): Change Real-time Graphing Default to 5 or 10 seconds
* [NMS-6004](http://issues.opennms.org/browse/NMS-6004): XmlrpcAnticipatorTest uses hard-coded port 9000
* [NMS-6411](http://issues.opennms.org/browse/NMS-6411): log4j.properties needs a comment for instrumentation.log default DEBUG level
* [NMS-7472](http://issues.opennms.org/browse/NMS-7472): Problems with "ResponseTimeSummary_Availability_Offenders" subreport
* [NMS-7475](http://issues.opennms.org/browse/NMS-7475): Problems with "NodeAvailability" report
* [NMS-8154](http://issues.opennms.org/browse/NMS-8154): Wrong label in send-event menu
* [NMS-8155](http://issues.opennms.org/browse/NMS-8155): Missing node/interface information in an event after sending an event with send-event ui
* [NMS-8166](http://issues.opennms.org/browse/NMS-8166): OpenNMS error adding a service NRPE
* [NMS-8256](http://issues.opennms.org/browse/NMS-8256): Trouble ticket link template in opennms.properties accidentally filtered
* [NMS-8275](http://issues.opennms.org/browse/NMS-8275): The filter for the foreign source in the outages view caused an SQLGrammarException
* [NMS-8376](http://issues.opennms.org/browse/NMS-8376): Poller threads can get locked up while waiting for outages to be created/resolved
* [NMS-8493](http://issues.opennms.org/browse/NMS-8493): Newer Karaf features are installing bundles that overlap the system classpath
* [NMS-8497](http://issues.opennms.org/browse/NMS-8497): NPE in JMX Collector when collecting composite attributes
* [NMS-8499](http://issues.opennms.org/browse/NMS-8499): jmxremote password file not found when running `install -dis` after configuring RMI
* [NMS-8500](http://issues.opennms.org/browse/NMS-8500): JMX RMI auth configuration does not work with custom roles
