---
title: This Week in OpenNMS: July 25th, 2016
date: 12:57 07/25/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, minion, kafka, discovery, topology maps, bsm, release, horizon, opennms horizon, meridian, opennms meridian, dev-jam, ouce, training, all things open, ato, mc frontalot, the doubleclicks, kings barcade]
---

In the last week we worked on minion, topology maps and BSM, and release preparation and bug fixes.

<!-- git log --all --no-merges --since='2016-07-18 00:00:00' --until='2016-07-25 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)'  | sort | less -R -->

Github Project Updates
----------------------

* __Minion__

  Pradeep and Malatesh's minion trapd kafka and blueprint work was wrapped up.  Jesse and Chandra did more work on making the detectors run in the minion.  Seth fixed Discovery to be location-aware.

* __Topology Maps and Business Service Monitor__

  Christian did some work on adding a trend info box and charting.  Markus worked on bringing back ping support in the topology UI.

* __Release Preparation__

  A bunch of final changes were wrapped up in preparation for releases, including unit test fixes, documentation, input validation, startup inside containers, topology memory/thread leaks, and many other small fixes.

Release Week
------------

This last week we did 3 major releases of the OpenNMS codebase -- in part, because we had been planning to do them anways, and in part because we wanted to get the fix for the remote poller and geographical maps out as soon as possible.

* __[OpenNMS Horizon 18.0.1](../../02.releases/2016-07-21-opennms-horizon-18.0.1/item.md)__: Horizon 18.0.1 has tons of bug fixes and a few new features compared to 18.0.0.
* __[OpenNMS Meridian 2015.1.2](http://meridian.opennms.com/releasenotes/2015/latest/)__: Meridian 2015 (based on Horizon 14) got its 2nd update, adding support for new devices and plenty of fixes.
* __[OpenNMS Meridian 2016.1.2](http://meridian.opennms.com/releasenotes/2016/latest/)__: Meridian 2016 (based on Horizon 17) got its 2nd update as well, containing a bunch of bug fixes and a few small improvements.

Upcoming Events and Appearances
-------------------------------

* **[Dev-Jam 2016 - July 25th through 30th, 2016](https://www.opennms.org/wiki/Dev-Jam_2016)**

  Dev-Jam 2016 is happening right now!  Expect a full run-down of what happened in next week's TWiO.  If you want to follow along with the fun, we have a [dedicated channel on our Mattermost chat server](https://chat.opennms.com/opennms/channels/dev-jam) for Dev-Jam.

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

* [NMS-8016](http://issues.opennms.org/browse/NMS-8016): output.log fills up with GLib-GObject-CRITICAL messages
* [NMS-8200](http://issues.opennms.org/browse/NMS-8200): Install -dis on "SocketException:Too many open files" on centos:latest docker
* [NMS-8592](http://issues.opennms.org/browse/NMS-8592): Topology UI refreshes many times when performing various actions
* [HZN-755](http://issues.opennms.org/browse/HZN-755): Use Backshift graphs in custom info panels
* [NMS-8297](http://issues.opennms.org/browse/NMS-8297): Topology elements looks off center when the panel is collapsed
* [NMS-8589](http://issues.opennms.org/browse/NMS-8589): Topology Map is very very slow
* [NMS-8421](http://issues.opennms.org/browse/NMS-8421): BSM Editor throws an exception if you type a 0 in weight
* [NMS-8043](http://issues.opennms.org/browse/NMS-8043): Ping from topology view does not work (results in 404 Page not found)
* [NMS-6849](http://issues.opennms.org/browse/NMS-6849): observations related to "ping".option in topology page
* [NMS-7204](http://issues.opennms.org/browse/NMS-7204): Using ping in topology view cause strange behavior
* [NMS-8245](http://issues.opennms.org/browse/NMS-8245): Topology Ping
* [NMS-8520](http://issues.opennms.org/browse/NMS-8520): The ticket change date is the same as the reported date
* [HZN-641](http://issues.opennms.org/browse/HZN-641): Project Atlas
* [HZN-848](http://issues.opennms.org/browse/HZN-848): Update SNMP related provisioning adapters to use the LocationAwareSnmpClient
* [HZN-497](http://issues.opennms.org/browse/HZN-497): Verify guaranteed delivery on Minion location queues
* [HZN-490](http://issues.opennms.org/browse/HZN-490): Make ActiveMQ broker URI and credentials configurable
* [HZN-833](http://issues.opennms.org/browse/HZN-833): Discovery's UnmanagedInterfaceFilter needs to be location-aware

<!--
  http://issues.opennms.org/issues/?filter=13303
  :1,$s#^[^\t]*\t[^\t]*\t\([^\t]*\)\t#* [\1](http://issues.opennms.org/browse/\1): #
  :1,$s#[\t ]*$#\1#
-->
