---
title: This Week in OpenNMS: April 4th, 2016
date: 12:18 04/04/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, bsm, bug fixes, cisco, compass, dev-jam, drinkup, enlinkd, juniper, meetup, opennms, opennms compass, opennms horizon, osgi]
---

<p>In the last week we worked on Enlinkd, Compass, new device support, the Business Service Monitor, the OSGi plugin manager, and lots of smaller bug fixes.</p>
<h4>Github Project Updates</h4>
<ul>
<li>
<h5>Enlinkd</h5>
<p>As of this weekend, Antonio merged his Enlinkd overhaul which fixes a number of performance and other bugs related to Enlinkd.  For details, see <a href="http://issues.opennms.org/browse/NMS-7918">NMS-7918</a> and <a href="http://issues.opennms.org/browse/NMS-8072">NMS-8072</a>.</p>
</li>
<li>
<h5>Compass</h5>
<p>Last week, I worked on adding better support for checking servers in Compass.  Now, when you add a new server <a href="https://www.youtube.com/watch?v=S80tqgbsk_Y" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://www.youtube.com/watch?v=S80tqgbsk_Y', 'it will check if it can be reached, and if not, try switching http/https or adding &#8220;opennms&#8221; on the end of the URL']);" >it will check if it can be reached, and if not, try switching http/https or adding &#8220;opennms&#8221; on the end of the URL</a>.</p>
</li>
<li>
<h5>New Devices</h5>
<p>Ronny and Jeff added support for some new SonicWall firewall events, Cisco devices, and Juniper devices.</p>
</li>
<li>
<h5>Business Service Monitor</h5>
<p>The BSM is ready to be merged to develop this week.</p>
</li>
<li>
<h5>OSGi Plugin Manager</h5>
<p>Craig has been working on a system for adding loadable functionality to OpenNMS at runtime, using our existing embedded OSGi container, including support for an &#8220;App Store&#8221;-like system for choosing and installing plugins.  For more details, see <a href="https://www.opennms.org/w/images/1/1a/OpenNMSDevel-OpenNMSModules%3B1_08-01-2015.pdf" onclick="_gaq.push(['_trackEvent','download','https://www.opennms.org/w/images/1/1a/OpenNMSDevel-OpenNMSModules%3B1_08-01-2015.pdf']);" >his document describing the system</a>, and <a href="https://www.youtube.com/watch?v=Pl4A4G9ZdmE" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://www.youtube.com/watch?v=Pl4A4G9ZdmE', 'his presentation at Dev-Jam 2015']);" >his presentation at Dev-Jam 2015</a>.</p>
</li>
<li>
<h5>Bug Fixes</h5>
<p>A lot of other minor bug fixes have been going in in preparation for OpenNMS Horizon 18.</p>
</li>
</ul>
<h4>OpenNMS Horizon 18 Imminent</h4>
<p>The BSM branch should be merged this week and then we will be considered feature-frozen for the Horizon 18 release.  If you have any code that needs merging for the 18 release, please submit your pull requests in the next few days.</p>
<h4>Upcoming Events and Appearances</h4>
<ul>
<li>
<h5><a href="http://www.meetup.com/OpenNMS-Meetup-Group/events/229919435/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.meetup.com/OpenNMS-Meetup-Group/events/229919435/', 'OpenNMS Drinkup &#8211; Wednesday, April 6, 2016']);" >OpenNMS Drinkup &#8211; Wednesday, April 6, 2016</a></h5>
<p>Whether you&#8217;re a long-time user or a newcomer curious about OpenNMS, come have a pint with us <a href="http://www.meetup.com/OpenNMS-Meetup-Group/events/229919435/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.meetup.com/OpenNMS-Meetup-Group/events/229919435/', 'at The Goose&#8217;s Acre']);" >at The Goose&#8217;s Acre</a>. Core committers Jeff Gehlbach and Alejandro Galue will be on hand to talk use cases, answer questions, tell war stories, and tease the upcoming OpenNMS Horizon 18 release.</p>
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
<li><a href="http://issues.opennms.org/browse/HZN-496">HZN-496</a>: Add Discoverer feature to installation list in Minion</li>
<li><a href="http://issues.opennms.org/browse/HZN-609">HZN-609</a>: Move TrapNotificationListener interface from Trapd to TrapReceiverSnmp4jImpl</li>
<li><a href="http://issues.opennms.org/browse/HZN-627">HZN-627</a>: Syslog listeners use different default ports</li>
<li><a href="http://issues.opennms.org/browse/HZN-647">HZN-647</a>: Move distributable monitors into features/poller/monitors/core</li>
<li><a href="http://issues.opennms.org/browse/NMS-2222">NMS-2222</a>: Export Reports to CSV</li>
<li><a href="http://issues.opennms.org/browse/NMS-2587">NMS-2587</a>: DependencyCheckingContextListener silently avoids checking the JVM name if the opennms.skipjvmcheck system property is set, but not if the dontBlameOpenNMS web context parameter is set</li>
<li><a href="http://issues.opennms.org/browse/NMS-3403">NMS-3403</a>: implement plugins for jaxb sequence stuff</li>
<li><a href="http://issues.opennms.org/browse/NMS-3489">NMS-3489</a>: &#8220;ADD NODE&#8221; produces &#8220;too much&#8221; config</li>
<li><a href="http://issues.opennms.org/browse/NMS-3740">NMS-3740</a>: thread lock in logging capture</li>
<li><a href="http://issues.opennms.org/browse/NMS-3983">NMS-3983</a>: Annoying &#8220;New Node&#8221; default value in editProvisioningGroup WebUI</li>
<li><a href="http://issues.opennms.org/browse/NMS-4229">NMS-4229</a>: Detect tables with Provisiond SNMP detector</li>
<li><a href="http://issues.opennms.org/browse/NMS-4843">NMS-4843</a>: &#8220;Edit Provisioning Group&#8221; page truncates node, service, and category names</li>
<li><a href="http://issues.opennms.org/browse/NMS-5077">NMS-5077</a>: Allow other services to work with Path Outages other than ICMP</li>
<li><a href="http://issues.opennms.org/browse/NMS-5594">NMS-5594</a>: OpenNMS doesn&#8217;t fetch rrd.binary property from iReport Designer</li>
<li><a href="http://issues.opennms.org/browse/NMS-5839">NMS-5839</a>: Bring WaterfallExecutor logging on par with RunnableConsumerThreadPool</li>
<li><a href="http://issues.opennms.org/browse/NMS-5881">NMS-5881</a>: /etc/init.d/opennms startup and shutdown fail or timeout</li>
<li><a href="http://issues.opennms.org/browse/NMS-5905">NMS-5905</a>: Add ifAlias to bridge Link Interface Info</li>
<li><a href="http://issues.opennms.org/browse/NMS-5979">NMS-5979</a>: Make the Provisioning Requisitions &#8220;Node Quick-Add&#8221; look pretty</li>
<li><a href="http://issues.opennms.org/browse/NMS-6329">NMS-6329</a>: While changing Provisioning Requisitions changing a nodes properties moves the page to top instead on the node</li>
<li><a href="http://issues.opennms.org/browse/NMS-6361">NMS-6361</a>: Can&#8217;t import a requisition when OpenNMS is installed in &#8220;C:\Program Files\OpenNMS&#8221;</li>
<li><a href="http://issues.opennms.org/browse/NMS-6474">NMS-6474</a>: Export JRB Data to CSV</li>
<li><a href="http://issues.opennms.org/browse/NMS-6623">NMS-6623</a>: Update JNA.jar library to support ARM based systems</li>
<li><a href="http://issues.opennms.org/browse/NMS-7028">NMS-7028</a>: test failure: org.opennms.netmgt.collectd.SnmpCollectorTest</li>
<li><a href="http://issues.opennms.org/browse/NMS-7446">NMS-7446</a>: Enhance Bridge Link Object Model</li>
<li><a href="http://issues.opennms.org/browse/NMS-7471">NMS-7471</a>: SNMP Plugin tests regularly failing</li>
<li><a href="http://issues.opennms.org/browse/NMS-7582">NMS-7582</a>: non RFC conform behaviour of SmtpMonitor</li>
<li><a href="http://issues.opennms.org/browse/NMS-7798">NMS-7798</a>: Add Sonicwall Firewall Events</li>
<li><a href="http://issues.opennms.org/browse/NMS-7880">NMS-7880</a>: Integration tests in org.opennms.core.test-api.karaf have incomplete dependencies</li>
<li><a href="http://issues.opennms.org/browse/NMS-7918">NMS-7918</a>: Slow BridgeBridgeTopologie discovery with enlinkd.</li>
<li><a href="http://issues.opennms.org/browse/NMS-8072">NMS-8072</a>: NullPointerException for NodeDiscoveryBridge</li>
<li><a href="http://issues.opennms.org/browse/NMS-8077">NMS-8077</a>: Add NetGear Prosafe Smart switch SNMP trap events and syslog events</li>
<li><a href="http://issues.opennms.org/browse/NMS-8092">NMS-8092</a>: Add OpenWrt syslog and related event definitions</li>
<li><a href="http://issues.opennms.org/browse/NMS-8118">NMS-8118</a>: CXF returning 204 on NULL responses, rather than 404</li>
<li><a href="http://issues.opennms.org/browse/NMS-8137">NMS-8137</a>: OpenNMS incorrectly discovers VLANs</li>
<li><a href="http://issues.opennms.org/browse/NMS-8146">NMS-8146</a>: &#8220;Show interfaces&#8221; link forgets the filters in some circumstances</li>
<li><a href="http://issues.opennms.org/browse/NMS-8149">NMS-8149</a>: Update asciidoctorj to 1.5.4 and asciidoctorjPdf to 1.5.0-alpha.11</li>
<li><a href="http://issues.opennms.org/browse/NMS-8160">NMS-8160</a>: Remove Quick-Add node to avoid confusions and avoid breaking the ReST API</li>
<li><a href="http://issues.opennms.org/browse/NMS-8173">NMS-8173</a>: Unable to start opennms after upgrade</li>
<li><a href="http://issues.opennms.org/browse/NMS-8182">NMS-8182</a>: Add HTTPS as quick-link on the node page</li>
<li><a href="http://issues.opennms.org/browse/NMS-8229">NMS-8229</a>: OpenNMS Starts and then stops</li>
<li><a href="http://issues.opennms.org/browse/NMS-8236">NMS-8236</a>: Move the &#8220;vaadin-extender-service&#8221; module to opennms code base</li>
<li><a href="http://issues.opennms.org/browse/NMS-8251">NMS-8251</a>: Parameterize product name in asciidoc docs</li>
<li><a href="http://issues.opennms.org/browse/NMS-8253">NMS-8253</a>: The path outage feature uses ICMP instead of the critical service to decide if a parent is down</li>
<li><a href="http://issues.opennms.org/browse/NMS-8254">NMS-8254</a>: Workaround for having Multi-Parent Path Outages feature</li>
<li><a href="http://issues.opennms.org/browse/NMS-8257">NMS-8257</a>: Test flapping: ForeignSourceRestServiceIT.testForeignSources()</li>
<li><a href="http://issues.opennms.org/browse/NMS-8259">NMS-8259</a>: Cleanup testdata in SnmpDetector tests</li>
<li><a href="http://issues.opennms.org/browse/NMS-8265">NMS-8265</a>: SNMP collection systemDefs for Cisco ASA5525-X, ASA5515-X</li>
<li><a href="http://issues.opennms.org/browse/NMS-8266">NMS-8266</a>: SNMP collection systemDefs for Juniper SRX210he2, SRX100h</li>
</ul>
