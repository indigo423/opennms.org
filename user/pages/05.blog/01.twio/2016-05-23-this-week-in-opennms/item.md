---
title: This Week in OpenNMS: May 23rd, 2016
date: 11:45 05/23/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, activemq, bamboo, bsm, camel, compass, database, dev-jam, graphing, karaf, minion, newts, opennms compass, topology maps, training]
---

<p>In the last week we worked on ActiveMQ, Camel, Karaf, Minion, Topology Maps, BSM, Newts, graphs, database access, Bamboo, and Compass.</p>
<h4>Github Project Updates</h4>
<ul>
<li>
<h5>ActiveMQ, Camel, and Karaf Updates</h5>
<p>Seth has been working on updating our ActiveMQ, Camel, and Karaf infrastructure, to resolve a number of bugs found in testing.</p>
</li>
<li>
<h5>Minion</h5>
<p>Chandra has been working on improving the minion code that communicates with OpenNMS.  Also, I continued work on associating nodes with locations for future minion support.</p>
</li>
<li>
<h5>Topology Maps and Business Service Monitor</h5>
<p>Markus, Dustin, and Jesse have also continued to work on <a href="https://www.opennms.org/wiki/DevProjects/Atlas">Project Atlas</a>, with the goal of improving navigation through support of topology layers, and support for moving node map functionality to the topology UI.  Jesse also did some work on BSM data in events.</p>
</li>
<li>
<h5>Newts</h5>
<p>Jesse created a Newts 1.3.6 release with a driver update to Cassandra 3.0.1 as well as support for setting the replication factor when initializing a schema.  The download will be available soon.  Newts support in OpenNMS has also been updated to take advantage of these changes and to provide better data on ring buffer usage.</p>
</li>
<li>
<h5>Graphs</h5>
<p>Jesse added support for trending/forecasting in Backshift graphs, and integrated it into OpenNMS.  He also switched NRTG graphs to use Backshift, and added a control for opening an individual graph in a separate window.</p>
</li>
<li>
<h5>Database Access</h5>
<p>Alejandro did some work evaluating updated database code (JDBC drivers and C3P0 pooling).</p>
</li>
<li>
<h5>Bamboo Updates</h5>
<p>We&#8217;ve been spending a lot of time trying to clean up our continuous integration environment.  That work is still ongoing&#8230; ;)</p>
</li>
<li>
<h5>Compass 3.0.1</h5>
<p>I released a small update to Compass with a few tiny cosmetic fixes and features.  As always, you can download the latest version from the Google Play or Apple App Stores.</p>
</li>
<h4>Upcoming Events and Appearances</h4>
</ul>
<ul>
<li>
<h5><a href="http://www.opennms.com/training" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.opennms.com/training', 'OpenNMS Training &#8211; August 15th through 19th, 2016']);" >OpenNMS Training &#8211; August 15th through 19th, 2016</a></h5>
<p>
      The OpenNMS Group has moved the next training session in Pittsboro, NC to August 15th through 19th.  For more details on OpenNMS training and signing up, see <a href="http://www.opennms.com/training/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.opennms.com/training/', 'The OpenNMS.com training page']);" >The OpenNMS.com training page</a>.
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
<li><a href="http://issues.opennms.org/browse/HZN-311">HZN-311</a>: Associate nodes with monitoringLocations via foreign key</li>
<li><a href="http://issues.opennms.org/browse/HZN-336">HZN-336</a>: Newts Graphing and Reporting Related Components</li>
<li><a href="http://issues.opennms.org/browse/HZN-640">HZN-640</a>: Refactor monitoringLocation to have UUID primary key</li>
<li><a href="http://issues.opennms.org/browse/HZN-760">HZN-760</a>: Write smoke tests for the GraphML topology provider</li>
<li><a href="http://issues.opennms.org/browse/HZN-762">HZN-762</a>: Enhance the CSV conversion tool to support layers</li>
<li><a href="http://issues.opennms.org/browse/HZN-770">HZN-770</a>: Validate that the JMX collection definitions we have for 2.1x also work with 3.0.x</li>
<li><a href="http://issues.opennms.org/browse/HZN-778">HZN-778</a>: GraphML validation: Allow duplicate edge and node ids in the document</li>
<li><a href="http://issues.opennms.org/browse/NEWTS-100">NEWTS-100</a>: Enhance the SchemaManager to support setting the replication factor.</li>
<li><a href="http://issues.opennms.org/browse/NEWTS-101">NEWTS-101</a>: Upgrade the cassandra driver to v3.0.1</li>
<li><a href="http://issues.opennms.org/browse/NMS-8202">NMS-8202</a>: Undefined variable ifHCOutOctets.ifHighSpeed using Newts</li>
<li><a href="http://issues.opennms.org/browse/NMS-8340">NMS-8340</a>: QuickAddNodeIT flapping during tearDown()</li>
<li><a href="http://issues.opennms.org/browse/NMS-8360">NMS-8360</a>: If the persistence layer is not available or unresponsive the WebUI becomes unavailable or extremely slow and key components stop working</li>
<li><a href="http://issues.opennms.org/browse/NMS-8363">NMS-8363</a>: Exceptions thrown by the Newts Conversion Tool for certain RRDs and no data on Cassandra</li>
<li><a href="http://issues.opennms.org/browse/NMS-8392">NMS-8392</a>: Upgrade Log4j2 (there are several performance improvements)</li>
<li><a href="http://issues.opennms.org/browse/NMS-8393">NMS-8393</a>: Return X-Frame-Options HTTP header to prevent x-frame scripting and clickjacking</li>
<li><a href="http://issues.opennms.org/browse/NMS-8404">NMS-8404</a>: storeByForeignSource breaks node[N] style resource IDs</li>
<li><a href="http://issues.opennms.org/browse/NMS-8423">NMS-8423</a>: BSM attributes not available in events and alarms</li>
<li><a href="http://issues.opennms.org/browse/NMS-8427">NMS-8427</a>: WebMonitor returns false negative poll results</li>
<li><a href="http://issues.opennms.org/browse/NMS-8428">NMS-8428</a>: Upgrade Newts to 1.3.6</li>
<li><a href="http://issues.opennms.org/browse/NMS-8429">NMS-8429</a>: Add a new control to open Backshift graphs in their own window</li>
<li><a href="http://issues.opennms.org/browse/NMS-8430">NMS-8430</a>: Ring buffer entries exceed capacity</li>
<li><a href="http://issues.opennms.org/browse/NMS-8433">NMS-8433</a>: Icons &#8220;Center on Map&#8221; and &#8220;Remove from Focus&#8221; are not visible anymore</li>
<li><a href="http://issues.opennms.org/browse/NMS-8435">NMS-8435</a>: Update NRTG to use Backshift instead of rrdgraph.js</li>
<li><a href="http://issues.opennms.org/browse/NMS-8436">NMS-8436</a>: Provide a stress tool that can be used to stress the active persistence layer</li>
<li><a href="http://issues.opennms.org/browse/NMS-8437">NMS-8437</a>: Newts: String properties are persisted using the &#8220;collector&#8221; thread</li>
<li><a href="http://issues.opennms.org/browse/NMS-8439">NMS-8439</a>: Newts: The number of sample processing threads do not match the number of writer threads</li>
<li><a href="http://issues.opennms.org/browse/NMS-8449">NMS-8449</a>: Upgrade JAXB to version 2.2.11</li>
</ul>
