---
title: This Week in OpenNMS: July 18th, 2016
date: 10:27 07/18/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, vmware, vsphere, minion, kafka, packaging, startup, topology maps, bsm, node maps, remote poller, remote poller maps, maps, openlayers, openstreetmap, documentation, rest, dev-jam, ouce, training, all things open, ato, mc frontalot, the doubleclicks, kings barcade]
---

In the last week we worked on VMware monitoring, minion, packaging and startup, topology maps and BSM, node and remote poller maps, and documentation.

<!-- git log --all --no-merges --since='2016-07-11 00:00:00' --until='2016-07-18 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)'  | sort | less -R -->

Github Project Updates
----------------------

* __VMware Monitor__

  Christian fixed the VMware monitor against VMware vSphere 6.

* __Minion__

  Chandra did more work on the Minion code, including blueprints for starting trapd with Kafka and more detector work.  Jesse has been working on making Provisiond capable of remotely executing SNMP requests on a minion where appropriate.

* __Packaging and Startup__

  Seth and I merged some changes to make it possible to have smaller installs by splitting out the source and remote poller code from the webapp, for people who don't need them.  I also changed the default startup scripts to not wait for startup (default START_TIMEOUT is now 0), and add support for a STOP_TIMEOUT for verifying when OpenNMS has shut down.  Also, the bug with ulimit being set very low in restricted environments is now fixed.

* __Topology Maps and Business Service Monitor__

  Markus and Jesse spent some time working on fixing jitter issues in the topology UI, and other bug fixes.  Dustin added support for backshift graphing in the topology custom info panel.

* __Node and Remote Poller Maps__

  Markus and I worked on fixing our OpenLayers-based maps to support a configurable tile server, as well as changing the default now that MapQuest is no longer supporting raw access to their OpenStreetMap tile servers.

* __Documentation__

  Cyrille did some work on improving the ReST API documentation.

Upcoming Events and Appearances
-------------------------------

* **[Dev-Jam 2016 - July 25th through 30th, 2016](https://www.opennms.org/wiki/Dev-Jam_2016)**

  Dev-Jam 2016 is sneaking up on is, but there is still plenty of time to join us in Minnesota.  For more information, see [The Dev-Jam 2016 wiki page](https://www.opennms.org/wiki/Dev-Jam_2016).
  Mike Huot has written up a proposal letter you can use to help explain to management why attending Dev-Jam is a good idea.  Feel free to [copy this letter](https://docs.google.com/document/d/1VerZYe5LwMT_1j5ISAsNU9-ZGcwY_zdA_4DODNlBpYg/edit?usp=sharing) and join us in Minnesota this year!

* __[OpenNMS User Conference Europe - Call for Papers Deadline - August 1st, 2016](http://www.opennms.eu/2016/06/call-for-papers-ouce-2016/)__

  If you wish to speak at OUCE 2016, the deadline for submitting a talk is August 1st, 2016.  You can find out more about submitting your talk [here](http://www.opennms.eu/2016/06/call-for-papers-ouce-2016/).

* __[OpenNMS Training - August 15th through 19th, 2016](http://www.opennms.com/training)__

  The OpenNMS Group has moved the next training session in Pittsboro, NC to August 15th through 19th.  For more details on OpenNMS training and signing up, see [The OpenNMS.com training page](http://www.opennms.com/training/).

* __[OpenNMS User Conference Europe - September 13th through September 15th, 2016](https://ouce.opennms.eu)__

  OUCE 2016 will be at the University of Applied Science in Fulda, Germany from September 13th through 15th.  More details will be posted as we get closer to the event.

* __[All Things Open - October 26th and 27th, 2016](https://allthingsopen.org/)__

  Tarus will be speaking at the All Things Open conference on the subject of The Internet of Silos.  Also, a bunch of OpenNMS folks will be there attending talks and stationed at the booth, so please feel free to stop by and say "hi."  We'll be sponsoring an evening concert of [MC Frontalot and The Doubleclicks](http://www.adventuresinoss.com/2016/07/05/mc-frontalot-and-the-doubleclicks-at-all-things-open/) at [King's Barcade](http://www.kingsbarcade.com/) Wednesday night.

Until Next Week…
----------------

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

- Ben

Resolved Issues Since Last TWiO
-------------------------------

* [HZN-610](http://issues.opennms.org/browse/HZN-610): Add location for node to provisioning requisitions
* [HZN-611](http://issues.opennms.org/browse/HZN-611): Make location editable via provisioning UI
* [HZN-842](http://issues.opennms.org/browse/HZN-842): Add support for provisioning nodes with a "location"
* [HZN-843](http://issues.opennms.org/browse/HZN-843): Use the LocationAwareSnmpClient in provisiond
* [HZN-844](http://issues.opennms.org/browse/HZN-844): LDAP, LDAPS detectors throw ClassNotFound exception
* [NMS-8008](http://issues.opennms.org/browse/NMS-8008): OpenNMS Source Should Get a Separate Package
* [NMS-8195](http://issues.opennms.org/browse/NMS-8195): RESTv2 services should return HTTP 204 for DELETE
* [NMS-8232](http://issues.opennms.org/browse/NMS-8232): opennms startup script to automatically start in quite mode when started from init process
* [NMS-8331](http://issues.opennms.org/browse/NMS-8331): Multi-Selection Tool does not work anymore
* [NMS-8332](http://issues.opennms.org/browse/NMS-8332): Selection is lost when using the Topology UI
* [NMS-8345](http://issues.opennms.org/browse/NMS-8345): Create separate RPM/DEB package for jetty-webapps/opennms-remoting
* [NMS-8456](http://issues.opennms.org/browse/NMS-8456): Problem in Minion syslog reception route
* [NMS-8471](http://issues.opennms.org/browse/NMS-8471): opennms stop takes 5 minutes
* [NMS-8537](http://issues.opennms.org/browse/NMS-8537): Discovery doesn't create/place node in correct requisition for range
* [NMS-8544](http://issues.opennms.org/browse/NMS-8544): BSMAdminIT flapping inside docker smoke tests
* [NMS-8593](http://issues.opennms.org/browse/NMS-8593): Requisitioned IP interfaces never have ipHostName set
* [NMS-8594](http://issues.opennms.org/browse/NMS-8594): Compiler warnings about MaxPermSize support is removed in 8.0
* [NMS-8595](http://issues.opennms.org/browse/NMS-8595): Vertex shows empty tooltip
* [NMS-8597](http://issues.opennms.org/browse/NMS-8597): Distributed/Geographical Maps do not show images anymore

<!--
  http://issues.opennms.org/issues/?filter=13303
  :1,$s#^[^\t]*\t[^\t]*\t\([^\t]*\)\t#* [\1](http://issues.opennms.org/browse/\1): #
  :1,$s#[\t ]*$#\1#
-->
