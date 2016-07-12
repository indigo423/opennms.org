---
title: This Week in OpenNMS: May 9th, 2016
date: 16:02 05/09/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, bsm, bug fixes, compass, dev-jam, opennms compass, opennms horizon, osgi, topology maps, training]
---

In the last week we worked on Topology Maps, BSM, Minion, Compass, and bug fixing.

Github Project Updates
----------------------

* __Topology Maps and Business Service Monitor__

  Markus has been working on creating a topology provider that can read GraphML files for positioning.  Jesse also finished up his work on the topology performance improvements and worked a lot on creating detailed smoke tests for the BSM functionality in the topology maps.  Christian also did some other cleanup relating to loading in OSGi.

* __Minion__

  Seth has been working on finalizing the syslog and trap support for Minion.

* __Compass__

  I wrapped up the last of the blockers for Compass and it&#8217;s looking ready to go.  If you&#8217;d like to help beta test Compass, see [the Compass web site](https://compass.opennms.io/#beta).

* __Bug Fixes__

  More small bug fixes went in to prep for Horizon 18, which is coming out today.

OpenNMS Horizon 18 Released
---------------------------

OpenNMS Horizon 18 (Codename: [Tardigrade](https://en.wikipedia.org/wiki/Tardigrade) is now available.  For a high-level overview of what is new in Horizon 18, see the [What&#8217;s New in OpenNMS Horizon 18](http://docs.opennms.org/opennms/releases/18.0.0/releasenotes/releasenotes.html#releasenotes-18) portion of the documentation.

Upcoming Events and Appearances
-------------------------------

* __[OpenNMS Training – June 13th though 17th, 2016](http://www.opennms.com/training)__

  The OpenNMS Group has scheduled our next training session in Pittsboro, NC for June 13th through 17th.  For more details on OpenNMS training and signing up, see [The OpenNMS.com training page](http://www.opennms.com/training/).

* **[Dev-Jam 2016 – July 25th through 30th, 2016](https://www.opennms.org/wiki/Dev-Jam_2016)**

  Dev-Jam 2016 is sneaking up on is, but there is still plenty of time to join us in Minnesota.  For more information, see [The Dev-Jam 2016 wiki page](https://www.opennms.org/wiki/Dev-Jam_2016).
  Mike Huot has written up a proposal letter you can use to help explain to management why attending Dev-Jam is a good idea.  Feel free to [copy this letter](https://docs.google.com/document/d/1VerZYe5LwMT_1j5ISAsNU9-ZGcwY_zdA_4DODNlBpYg/edit?usp=sharing) and join us in Minnesota this year!


Until Next Week…
----------------

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

– Ben

Resolved Issues Since Last TWiO
-------------------------------

* [HZN-568](http://issues.opennms.org/browse/HZN-568): Integrate Syslogd into the Minion RPM build
* [HZN-714](http://issues.opennms.org/browse/HZN-714): Cannot graph CPU &#038; Memory utilization of ASR 9k
* [HZN-720](http://issues.opennms.org/browse/HZN-720): Provide a single &#8220;queuingservice&#8221; component that can be used to reach the broker
* [HZN-728](http://issues.opennms.org/browse/HZN-728): Convert the provided csv file to a valid graphml representation
* [HZN-730](http://issues.opennms.org/browse/HZN-730): Create a Topology Provider to read GraphML files
* [HZN-732](http://issues.opennms.org/browse/HZN-732): Provide infrastructure to write smoke-tests for the topology ui
* [HZN-735](http://issues.opennms.org/browse/HZN-735): Add a SearchProvider for the GraphMLTopologyProvider
* [NMS-2369](http://issues.opennms.org/browse/NMS-2369): OutageModel – does not consider Categories
* [NMS-2473](http://issues.opennms.org/browse/NMS-2473): reload for the background image
* [NMS-3295](http://issues.opennms.org/browse/NMS-3295): High network load when displaying map
* [NMS-4306](http://issues.opennms.org/browse/NMS-4306): Topo map error popup: Load Label Map failed
* [NMS-4806](http://issues.opennms.org/browse/NMS-4806): Pop-up Window has Scroll Bars on Remote Poller Map
* [NMS-5821](http://issues.opennms.org/browse/NMS-5821): Remove the file menubar, convert menu options to context menu options
* [NMS-7525](http://issues.opennms.org/browse/NMS-7525): ArrayOutOfBounds Exception in Topology Map when selecting bridge-port
* [NMS-7846](http://issues.opennms.org/browse/NMS-7846): Slow LinkdTopologyProvider/EnhancedLinkdTopologyProvider in bigger enviroments
* [NMS-8076](http://issues.opennms.org/browse/NMS-8076): Allow user to access local documentation from OpenNMS Jetty Webapp
* [NMS-8167](http://issues.opennms.org/browse/NMS-8167): Cannot search by MAC address
* [NMS-8366](http://issues.opennms.org/browse/NMS-8366): OpenNMS Incompatible with Debian Stretch and Ubuntu 16.04
* [NMS-8383](http://issues.opennms.org/browse/NMS-8383): jmxconfiggenerator feature has unnecessary includes
* [NMS-8385](http://issues.opennms.org/browse/NMS-8385): Release.gpg file uses weak digest SHA-1
* [NMS-8386](http://issues.opennms.org/browse/NMS-8386): Requisitioning UI fails to load in modern browsers if used behind a proxy
* [NMS-8388](http://issues.opennms.org/browse/NMS-8388): Document resources ReST service
* [NMS-8394](http://issues.opennms.org/browse/NMS-8394): NoSuchElement exception when loading the TopologyUI
* [NMS-8395](http://issues.opennms.org/browse/NMS-8395): Logging improvements to Notifd
* [NMS-8401](http://issues.opennms.org/browse/NMS-8401): There are errors on the graph definitions for OpenNMS JMX statistics
