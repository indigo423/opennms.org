---
title: This Week in OpenNMS: May 2nd, 2016
date: 12:41 05/02/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, bsm, cassandra, compass, data collection, dev-jam, documentation, enlinkd, jmx, karaf, minion, newts, opennms compass, opennms horizon, requisitions, topology maps, training, tsrm]
---

<p>In the last week we worked on the BSM, topology maps, Minion, the TSRM ticketing plugin, JMX data collection configuration, Newts, Documentation, Requisitions, Compass, and bug fixes.</p>
<h4>Github Project Updates</h4>
<ul>
<li>
<h5>Business Service Monitor and Topology Maps</h5>
<p>This week was more of Jesse, Ronny, and Markus wrapping up BSM for Horizon 18. Jesse did a ton of performance work on loading Enlinkd data into the topology UI, bringing his test set load time down from 5 minutes down to 5 seconds.</p>
</li>
<li>
<h5>OSGi Updates and Minion</h5>
<p>Seth spent some time working on various issues related to Karaf &#8212; updating our embedded Karaf container, as well as more work on getting Minion-related code loading.</p>
</li>
<li>
<h5>TSRM Ticketing Plugin</h5>
<p>Chandra finished wrapping up the IBM TSRM plugin and has merged it into the Horizon 18 branch.</p>
</li>
<li>
<h5>JMX Data Collection</h5>
<p>Jesse updated the JMX data collection configuration to support split files in the jmx-datacollection-config.d directory.</p>
</li>
<li>
<h5>Newts and Cassandra Performance Investigation</h5>
<p>Jesse spent some time investigating a performance issue reported by a number of our customers related to Newts and Cassandra.  It turns out the issue was related to default logging levels and the Cassandra driver, and the fix was as simple as adding this to your OpenNMS log4j2.xml file:</p>
<p>&lt;logger name=&#8221;com.datastax.driver&#8221; additivity=&#8221;false&#8221; level=&#8221;INFO&#8221;&gt;<br />
&nbsp;&nbsp;&nbsp;&lt;appender-ref ref=&#8221;RoutingAppender&#8221;/&gt;<br />
&lt;/logger&gt;</p>
</li>
<li>
<h5>Documentation</h5>
<p>Chandra, Seth, Ronny, Jesse, and Sven Reissmann have updated documentation in multiple places in preparation for Horizon 18.  It is also now possible to view the documentation in the &#8220;opennms-doc&#8221; package from the OpenNMS web UI by default.</p>
</li>
<li>
<h5>Requisitions</h5>
<p>Alejandro has done a bit more cleanup and fixing of the Requisitions UI for Horizon 18.</p>
</li>
<li>
<h5>Compass</h5>
<p>I spent more time this last week cleaning up small things and fixing a few bugs in Compass.  I also beefed up the (almost nonexistent) analytics inside Compass, and added an opt-out for analytics tracking.  If you&#8217;d like to help beta test Compass, see <a href="https://compass.opennms.io/#beta" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://compass.opennms.io/#beta', 'the Compass web site']);" >the Compass web site</a>.</p>
</li>
<li>
<h5>Bug Fixes</h5>
<p>A lot of other minor bug fixes have been going in in preparation for OpenNMS Horizon 18.</p>
</li>
</ul>
<h4>OpenNMS Horizon 18 Due Monday, May 9th</h4>
<p>Barring any last-minute bugs we may discover in testing, the Horizon 18 branch is finished and our plan is to release next Monday, May 9th.  If you have a test setup, please give the OpenNMS 18 snapshots a try and let us know if you run into any issues; this is shaping up to be a really nice release.  Just change your yum or apt configuration to use &#8220;<code>snapshot</code>&#8221; instead of &#8220;<code>stable</code>&#8221; and you&#8217;ll get the snapshot builds.  While we are prepping 18, &#8220;<code>snapshot</code>&#8221; points to the release branch, rather than develop.</p>
<h4>Upcoming Events and Appearances</h4>
<ul>
<li>
<h5><a href="http://www.opennms.com/training" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.opennms.com/training', 'OpenNMS Training &#8211; June 13th though 17th, 2016']);" >OpenNMS Training &#8211; June 13th though 17th, 2016</a></h5>
<p>
      The OpenNMS Group has scheduled our next training session in Pittsboro, NC for June 13th through 17th.  For more details on OpenNMS training and signing up, see <a href="http://www.opennms.com/training/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.opennms.com/training/', 'The OpenNMS.com training page']);" >The OpenNMS.com training page</a>.
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
<li><a href="http://issues.opennms.org/browse/BSHIFT-11">BSHIFT-11</a>: traffic in/out utilization does not render properly</li>
<li><a href="http://issues.opennms.org/browse/HZN-645">HZN-645</a>: IBM TSRM Ticketing Plugin</li>
<li><a href="http://issues.opennms.org/browse/HZN-652">HZN-652</a>: Refactor ServiceMonitorLocator to use onmsgi to look up ServiceMonitors</li>
<li><a href="http://issues.opennms.org/browse/HZN-657">HZN-657</a>: Write a Minion feature definition for opennms-poller-monitors-core</li>
<li><a href="http://issues.opennms.org/browse/HZN-688">HZN-688</a>: Create user documentation for the BSM components</li>
<li><a href="http://issues.opennms.org/browse/HZN-715">HZN-715</a>: Define a model for &#8220;sub graphs&#8221;</li>
<li><a href="http://issues.opennms.org/browse/HZN-716">HZN-716</a>: Design Atlas</li>
<li><a href="http://issues.opennms.org/browse/HZN-717">HZN-717</a>: Prototype import of the data</li>
<li><a href="http://issues.opennms.org/browse/HZN-726">HZN-726</a>: Use &#8220;vm&#8221; ActiveMQ transport by default</li>
<li><a href="http://issues.opennms.org/browse/NMS-5915">NMS-5915</a>: The retry handler used with HttpClient is not going to do what we expect</li>
<li><a href="http://issues.opennms.org/browse/NMS-7731">NMS-7731</a>: Remote poller dies when trying to use the PageSequenceMonitor</li>
<li><a href="http://issues.opennms.org/browse/NMS-7846">NMS-7846</a>: Slow LinkdTopologyProvider/EnhancedLinkdTopologyProvider in bigger enviroments</li>
<li><a href="http://issues.opennms.org/browse/NMS-7976">NMS-7976</a>: Merge OSGi Plugin Manager into Admin UI</li>
<li><a href="http://issues.opennms.org/browse/NMS-8080">NMS-8080</a>: VLAN name is not displayed</li>
<li><a href="http://issues.opennms.org/browse/NMS-8198">NMS-8198</a>: Provisioning UI indication for changed nodes is too bright</li>
<li><a href="http://issues.opennms.org/browse/NMS-8353">NMS-8353</a>: Plugin Manager fails to load</li>
<li><a href="http://issues.opennms.org/browse/NMS-8361">NMS-8361</a>: Incorrect documentation for org.opennms.newts.query.heartbeat</li>
<li><a href="http://issues.opennms.org/browse/NMS-8362">NMS-8362</a>: nodelink.jsp shared segment without ports</li>
<li><a href="http://issues.opennms.org/browse/NMS-8365">NMS-8365</a>: Add metric counter for drop counts when the ring buffer is full</li>
<li><a href="http://issues.opennms.org/browse/NMS-8366">NMS-8366</a>: OpenNMS Incompatible with Debian Stretch and Ubuntu 16.04</li>
<li><a href="http://issues.opennms.org/browse/NMS-8373">NMS-8373</a>: The placeholder {diffTime} is not supported by Backshift.</li>
<li><a href="http://issues.opennms.org/browse/NMS-8374">NMS-8374</a>: The logic to find event definitions confuses the Event Translator when translating SNMP Traps</li>
<li><a href="http://issues.opennms.org/browse/NMS-8375">NMS-8375</a>: License / copyright situation in release notes introduction needs simplifying</li>
<li><a href="http://issues.opennms.org/browse/NMS-8377">NMS-8377</a>: Applying some organizational changes on the Requisitions UI (Grunt, JSHint, Dist)</li>
<li><a href="http://issues.opennms.org/browse/NMS-8379">NMS-8379</a>: Sluggish performance with Cassandra driver</li>
<li><a href="http://issues.opennms.org/browse/NMS-8381">NMS-8381</a>: dashboard and ops board not working</li>
</ul>
