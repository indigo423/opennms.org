---
title: This Week in OpenNMS: April 18th, 2016
date: 13:42 04/18/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, bsm, compass, data collection, dev-jam, discovery, events, general assembly, metrics, opennms compass, opennms foundation europe, osgi, persistence, topology maps, training, trouble ticketing, tsrm]
---

<p>In the last week we worked on BSM, topology maps, events and data collection, TSRM ticketing, discovery, metrics persisting, the OSGi plugin manager, Compass, and bug fixing.</p>
<h4>Github Project Updates</h4>
<ul>
<li>
<h5>Business Service Monitor and Topology Maps</h5>
<p>This week was mostly a continuation of the wrapup of BSM for Horizon 18 &#8212; mostly bug fixes and UI work in topology maps.  Antonio has also been working on cleaning up the Enhanced Linkd topology provider for the topology maps to make it conform to the major refactor he did in Enlinkd over the last few months.</p>
</li>
<li>
<h5>Events and Data Collection</h5>
<p>
      Marcel and Ronny added new events and/or graphs for SMSEagle and APC devices.
    </p>
</li>
<li>
<h5>TSRM Ticketing Plugin</h5>
<p>Chandra did more work on the ticketing plugin for IBM&#8217;s TSRM.</p>
</li>
<li>
<h5>Discovery</h5>
<p>
      Seth did more work on his discovery refactor using Camel.  It now supports everything that the old discovery daemon as well as adding support for triggering discovery manually with a customizable rate.
    </p>
</li>
<li>
<h5>Metrics Persisting</h5>
<p>
      Alejandro has been doing a number of fixes to metric persisting as well as providing more data for troubleshooting persistence issues.
    </p>
</li>
<li>
<h5>OSGi Plugin Manager</h5>
<p>Craig fixed the build integration issues in the OSGi plugin manager and improved the documentation.  This should be merged for inclusion in Horizon 18 soon.</p>
</li>
<li>
<h5>Compass</h5>
<p>Compass 2.1.0 betas are progressing with a number of fixes and small improvements.  There is still a nagging crash issue that I am working to resolve before final release.  If you&#8217;d like to help beta test, see <a href="https://compass.opennms.io/#beta" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://compass.opennms.io/#beta', 'the Compass web site']);" >the Compass web site</a>.</p>
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
<h5><a href="http://permalink.gmane.org/gmane.network.opennms.general/52706" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://permalink.gmane.org/gmane.network.opennms.general/52706', 'OpenNMS Foundation Europe General Assembly &#8211; April 22nd, 2016']);" >OpenNMS Foundation Europe General Assembly &#8211; April 22nd, 2016</a></h5>
<p>
      The OpenNMS Foundation Europe is having its General Assembly meeting on April 22nd, 2016.  For details on the agenda and contact information, see <a href="http://permalink.gmane.org/gmane.network.opennms.general/52706" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://permalink.gmane.org/gmane.network.opennms.general/52706', 'this post on the OpenNMS discuss mailing list']);" >this post on the OpenNMS discuss mailing list</a>.
    </p>
</li>
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
<li><a href="http://issues.opennms.org/browse/COMPASS-69">COMPASS-69</a>: Geolocation map is just a grey image</li>
<li><a href="http://issues.opennms.org/browse/COMPASS-70">COMPASS-70</a>: Some UEIs Convert Badly</li>
<li><a href="http://issues.opennms.org/browse/HZN-498">HZN-498</a>: Create a discovery UI for ad hoc discovery job submission</li>
<li><a href="http://issues.opennms.org/browse/HZN-588">HZN-588</a>: Add support for DiscoveryConfigFactory.getIntraPacketDelay() to the Camel Discovery code</li>
<li><a href="http://issues.opennms.org/browse/HZN-628">HZN-628</a>: Discovery tasks timeout after 20000ms</li>
<li><a href="http://issues.opennms.org/browse/HZN-638">HZN-638</a>: Provide new set of icons for the EnhancedLinkd Topology</li>
<li><a href="http://issues.opennms.org/browse/HZN-659">HZN-659</a>: Add size() to org.opennms.netmgt.model.discovery.IPAddrRange</li>
<li><a href="http://issues.opennms.org/browse/HZN-660">HZN-660</a>: Add Minion Karaf features and integration tests</li>
<li><a href="http://issues.opennms.org/browse/HZN-661">HZN-661</a>: Change TrapdListenerBlueprintIT so that it overrides the default trap port</li>
<li><a href="http://issues.opennms.org/browse/HZN-704">HZN-704</a>: Change DiscoveryTaskExecutorCamelImpl endpoint from direct: to seda:</li>
<li><a href="http://issues.opennms.org/browse/HZN-708">HZN-708</a>: BSM Admin UI Enhancements</li>
<li><a href="http://issues.opennms.org/browse/NEWTS-71">NEWTS-71</a>: Rest search returns SearchResults.isEmpty()</li>
<li><a href="http://issues.opennms.org/browse/NEWTS-80">NEWTS-80</a>: Karaf feature files are broken</li>
<li><a href="http://issues.opennms.org/browse/NEWTS-85">NEWTS-85</a>: Upgrade cassandra-unit to 3.0.0.1</li>
<li><a href="http://issues.opennms.org/browse/NMS-2504">NMS-2504</a>: Create a better landing page for Configure Discovery aftermath Seth Leger</li>
<li><a href="http://issues.opennms.org/browse/NMS-6344">NMS-6344</a>: provision.pl does not import requisitions with spaces in the name Alejandro Galue</li>
<li><a href="http://issues.opennms.org/browse/NMS-6549">NMS-6549</a>: Eventd does not honor reloadDaemonConfig event Jeff Gehlbach</li>
<li><a href="http://issues.opennms.org/browse/NMS-8086">NMS-8086</a>: Provisioning Requisitions with spaces in their name.  Alejandro Galue</li>
<li><a href="http://issues.opennms.org/browse/NMS-8125">NMS-8125</a>: Memory leak when using Groovy + BSF Jesse White</li>
<li><a href="http://issues.opennms.org/browse/NMS-8128">NMS-8128</a>: NPE if provisioning requisition name has spaces Alejandro Galue</li>
<li><a href="http://issues.opennms.org/browse/NMS-8216">NMS-8216</a>: Discovery config screen problems in latest code Seth Leger</li>
<li><a href="http://issues.opennms.org/browse/NMS-8221">NMS-8221</a>: Operation &#8220;Refresh Now&#8221; and &#8220;Automatic Refresh&#8221; referesh the UI differently Dustin Frisch</li>
<li><a href="http://issues.opennms.org/browse/NMS-8238">NMS-8238</a>: Topology providers should provide a description for display Christian Pape</li>
<li><a href="http://issues.opennms.org/browse/NMS-8240">NMS-8240</a>: Requisition synchronization is failing due to space in requisition name Alejandro Galue</li>
<li><a href="http://issues.opennms.org/browse/NMS-8248">NMS-8248</a>: Many Rcsript (RScript) files in OPENNMS_DATA/tmp Jesse White</li>
<li><a href="http://issues.opennms.org/browse/NMS-8273">NMS-8273</a>: %post error when Minion host.key already exists Jesse White</li>
<li><a href="http://issues.opennms.org/browse/NMS-8277">NMS-8277</a>: %post failure in opennms-minion-features-core: sed not found Jesse White</li>
<li><a href="http://issues.opennms.org/browse/NMS-8293">NMS-8293</a>: Config Tester Tool doesn&#8217;t check some of the core configuration files Alejandro Galue</li>
<li><a href="http://issues.opennms.org/browse/NMS-8296">NMS-8296</a>: Be able to re-order the policies on a requisition through the UI Alejandro Galue</li>
<li><a href="http://issues.opennms.org/browse/NMS-8299">NMS-8299</a>: Topology UI recenters even if Manual Layout is selected Markus von Rüden</li>
<li><a href="http://issues.opennms.org/browse/NMS-8300">NMS-8300</a>: Center on Selection no longer works in STUI Markus von Rüden</li>
<li><a href="http://issues.opennms.org/browse/NMS-8301">NMS-8301</a>: v2 Rest Services are deployed twice to the WEB-INF/lib directory Markus von Rüden</li>
<li><a href="http://issues.opennms.org/browse/NMS-8302">NMS-8302</a>: Json deserialization throws &#8220;unknown property&#8221; exception due to usage of wrong Jax-rs Provider Jesse White</li>
<li><a href="http://issues.opennms.org/browse/NMS-8304">NMS-8304</a>: An error on threshd-configuration.xml breaks Collectd when reloading thresholds configuration Alejandro Galue</li>
<li><a href="http://issues.opennms.org/browse/NMS-8313">NMS-8313</a>: Pan moving in Topology UI automatically recenters Markus von Rüden</li>
<li><a href="http://issues.opennms.org/browse/NMS-8314">NMS-8314</a>: Weird zoom behavior in Topology UI using mouse wheel Markus von Rüden</li>
<li><a href="http://issues.opennms.org/browse/NMS-8324">NMS-8324</a>: Friendly name of an IP service is never shown in BSM Dustin Frisch</li>
<li><a href="http://issues.opennms.org/browse/NMS-8335">NMS-8335</a>: Focal points are no longer persisted</li>
</ul>
