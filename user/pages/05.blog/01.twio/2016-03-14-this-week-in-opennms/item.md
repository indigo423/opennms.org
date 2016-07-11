---
title: This Week in OpenNMS: March 14th, 2016
date: 11:41 03/14/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [bsm, compass, dev-jam, enlinkd, minion, open network summit, provisiond, requisitions, rest, smoke tests, twio]
---

It’s Time for This Week in OpenNMS!
-----------------------------------

In the last week we released a new stable version, worked on the Business Service Monitor, Minion, Compass, Enlinkd, ReST APIs, Requisitions UI, and the Smoke Test rework.

OpenNMS Horizon (Glenmorangie) 17.1.1 Released
----------------------------------------------

OpenNMS Horizon 17.1.1 — codenamed Glenmorangie — was released last week. It was a maintenance/stable release containing a few bug fixes and updates.

For a complete list of changes, see The 17.1.1 release notes.

Github Project Updates
----------------------

* __Business Service Monitor__

  The BSM is getting closer to release, with work being done on look-and-feel (icons), bug fixes, and smaller feature work.

* __Minion__

  Good progress is being made on supporting syslog and traps in the minion, as well as packaging updates and support for running in Karaf 4.

* __Compass__

  Compass 2.1 has been picked up again for active development, and is currently being cleaned up and readied for another round of beta testing. 2.1’s main features over 2.0 are support for multiple OpenNMS servers, and graphing (using the Measurements API on Horizon 15 and up).

* __Enlinkd__

  Antonio has been working heavily on cleaning up Enlinkd bugs and fixing performance issues. His changes are expected to drop in OpenNMS Horizon 18’s codebase in the develop branch soon.

* __Smoke Tests__

  Over the last month, I spent a considerable amount of time rewriting our Selenium-based smoke tests in CasperJS. This gives us more flexibility in testing the OpenNMS UI, and fixes some long-standing timing/flapping issues we had with the old smoke tests.

* __ReST API__

  Alejandro has been completely reworking the ReST API to avoid some mistakes introduced into the APIs when we made them — most specifically, POSTs returning a 303 redirect which causes clients to make a subsequent request. The current state of the ReST API requires many workarounds in our browser-based ReST calls, and makes some features impossible. This cleanup will go into OpenNMS Horizon 18.

* __Requisitions UI__

  Alejandro has been working on cleaning up and improving the Requisitions AngularJS UI. Some major refactoring has been going on, but it is going on hold for a bit until the ReST work is finished.

Closed Issues Since Last TWiO
-----------------------------

* [BSM-38](http://issues.opennms.org/browse/BSM-38): Users can specify the graphical icon representing a Business Service
* [BSM-114](http://issues.opennms.org/browse/BSM-114): If a new Map or Reduce function is set to a BusinessService/Edge the old reference is not deleted
* [BSM-167](http://issues.opennms.org/browse/BSM-167): Bundle org.opennms.features.bsm.persistence.api cannot be started anymore due to missing requirement (osgi.wiring.package)
* [BSM-172](http://issues.opennms.org/browse/BSM-172): Change file name `org.opennms.features.topology.app.icons.properties` to `org.opennms.features.topology.app.icons.list`
* [HZN-491](http://issues.opennms.org/browse/HZN-491): Split Discoverer out into a separate OSGi bundle or blueprint
* [HZN-493](http://issues.opennms.org/browse/HZN-493): Provide Pinger as an OSGi service
* [HZN-494](http://issues.opennms.org/browse/HZN-494): Update features.xml with Discovery features
* [HZN-562](http://issues.opennms.org/browse/HZN-562): Write blueprint for Minion handler for syslog messages
* [HZN-599](http://issues.opennms.org/browse/HZN-599): Write upgrade script to remove “threads” property from discovery config
* [HZN-600](http://issues.opennms.org/browse/HZN-600): Write blueprint and components that will handle Minion SyslogConnection messages inside OpenNMS
* [HZN-601](http://issues.opennms.org/browse/HZN-601): Add JAXB annotations to SyslogConnection
* [HZN-602](http://issues.opennms.org/browse/HZN-602): Create Minion impl for DistPollerDao
* [LTS-198](http://issues.opennms.org/browse/LTS-198): Create a command line tool for compiling all the report template files.
* [NEWTS-81](http://issues.opennms.org/browse/NEWTS-81): newts-cassandra-common blueprint.xml fails to load
* [NMS-3681](http://issues.opennms.org/browse/NMS-3681): Add Anchoring to provisioning group editing page
* [NMS-8034](http://issues.opennms.org/browse/NMS-8034): Adding com.sun.management.jmxremote.authenticate=true on opennms.conf is ignored by the opennms script
* [NMS-8179](http://issues.opennms.org/browse/NMS-8179): ifIndex >= 2^31
* [NMS-8205](http://issues.opennms.org/browse/NMS-8205): Generate events for alarm lifecycle changes
* [NMS-8208](http://issues.opennms.org/browse/NMS-8208): Upgrade maven-bundle-plugin to v3.0.1
* [NMS-8210](http://issues.opennms.org/browse/NMS-8210): Add support for calculating the derivative with a Measurements API Filter
* [NMS-8211](http://issues.opennms.org/browse/NMS-8211): Add support for retrieving nodes with a filter expression via the ReST API
* [NMS-8215](http://issues.opennms.org/browse/NMS-8215): Chart servlet reloads Notifd config instead of Charts config
* [NMS-8218](http://issues.opennms.org/browse/NMS-8218): External event source tweaks to admin guide
* [NMS-8219](http://issues.opennms.org/browse/NMS-8219): Copyright bump on asciidoc docs

Upcoming Events and Appearances
-------------------------------

* __Open Network Summit 2016 – March 14th through 17th, 2016__

  Our very own Jeff Gehlbach will be speaking Wednesday on the subject of software defined networks at the Open Network Summit at the Santa Clara Convention Center in California.

* __Dev-Jam 2016 – July 25th through 30th, 2016__

  Dev-Jam 2016 is sneaking up on is, but there is still plenty of time to join us in Minnesota. For more information, see The Dev-Jam 2016 wiki page.

Until Next Week…
-----------------

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to say hi.

– Ben
