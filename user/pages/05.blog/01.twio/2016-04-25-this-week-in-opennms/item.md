---
title: This Week in OpenNMS: April 25th, 2016
date: 15:41 04/25/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, bsm, compass, grafana, mattermost, opennms compass, opennms horizon, slack, topology maps, tsrm]
---

<p>In the last week we worked on BSM, topology maps, the TSRM ticketing plugin, Slack and Mattermost notifications, Grafana, Compass, and Horizon 18 bug fixes.</p>
<h4>Github Project Updates</h4>
<ul>
<li>
<h5>Business Service Monitor and Topology Maps</h5>
<p>This week was Jesse, Ronny, and Markus continued their work on wrapping up BSM for Horizon 18, with topology UI cleanups, documentation, and more bug squashing.  Antonio&#8217;s fixes to the Enlinkd topology provider have also been merged into Foundation 2016 as of this morning.</p>
</li>
<li>
<h5>TSRM Ticketing Plugin</h5>
<p>Chandra&#8217;s IBM TSRM plugin works an this week he has been working on adding support for more field mappings between OpenNMS ticketing and TSRM.</p>
</li>
<li>
<h5>Slack and Mattermost Notification Plugins</h5>
<p>Jeff added support for <a href="https://slack.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://slack.com/', 'Slack']);" >Slack</a> and <a href="http://www.mattermost.org/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.mattermost.org/', 'Mattermost']);" >Mattermost</a> as notification targets.  Additionally, the Mattermost plugin uses Mattermost&#8217;s enhanced markdown support for formatting.</p>
</li>
<li>
<h5>Grafana 3.0 Plugin</h5>
<p>Jesse re-engineered the <a href="https://www.opennms.org/wiki/Grafana">OpenNMS Grafana plugin</a> for Grafana 3.0.  It is now available directly from the <a href="https://grafana.net/plugins/opennms-datasource" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://grafana.net/plugins/opennms-datasource', 'Grafana plugin marketplace']);" >Grafana plugin marketplace</a> so it no longer requires installing extra packages.</p>
</li>
<li>
<h5>Compass</h5>
<p>Compass 2.1.0 betas are progressing with a number of fixes and small improvements.  The memory-usage crash has been squashed, and there are just a few more small things to tweak before I release it.  If you&#8217;d like to help beta test, see <a href="https://compass.opennms.io/#beta" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://compass.opennms.io/#beta', 'the Compass web site']);" >the Compass web site</a>.</p>
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
<li><a href="http://issues.opennms.org/browse/HZN-645">HZN-645</a>: IBM TSRM Ticketing Plugin</li>
<li><a href="http://issues.opennms.org/browse/HZN-649">HZN-649</a>: Load features/poller/monitors/core as an OSGi bundle</li>
<li><a href="http://issues.opennms.org/browse/HZN-651">HZN-651</a>: Prototype Atlas Topology Provider</li>
<li><a href="http://issues.opennms.org/browse/HZN-652">HZN-652</a>: Refactor ServiceMonitorLocator to use onmsgi to look up ServiceMonitors</li>
<li><a href="http://issues.opennms.org/browse/HZN-662">HZN-662</a>: Create an OSGI-INF blueprint to expose ServiceMonitors as OSGi services</li>
<li><a href="http://issues.opennms.org/browse/HZN-666">HZN-666</a>: Generate alarms for business services</li>
<li><a href="http://issues.opennms.org/browse/HZN-703">HZN-703</a>: Change blueprint-trapd-handler-minion.xml to use Minion ActiveMQ Component</li>
<li><a href="http://issues.opennms.org/browse/HZN-710">HZN-710</a>: The Threshold Function should be explained</li>
<li><a href="http://issues.opennms.org/browse/HZN-711">HZN-711</a>: Highest severity above is inclusive</li>
<li><a href="http://issues.opennms.org/browse/HZN-713">HZN-713</a>: Root cause and impact analysis should also show the entire map</li>
<li><a href="http://issues.opennms.org/browse/NMS-6521">NMS-6521</a>: PageSequenceMonitor fails to unmarshal configuration</li>
<li><a href="http://issues.opennms.org/browse/NMS-7792">NMS-7792</a>: NPE in JmxRrdMigratorOffline</li>
<li><a href="http://issues.opennms.org/browse/NMS-7854">NMS-7854</a>: Translated events with a new UEI do not receive the description, severity and alarm-data of the new event if new UEI&#8217;s eventconf is present after original UEI&#8217;s eventconf</li>
<li><a href="http://issues.opennms.org/browse/NMS-7872">NMS-7872</a>: 303 See Other on requisitions response breaks the usage of the Requisitions ReST API</li>
<li><a href="http://issues.opennms.org/browse/NMS-7922">NMS-7922</a>: Null pointer exceptions with whitespace in requisition name</li>
<li><a href="http://issues.opennms.org/browse/NMS-7976">NMS-7976</a>: Merge OSGi Plugin Manager into Admin UI</li>
<li><a href="http://issues.opennms.org/browse/NMS-8041">NMS-8041</a>: Refactor Enhanced Linkd Topology</li>
<li><a href="http://issues.opennms.org/browse/NMS-8080">NMS-8080</a>: VLAN name is not displayed</li>
<li><a href="http://issues.opennms.org/browse/NMS-8096">NMS-8096</a>: JMX detector connection errors use wrong log level</li>
<li><a href="http://issues.opennms.org/browse/NMS-8098">NMS-8098</a>: PageSequenceMonitor sometimes gives poor failure reasons</li>
<li><a href="http://issues.opennms.org/browse/NMS-8129">NMS-8129</a>: Disallow restricted characters from foreign source and foreign ID</li>
<li><a href="http://issues.opennms.org/browse/NMS-8330">NMS-8330</a>: Switching Topology Providers causes Exception</li>
<li><a href="http://issues.opennms.org/browse/NMS-8334">NMS-8334</a>: Implement org.opennms.timeseries.strategy=evaluate to facilitate the sizing process</li>
<li><a href="http://issues.opennms.org/browse/NMS-8336">NMS-8336</a>: Set the required fields when not specified while adding events through ReST</li>
<li><a href="http://issues.opennms.org/browse/NMS-8337">NMS-8337</a>: Non-existing resources or attributes break JasperReports when using the Measurements API</li>
<li><a href="http://issues.opennms.org/browse/NMS-8346">NMS-8346</a>: Add Mattermost and Slack notification strategies</li>
<li><a href="http://issues.opennms.org/browse/NMS-8349">NMS-8349</a>: Update screenshots with 18 theme in user documentation</li>
<li><a href="http://issues.opennms.org/browse/NMS-8366">NMS-8366</a>: OpenNMS Incompatible with Debian Stretch and Ubuntu 16.04</li>
<li><a href="http://issues.opennms.org/browse/NMS-8371">NMS-8371</a>: The contents of the info panel should refresh when the vertices and edges are refreshed</li>
</ul>
