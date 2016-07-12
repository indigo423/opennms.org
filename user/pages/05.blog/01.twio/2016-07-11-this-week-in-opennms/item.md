---
title: This Week in OpenNMS: July 11th, 2016
date: 11:05 07/11/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, minion, topology, bsm, ui, discovery, eventconf, dev-jam, training, ouce]
---

In the last week we worked on minion, topology maps, BSM, UI updates, discovery, and event configuration.

<!-- git log --all --no-merges --since='2016-07-05 00:00:00' --until='2016-07-11 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)'  | sort | less -R -->

Github Project Updates
----------------------

* __Minion__

  Chandra did more work on making detectors run on Minions.

* __Topology Maps and Business Service Monitor__

  Markus, Dustin, Jesse, and Christian spent more time on custom (GraphML) edge provider support in the topology UI.  Markus also continued his work improving performance and memory leak issues in the topology UI. Jesse added a new "grid" layout.

* __UI Updates__

  Seth has been working on a rewritten outage list component.

* __Discovery__

  Seth has been working on fixing up some regressions and foreign-source-handling cleanup in the discovery code.  He also fixed discovery configuration to allow specifying a default monitoring location.

* __Event Parameters__

  Alejandro [did some work on making parameters able to reference other parameters](http://issues.opennms.org/browse/NMS-8590).

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

Until Next Week…
----------------

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

- Ben

Resolved Issues Since Last TWiO
-------------------------------

* [HZN-801](http://issues.opennms.org/browse/HZN-801): Document the Usage of the GraphMLTopologyProvider
* [HZN-808](http://issues.opennms.org/browse/HZN-808): HZN-793 Implement a (dummy) edge status provider using JSR 223 in combination with the GraphML Topology Provider
* [HZN-809](http://issues.opennms.org/browse/HZN-809): HZN-793 Implement the possibility to inject the status provided by the JSR223 Edge Status Provider to the eges in the UI
* [HZN-810](http://issues.opennms.org/browse/HZN-810): HZN-793 Implement a (real) example using the JSR223 edge status provider
* [HZN-821](http://issues.opennms.org/browse/HZN-821): Manually trigger remote detectors via the Karaf shell in OpeNMS
* [HZN-825](http://issues.opennms.org/browse/HZN-825): Besides nodeID also support foreignSource and foreignId on a GraphMLVertex
* [HZN-834](http://issues.opennms.org/browse/HZN-834): Add a new grid layout
* [NMS-2034](http://issues.opennms.org/browse/NMS-2034): categoryName requirements cannot be ored with other requirements in categories.xml rules
* [NMS-6946](http://issues.opennms.org/browse/NMS-6946): It is not possible to add another interface to a node if the node already has an interface "127.0.0.1"
* [NMS-8187](http://issues.opennms.org/browse/NMS-8187): VMware-ManagedEntity does not work with VMware 6
* [NMS-8370](http://issues.opennms.org/browse/NMS-8370): Renaming a root business services does not work anymore
* [NMS-8416](http://issues.opennms.org/browse/NMS-8416): Karaf log level is DEBUG in stable
* [NMS-8474](http://issues.opennms.org/browse/NMS-8474): Ensure the GenericInfoPanelItemProvider and GraphMLEdgeStatusProvider are run within a Transaction
* [NMS-8481](http://issues.opennms.org/browse/NMS-8481): GraphMLRestService should check for existance but loads the Graph instead
* [NMS-8541](http://issues.opennms.org/browse/NMS-8541): blank label in "Threshold Function Details" window
* [NMS-8588](http://issues.opennms.org/browse/NMS-8588): Resizing browser window causes Topology UI to refresh itself needlessly
* [NMS-8589](http://issues.opennms.org/browse/NMS-8589): Topology Map is very very slow
* [NMS-8590](http://issues.opennms.org/browse/NMS-8590): Make custom event parameters expandable
