---
title: This Week in OpenNMS: May 16th, 2016
date: 11:34 05/16/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, atlas, bsm, compass, dev-jam, documentation, minion, opennms compass, snmp, syslog, topology maps, training, traps, tsrm, vaadin]
---

In the last week we worked on topology maps, BSM, documentation, SNMP, Minion, TSRM ticketing, the Grafana datasource and Compass.

Github Project Updates
----------------------

* __Topology Maps and Business Service Monitor__

  Markus has been doing work on upgrading our Vaadin to the latest version, which involves handling a number of breaking changes in more recent Vaadin 7 releases. Markus and Dustin have also continued to work on [Project Atlas](https://www.opennms.org/wiki/DevProjects/Atlas), with the goal of improving navigation through support of topology layers, and support for moving node map functionality to the topology UI.

* __Documentation__

  Ronny added information on alarm notes to the documentation.

* __SNMP Infrastructure Improvements__

  Jesse has been working on improvements to our SNMP APIs to handle asynchronous requests in a better way.

* __Minion__

  Seth and I have been working on the Minion codebase, with various cleanups to the syslog and trap integrations, and a refactor of the OpenNMS model code to be able to associate locations with nodes.

* __TSRM__

  Chandra has been doing a few fixes and modifications to the TSRM ticketing plugin.

* __Grafana Plugin__

  Jesse fixed [a break in the OpenNMS Grafana datasource plugin](https://github.com/OpenNMS/grafana-opennms-datasource/issues/2) caused by a change in Grafana 3.0 since the betas.  You can upgrade to the latest version by running: `sudo grafana-cli plugins install opennms-datasource`.

OpenNMS Compass 3 Released
--------------------------

On the heels of Horizon, the Compass OpenNMS mobile app has released a new major version.  It was originally going to be versioned 2.1 but enough new features have been added that it was decided to bump the version to 3.  For a list of changes, see "New in Compass 3" [the OpenNMS Compass web site](https://compass.opennms.io/).

Upcoming Events and Appearances
-------------------------------

* __[OpenNMS Training – August 15th through 19th, 2016](http://www.opennms.com/training)__

  The OpenNMS Group has moved the next training session in Pittsboro, NC to August 15th through 19th.  For more details on OpenNMS training and signing up, see [The OpenNMS.com training page](http://www.opennms.com/training/).


* **[Dev-Jam 2016 – July 25th through 30th, 2016](https://www.opennms.org/wiki/Dev-Jam_2016)**

  Dev-Jam 2016 is sneaking up on is, but there is still plenty of time to join us in Minnesota.  For more information, see [The Dev-Jam 2016 wiki page](https://www.opennms.org/wiki/Dev-Jam_2016).
  Mike Huot has written up a proposal letter you can use to help explain to management why attending Dev-Jam is a good idea.  Feel free to [copy this letter](https://docs.google.com/document/d/1VerZYe5LwMT_1j5ISAsNU9-ZGcwY_zdA_4DODNlBpYg/edit?usp=sharing) and join us in Minnesota this year!

Until Next Week…
----------------

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [](mailto:twio@opennms.org).

– Ben

Resolved Issues Since Last TWiO
-------------------------------

* [COMPASS-73](http://issues.opennms.org/browse/COMPASS-73): Don&#8217;t show cache on refresh when an error is set
* [HZN-544](http://issues.opennms.org/browse/HZN-544): Add jmx-datacollection-config.d/ for defining custom JMX datacollection definitions
* [HZN-644](http://issues.opennms.org/browse/HZN-644): Integrate Trapd into the Minion RPM build
* [HZN-701](http://issues.opennms.org/browse/HZN-701): Use FontAwesome Icon definitions from Vaadin libarary instead of shipping our own
* [NMS-729](http://issues.opennms.org/browse/HZN-729): Prototype InfoPanelItem with generic information from an imported GraphML graph
* [HZN-731](http://issues.opennms.org/browse/HZN-731): Add possibility to link between Topology Layers and select them
* [HZN-737](http://issues.opennms.org/browse/HZN-737): Implement a more friendly toolbar in the topology map
* [HZN-745](http://issues.opennms.org/browse/HZN-745): HZN-738 Add support for asynchronous SNMP requests in SnmpUtils
* [HZN-746](http://issues.opennms.org/browse/HZN-746): HZN-738 Marshal/Unmarshal SnmpResult objects to/from XML
* [HZN-751](http://issues.opennms.org/browse/HZN-751): Allow to use the Measurement API to query for values in templates
* [HZN-759](http://issues.opennms.org/browse/HZN-759): Switching to a layer which defines a non existing preferredLayout throws NPE
* [NMS-8078](http://issues.opennms.org/browse/NMS-8078): Updated to APC PowerNet MIB 4.1.6 events
* [NMS-8382](http://issues.opennms.org/browse/NMS-8382): Migrate Alarm Notes documentation to official docs
* [NMS-8403](http://issues.opennms.org/browse/NMS-8403): Document styles of identifying nodes in resource IDs
* [NMS-8413](http://issues.opennms.org/browse/NMS-8413): ConcurrentModificationException in DefaultEventHandlerImpl
* [NMS-8415](http://issues.opennms.org/browse/NMS-8415): Can&#8217;t add a metric in Grafana 3.0
* [NMS-8416](http://issues.opennms.org/browse/NMS-8416): Karaf log level is DEBUG in stable
* [NMS-8419](http://issues.opennms.org/browse/NMS-8419): IBM TSRM integration throws "requires a field Ticket class" exception
