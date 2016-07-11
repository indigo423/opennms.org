---
title: This Week in OpenNMS: April 11th, 2016
date: 16:23 04/11/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, bsm, compass, dev-jam, general assembly, minion, opennms compass, opennms foundation europe, opennms horizon, tsrm]
---

In the last week we worked on minion, BSM, the OSGi plugin manager, TSRM ticketing, Compass, and other bug fixes.

Github Project Updates
----------------------

* __Minion__

Jesse worked on minion packaging and other bug fixes more, in preparation for merging part of our minion work into Horizon 18.  Seth continued his work on refactoring OpenNMS to associate a " monitoring location" with a node, to facilitate handling data from remote networks.

* __Business Service Monitor and Topology Maps__

The BSM is has been merged to the mainline development branch for Horizon 18.  This week involved some smaller bugfixing related to Minion and the topology maps (including Markus fixing the broken ping feature in the maps) as well as look-and-feel fixes and documentation work.

* __OSGi Plugin Manager__

Craig continued his work on integrating the OSGi plugin manager into OpenNMS.

* __TSRM Ticketing Plugin__

Chandra has been working on creating a ticketing plugin for IBM&#8217;s TSRM.

* __Compass__

Compass 2.1.0 build 397 is out as of last week, with <a href="https://github.com/OpenNMS/opennms-compass/blob/v2.1.0-397/CHANGELOG.md#210-2016-04-07" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://github.com/OpenNMS/opennms-compass/blob/v2.1.0-397/CHANGELOG.md#210-2016-04-07', 'a bunch of bug fixes and improvements']);" >a bunch of bug fixes and improvements</a>.  Build 398 is incoming any minute now, with [more improvements](https://github.com/OpenNMS/opennms-compass/blob/v2.1.0-398/CHANGELOG.md#210-2016-04-11); unless testers hit any major showstoppers, this will be the last beta before release.  If you&#8217;d like to help beta test, see [the Compass web site](https://compass.opennms.io/#beta).

* __Bug Fixes__

A lot of other minor bug fixes have been going in in preparation for OpenNMS Horizon 18.

OpenNMS Horizon 18 Imminent
---------------------------

The BSM branch has been merged and we have a few more pull requests pending before we can branch for release.  If you have a test setup, please give the OpenNMS 18 snapshots a try and let us know if you run into any issues; this is shaping up to be a really nice release.  Just change your yum or apt configuration to use " <code>snapshot</code>" instead of " <code>stable</code>" and you&#8217;ll get the snapshot builds.  When we branch for 18, " <code>snapshot</code>" will point to the release branch, rather than develop.

Upcoming Events and Appearances
-------------------------------

* __[OpenNMS Foundation Europe General Assembly &#8211; April 22nd, 2016](http://permalink.gmane.org/gmane.network.opennms.general/52706)__

The OpenNMS Foundation Europe is having its General Assembly meeting on April 22nd, 2016.  For details on the agenda and contact information, see <a href="http://permalink.gmane.org/gmane.network.opennms.general/52706" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://permalink.gmane.org/gmane.network.opennms.general/52706', 'this post on the OpenNMS discuss mailing list']);" >this post on the OpenNMS discuss mailing list</a>.

* __[Dev-Jam 2016 &#8211; July 25th through 30th, 2016](https://www.opennms.org/wiki/Dev-Jam_2016)__

Dev-Jam 2016 is sneaking up on is, but there is still plenty of time to join us in Minnesota.  For more information, see [The Dev-Jam 2016 wiki page](https://www.opennms.org/wiki/Dev-Jam_2016).
Mike Huot has written up a proposal letter you can use to help explain to management why attending Dev-Jam is a good idea. Feel free to [copy this letter](https://docs.google.com/document/d/1VerZYe5LwMT_1j5ISAsNU9-ZGcwY_zdA_4DODNlBpYg/edit?usp=sharing) and join us in Minnesota this year!

Until Next Week…
----------------

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

– Ben

Resolved Issues Since Last TWiO
-------------------------------

* [COMPASS-36](http://issues.opennms.org/browse/COMPASS-36): keyboard pushes screen up when entering server info
* [COMPASS-56](http://issues.opennms.org/browse/COMPASS-56): Fonts are not consistent on the start page
* [COMPASS-57](http://issues.opennms.org/browse/COMPASS-57): Switching server caching issues
* [COMPASS-58](http://issues.opennms.org/browse/COMPASS-58): Unable to clear or acknowledge alarms
* [COMPASS-60](http://issues.opennms.org/browse/COMPASS-60): Interface Data Missing from Node Page
* [COMPASS-66](http://issues.opennms.org/browse/COMPASS-66): Show list of alarms on ring chart on start page
* [COMPASS-69](http://issues.opennms.org/browse/COMPASS-69): Geolocation map is just a grey image
* [HZN-632](http://issues.opennms.org/browse/HZN-632): Create blueprint-trapd-handler-default.xml
* [HZN-637](http://issues.opennms.org/browse/HZN-637): Add getters and setters for all @Autowired fields in Trapd
* [HZN-639](http://issues.opennms.org/browse/HZN-639): Show a "badge" representing the status of a vertex
* [HZN-648](http://issues.opennms.org/browse/HZN-648): Move tests for distributable monitors into features/poller/monitors/core
* [HZN-653](http://issues.opennms.org/browse/HZN-653): Add ServiceMonitor service entries to applicationContext-pollerd.xml
* [HZN-654](http://issues.opennms.org/browse/HZN-654): Create a ServiceMonitor impl that uses Camel to enqueue polls
* [HZN-702](http://issues.opennms.org/browse/HZN-702): Remove unused images from Topology Default Theme
* [NEWTS-66](http://issues.opennms.org/browse/NEWTS-66): Create contributor agreement and process for Newts
* [NEWTS-78](http://issues.opennms.org/browse/NEWTS-78): Support connecting to Cassandra over TLS/SSL
* [NEWTS-83](http://issues.opennms.org/browse/NEWTS-83): Add support for passing JVM options
* [NEWTS-84](http://issues.opennms.org/browse/NEWTS-84): Remove the bundled blueprints
* [NMS-7846](http://issues.opennms.org/browse/NMS-7846): Slow LinkdTopologyProvider/EnhancedLinkdTopologyProvider in bigger enviroments
* [NMS-8168](http://issues.opennms.org/browse/NMS-8168): Vaadin Applications do not show OpenNMS favicon
* [NMS-8189](http://issues.opennms.org/browse/NMS-8189): Wrong interface status color on node detail page
* [NMS-8209](http://issues.opennms.org/browse/NMS-8209): Upgrade junit to v4.12
* [NMS-8248](http://issues.opennms.org/browse/NMS-8248): Many Rcsript (RScript) files in OPENNMS_DATA/tmp
* [NMS-8262](http://issues.opennms.org/browse/NMS-8262): Spring AD authentication
* [NMS-8267](http://issues.opennms.org/browse/NMS-8267): Create documentation for SNMP detector
* [NMS-8271](http://issues.opennms.org/browse/NMS-8271): Enable correlation engines to register for all events
* [NMS-8272](http://issues.opennms.org/browse/NMS-8272): snmp4j does not process agent responses
* [NMS-8274](-http://issues.opennms.org/browse/NMS-8274): All the defined Statsd&#8217;s reports are being executed even if they are disabled.
* [NMS-8298](http://issues.opennms.org/browse/NMS-8298): Label of Vertex is too short in some cases
* [NMS-8307](http://issues.opennms.org/browse/NMS-8307): RPM package opennms not aware of Red Hat Software Collections
