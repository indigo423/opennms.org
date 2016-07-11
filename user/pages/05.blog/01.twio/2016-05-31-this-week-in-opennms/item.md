---
title: This Week in OpenNMS: May 31st, 2016
date: 15:21 05/31/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, bamboo, bsm, database, dev-jam, minion, topology maps, training]
---

<p>In the last week we worked on Minion, the database backend, topology maps and BSM, and Bamboo.</p>
<h4>Github Project Updates</h4>
<ul>
<li>
<h5>Minion</h5>
<p>Chandra has continued working on improving the minion code that communicates with OpenNMS.  Jesse has been working on supporting location-aware SNMP requests that can transparently proxy to remote minion systems.  Seth has been working on evaluating and updating the syslog branch including improving throughput of syslog messages from Minions.</p>
</li>
<li>
<h5>Database Access</h5>
<p>Alejandro and I did some work on updating database code (JDBC drivers and C3P0 pooling).  We have also introduced a new alternative pool library, <a href="https://github.com/brettwooldridge/HikariCP" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://github.com/brettwooldridge/HikariCP', 'HikariCP']);" >HikariCP</a>, which promises much better database performance.</p>
</li>
<li>
<h5>Topology Maps and Business Service Monitor</h5>
<p>Markus, Dustin, and Jesse have also continued to work on <a href="https://www.opennms.org/wiki/DevProjects/Atlas">Project Atlas</a>, with the goal of improving navigation through support of topology layers, and support for moving node map functionality to the topology UI.</p>
</li>
<li>
<h5>Bamboo Updates</h5>
<p>I&#8217;ve been spending more time on our smoke test infrastructure, porting Jesse&#8217;s Minion System Tests to be a more generic test framework for spawning tests to run against a dockerized OpenNMS install.</p>
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
<li><a href="http://issues.opennms.org/browse/HZN-655">HZN-655</a>: Add a Camel context to applicationContext-pollerd.xml to route monitor calls</li>
<li><a href="http://issues.opennms.org/browse/HZN-656">HZN-656</a>: Create a Minion blueprint.xml for features/poller/monitors/core</li>
<li><a href="http://issues.opennms.org/browse/HZN-658">HZN-658</a>: Integrate opennms-poller-monitors-core into the Minion RPM build</li>
<li><a href="http://issues.opennms.org/browse/HZN-707">HZN-707</a>: IBM TSRM ticket creation gives &#8220;exceeds the maximum field length exception&#8221;</li>
<li><a href="http://issues.opennms.org/browse/HZN-719">HZN-719</a>: Allow administatrors to know which Minions are currently active</li>
<li><a href="http://issues.opennms.org/browse/HZN-736">HZN-736</a>: Prevent the user to change the icon from the Topology UI when a GraphML Topology Provider is selected</li>
<li><a href="http://issues.opennms.org/browse/HZN-754">HZN-754</a>: Generalize the GenericInfoPanelItem</li>
<li><a href="http://issues.opennms.org/browse/HZN-760">HZN-760</a>: Write smoke tests for the GraphML topology provider</li>
<li><a href="http://issues.opennms.org/browse/HZN-769">HZN-769</a>: Recommend Cassandra 3.0.x instead of 2.1.x</li>
<li><a href="http://issues.opennms.org/browse/HZN-785">HZN-785</a>: Navigating to the &#8220;regions&#8221; layer should show all of the regions by default</li>
<li><a href="http://issues.opennms.org/browse/HZN-798">HZN-798</a>: Fix problems in MonitoredServiceTask.calculateTaskTimeout()</li>
<li><a href="http://issues.opennms.org/browse/NMS-6331">NMS-6331</a>: When using storeByFS a provisioning group cannot contain whitespace</li>
<li><a href="http://issues.opennms.org/browse/NMS-8400">NMS-8400</a>: Classloader issues with queuingservice</li>
<li><a href="http://issues.opennms.org/browse/NMS-8432">NMS-8432</a>: GraphMLMetaTopologyFactory does not cleanup properly when &#8220;unregistering&#8221;</li>
<li><a href="http://issues.opennms.org/browse/NMS-8438">NMS-8438</a>: Upgrade PostgreSQL Driver and C3P0</li>
<li><a href="http://issues.opennms.org/browse/NMS-8448">NMS-8448</a>: Forecast metrics using Backshift</li>
<li><a href="http://issues.opennms.org/browse/NMS-8450">NMS-8450</a>: Topology redirects to localhost (127.0.0.1)</li>
</ul>
