---
title: This Week in OpenNMS: June 13th, 2016
date: 11:55 06/13/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, bsm, data collection, jaas, jmx, minion, newts, opennms horizon, opennms meridian, provisiond, rmi, smoke tests, snmp, topology maps]
---

In the last week we worked on smoke tests, Provisiond, Topology Maps, BSM, Minion, SNMP data collection, Newts, JMX authentication, and release blockers.

Github Project Updates
----------------------

* __Bamboo Updates__

  I finished up the smoke test refactor this last week, and have it enabled by default in our main branches.  There&#8217;s still a small amount of work to do to stabilize them in the slower VMs, but everything is pretty much working now running smoke tests against dockerized OpenNMS containers.

* __Provisiond Cleanups__

  Seth spent more time cleaning up Provisiond bugs and doing more refactoring.  A couple of bugs were found that could explain some intermittent freezing issues people have seen in Provisiond &#8212; these fixes should be in the next Meridian and Horizon releases.

* __Topology Maps and Business Service Monitor__

  Christian refactored the GraphML edge status provider to support using custom groovy scripts for determining how to draw edges on the topology map. Jesse, Dustin, and Christian have been doing other topology UI work as well, including icons for geographical areas and microwave links.

* __Minion__

  Chandra has been working on a karaf shell for managing minion provisiond detectors.  Seth has been doing more cleanup and finalizing of the syslog minion code.

* __SNMP Custom String Attributes__

  Alejandro has been working on an enhancement to allow collecting from indirect and complex SNMP indexes.  This allows collection of data from previously uncollectable indexes like Cisco QoS class map statistics or RMON2.  For details of how it works, see [his post to the opennms-discuss list describing the feature](http://article.gmane.org/gmane.network.opennms.general/52924).

* __Newts__

  Jesse continued his work on increasing Newts performance, putting out a 1.4.1 release and updating OpenNMS to use it and optimizing batch-persisting of attributes.

* __JMX RMI (JAAS) Authentication__

  I spent some time last week working on cleaning up JAAS authentication to work as expected for non-admin accounts (fixing our auth module to honor the `jmxremote.access file when configuring remote RMI).

* __Meridian 2016/Horizon 18.0.1 Blockers__

  We spent some time last week identifying bug fixes and configuration updates that should block the upcoming OpenNMS Meridian 2016 release and have started fixing them, targeting Meridian 2016 and Horizon 18.0.1.

Upcoming Events and Appearances
-------------------------------

* **[Dev-Jam 2016 – July 25th through 30th, 2016](https://www.opennms.org/wiki/Dev-Jam_2016)**

  Dev-Jam 2016 is sneaking up on is, but there is still plenty of time to join us in Minnesota.  For more information, see [The Dev-Jam 2016 wiki page](https://www.opennms.org/wiki/Dev-Jam_2016).
  Mike Huot has written up a proposal letter you can use to help explain to management why attending Dev-Jam is a good idea.  Feel free to [copy this letter](https://docs.google.com/document/d/1VerZYe5LwMT_1j5ISAsNU9-ZGcwY_zdA_4DODNlBpYg/edit?usp=sharing) and join us in Minnesota this year!

* __[OpenNMS User Conference Europe – Call for Papers Deadline – August 1st, 2016](http://www.opennms.eu/2016/06/call-for-papers-ouce-2016/)__

  If you wish to speak at OUCE 2016, the deadline for submitting a talk is August 1st, 2016.  You can find out more about submitting your talk [](http://www.opennms.eu/2016/06/call-for-papers-ouce-2016/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.opennms.eu/2016/06/call-for-papers-ouce-2016/', 'here']);" >here</a>.

* __[OpenNMS Training – August 15th through 19th, 2016](http://www.opennms.com/training)__

  The OpenNMS Group has moved the next training session in Pittsboro, NC to August 15th through 19th.  For more details on OpenNMS training and signing up, see [](http://www.opennms.com/training/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.opennms.com/training/', 'The OpenNMS.com training page']);" >The OpenNMS.com training page</a>.

* __[OpenNMS User Conference Europe – September 13th through September 15th, 2016](https://ouce.opennms.eu)__

  OUCE 2016 will be at the University of Applied Science in Fulda, Germany from September 13th through 15th.  More details will be posted as we get closer to the event.

Until Next Week…
----------------

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

– Ben

Resolved Issues Since Last TWiO
-------------------------------

* [HZN-719](http://issues.opennms.org/browse/HZN-719): Allow administatrors to know which Minions are currently active
* [HZN-724](http://issues.opennms.org/browse/HZN-724): Create topology UI icons used to represent geographical areas
* [HZN-725](http://issues.opennms.org/browse/HZN-725): Create topology UI icons used to represent microwave link networks
* [HZN-784](http://issues.opennms.org/browse/HZN-784): Manually trigger detectors via the Karaf shell
* [HZN-786](http://issues.opennms.org/browse/HZN-786): Allow topology providers to set a default SZL
* [HZN-795](http://issues.opennms.org/browse/HZN-795): Create topology UI icons with basic shapes
* [HZN-802](http://issues.opennms.org/browse/HZN-802): Add monitoring system ID to the SyslogConnection messages
* [NMS-7578](http://issues.opennms.org/browse/NMS-7578): Provided graph definitions are mixing aggregation function leading to wrong min / max totals
* [NMS-7638](http://issues.opennms.org/browse/NMS-7638): Make node aggregation &#8216;maxClusterRadius&#8217; in Geographical Map configurable
* [NMS-7854](http://issues.opennms.org/browse/NMS-7854): Translated events with a new UEI do not receive the description, severity and alarm-data of the new event if new UEI&#8217;s eventconf is present after original UEI&#8217;s eventconf
* [NMS-8016](http://issues.opennms.org/browse/NMS-8016): output.log fills up with GLib-GObject-CRITICAL messages
* [NMS-8027](http://issues.opennms.org/browse/NMS-8027): Issues with data collection config for Cisco devices
* [NMS-8034](http://issues.opennms.org/browse/NMS-8034): Adding `com.sun.management.jmxremote.authenticate=true` on `opennms.conf` is ignored by the opennms script
* [NMS-8040](http://issues.opennms.org/browse/NMS-8040): Remotepoller shell script searching remote-poller.jar at wrong location
* [NMS-8049](http://issues.opennms.org/browse/NMS-8049): Documentation for Cassandra/Newts doesn&#8217;t mention that a JDK is required
* [NMS-8127](http://issues.opennms.org/browse/NMS-8127): Node rescans possible in WebUI with ROLE_USER
* [NMS-8174](http://issues.opennms.org/browse/NMS-8174): Add PaloAlto Firewall Datacollection
* [NMS-8193](http://issues.opennms.org/browse/NMS-8193): Requisition UI fails behind HTTPS proxy
* [NMS-8372](http://issues.opennms.org/browse/NMS-8372): Totals based on {diffTime} on any graph templates related with octets are wrong
* [NMS-8477](http://issues.opennms.org/browse/NMS-8477): NRT graph interval should default to > 1s
* [NMS-8484](http://issues.opennms.org/browse/NMS-8484): Add custom string attributes based on indirect and complex SNMP Indices
* [NMS-8485](http://issues.opennms.org/browse/NMS-8485): Isolate Smoke Tests
* [NMS-8486](http://issues.opennms.org/browse/NMS-8486): Port Minion System Tests to the Smoke Test Suite

