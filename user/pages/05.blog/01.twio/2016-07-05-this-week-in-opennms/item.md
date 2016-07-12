---
title: This Week in OpenNMS: July 5th, 2016
date: 11:15 07/05/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, bsm, bug fixes, dev-jam, minion, ouce, texas linux fest, tlf, topology maps, training, trouble ticketing, tsrm]
---

In the last week we worked on minion, topology maps, BSM, TSRM ticketing, and other bugfixes.

Github Project Updates
----------------------

* __Minion__

Seth did some packaging and bundle fixes in the Minion code.

* __Topology Maps and Business Service Monitor__

  Markus Dustin, and Christian spent more time on custom edge provider support in the topology UI.  Markus also spent some time evaluating performance issues in large data sets.  Dustin also did a bit more work on the custom BSM reduction functions.

* __TSRM Trouble Ticketing__

  Chandra worked on more bug fixes in the TSRM ticketing code.

* __Code Cleanup and Bugfixes__

  Alejandro fixed a couple of bugs in MIB resource handling and the node category admin page.  Seth added support for IS NULL in the search criteria code and fixed the bug where the lon/lat in the locations page could not accept floating-point values.

Upcoming Events and Appearances
-------------------------------

* __[Texas Linux Fest – July 8th and 9th, 2016](http://2016.texaslinuxfest.org/content/schedule)__

  Jeff will be speaking [on Saturday afternoon at Texas LinuxFest](http://2016.texaslinuxfest.org/content/schedule) about OpenNMS and the evolutionary pressure of software-defined everything. If you&#8217;re in the greater Austin or San Antonio area, come say hello!

* **[Dev-Jam 2016 – July 25th through 30th, 2016](https://www.opennms.org/wiki/Dev-Jam_2016)**

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

* [HZN-793](http://issues.opennms.org/browse/HZN-793): Support custom edge status
* [HZN-825](http://issues.opennms.org/browse/HZN-825): Besides nodeID also support foreignSource and foreignId on a GraphMLVertex
* [HZN-826](http://issues.opennms.org/browse/HZN-826): Implement a VertexStatusProvider for the GraphMLTopologyProvider
* [NMS-3482](http://issues.opennms.org/browse/NMS-3482): Change jdk to java-devel (or java-sdk) on all rpm dependency
* [NMS-6946](http://issues.opennms.org/browse/NMS-6946): It is not possible to add another interface to a node if the node already has an interface "127.0.0.1"
* [NMS-7869](http://issues.opennms.org/browse/NMS-7869): New Monitoring Locations Editor only allows integers in the latitude and longitude fields
* [NMS-8206](http://issues.opennms.org/browse/NMS-8206): Editing scheduled outages overwrites collectd-configuration.xml
* [NMS-8294](http://issues.opennms.org/browse/NMS-8294): Expose the complete OnmsNode object in Scriptd to avoid LazyInitializationExceptions
* [NMS-8416](http://issues.opennms.org/browse/NMS-8416): Karaf log level is DEBUG in stable
* [NMS-8488](http://issues.opennms.org/browse/NMS-8488): JdbcCollector does not close database connections correctly
* [NMS-8495](http://issues.opennms.org/browse/NMS-8495): Improve built-in Newts graphs for easier diagnostics
* [NMS-8501](http://issues.opennms.org/browse/NMS-8501): Cancel dialog is slow and Topology Map crashes if vertex has many edges (20+)
* [NMS-8506](http://issues.opennms.org/browse/NMS-8506): HW ENTITY_MIB plugin is not showing all information for certain devices
* [NMS-8519](http://issues.opennms.org/browse/NMS-8519): OEM graph for Storage Utilization fails due to &#8216;::&#8217;
* [NMS-8523](http://issues.opennms.org/browse/NMS-8523): OpenNMS:Name=Eventd Failure
* [NMS-8526](http://issues.opennms.org/browse/NMS-8526): Minion RPM regenerates UUID during each installation
* [NMS-8535](http://issues.opennms.org/browse/NMS-8535): Alphabetize nodes in surveillance category listing
