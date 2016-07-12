---
title: This Week in OpenNMS: March 28th, 2016
date: 13:00 03/28/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [ansible, bsm, casperjs, compass, dev-jam, drinkup, enlinkd, integration tests, karaf, meetup, open network summit, opennms, opennms compass, phantomjs, requisitions, sdn, selenium, smoke tests, usage statistics, vagrant]
---

It’s Time for This Week in OpenNMS!
-----------------------------------

In the last week we worked on Compass, smoke tests, BSM, requisitions, usage statistics, Enlinkd, Karaf integration tests, and Ansible.

Github Project Updates
----------------------

* __Compass__

  Compass 2.1.0 beta, build 396 was released last week. If you wish to join the beta test, see [the Compass web site](https://compass.opennms.io/#beta).

* __Smoke Tests__

  We’re still having issues with our CasperJS/PhantomJS tests, so I’ve been working on putting the Selenium tests back. Our original reason for switching was how brittle Selenium gets with Firefox updates. I have since spent some time into making sure our Bamboo CI machines are pinned to a specific Firefox version and that they have auto-update disabled, so this will hopefully fix most of the intermittent issues we had with Selenium testing in the first place. Fingers crossed…

* __Business Service Monitor__

  Markus, Christian, Dustin, and Jesse have been continuing work on polishing up the BSM codebase and doing more work on related performance and features, including adding a lot of useful data to the "info pane" on the left side of the topology UI. Jesse has also been working on adding a "simulator" to the BSM so you can test out workflows. We also spent some time thinking about color blindness in the UI and how to better represent alarms in the topology UI for color-blind users.

* __Requisitions UI__

  Alejandro’s requisition improvements went feature-complete last week and have been merged into foundation-2016 for inclusion in OpenNMS Horizon 18 and Meridian 2016.

* __Usage Statistics__

  To get a better idea of how to estimate hardware requirements and the performance characteristics of OpenNMS, Jesse has written an opt-in tool to occasionally submit diagnostic information about your OpenNMS install. It will submit information like the number of nodes, alarms, etc. as well as some basic system information to our servers for statistical reasons.

  Some of these statistics are visualized on [stats.opennms.org](stats.opennms.org).

  You can opt-in the first time you log into the OpenNMS web UI, or proactively opt-out of the dialog by setting enabled=false in `$OPENNMS_HOME/etc/org.opennms.features.datachoices.cfg`. For more details, see the "Data Choices" section of the admin guide.

* __Enlinkd__

  Antonio has continued to work on Enlinkd bugs and fixing performance issues, due in OpenNMS Horizon 18’s codebase in the develop branch soon.

* __Karaf Tests__

  Seth has been working on resurrecting his work to test the full-stack of our OSGi modules with Karaf integration tests using Pax Exam.

* __Ansible__

  Jeff and Devyn have been working on a number of Ansible roles and modules related to OpenNMS, automating tasks like installation of OpenNMS and interacting with OpenNMS via ReST. These will be published in the appropriate places when they’re ready. :)

Updated Vagrant Boxes
---------------------

The OpenNMS Vagrant boxes have been updated to 17.1.1.

The latest boxes are here available to download on [Atlas platform](https://atlas.hashicorp.com/boxes/search?utf8=✓&sort=&provider=&q=opennms):

* OpenNMS Horizon 17.1.1 based on CentOS 7
* OpenNMS Horizon 17.1.1 based on Ubuntu 14.04.4 LTS
* OpenNMS Horizon 18 snapshot 20160325 build 368 based on Ubuntu 14.04.4 LTS
* OpenNMS Horizon 17.1.1 education based on CentOS 7

Open Networking Summit
----------------------

Jeff’s talk about SDN at [Open Networking Summit 2016](http://opennetsummit.org/) is [now available on YouTube](https://youtu.be/IsPar4JPpec).

[plugin:youtube](https://www.youtube.com/watch?v=IsPar4JPpec)

Upcoming Events and Appearances
-------------------------------

* __[OpenNMS Drinkup – Wednesday, April 6, 2016](http://www.meetup.com/OpenNMS-Meetup-Group/events/229919435/)__

  Whether you’re a long-time user or a newcomer curious about OpenNMS, come have a pint with us at [The Goose’s Acre](http://www.meetup.com/OpenNMS-Meetup-Group/events/229919435/). Core committers Jeff Gehlbach and Alejandro Galue will be on hand to talk use cases, answer questions, tell war stories, and tease the upcoming OpenNMS Horizon 18 release.

* **[Dev-Jam 2016 – July 25th through 30th, 2016](https://www.opennms.org/wiki/Dev-Jam_2016)**

  Dev-Jam 2016 is sneaking up on is, but there is still plenty of time to join us in Minnesota. For more information, see [The Dev-Jam 2016 wiki page](https://www.opennms.org/wiki/Dev-Jam_2016).

  Mike Huot has written up a proposal letter you can use to help explain to management why attending Dev-Jam is a good idea. Feel free to [copy this letter](https://docs.google.com/document/d/1VerZYe5LwMT_1j5ISAsNU9-ZGcwY_zdA_4DODNlBpYg/edit?usp=sharing) and join us in Minnesota this year!

Until Next Week…
----------------

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:ranger@opennms.org).

– Ben

Resolved Issues Since Last TWiO
-------------------------------

* [HZN-629](http://issues.opennms.org/browse/HZN-629): Create blueprint.xml for the Trapd receiver
* [HZN-631](http://issues.opennms.org/browse/HZN-631): Create blueprint-trapd-handler-minion.xml
* [NMS-1291](http://issues.opennms.org/browse/NMS-1291): Resurrect and fix the eventconf editor in the web interface
* [NMS-2203](http://issues.opennms.org/browse/NMS-2203): Dashboard – Outages Dashlet implementation
* [NMS-2204](http://issues.opennms.org/browse/NMS-2204): Dashboard – Node View implementation
* [NMS-2227](http://issues.opennms.org/browse/NMS-2227): Dashboard: Configurable refresh & clickable node labels
* [NMS-2330](http://issues.opennms.org/browse/NMS-2330): Surveillance view shows nodes in red when no services are down
* [NMS-2515](http://issues.opennms.org/browse/NMS-2515): auto-categorize discovered nodes
* [NMS-2863](http://issues.opennms.org/browse/NMS-2863): Dashlets fail to refresh when selecting a smaller subset after having selected a larger set.
* [NMS-3100](http://issues.opennms.org/browse/NMS-3100): Acknowledged Alarms show up in Dashboard
* [NMS-3102](http://issues.opennms.org/browse/NMS-3102): Error message on Dashboard, trunk build 12454
* [NMS-3357](http://issues.opennms.org/browse/NMS-3357): auto-clean events trigger erratic exceptions
* [NMS-3804](http://issues.opennms.org/browse/NMS-3804): GWT fails over AJP
* [NMS-4072](http://issues.opennms.org/browse/NMS-4072): out of box, 1.8.3 missing entry in capsd-configuration.xml for protocol XMP
* [NMS-4887](http://issues.opennms.org/browse/NMS-4887): IN IE 9.0.8112.16421 Dasboard applet is shown only the half of applet
* [NMS-5113](http://issues.opennms.org/browse/NMS-5113): Dashboard error caused by the alarms dashlet
* [NMS-5698](http://issues.opennms.org/browse/NMS-5698): Dashboard does not self-refresh – seems like a broken timer
* [NMS-7983](http://issues.opennms.org/browse/NMS-7983): Overall availability dashboard fails
* [NMS-8003](http://issues.opennms.org/browse/NMS-8003): Topology-UI shows LLDP links not correct
* [NMS-8152](http://issues.opennms.org/browse/NMS-8152): Collect and publish anonymous statistics to stats.opennms.org
* [NMS-8163](http://issues.opennms.org/browse/NMS-8163): Requisitions UI Enhancements
* [NMS-8226](http://issues.opennms.org/browse/NMS-8226): Upgrade SNMP4J to version 2.4
