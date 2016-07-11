---
title: This Week in OpenNMS: May 16th, 2016
date: 11:34 05/16/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, atlas, bsm, compass, dev-jam, documentation, minion, opennms compass, snmp, syslog, topology maps, training, traps, tsrm, vaadin]
---

<p>In the last week we worked on topology maps, BSM, documentation, SNMP, Minion, TSRM ticketing, the Grafana datasource and Compass.</p>
<h4>Github Project Updates</h4>
<ul>
<li>
<h5>Topology Maps and Business Service Monitor</h5>
<p>Markus has been doing work on upgrading our Vaadin to the latest version, which involves handling a number of breaking changes in more recent Vaadin 7 releases. Markus and Dustin have also continued to work on <a href="https://www.opennms.org/wiki/DevProjects/Atlas">Project Atlas</a>, with the goal of improving navigation through support of topology layers, and support for moving node map functionality to the topology UI.</p>
</li>
<li>
<h5>Documentation</h5>
<p>Ronny added information on alarm notes to the documentation.</p>
</li>
<li>
<h5>SNMP Infrastructure Improvements</h5>
<p>Jesse has been working on improvements to our SNMP APIs to handle asynchronous requests in a better way.</p>
</li>
<li>
<h5>Minion</h5>
<p>Seth and I have been working on the Minion codebase, with various cleanups to the syslog and trap integrations, and a refactor of the OpenNMS model code to be able to associate locations with nodes.</p>
</li>
<li>
<h5>TSRM</h5>
<p>Chandra has been doing a few fixes and modifications to the TSRM ticketing plugin.</p>
</li>
<li>
<h5>Grafana Plugin</h5>
<p>Jesse fixed <a href="https://github.com/OpenNMS/grafana-opennms-datasource/issues/2" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://github.com/OpenNMS/grafana-opennms-datasource/issues/2', 'a break in the OpenNMS Grafana datasource plugin']);" >a break in the OpenNMS Grafana datasource plugin</a> caused by a change in Grafana 3.0 since the betas.  You can upgrade to the latest version by running: &#8220;<code>sudo grafana-cli plugins install opennms-datasource</code>&#8220;.
</p>
</li>
</ul>
<h4>OpenNMS Compass 3 Released</h4>
<p>On the heels of Horizon, the Compass OpenNMS mobile app has released a new major version.  It was originally going to be versioned 2.1 but enough new features have been added that it was decided to bump the version to 3.  For a list of changes, see &#8220;New in Compass 3&#8221; <a href="https://compass.opennms.io/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://compass.opennms.io/', 'the OpenNMS Compass web site']);" >the OpenNMS Compass web site</a>.</p>
<h4>Upcoming Events and Appearances</h4>
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
<li><a href="http://issues.opennms.org/browse/COMPASS-73">COMPASS-73</a>: Don&#8217;t show cache on refresh when an error is set</li>
<li><a href="http://issues.opennms.org/browse/HZN-544">HZN-544</a>: Add jmx-datacollection-config.d/ for defining custom JMX datacollection definitions</li>
<li><a href="http://issues.opennms.org/browse/HZN-644">HZN-644</a>: Integrate Trapd into the Minion RPM build</li>
<li><a href="http://issues.opennms.org/browse/HZN-701">HZN-701</a>: Use FontAwesome Icon definitions from Vaadin libarary instead of shipping our own</li>
<li><a href="http://issues.opennms.org/browse/HZN-729">HZN-729</a>: Prototype InfoPanelItem with generic information from an imported GraphML graph</li>
<li><a href="http://issues.opennms.org/browse/HZN-731">HZN-731</a>: Add possibility to link between Topology Layers and select them</li>
<li><a href="http://issues.opennms.org/browse/HZN-737">HZN-737</a>: Implement a more friendly toolbar in the topology map</li>
<li><a href="http://issues.opennms.org/browse/HZN-745">HZN-745</a>: HZN-738 Add support for asynchronous SNMP requests in SnmpUtils</li>
<li><a href="http://issues.opennms.org/browse/HZN-746">HZN-746</a>: HZN-738 Marshal/Unmarshal SnmpResult objects to/from XML</li>
<li><a href="http://issues.opennms.org/browse/HZN-751">HZN-751</a>: Allow to use the Measurement API to query for values in templates</li>
<li><a href="http://issues.opennms.org/browse/HZN-759">HZN-759</a>: Switching to a layer which defines a non existing preferredLayout throws NPE</li>
<li><a href="http://issues.opennms.org/browse/NMS-8078">NMS-8078</a>: Updated to APC PowerNet MIB 4.1.6 events</li>
<li><a href="http://issues.opennms.org/browse/NMS-8382">NMS-8382</a>: Migrate Alarm Notes documentation to official docs</li>
<li><a href="http://issues.opennms.org/browse/NMS-8403">NMS-8403</a>: Document styles of identifying nodes in resource IDs</li>
<li><a href="http://issues.opennms.org/browse/NMS-8413">NMS-8413</a>: ConcurrentModificationException in DefaultEventHandlerImpl</li>
<li><a href="http://issues.opennms.org/browse/NMS-8415">NMS-8415</a>: Can&#8217;t add a metric in Grafana 3.0</li>
<li><a href="http://issues.opennms.org/browse/NMS-8416">NMS-8416</a>: Karaf log level is DEBUG in stable</li>
<li><a href="http://issues.opennms.org/browse/NMS-8419">NMS-8419</a>: IBM TSRM integration throws &#8220;requires a field Ticket class&#8221; exception</li>
</ul>
