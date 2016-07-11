---
title: This Week in OpenNMS: May 9th, 2016
date: 16:02 05/09/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, bsm, bug fixes, compass, dev-jam, opennms compass, opennms horizon, osgi, topology maps, training]
---

     <p>In the last week we worked on Topology Maps, BSM, Minion, Compass, and bug fixing.</p>
<h4>Github Project Updates</h4>
<ul>
<li>
<h5>Topology Maps and Business Service Monitor</h5>
<p>Markus has been working on creating a topology provider that can read GraphML files for positioning.  Jesse also finished up his work on the topology performance improvements and worked a lot on creating detailed smoke tests for the BSM functionality in the topology maps.  Christian also did some other cleanup relating to loading in OSGi.</p>
</li>
<li>
<h5>Minion</h5>
<p>Seth has been working on finalizing the syslog and trap support for Minion.</p>
</li>
<li>
<h5>Compass</h5>
<p>I wrapped up the last of the blockers for Compass and it&#8217;s looking ready to go.  If you&#8217;d like to help beta test Compass, see <a href="https://compass.opennms.io/#beta" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://compass.opennms.io/#beta', 'the Compass web site']);" >the Compass web site</a>.</p>
</li>
<li>
<h5>Bug Fixes</h5>
<p>More small bug fixes went in to prep for Horizon 18, which is coming out today.</p>
</li>
</ul>
<h4>OpenNMS Horizon 18 Released</h4>
<p>OpenNMS Horizon 18 (Codename: <a href="https://en.wikipedia.org/wiki/Tardigrade" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://en.wikipedia.org/wiki/Tardigrade', 'Tardigrade']);" >Tardigrade</a>) is now available.  For a high-level overview of what is new in Horizon 18, see the <a href="http://docs.opennms.org/opennms/releases/18.0.0/releasenotes/releasenotes.html#releasenotes-18">What&#8217;s New in OpenNMS Horizon 18</a> portion of the documentation.</p>
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
<li><a href="http://issues.opennms.org/browse/HZN-568">HZN-568</a>: Integrate Syslogd into the Minion RPM build</li>
<li><a href="http://issues.opennms.org/browse/HZN-714">HZN-714</a>: Cannot graph CPU &#038; Memory utilization of ASR 9k</li>
<li><a href="http://issues.opennms.org/browse/HZN-720">HZN-720</a>: Provide a single &#8220;queuingservice&#8221; component that can be used to reach the broker</li>
<li><a href="http://issues.opennms.org/browse/HZN-728">HZN-728</a>: Convert the provided csv file to a valid graphml representation</li>
<li><a href="http://issues.opennms.org/browse/HZN-730">HZN-730</a>: Create a Topology Provider to read GraphML files</li>
<li><a href="http://issues.opennms.org/browse/HZN-732">HZN-732</a>: Provide infrastructure to write smoke-tests for the topology ui</li>
<li><a href="http://issues.opennms.org/browse/HZN-735">HZN-735</a>: Add a SearchProvider for the GraphMLTopologyProvider</li>
<li><a href="http://issues.opennms.org/browse/NMS-2369">NMS-2369</a>: OutageModel &#8211; does not consider Categories</li>
<li><a href="http://issues.opennms.org/browse/NMS-2473">NMS-2473</a>: reload for the background image</li>
<li><a href="http://issues.opennms.org/browse/NMS-3295">NMS-3295</a>: High network load when displaying map</li>
<li><a href="http://issues.opennms.org/browse/NMS-4306">NMS-4306</a>: Topo map error popup: Load Label Map failed</li>
<li><a href="http://issues.opennms.org/browse/NMS-4806">NMS-4806</a>: Pop-up Window has Scroll Bars on Remote Poller Map</li>
<li><a href="http://issues.opennms.org/browse/NMS-5821">NMS-5821</a>: Remove the file menubar, convert menu options to context menu options</li>
<li><a href="http://issues.opennms.org/browse/NMS-7525">NMS-7525</a>: ArrayOutOfBounds Exception in Topology Map when selecting bridge-port</li>
<li><a href="http://issues.opennms.org/browse/NMS-7846">NMS-7846</a>: Slow LinkdTopologyProvider/EnhancedLinkdTopologyProvider in bigger enviroments</li>
<li><a href="http://issues.opennms.org/browse/NMS-8076">NMS-8076</a>: Allow user to access local documentation from OpenNMS Jetty Webapp</li>
<li><a href="http://issues.opennms.org/browse/NMS-8167">NMS-8167</a>: Cannot search by MAC address</li>
<li><a href="http://issues.opennms.org/browse/NMS-8366">NMS-8366</a>: OpenNMS Incompatible with Debian Stretch and Ubuntu 16.04</li>
<li><a href="http://issues.opennms.org/browse/NMS-8383">NMS-8383</a>: jmxconfiggenerator feature has unnecessary includes</li>
<li><a href="http://issues.opennms.org/browse/NMS-8385">NMS-8385</a>: Release.gpg file uses weak digest SHA-1</li>
<li><a href="http://issues.opennms.org/browse/NMS-8386">NMS-8386</a>: Requisitioning UI fails to load in modern browsers if used behind a proxy</li>
<li><a href="http://issues.opennms.org/browse/NMS-8388">NMS-8388</a>: Document resources ReST service</li>
<li><a href="http://issues.opennms.org/browse/NMS-8394">NMS-8394</a>: NoSuchElement exception when loading the TopologyUI</li>
<li><a href="http://issues.opennms.org/browse/NMS-8395">NMS-8395</a>: Logging improvements to Notifd</li>
<li><a href="http://issues.opennms.org/browse/NMS-8401">NMS-8401</a>: There are errors on the graph definitions for OpenNMS JMX statistics</li>
</ul>
