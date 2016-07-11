---
title: This Week in OpenNMS: June 6th, 2016
date: 15:12 06/06/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, bsm, dev-jam, docker, manageiq, manageiq summit, minion, newts, ouce, provisiond, smoke tests, syslog, texas linux fest, topology maps, training, twio, txlf]
---

In the last week we worked on Minion, Newts, Topology Maps and BSM, Provisiond, and smoke tests.  Next week we&#8217;ll work on resuscitating Jeff after his grueling speaker schedule.  ;)

Github Project Updates
----------------------

* __Minion__

  Seth did more work on the syslog minion integration.

* __Newts__

  Jesse updated the Newts integration to use Newts 1.4, which adds improvements to search and indexing.

* __Topology Maps and Business Service Monitor__

  Markus, Dustin, and Jesse have also continued to work on [](https://www.opennms.org/wiki/DevProjects/Atlas, with the goal of improving navigation through support of topology layers, and support for moving node map functionality to the topology UI.

* __Provisiond Cleanups__

  Seth has been spending some time taking care of some technical debt in Provisiond.  Provisiond was written before newer task and execution management APIs went into Java, and can be vastly simplified with some refactoring.

* __Bamboo Updates__

  I&#8217;ve been spending more time on our smoke test infrastructure, porting Jesse&#8217;s Minion System Tests to be a more generic test framework for spawning tests to run against a dockerized OpenNMS install.

Upcoming Events and Appearances
-------------------------------

* __[Jeff Speaking at ManageIQ Summit, June 7th, 2016](http://manageiq.org/summit/)__

  Jeff will be speaking tomorrow at [ManageIQ Summit](OpenNMS as complement to ManageIQ) on the topic of OpenNMS as complement to ManageIQ.

* __[Jeff Speaking at Texas LinuxFest, June 8th or 9th, 2016](http://2016.texaslinuxfest.org/node/25)__

  The schedule isn&#8217;t set yet, but Jeff will be [speaking at Texas LinuxFest](http://2016.texaslinuxfest.org/node/25) on the topic of OpenDaylight and managing software-defined networks.

* __[Jeff Speaking at SouthEast LinuxFest, June 12th, 2016](http://www.southeastlinuxfest.org/)__

  Jeff will be [speaking at SouthEast LinuxFest](http://www.southeastlinuxfest.org/) on Sunday on the topic of OpenDaylight and managing software-defined networks.

* __[Dev-Jam 2016 – July 25th through 30th, 2016](https://www.opennms.org/wiki/Dev-Jam_2016)__

  Dev-Jam 2016 is sneaking up on is, but there is still plenty of time to join us in Minnesota.  For more information, see [The Dev-Jam 2016 wiki page](https://www.opennms.org/wiki/Dev-Jam_2016).
  Mike Huot has written up a proposal letter you can use to help explain to management why attending Dev-Jam is a good idea.  Feel free to [copy this letter](https://docs.google.com/document/d/1VerZYe5LwMT_1j5ISAsNU9-ZGcwY_zdA_4DODNlBpYg/edit?usp=sharing) and join us in Minnesota this year!

* __[OpenNMS User Conference Europe – Call for Papers Deadline – August 1st, 2016](http://www.opennms.eu/2016/06/call-for-papers-ouce-2016/)__

If you wish to speak at OUCE 2016, the deadline for submitting a talk is August 1st, 2016.  You can find out more about submitting your talk [OpenNMS User Conference Europe – Call for Papers Deadline – August 1st, 2016](http://www.opennms.eu/2016/06/call-for-papers-ouce-2016/).

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

* [HZN-738](http://issues.opennms.org/browse/HZN-738): Minionize the SnmpWalker
* [HZN-788](http://issues.opennms.org/browse/HZN-788): Enhance the GraphMLSearchProvider to search all layers
* [NEWTS-102](http://issues.opennms.org/browse/NEWTS-102): Enhance the stress tool to support search/indexing
* [NMS-8455](http://issues.opennms.org/browse/NMS-8455): Implement a Datasource Factory based on Hikari CP
* [NMS-8472](http://issues.opennms.org/browse/NMS-8472): Cannot add custom icon key mapping files
* [NMS-8479](http://issues.opennms.org/browse/NMS-8479): Issues with AIX graph definitions
* [NMS-8480](http://issues.opennms.org/browse/NMS-8480): PostgreSQL driver&#8217;s OSGi bundle activator deregisters the driver
