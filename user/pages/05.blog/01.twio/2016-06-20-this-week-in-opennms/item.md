---
title: This Week in OpenNMS: June 20th, 2016
date: 14:07 06/20/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, bamboo, bsm, dev-jam, eventd, instrumentation, jmx, minion, ouce, performance improvements, release, rmi, smoke tests, statistics, topology maps, training]
---

<p>In the last week we worked on Bamboo smoke tests, Minion, Topology Maps and BSM, JMX RMI authentication, statistics and instrumentation, performance improvements, and release blockers.</p>
<h4>Github Project Updates</h4>
<ul>
<li>
<h5>Bamboo Updates</h5>
<p>I did some more cleanup of timing issues with the new dockerized Bamboo smoke tests, but other than that they&#8217;ve started settling down.</p>
</li>
<li>
<h5>Minion</h5>
<p>We finished up some cleanup of the branch to associate nodes with locations, and should be merging it to develop this week.  Chandra has been working on making detectors run remotely in the Minion container.</p>
</li>
<li>
<h5>Topology Maps and Business Service Monitor</h5>
<p>Markus has been working on more cleanup in the Topology UI, including putting breadcrumbs into the info panel and fixing up the menu-handling code.  Dustin has been working on <a href="http://issues.opennms.org/browse/HZN-820">adding new severity propagation algorithms to the BSM</a>.</p>
</li>
<li>
<h5>JMX RMI (JAAS) Authentication</h5>
<p>I finished up my work on cleaning up JMX authentication.  Documentation is available in <a href="http://docs.opennms.org/opennms/branches/develop/guide-admin/guide-admin.html#ga-rmi">the admin guide</a>.</p>
</li>
<li>
<h5>Statistics</h5>
<p>Jesse added more instrumentation of Newts and JVM statistics to make it easier to monitor OpenNMS&#8217;s performance.</p>
</li>
<li>
<h5>Performance</h5>
<p>Seth worked on fixing up a locking bottleneck in Eventd that should speed up event processing.</p>
</li>
<li>
<h5>Meridian 2016/Horizon 18.0.1 Blockers</h5>
<p>We spent more time cleaning up bugs that should be fixed before Meridian 2016 and Horizon 18.0.1 are released.</p>
</li>
</ul>
<h4>Upcoming Events and Appearances</h4>
<ul>
<li>
<h5><a href="https://www.opennms.org/wiki/Dev-Jam_2016">Dev-Jam 2016 &#8211; July 25th through 30th, 2016</a></h5>
<p>Dev-Jam 2016 is sneaking up on is, but there is still plenty of time to join us in Minnesota.  For more information, see <a href="https://www.opennms.org/wiki/Dev-Jam_2016">The Dev-Jam 2016 wiki page</a>.</p>
<p>Mike Huot has written up a proposal letter you can use to help explain to management why attending Dev-Jam is a good idea.  Feel free to <a href="https://docs.google.com/document/d/1VerZYe5LwMT_1j5ISAsNU9-ZGcwY_zdA_4DODNlBpYg/edit?usp=sharing" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://docs.google.com/document/d/1VerZYe5LwMT_1j5ISAsNU9-ZGcwY_zdA_4DODNlBpYg/edit?usp=sharing', 'copy this letter']);" >copy this letter</a> and join us in Minnesota this year!</p>
</li>
<li>
<h5><a href="http://www.opennms.eu/2016/06/call-for-papers-ouce-2016/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.opennms.eu/2016/06/call-for-papers-ouce-2016/', 'OpenNMS User Conference Europe &#8211; Call for Papers Deadline &#8211; August 1st, 2016']);" >OpenNMS User Conference Europe &#8211; Call for Papers Deadline &#8211; August 1st, 2016</a></h5>
<p>If you wish to speak at OUCE 2016, the deadline for submitting a talk is August 1st, 2016.  You can find out more about submitting your talk <a href="http://www.opennms.eu/2016/06/call-for-papers-ouce-2016/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.opennms.eu/2016/06/call-for-papers-ouce-2016/', 'here']);" >here</a>.</p>
</li>
<li>
<h5><a href="http://www.opennms.com/training" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.opennms.com/training', 'OpenNMS Training &#8211; August 15th through 19th, 2016']);" >OpenNMS Training &#8211; August 15th through 19th, 2016</a></h5>
<p>The OpenNMS Group has moved the next training session in Pittsboro, NC to August 15th through 19th.  For more details on OpenNMS training and signing up, see <a href="http://www.opennms.com/training/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.opennms.com/training/', 'The OpenNMS.com training page']);" >The OpenNMS.com training page</a>.</p>
</li>
<li>
<h5>OpenNMS User Conference Europe &#8211; September 13th through September 15th, 2016</h5>
<p>OUCE 2016 will be at the University of Applied Science in Fulda, Germany from September 13th through 15th.  More details will be posted as we get closer to the event.</p>
</li>
</ul>
<h4>Until Next Week&#8230;</h4>
<p>If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to <a href="mailto:twio@opennms.org">say hi</a>.</p>
<p>&#8211; Ben</p>
<h4>Resolved Issues Since Last TWiO</h4>
<ul>
<li><a href="http://issues.opennms.org/browse/HZN-791">HZN-791</a>: Navigation controls should indicate the target layer</li>
<li><a href="http://issues.opennms.org/browse/HZN-792">HZN-792</a>: Add breadcrumbs for layer navigation</li>
<li><a href="http://issues.opennms.org/browse/HZN-818">HZN-818</a>: Detectors invoked by the Minion should be thread safe</li>
<li><a href="http://issues.opennms.org/browse/HZN-819">HZN-819</a>: Add support for invoking asynchronous detectors via the Minion Karaf shell</li>
<li><a href="http://issues.opennms.org/browse/NMS-4505">NMS-4505</a>: db sql prepared statement insert logging could be improved</li>
<li><a href="http://issues.opennms.org/browse/NMS-5937">NMS-5937</a>: Change Real-time Graphing Default to 5 or 10 seconds</li>
<li><a href="http://issues.opennms.org/browse/NMS-6004">NMS-6004</a>: XmlrpcAnticipatorTest uses hard-coded port 9000</li>
<li><a href="http://issues.opennms.org/browse/NMS-6411">NMS-6411</a>: log4j.properties needs a comment for instrumentation.log default DEBUG level</li>
<li><a href="http://issues.opennms.org/browse/NMS-7472">NMS-7472</a>: Problems with &#8220;ResponseTimeSummary_Availability_Offenders&#8221; subreport</li>
<li><a href="http://issues.opennms.org/browse/NMS-7475">NMS-7475</a>: Problems with &#8220;NodeAvailability&#8221; report</li>
<li><a href="http://issues.opennms.org/browse/NMS-8154">NMS-8154</a>: Wrong label in send-event menu</li>
<li><a href="http://issues.opennms.org/browse/NMS-8155">NMS-8155</a>: Missing node/interface information in an event after sending an event with send-event ui</li>
<li><a href="http://issues.opennms.org/browse/NMS-8166">NMS-8166</a>: OpenNMS error adding a service NRPE</li>
<li><a href="http://issues.opennms.org/browse/NMS-8256">NMS-8256</a>: Trouble ticket link template in opennms.properties accidentally filtered</li>
<li><a href="http://issues.opennms.org/browse/NMS-8275">NMS-8275</a>: The filter for the foreign source in the outages view caused an SQLGrammarException</li>
<li><a href="http://issues.opennms.org/browse/NMS-8376">NMS-8376</a>: Poller threads can get locked up while waiting for outages to be created/resolved</li>
<li><a href="http://issues.opennms.org/browse/NMS-8493">NMS-8493</a>: Newer Karaf features are installing bundles that overlap the system classpath</li>
<li><a href="http://issues.opennms.org/browse/NMS-8497">NMS-8497</a>: NPE in JMX Collector when collecting composite attributes</li>
<li><a href="http://issues.opennms.org/browse/NMS-8499">NMS-8499</a>: jmxremote password file not found when running `install -dis` after configuring RMI</li>
<li><a href="http://issues.opennms.org/browse/NMS-8500">NMS-8500</a>: JMX RMI auth configuration does not work with custom roles</li>
</ul>

