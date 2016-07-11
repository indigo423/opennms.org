---
title: This Week in OpenNMS: April 11th, 2016
date: 16:23 04/11/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, bsm, compass, dev-jam, general assembly, minion, opennms compass, opennms foundation europe, opennms horizon, tsrm]
---

<p>In the last week we worked on minion, BSM, the OSGi plugin manager, TSRM ticketing, Compass, and other bug fixes.</p>
<h4>Github Project Updates</h4>
<ul>
<li>
<h5>Minion</h5>
<p>Jesse worked on minion packaging and other bug fixes more, in preparation for merging part of our minion work into Horizon 18.  Seth continued his work on refactoring OpenNMS to associate a &#8220;monitoring location&#8221; with a node, to facilitate handling data from remote networks.</p>
</li>
<li>
<h5>Business Service Monitor and Topology Maps</h5>
<p>The BSM is has been merged to the mainline development branch for Horizon 18.  This week involved some smaller bugfixing related to Minion and the topology maps (including Markus fixing the broken ping feature in the maps) as well as look-and-feel fixes and documentation work.</p>
</li>
<li>
<h5>OSGi Plugin Manager</h5>
<p>Craig continued his work on integrating the OSGi plugin manager into OpenNMS.</p>
</li>
<li>
<h5>TSRM Ticketing Plugin</h5>
<p>Chandra has been working on creating a ticketing plugin for IBM&#8217;s TSRM.</p>
</li>
<li>
<h5>Compass</h5>
<p>Compass 2.1.0 build 397 is out as of last week, with <a href="https://github.com/OpenNMS/opennms-compass/blob/v2.1.0-397/CHANGELOG.md#210-2016-04-07" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://github.com/OpenNMS/opennms-compass/blob/v2.1.0-397/CHANGELOG.md#210-2016-04-07', 'a bunch of bug fixes and improvements']);" >a bunch of bug fixes and improvements</a>.  Build 398 is incoming any minute now, with <a href="https://github.com/OpenNMS/opennms-compass/blob/v2.1.0-398/CHANGELOG.md#210-2016-04-11" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://github.com/OpenNMS/opennms-compass/blob/v2.1.0-398/CHANGELOG.md#210-2016-04-11', 'more improvements']);" >more improvements</a>; unless testers hit any major showstoppers, this will be the last beta before release.  If you&#8217;d like to help beta test, see <a href="https://compass.opennms.io/#beta" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://compass.opennms.io/#beta', 'the Compass web site']);" >the Compass web site</a>.</p>
</li>
<li>
<h5>Bug Fixes</h5>
<p>A lot of other minor bug fixes have been going in in preparation for OpenNMS Horizon 18.</p>
</li>
</ul>
<h4>OpenNMS Horizon 18 Imminent</h4>
<p>The BSM branch has been merged and we have a few more pull requests pending before we can branch for release.  If you have a test setup, please give the OpenNMS 18 snapshots a try and let us know if you run into any issues; this is shaping up to be a really nice release.  Just change your yum or apt configuration to use &#8220;<code>snapshot</code>&#8221; instead of &#8220;<code>stable</code>&#8221; and you&#8217;ll get the snapshot builds.  When we branch for 18, &#8220;<code>snapshot</code>&#8221; will point to the release branch, rather than develop.</p>
<h4>Upcoming Events and Appearances</h4>
<ul>
<li>
<h5><a href="http://permalink.gmane.org/gmane.network.opennms.general/52706" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://permalink.gmane.org/gmane.network.opennms.general/52706', 'OpenNMS Foundation Europe General Assembly &#8211; April 22nd, 2016']);" >OpenNMS Foundation Europe General Assembly &#8211; April 22nd, 2016</a></h5>
<p>
      The OpenNMS Foundation Europe is having its General Assembly meeting on April 22nd, 2016.  For details on the agenda and contact information, see <a href="http://permalink.gmane.org/gmane.network.opennms.general/52706" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://permalink.gmane.org/gmane.network.opennms.general/52706', 'this post on the OpenNMS discuss mailing list']);" >this post on the OpenNMS discuss mailing list</a>.
    </p>
</li>
<li>
<h5><a href="https://www.opennms.org/wiki/Dev-Jam_2016">Dev-Jam 2016 &#8211; July 25th through 30th, 2016</a></h5>
<p>Dev-Jam 2016 is sneaking up on is, but there is still plenty of time to join us in Minnesota.  For more information, see <a href="https://www.opennms.org/wiki/Dev-Jam_2016">The Dev-Jam 2016 wiki page</a>.</p>
<p>Mike Huot has written up a proposal letter you can use to help explain to management why attending Dev-Jam is a good idea.  Feel free to <a href="https://docs.google.com/document/d/1VerZYe5LwMT_1j5ISAsNU9-ZGcwY_zdA_4DODNlBpYg/edit?usp=sharing" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://docs.google.com/document/d/1VerZYe5LwMT_1j5ISAsNU9-ZGcwY_zdA_4DODNlBpYg/edit?usp=sharing', 'copy this letter']);" >copy this letter</a> and join us in Minnesota this year!</p>
</li>
</ul>
<h4>Until Next Week&#8230;</h4>
<p>If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to <a href="mailto:twio@opennms.org">say hi</a>.</p>
<p>&#8211; Ben</p>
<h4>Resolved Issues Since Last TWiO</h4>
<ul>
<li><a href="http://issues.opennms.org/browse/COMPASS-36">COMPASS-36</a>: keyboard pushes screen up when entering server info</li>
<li><a href="http://issues.opennms.org/browse/COMPASS-56">COMPASS-56</a>: Fonts are not consistent on the start page</li>
<li><a href="http://issues.opennms.org/browse/COMPASS-57">COMPASS-57</a>: Switching server caching issues</li>
<li><a href="http://issues.opennms.org/browse/COMPASS-58">COMPASS-58</a>: Unable to clear or acknowledge alarms</li>
<li><a href="http://issues.opennms.org/browse/COMPASS-60">COMPASS-60</a>: Interface Data Missing from Node Page</li>
<li><a href="http://issues.opennms.org/browse/COMPASS-66">COMPASS-66</a>: Show list of alarms on ring chart on start page</li>
<li><a href="http://issues.opennms.org/browse/COMPASS-69">COMPASS-69</a>: Geolocation map is just a grey image</li>
<li><a href="http://issues.opennms.org/browse/HZN-632">HZN-632</a>: Create blueprint-trapd-handler-default.xml</li>
<li><a href="http://issues.opennms.org/browse/HZN-637">HZN-637</a>: Add getters and setters for all @Autowired fields in Trapd</li>
<li><a href="http://issues.opennms.org/browse/HZN-639">HZN-639</a>: Show a &#8220;badge&#8221; representing the status of a vertex</li>
<li><a href="http://issues.opennms.org/browse/HZN-648">HZN-648</a>: Move tests for distributable monitors into features/poller/monitors/core</li>
<li><a href="http://issues.opennms.org/browse/HZN-653">HZN-653</a>: Add ServiceMonitor service entries to applicationContext-pollerd.xml</li>
<li><a href="http://issues.opennms.org/browse/HZN-654">HZN-654</a>: Create a ServiceMonitor impl that uses Camel to enqueue polls</li>
<li><a href="http://issues.opennms.org/browse/HZN-702">HZN-702</a>: Remove unused images from Topology Default Theme</li>
<li><a href="http://issues.opennms.org/browse/NEWTS-66">NEWTS-66</a>: Create contributor agreement and process for Newts</li>
<li><a href="http://issues.opennms.org/browse/NEWTS-78">NEWTS-78</a>: Support connecting to Cassandra over TLS/SSL</li>
<li><a href="http://issues.opennms.org/browse/NEWTS-83">NEWTS-83</a>: Add support for passing JVM options</li>
<li><a href="http://issues.opennms.org/browse/NEWTS-84">NEWTS-84</a>: Remove the bundled blueprints</li>
<li><a href="http://issues.opennms.org/browse/NMS-7846">NMS-7846</a>: Slow LinkdTopologyProvider/EnhancedLinkdTopologyProvider in bigger enviroments</li>
<li><a href="http://issues.opennms.org/browse/NMS-8168">NMS-8168</a>: Vaadin Applications do not show OpenNMS favicon</li>
<li><a href="http://issues.opennms.org/browse/NMS-8189">NMS-8189</a>: Wrong interface status color on node detail page</li>
<li><a href="http://issues.opennms.org/browse/NMS-8209">NMS-8209</a>: Upgrade junit to v4.12</li>
<li><a href="http://issues.opennms.org/browse/NMS-8248">NMS-8248</a>: Many Rcsript (RScript) files in OPENNMS_DATA/tmp</li>
<li><a href="http://issues.opennms.org/browse/NMS-8262">NMS-8262</a>: Spring AD authentication</li>
<li><a href="http://issues.opennms.org/browse/NMS-8267">NMS-8267</a>: Create documentation for SNMP detector</li>
<li><a href="http://issues.opennms.org/browse/NMS-8271">NMS-8271</a>: Enable correlation engines to register for all events</li>
<li><a href="http://issues.opennms.org/browse/NMS-8272">NMS-8272</a>: snmp4j does not process agent responses</li>
<li><a href="http://issues.opennms.org/browse/NMS-8274">NMS-8274</a>: All the defined Statsd&#8217;s reports are being executed even if they are disabled.</li>
<li><a href="http://issues.opennms.org/browse/NMS-8298">NMS-8298</a>: Label of Vertex is too short in some cases</li>
<li><a href="http://issues.opennms.org/browse/NMS-8307">NMS-8307</a>: RPM package opennms not aware of Red Hat Software Collections</li>
</ul>
