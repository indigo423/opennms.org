---
title: This Week in OpenNMS: June 27th, 2016
date: 11:24 06/27/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, bsm, drools, eventd, jms, meridian 2016, minion, opennms meridian, opennms meridian 2016, opennms.org, scriptd, topology maps, tsrm, wiki]
---

<p>In the last week we worked on topology maps and BSM, Drools and TSRM trouble ticketing, code cleanup, Minion, and the Meridian 2016 release.</p>
<h4>Github Project Updates</h4>
<ul>
<li>
<h5>Minion</h5>
<p>Seth did some more fixes to the way JMS queues are managed from the Minion.  Chandra has continued working on making detectors run remotely in the Minion container.</p>
</li>
<li>
<h5>Topology Maps and Business Service Monitor</h5>
<p>Markus did more work on cleaning up the GraphML provider for topology maps, as well as some bug fixing related to multiple topology providers being loaded at one time.  Dustin worked on the custom edge status provider for BSM some more.</p>
</li>
<li>
<h5>Drools and TSRM Trouble Ticketing</h5>
<p>Markus, Chandra, and Ronny did some work on fixing bugs in the Drools and TSRM ticketing layers.</p>
</li>
<li>
<h5>Code Cleanup</h5>
<p>With Meridian 2016 and Horizon 18 out of the way, Seth has been spending some time cleaning up some code in the develop/future-19 tree, including renaming jars and removing unnecessary dependencies. Also, Seth finished his work on improving the Eventd and Scriptd queue handling to be more performant.</p>
</li>
<li>
<h5>Web Site Updates</h5>
<p>Ronny has been spearheading an overhaul to the <a href="http://www.opennms.org/">OpenNMS.org</a> web site and the plan is to put the new site up very soon.  He worked with Devyn last week on the migration plan, and we are currently planning on starting by moving the wiki from opennms.org/wiki to <a href="http://wiki.opennms.org/">wiki.opennms.org</a> tomorrow.</p>
</li>
</ul>
<h4>Meridian 2016 Released</h4>
<p>
Last week The OpenNMS Group released <a href="http://www.opennms.com/meridian/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.opennms.com/meridian/', 'Meridian 2016']);" >Meridian 2016</a>, the long-term-support version of OpenNMS.  For an overview of what has changed since Meridian 2015, see <a href="http://meridian.opennms.com/releasenotes/2016/latest/#_what_s_new_in_meridian_2016" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://meridian.opennms.com/releasenotes/2016/latest/#_what_s_new_in_meridian_2016', 'the release notes']);" >the release notes</a>, but it is essentially OpenNMS Horizon 17 plus a number of bugfixes that went into the OpenNMS Horizon 18 branch.
</p>
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
<li><a href="http://issues.opennms.org/browse/HZN-757">HZN-757</a>: Implement browsers-tab support for the GraphML Topology Provider</li>
<li><a href="http://issues.opennms.org/browse/HZN-823">HZN-823</a>: Show indicator on vertex if a &#8220;Navigate To&#8221; target exist</li>
<li><a href="http://issues.opennms.org/browse/NMS-8217">NMS-8217</a>: Add constants for JMS queue/topic naming convention</li>
<li><a href="http://issues.opennms.org/browse/NMS-8328">NMS-8328</a>: Linkd Topology Provider shows Indeterminate Status of Vertices if no alarm is defined.</li>
<li><a href="http://issues.opennms.org/browse/NMS-8420">NMS-8420</a>: Enlinkd Topology: Cannot search for nodes without alarms</li>
<li><a href="http://issues.opennms.org/browse/NMS-8502">NMS-8502</a>: log4j2.xml passes WARN level logs by default</li>
<li><a href="http://issues.opennms.org/browse/NMS-8503">NMS-8503</a>: Attributes set in the DroolsTicketerServiceLayer get overwritten</li>
<li><a href="http://issues.opennms.org/browse/NMS-8514">NMS-8514</a>: Remove HTML from OpenNMS events logmsg</li>
<li><a href="http://issues.opennms.org/browse/NMS-8515">NMS-8515</a>: Passive Status Event should show Passive Service and Not Service</li>
</ul>
