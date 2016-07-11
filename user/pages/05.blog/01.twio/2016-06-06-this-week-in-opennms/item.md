---
title: This Week in OpenNMS: June 6th, 2016
date: 15:12 06/06/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, bsm, dev-jam, docker, manageiq, manageiq summit, minion, newts, ouce, provisiond, smoke tests, syslog, texas linux fest, topology maps, training, twio, txlf]
---

<p>In the last week we worked on Minion, Newts, Topology Maps and BSM, Provisiond, and smoke tests.  Next week we&#8217;ll work on resuscitating Jeff after his grueling speaker schedule.  ;)</p>
<h4>Github Project Updates</h4>
<ul>
<li>
<h5>Minion</h5>
<p>Seth did more work on the syslog minion integration.</p>
</li>
<li>
<h5>Newts</h5>
<p>Jesse updated the Newts integration to use Newts 1.4, which adds improvements to search and indexing.</p>
</li>
<li>
<h5>Topology Maps and Business Service Monitor</h5>
<p>Markus, Dustin, and Jesse have also continued to work on <a href="https://www.opennms.org/wiki/DevProjects/Atlas">Project Atlas</a>, with the goal of improving navigation through support of topology layers, and support for moving node map functionality to the topology UI.</p>
</li>
<li>
<h5>Provisiond Cleanups</h5>
<p>Seth has been spending some time taking care of some technical debt in Provisiond.  Provisiond was written before newer task and execution management APIs went into Java, and can be vastly simplified with some refactoring.</p>
</li>
<li>
<h5>Bamboo Updates</h5>
<p>I&#8217;ve been spending more time on our smoke test infrastructure, porting Jesse&#8217;s Minion System Tests to be a more generic test framework for spawning tests to run against a dockerized OpenNMS install.</p>
</li>
</ul>
<h4>Upcoming Events and Appearances</h4>
<ul>
<li>
<h5><a href="http://manageiq.org/summit/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://manageiq.org/summit/', 'Jeff Speaking at ManageIQ Summit, June 7th, 2016']);" >Jeff Speaking at ManageIQ Summit, June 7th, 2016</a></h5>
<p>Jeff will be speaking tomorrow at <a href="OpenNMS as complement to ManageIQ">ManageIQ Summit</a> on the topic of OpenNMS as complement to ManageIQ.</p>
</li>
<li>
<h5><a href="http://2016.texaslinuxfest.org/node/25" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://2016.texaslinuxfest.org/node/25', 'Jeff Speaking at Texas LinuxFest, June 8th or 9th, 2016']);" >Jeff Speaking at Texas LinuxFest, June 8th or 9th, 2016</a></h5>
<p>The schedule isn&#8217;t set yet, but Jeff will be <a href="http://2016.texaslinuxfest.org/node/25" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://2016.texaslinuxfest.org/node/25', 'speaking at Texas LinuxFest']);" >speaking at Texas LinuxFest</a> on the topic of OpenDaylight and managing software-defined networks.</p>
</li>
<li>
<h5><a href="http://www.southeastlinuxfest.org/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.southeastlinuxfest.org/', 'Jeff Speaking at SouthEast LinuxFest, June 12th, 2016']);" >Jeff Speaking at SouthEast LinuxFest, June 12th, 2016</a></h5>
<p>Jeff will be <a href="http://www.southeastlinuxfest.org/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.southeastlinuxfest.org/', 'speaking at SouthEast LinuxFest']);" >speaking at SouthEast LinuxFest</a> on Sunday on the topic of OpenDaylight and managing software-defined networks.</p>
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
<li><a href="http://issues.opennms.org/browse/HZN-738">HZN-738</a>: Minionize the SnmpWalker</li>
<li><a href="http://issues.opennms.org/browse/HZN-788">HZN-788</a>: Enhance the GraphMLSearchProvider to search all layers</li>
<li><a href="http://issues.opennms.org/browse/NEWTS-102">NEWTS-102</a>: Enhance the stress tool to support search/indexing</li>
<li><a href="http://issues.opennms.org/browse/NMS-8455">NMS-8455</a>: Implement a Datasource Factory based on Hikari CP</li>
<li><a href="http://issues.opennms.org/browse/NMS-8472">NMS-8472</a>: Cannot add custom icon key mapping files</li>
<li><a href="http://issues.opennms.org/browse/NMS-8479">NMS-8479</a>: Issues with AIX graph definitions</li>
<li><a href="http://issues.opennms.org/browse/NMS-8480">NMS-8480</a>: PostgreSQL driver&#8217;s OSGi bundle activator deregisters the driver</li>
</ul>
