---
title: This Week in OpenNMS: July 5th, 2016
date: 11:15 07/05/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, bsm, bug fixes, dev-jam, minion, ouce, texas linux fest, tlf, topology maps, training, trouble ticketing, tsrm]
---

<p>In the last week we worked on minion, topology maps, BSM, TSRM ticketing, and other bugfixes.</p>
<h4>Github Project Updates</h4>
<ul>
<li>
<h5>Minion</h5>
<p>Seth did some packaging and bundle fixes in the Minion code.</p>
</li>
<li>
<h5>Topology Maps and Business Service Monitor</h5>
<p>Markus Dustin, and Christian spent more time on custom edge provider support in the topology UI.  Markus also spent some time evaluating performance issues in large data sets.  Dustin also did a bit more work on the custom BSM reduction functions.</p>
</li>
<li>
<h5>TSRM Trouble Ticketing</h5>
<p>Chandra worked on more bug fixes in the TSRM ticketing code.</p>
</li>
<li>
<h5>Code Cleanup and Bugfixes</h5>
<p>Alejandro fixed a couple of bugs in MIB resource handling and the node category admin page.  Seth added support for IS NULL in the search criteria code and fixed the bug where the lon/lat in the locations page could not accept floating-point values.</p>
</li>
</ul>
<h4>Upcoming Events and Appearances</h4>
<ul>
<li>
<h5><a href="http://2016.texaslinuxfest.org/content/schedule" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://2016.texaslinuxfest.org/content/schedule', 'Texas Linux Fest &#8211; July 8th and 9th, 2016']);" >Texas Linux Fest &#8211; July 8th and 9th, 2016</a></h5>
<p>Jeff will be speaking <a href="http://2016.texaslinuxfest.org/content/schedule" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://2016.texaslinuxfest.org/content/schedule', 'on Saturday afternoon at Texas LinuxFest']);" >on Saturday afternoon at Texas LinuxFest</a> about OpenNMS and the evolutionary pressure of software-defined everything. If you&#8217;re in the greater Austin or San Antonio area, come say hello!</p>
</li>
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
<li><a href="http://issues.opennms.org/browse/HZN-793">HZN-793</a>: Support custom edge status</li>
<li><a href="http://issues.opennms.org/browse/HZN-825">HZN-825</a>: Besides nodeID also support foreignSource and foreignId on a GraphMLVertex</li>
<li><a href="http://issues.opennms.org/browse/HZN-826">HZN-826</a>: Implement a VertexStatusProvider for the GraphMLTopologyProvider</li>
<li><a href="http://issues.opennms.org/browse/NMS-3482">NMS-3482</a>: Change jdk to java-devel (or java-sdk) on all rpm dependency</li>
<li><a href="http://issues.opennms.org/browse/NMS-6946">NMS-6946</a>: It is not possible to add another interface to a node if the node already has an interface &#8220;127.0.0.1&#8221;</li>
<li><a href="http://issues.opennms.org/browse/NMS-7869">NMS-7869</a>: New Monitoring Locations Editor only allows integers in the latitude and longitude fields</li>
<li><a href="http://issues.opennms.org/browse/NMS-8206">NMS-8206</a>: Editing scheduled outages overwrites collectd-configuration.xml</li>
<li><a href="http://issues.opennms.org/browse/NMS-8294">NMS-8294</a>: Expose the complete OnmsNode object in Scriptd to avoid LazyInitializationExceptions</li>
<li><a href="http://issues.opennms.org/browse/NMS-8416">NMS-8416</a>: Karaf log level is DEBUG in stable</li>
<li><a href="http://issues.opennms.org/browse/NMS-8488">NMS-8488</a>: JdbcCollector does not close database connections correctly</li>
<li><a href="http://issues.opennms.org/browse/NMS-8495">NMS-8495</a>: Improve built-in Newts graphs for easier diagnostics</li>
<li><a href="http://issues.opennms.org/browse/NMS-8501">NMS-8501</a>: Cancel dialog is slow and Topology Map crashes if vertex has many edges (20+)</li>
<li><a href="http://issues.opennms.org/browse/NMS-8506">NMS-8506</a>: HW ENTITY_MIB plugin is not showing all information for certain devices</li>
<li><a href="http://issues.opennms.org/browse/NMS-8519">NMS-8519</a>: OEM graph for Storage Utilization fails due to &#8216;::&#8217;</li>
<li><a href="http://issues.opennms.org/browse/NMS-8523">NMS-8523</a>: OpenNMS:Name=Eventd Failure</li>
<li><a href="http://issues.opennms.org/browse/NMS-8526">NMS-8526</a>: Minion RPM regenerates UUID during each installation</li>
<li><a href="http://issues.opennms.org/browse/NMS-8535">NMS-8535</a>: Alphabetize nodes in surveillance category listing</li>
</ul>
