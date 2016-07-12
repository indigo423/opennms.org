---
title: This Week in OpenNMS: April 4th, 2016
date: 12:18 04/04/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, bsm, bug fixes, cisco, compass, dev-jam, drinkup, enlinkd, juniper, meetup, opennms, opennms compass, opennms horizon, osgi]
---

In the last week we worked on Enlinkd, Compass, new device support, the Business Service Monitor, the OSGi plugin manager, and lots of smaller bug fixes.

Github Project Updates
----------------------

* __Enlinkd__

As of this weekend, Antonio merged his Enlinkd overhaul which fixes a number of performance and other bugs related to Enlinkd.  For details, see [NMS-7918<](http://issues.opennms.org/browse/NMS-7918) and [NMS-8072](http://issues.opennms.org/browse/NMS-8072).

* __Compass__

Last week, I worked on adding better support for checking servers in Compass.  Now, when you add a new server [it will check if it can be reached, and if not, try switching http/https or adding "opennms" on the end of the URL](https://www.youtube.com/watch?v=S80tqgbsk_Y).

* __New Devices__

Ronny and Jeff added support for some new SonicWall firewall events, Cisco devices, and Juniper devices.

* __Business Service Monitor__

The BSM is ready to be merged to develop this week.

* __OSGi Plugin Manager__

Craig has been working on a system for adding loadable functionality to OpenNMS at runtime, using our existing embedded OSGi container, including support for an "App Store"-like system for choosing and installing plugins.  For more details, see [his document describing the system](https://www.opennms.org/w/images/1/1a/OpenNMSDevel-OpenNMSModules%3B1_08-01-2015.pdf), and [his presentation at Dev-Jam 2015](https://www.youtube.com/watch?v=Pl4A4G9ZdmE).

* __Bug Fixes__

A lot of other minor bug fixes have been going in in preparation for OpenNMS Horizon 18.

OpenNMS Horizon 18 Imminent
---------------------------

The BSM branch should be merged this week and then we will be considered feature-frozen for the Horizon 18 release.  If you have any code that needs merging for the 18 release, please submit your pull requests in the next few days.

Upcoming Events and Appearances
-------------------------------

* __[OpenNMS Drinkup – Wednesday, April 6, 2016](http://www.meetup.com/OpenNMS-Meetup-Group/events/229919435/)__

Whether you&#8217;re a long-time user or a newcomer curious about OpenNMS, come have a pint with us [at The Goose&#8217;s Acre](http://www.meetup.com/OpenNMS-Meetup-Group/events/229919435/). Core committers Jeff Gehlbach and Alejandro Galue will be on hand to talk use cases, answer questions, tell war stories, and tease the upcoming OpenNMS Horizon 18 release.

* **[Dev-Jam 2016 – July 25th through 30th, 2016](https://www.opennms.org/wiki/Dev-Jam_2016)**

Dev-Jam 2016 is sneaking up on is, but there is still plenty of time to join us in Minnesota.  For more information, see [The Dev-Jam 2016 wiki page](https://www.opennms.org/wiki/Dev-Jam_2016)
Mike Huot has written up a proposal letter you can use to help explain to management why attending Dev-Jam is a good idea.  Feel free to [copy this letter](https://docs.google.com/document/d/1VerZYe5LwMT_1j5ISAsNU9-ZGcwY_zdA_4DODNlBpYg/edit?usp=sharing) and join us in Minnesota this year!

Until Next…
-----------

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

– Ben

Resolved Issues Since Last TWiO
-------------------------------

* [HZN-496](http://issues.opennms.org/browse/HZN-496): Add Discoverer feature to installation list in Minion
* [HZN-609](http://issues.opennms.org/browse/HZN-609): Move TrapNotificationListener interface from Trapd to TrapReceiverSnmp4jImpl
* [HZN-627](http://issues.opennms.org/browse/HZN-627): Syslog listeners use different default ports
* [HZN-647](http://issues.opennms.org/browse/HZN-647): Move distributable monitors into features/poller/monitors/core
* [NMS-2222](http://issues.opennms.org/browse/NMS-2222): Export Reports to CSV
* [NMS-2587](http://issues.opennms.org/browse/NMS-2587): DependencyCheckingContextListener silently avoids checking the JVM name if the opennms.skipjvmcheck system property is set, but not if the dontBlameOpenNMS web context parameter is set
* [NMS-3403](http://issues.opennms.org/browse/NMS-3403): implement plugins for jaxb sequence stuff
* [NMS-3489](http://issues.opennms.org/browse/NMS-3489): "ADD NODE" produces "too much" config
* [NMS-3740](http://issues.opennms.org/browse/NMS-3740): thread lock in logging capture
* [NMS-3983](http://issues.opennms.org/browse/NMS-3983): Annoying "New Node" default value in editProvisioningGroup WebUI
* [NMS-4229](http://issues.opennms.org/browse/NMS-4229): Detect tables with Provisiond SNMP detector
* [NMS-4843](http://issues.opennms.org/browse/NMS-4843): "Edit Provisioning Group" page truncates node, service, and category names
* [NMS-5077](http://issues.opennms.org/browse/NMS-5077): Allow other services to work with Path Outages other than ICMP
* [NMS-5594](http://issues.opennms.org/browse/NMS-5594): OpenNMS doesn&#8217;t fetch rrd.binary property from iReport Designer
* [NMS-5839](http://issues.opennms.org/browse/NMS-5839): Bring WaterfallExecutor logging on par with RunnableConsumerThreadPool
* [NMS-5881](http://issues.opennms.org/browse/NMS-5881): /etc/init.d/opennms startup and shutdown fail or timeout
* [NMS-5905](http://issues.opennms.org/browse/NMS-5905): Add ifAlias to bridge Link Interface Info
* [NMS-5979](http://issues.opennms.org/browse/NMS-5979): Make the Provisioning Requisitions "Node Quick-Add" look pretty
* [NMS-6329](http://issues.opennms.org/browse/NMS-6329): While changing Provisioning Requisitions changing a nodes properties moves the page to top instead on the node
* [NMS-6361](http://issues.opennms.org/browse/NMS-6361): Can&#8217;t import a requisition when OpenNMS is installed in `C:\Program Files\OpenNMS`
* [NMS-6474](http://issues.opennms.org/browse/NMS-6474): Export JRB Data to CSV
* [NMS-6623](http://issues.opennms.org/browse/NMS-6623): Update JNA.jar library to support ARM based systems
* [NMS-7028](http://issues.opennms.org/browse/NMS-7028): test failure: org.opennms.netmgt.collectd.SnmpCollectorTest
* [NMS-7446](http://issues.opennms.org/browse/NMS-7446): Enhance Bridge Link Object Model
* [NMS-7471](http://issues.opennms.org/browse/NMS-7471): SNMP Plugin tests regularly failing
* [NMS-7582](http://issues.opennms.org/browse/NMS-7582): non RFC conform behaviour of SmtpMonitor
* [NMS-7798](http://issues.opennms.org/browse/NMS-7798): Add Sonicwall Firewall Events
* [NMS-7880](http://issues.opennms.org/browse/NMS-7880): Integration tests in org.opennms.core.test-api.karaf have incomplete dependencies
* [NMS-7918](http://issues.opennms.org/browse/NMS-7918): Slow BridgeBridgeTopologie discovery with enlinkd.
* [NMS-8072](http://issues.opennms.org/browse/NMS-8072): NullPointerException for NodeDiscoveryBridge
* [NMS-8077](http://issues.opennms.org/browse/NMS-8077): Add NetGear Prosafe Smart switch SNMP trap events and syslog events
* [NMS-8092](http://issues.opennms.org/browse/NMS-8092): Add OpenWrt syslog and related event definitions
* [NMS-8118](http://issues.opennms.org/browse/NMS-8118): CXF returning 204 on NULL responses, rather than 404
* [NMS-8137](http://issues.opennms.org/browse/NMS-8137): OpenNMS incorrectly discovers VLANs
* [NMS-8146](http://issues.opennms.org/browse/NMS-8146): "Show interfaces" link forgets the filters in some circumstances
* [NMS-8149](http://issues.opennms.org/browse/NMS-8149): Update asciidoctorj to 1.5.4 and asciidoctorjPdf to 1.5.0-alpha.11
* [NMS-8160](http://issues.opennms.org/browse/NMS-8160): Remove Quick-Add node to avoid confusions and avoid breaking the ReST API
* [NMS-8173](http://issues.opennms.org/browse/NMS-8173): Unable to start opennms after upgrade
* [NMS-8182](http://issues.opennms.org/browse/NMS-8182): Add HTTPS as quick-link on the node page
* [NMS-8229](http://issues.opennms.org/browse/NMS-8229): OpenNMS Starts and then stops
* [NMS-8236](http://issues.opennms.org/browse/NMS-8236): Move the "vaadin-extender-service" module to opennms code base
* [NMS-8251](http://issues.opennms.org/browse/NMS-8251): Parameterize product name in asciidoc docs
* [NMS-8253](http://issues.opennms.org/browse/NMS-8253): The path outage feature uses ICMP instead of the critical service to decide if a parent is down
* [NMS-8254](http://issues.opennms.org/browse/NMS-8254): Workaround for having Multi-Parent Path Outages feature
* [NMS-8257](http://issues.opennms.org/browse/NMS-8257): Test flapping: ForeignSourceRestServiceIT.testForeignSources()
* [NMS-8259](http://issues.opennms.org/browse/NMS-8259): Cleanup testdata in SnmpDetector tests
* [NMS-8265](http://issues.opennms.org/browse/NMS-8265): SNMP collection systemDefs for Cisco ASA5525-X, ASA5515-X
* [NMS-8266](http://issues.opennms.org/browse/NMS-8266): SNMP collection systemDefs for Juniper SRX210he2, SRX100h
