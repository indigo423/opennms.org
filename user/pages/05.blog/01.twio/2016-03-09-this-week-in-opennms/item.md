---
title: This Week in OpenNMS: March 9th, 2016
date: 15:20 03/09/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [activemq, bsm, minion, opennms compass, opennms horizon, provisioning, remote poller, rest, syslog, twio]
---

Welcome to This Week in OpenNMS!
--------------------------------

Editor’s Note:

If you’ve been with us for a long time, you may remember a thing we did called This Week in OpenNMS.
It was pretty popular, but also took a lot of time to put together and I fell out of the habit.
Obviously, it’s been more than a week since the last TWiO, but I’m hoping to rectify that.
Only time will tell. ;)

For that reason, this TWiO will be a bit more high-level than they will usually be.

Enjoy!

– Ben

Release Plans
-------------

Obviously these dates can change as circumstances change, but here are our current plans for releases coming up.

OpenNMS 17.1.1 (SOON)
---------------------

OpenNMS 17.1.1 is due out this week, barring any complications or complaints from Bamboo.
It will be a pretty small release compared to 17.1.0, with fixes to the requisition administration UI, OpenNMS Compass compatibility, a user/group editing bug fix, and a few other small changes.

OpenNMS 18 (end of March)
-------------------------

If you’ve been following development for a while, we’ve been planning for OpenNMS 18 to be the first release with a new feature called “Minion” (more on that below).
For a variety of good reasons we are going to release OpenNMS 18 at the end of the month and the Minion code will follow in OpenNMS 19.

Alejandro has been working through a number of issues with the new provisioning UI and our ReST APIs, and there are some significant changes that need to happen in our current ReST APIs to make them first-class citizens (and compatible with how modern browsers make and handle requests).

To that end, we’ve decided to release the current development branch early. It will be called 18.0.0 because we needed a version bump to indicate the significance of the ReST API changes, but it will not yet contain the work needed for Minion support. The timeline for that still hasn’t really changed, we’re just introducing an extra major release in between, so Minion gets bumped to 19.

The plan is for 18 to get cleaned up and wrapped up by the end of March. If you have any development work you are doing, please make sure it’s green in Bamboo and merged back to the develop branch in the next few weeks.

OpenNMS 18 will contain a number of other features in addition to the ReST API changes mentioned above:

* __ActiveMQ Embedded in OpenNMS__

  There will be an ActiveMQ broker available inside OpenNMS, to be used for passing messages. In the long term, the goal will be to move all internal events and messaging to ActiveMQ, but in the short term this exists to facilitate future Minion development.
* __New Discovery Backend__

  A lot of custom discovery code has been replaced with simple Apache Camel rules. You should not see any differences in how Discovery works, but the codebase is simplified considerably.

* __Measurements ReST API Improvements__

  Additional support for filtering and derivatives has been added to the measurements ReST API, as well as a few other smaller changes.

* __Syslogd Refactor__

  The syslog daemon has been refactored to scale better and handle even higher rates of traffic.

* __Remote Poller Scan Report__
  The scan report is an alternate version of the Remote Poller designed to do a single scan of services and give a simple report of pass/failure. It’s meant for use in a troubleshooting situation where you won’t be running the remote poller continuously, but want to check on the availability of services.

* __Business Service Monitor__

  The BSM is an OpenNMS correlation project that applies a rules engine and state machine technologies to directed graphs (network topology and software relationships) for root cause and business impact analysis. (more on this below)

OpenNMS 19 (end of May)
-----------------------

OpenNMS 19 is currently slated for the end of May, and is primarily a target release for the first iteration of the OpenNMS Minion project.

Minion
------

The Minion project is something we’ve been working on for a couple of years now. It is designed to scale OpenNMS horizontally, providing data collection, polling, and event forwarding from OpenNMS “minions” back to a central OpenNMS server. Unlike the Remote Poller, the Minion will be a first-class citizen as far as events, collection, and services supported.

For more details on the plans for Minion and its general architecture, see [Seth Leger’s presentation to OUCE 2015](https://www.youtube.com/watch?v=OVuGtd3gIJo).

[plugin:youtube](https://www.youtube.com/watch?v=OVuGtd3gIJo)

Business Service Monitor
------------------------

The goal of the Business Service Monitor is to provide a high-level correlation of business rules, and to display them in the topology map.

In the BSM, you define a Business Service that encompasses a set of entities (nodes, interfaces, services, and other Business Services) and the relationships among them. The alarm states of the component entities are rolled up in a map-reduce fashion to drive a state machine. The state of a Business Service is reflected in a new type of event, and can also be visualized (along with the service hierarchy) in the existing OpenNMS topology map.

For a technical overview of the architecture and design, see [the wiki page for the BSM](http://wiki.opennms.org/wiki/BusinessServiceMonitoring).

Until Next Time…
-----------------

That’s it for this week. If you have any questions, comments, or concerns, feel free to [e-mail me](mailto:ranger@opennms.org).

Tags:

This entry was posted	on Wednesday, March 9th, 2016 at 3:20 pm and is filed under News, TWiO.
