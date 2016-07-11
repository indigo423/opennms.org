---
title: This Week in OpenNMS: June 27th, 2016
date: 11:24 06/27/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, bsm, drools, eventd, jms, meridian 2016, minion, opennms meridian, opennms meridian 2016, opennms.org, scriptd, topology maps, tsrm, wiki]
---

In the last week we worked on topology maps and BSM, Drools and TSRM trouble ticketing, code cleanup, Minion, and the Meridian 2016 release.

Github Project Updates
----------------------

* __Minion__

  Seth did some more fixes to the way JMS queues are managed from the Minion.  Chandra has continued working on making detectors run remotely in the Minion container.

* __Topology Maps and Business Service Monitor__

  Markus did more work on cleaning up the GraphML provider for topology maps, as well as some bug fixing related to multiple topology providers being loaded at one time.  Dustin worked on the custom edge status provider for BSM some more.

* __Drools and TSRM Trouble Ticketing__

  Markus, Chandra, and Ronny did some work on fixing bugs in the Drools and TSRM ticketing layers.

* __Code Cleanup__

  With Meridian 2016 and Horizon 18 out of the way, Seth has been spending some time cleaning up some code in the develop/future-19 tree, including renaming jars and removing unnecessary dependencies. Also, Seth finished his work on improving the Eventd and Scriptd queue handling to be more performant.

* __Web Site Updates__

  Ronny has been spearheading an overhaul to the [OpenNMS.org](http://www.opennms.org/) web site and the plan is to put the new site up very soon.  He worked with Devyn last week on the migration plan, and we are currently planning on starting by moving the wiki from opennms.org/wiki to [wiki.opennms.org](http://wiki.opennms.org/) tomorrow.

Meridian 2016 Released
----------------------

  Last week The OpenNMS Group released [Meridian 2016](http://www.opennms.com/meridian/), the long-term-support version of OpenNMS.  For an overview of what has changed since Meridian 2015, see [the release notes](http://meridian.opennms.com/releasenotes/2016/latest/#_what_s_new_in_meridian_2016), but it is essentially OpenNMS Horizon 17 plus a number of bugfixes that went into the OpenNMS Horizon 18 branch.

Upcoming Events and Appearances
-------------------------------

* __[Dev-Jam 2016 – July 25th through 30th, 2016](https://www.opennms.org/wiki/Dev-Jam_2016)__

  Dev-Jam 2016 is sneaking up on is, but there is still plenty of time to join us in Minnesota.  For more information, see [The Dev-Jam 2016 wiki page](https://www.opennms.org/wiki/Dev-Jam_2016).
  Mike Huot has written up a proposal letter you can use to help explain to management why attending Dev-Jam is a good idea.  Feel free to [copy this letter](https://docs.google.com/document/d/1VerZYe5LwMT_1j5ISAsNU9-ZGcwY_zdA_4DODNlBpYg/edit?usp=sharing) and join us in Minnesota this year!

* __[OpenNMS User Conference Europe – Call for Papers Deadline – August 1st, 2016](http://www.opennms.eu/2016/06/call-for-papers-ouce-2016/)__

  If you wish to speak at OUCE 2016, the deadline for submitting a talk is August 1st, 2016.  You can find out more about submitting your talk [here](http://www.opennms.eu/2016/06/call-for-papers-ouce-2016/).

* __[OpenNMS Training – August 15th through 19th, 2016](http://www.opennms.com/training)__

  The OpenNMS Group has moved the next training session in Pittsboro, NC to August 15th through 19th.  For more details on OpenNMS training and signing up, see [The OpenNMS.com training page](http://www.opennms.com/training/).

* __[OpenNMS User Conference Europe – September 13th through September 15th, 2016](https://ouce.opennms.eu)__

  OUCE 2016 will be at the University of Applied Science in Fulda, Germany from September 13th through 15th.  More details will be posted as we get closer to the event.

Until Next Week…
----------------

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

– Ben

Resolved Issues Since Last TWiO
-------------------------------

* [HZN-757](http://issues.opennms.org/browse/HZN-757): Implement browsers-tab support for the GraphML Topology Provider
* [HZN-823](http://issues.opennms.org/browse/HZN-823): Show indicator on vertex if a "Navigate To" target exist
* [NMS-8217](http://issues.opennms.org/browse/NMS-8217): Add constants for JMS queue/topic naming convention
* [NMS-8328](http://issues.opennms.org/browse/NMS-8328): Linkd Topology Provider shows Indeterminate Status of Vertices if no alarm is defined.
* [NMS-8420](http://issues.opennms.org/browse/NMS-8420): Enlinkd Topology: Cannot search for nodes without alarms
* [NMS-8502](http://issues.opennms.org/browse/NMS-8502): log4j2.xml passes WARN level logs by default
* [NMS-8503](http://issues.opennms.org/browse/NMS-8503): Attributes set in the DroolsTicketerServiceLayer get overwritten
* [NMS-8514](http://issues.opennms.org/browse/NMS-8514): Remove HTML from OpenNMS events logmsg
* [NMS-8515](http://issues.opennms.org/browse/NMS-8515): Passive Status Event should show Passive Service and Not Service
