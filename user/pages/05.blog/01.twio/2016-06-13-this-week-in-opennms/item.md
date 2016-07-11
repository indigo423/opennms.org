---
title: This Week in OpenNMS: June 13th, 2016
date: 11:55 06/13/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, bsm, data collection, jaas, jmx, minion, newts, opennms horizon, opennms meridian, provisiond, rmi, smoke tests, snmp, topology maps]
---

<p>In the last week we worked on smoke tests, Provisiond, Topology Maps, BSM, Minion, SNMP data collection, Newts, JMX authentication, and release blockers.</p>
<h4>Github Project Updates</h4>
<ul>
<li>
<h5>Bamboo Updates</h5>
<p>I finished up the smoke test refactor this last week, and have it enabled by default in our main branches.  There&#8217;s still a small amount of work to do to stabilize them in the slower VMs, but everything is pretty much working now running smoke tests against dockerized OpenNMS containers.</p>
</li>
<li>
<h5>Provisiond Cleanups</h5>
<p>Seth spent more time cleaning up Provisiond bugs and doing more refactoring.  A couple of bugs were found that could explain some intermittent freezing issues people have seen in Provisiond &#8212; these fixes should be in the next Meridian and Horizon releases.</p>
</li>
<li>
<h5>Topology Maps and Business Service Monitor</h5>
<p>Christian refactored the GraphML edge status provider to support using custom groovy scripts for determining how to draw edges on the topology map. Jesse, Dustin, and Christian have been doing other topology UI work as well, including icons for geographical areas and microwave links.</p>
</li>
<li>
<h5>Minion</h5>
<p>Chandra has been working on a karaf shell for managing minion provisiond detectors.  Seth has been doing more cleanup and finalizing of the syslog minion code.</p>
</li>
<li>
<h5>SNMP Custom String Attributes</h5>
<p>Alejandro has been working on an enhancement to allow collecting from indirect and complex SNMP indexes.  This allows collection of data from previously uncollectable indexes like Cisco QoS class map statistics or RMON2.  For details of how it works, see <a href="http://article.gmane.org/gmane.network.opennms.general/52924" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://article.gmane.org/gmane.network.opennms.general/52924', 'his post to the opennms-discuss list describing the feature']);" >his post to the opennms-discuss list describing the feature</a>.</p>
</li>
<li>
<h5>Newts</h5>
<p>Jesse continued his work on increasing Newts performance, putting out a 1.4.1 release and updating OpenNMS to use it and optimizing batch-persisting of attributes.</p>
</li>
<li>
<h5>JMX RMI (JAAS) Authentication</h5>
<p>I spent some time last week working on cleaning up JAAS authentication to work as expected for non-admin accounts (fixing our auth module to honor the jmxremote.access file when configuring remote RMI).</p>
</li>
<li>
<h5>Meridian 2016/Horizon 18.0.1 Blockers</h5>
<p>We spent some time last week identifying bug fixes and configuration updates that should block the upcoming OpenNMS Meridian 2016 release and have started fixing them, targeting Meridian 2016 and Horizon 18.0.1.</p>
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
<li><a href="http://issues.opennms.org/browse/HZN-719">HZN-719</a>: Allow administatrors to know which Minions are currently active</li>
<li><a href="http://issues.opennms.org/browse/HZN-724">HZN-724</a>: Create topology UI icons used to represent geographical areas</li>
<li><a href="http://issues.opennms.org/browse/HZN-725">HZN-725</a>: Create topology UI icons used to represent microwave link networks</li>
<li><a href="http://issues.opennms.org/browse/HZN-784">HZN-784</a>: Manually trigger detectors via the Karaf shell</li>
<li><a href="http://issues.opennms.org/browse/HZN-786">HZN-786</a>: Allow topology providers to set a default SZL</li>
<li><a href="http://issues.opennms.org/browse/HZN-795">HZN-795</a>: Create topology UI icons with basic shapes</li>
<li><a href="http://issues.opennms.org/browse/HZN-802">HZN-802</a>: Add monitoring system ID to the SyslogConnection messages</li>
<li><a href="http://issues.opennms.org/browse/NMS-7578">NMS-7578</a>: Provided graph definitions are mixing aggregation function leading to wrong min / max totals</li>
<li><a href="http://issues.opennms.org/browse/NMS-7638">NMS-7638</a>: Make node aggregation &#8216;maxClusterRadius&#8217; in Geographical Map configurable</li>
<li><a href="http://issues.opennms.org/browse/NMS-7854">NMS-7854</a>: Translated events with a new UEI do not receive the description, severity and alarm-data of the new event if new UEI&#8217;s eventconf is present after original UEI&#8217;s eventconf</li>
<li><a href="http://issues.opennms.org/browse/NMS-8016">NMS-8016</a>: output.log fills up with GLib-GObject-CRITICAL messages</li>
<li><a href="http://issues.opennms.org/browse/NMS-8027">NMS-8027</a>: Issues with data collection config for Cisco devices</li>
<li><a href="http://issues.opennms.org/browse/NMS-8034">NMS-8034</a>: Adding com.sun.management.jmxremote.authenticate=true on opennms.conf is ignored by the opennms script</li>
<li><a href="http://issues.opennms.org/browse/NMS-8040">NMS-8040</a>: Remotepoller shell script searching remote-poller.jar at wrong location</li>
<li><a href="http://issues.opennms.org/browse/NMS-8049">NMS-8049</a>: Documentation for Cassandra/Newts doesn&#8217;t mention that a JDK is required</li>
<li><a href="http://issues.opennms.org/browse/NMS-8127">NMS-8127</a>: Node rescans possible in WebUI with ROLE_USER</li>
<li><a href="http://issues.opennms.org/browse/NMS-8174">NMS-8174</a>: Add PaloAlto Firewall Datacollection</li>
<li><a href="http://issues.opennms.org/browse/NMS-8193">NMS-8193</a>: Requisition UI fails behind HTTPS proxy</li>
<li><a href="http://issues.opennms.org/browse/NMS-8372">NMS-8372</a>: Totals based on {diffTime} on any graph templates related with octets are wrong</li>
<li><a href="http://issues.opennms.org/browse/NMS-8477">NMS-8477</a>: NRT graph interval should default to > 1s</li>
<li><a href="http://issues.opennms.org/browse/NMS-8484">NMS-8484</a>: Add custom string attributes based on indirect and complex SNMP Indices</li>
<li><a href="http://issues.opennms.org/browse/NMS-8485">NMS-8485</a>: Isolate Smoke Tests</li>
<li><a href="http://issues.opennms.org/browse/NMS-8486">NMS-8486</a>: Port Minion System Tests to the Smoke Test Suite</li>
</ul>
