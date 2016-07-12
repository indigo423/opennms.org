---
title: This Week in OpenNMS: April 18th, 2016
date: 13:42 04/18/2016
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, bsm, compass, data collection, dev-jam, discovery, events, general assembly, metrics, opennms compass, opennms foundation europe, osgi, persistence, topology maps, training, trouble ticketing, tsrm]
---

In the last week we worked on BSM, topology maps, events and data collection, TSRM ticketing, discovery, metrics persisting, the OSGi plugin manager, Compass, and bug fixing.

Github Project Updates
----------------------

* __Business Service Monitor and Topology Maps__

  This week was mostly a continuation of the wrapup of BSM for Horizon 18 – mostly bug fixes and UI work in topology maps.  Antonio has also been working on cleaning up the Enhanced Linkd topology provider for the topology maps to make it conform to the major refactor he did in Enlinkd over the last few months.

* __Events and Data Collection__

  Marcel and Ronny added new events and/or graphs for SMSEagle and APC devices.

* __TSRM Ticketing Plugin__

  Chandra did more work on the ticketing plugin for IBM&#8217;s TSRM.

* __Discovery__

  Seth did more work on his discovery refactor using Camel.  It now supports everything that the old discovery daemon as well as adding support for triggering discovery manually with a customizable rate.

* __Metrics Persisting__

  Alejandro has been doing a number of fixes to metric persisting as well as providing more data for troubleshooting persistence issues.

* __OSGi Plugin Manager__

  Craig fixed the build integration issues in the OSGi plugin manager and improved the documentation.  This should be merged for inclusion in Horizon 18 soon.

* __Compass__

  Compass 2.1.0 betas are progressing with a number of fixes and small improvements.  There is still a nagging crash issue that I am working to resolve before final release.  If you&#8217;d like to help beta test, see [the Compass web site](https://compass.opennms.io/#beta).

* __Bug Fixes__

A lot of other minor bug fixes have been going in in preparation for OpenNMS Horizon 18.

OpenNMS Horizon 18 Imminent
---------------------------

The BSM branch has been merged and we have a few more pull requests pending before we can branch for release.  If you have a test setup, please give the OpenNMS 18 snapshots a try and let us know if you run into any issues; this is shaping up to be a really nice release.  Just change your yum or apt configuration to use `snapshot` instead of `stable` and you&#8217;ll get the snapshot builds.  When we branch for 18, `snapshot` will point to the release branch, rather than develop.

Upcoming Events and Appearances
-------------------------------

* __[OpenNMS Foundation Europe General Assembly – April 22nd, 2016](http://permalink.gmane.org/gmane.network.opennms.general/52706)__

The OpenNMS Foundation Europe is having its General Assembly meeting on April 22nd, 2016.  For details on the agenda and contact information, see [this post on the OpenNMS discuss mailing list](http://permalink.gmane.org/gmane.network.opennms.general/52706).

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

* [COMPASS-69](http://issues.opennms.org/browse/COMPASS-69): Geolocation map is just a grey image
* [COMPASS-70](http://issues.opennms.org/browse/COMPASS-70): Some UEIs Convert Badly
* [HZN-498](http://issues.opennms.org/browse/HZN-498): Create a discovery UI for ad hoc discovery job submission
* [HZN-588](http://issues.opennms.org/browse/HZN-588): Add support for DiscoveryConfigFactory.getIntraPacketDelay() to the Camel Discovery code
* [HZN-628](http://issues.opennms.org/browse/HZN-628): Discovery tasks timeout after 20000ms
* [HZN-638](http://issues.opennms.org/browse/HZN-638): Provide new set of icons for the EnhancedLinkd Topology
* [HZN-659](http://issues.opennms.org/browse/HZN-659): Add size() to org.opennms.netmgt.model.discovery.IPAddrRange
* [HZN-660](http://issues.opennms.org/browse/HZN-660): Add Minion Karaf features and integration tests
* [HZN-661](http://issues.opennms.org/browse/HZN-661): Change TrapdListenerBlueprintIT so that it overrides the default trap port
* [HZN-704](http://issues.opennms.org/browse/HZN-704): Change DiscoveryTaskExecutorCamelImpl endpoint from direct: to seda:
* [HZN-708](http://issues.opennms.org/browse/HZN-708): BSM Admin UI Enhancements
* [MEWTS-71](http://issues.opennms.org/browse/NEWTS-71): Rest search returns SearchResults.isEmpty()
* [NEWTS-80](http://issues.opennms.org/browse/NEWTS-80): Karaf feature files are broken
* [NEWTS-85](http://issues.opennms.org/browse/NEWTS-85): Upgrade cassandra-unit to 3.0.0.1
* [NMS-2504](http://issues.opennms.org/browse/NMS-2504): Create a better landing page for Configure Discovery aftermath Seth Leger
* [NMS-6344](http://issues.opennms.org/browse/NMS-6344): provision.pl does not import requisitions with spaces in the name Alejandro Galue
* [NMS-6549](http://issues.opennms.org/browse/NMS-6549): Eventd does not honor reloadDaemonConfig event Jeff Gehlbach
* [NMS-8086](http://issues.opennms.org/browse/NMS-8086): Provisioning Requisitions with spaces in their name.  Alejandro Galue
* [NMS-8125](http://issues.opennms.org/browse/NMS-8125): Memory leak when using Groovy + BSF Jesse White
* [NMS-8128](http://issues.opennms.org/browse/NMS-8128): NPE if provisioning requisition name has spaces Alejandro Galue
* [NMS-8216](http://issues.opennms.org/browse/NMS-8216): Discovery config screen problems in latest code Seth Leger
* [NMS-8221](http://issues.opennms.org/browse/NMS-8221): Operation "Refresh Now"; and "Automatic Refresh"; referesh the UI differently Dustin Frisch
* [NMS-8238](http://issues.opennms.org/browse/NMS-8238): Topology providers should provide a description for display Christian Pape
* [NMS-8240](http://issues.opennms.org/browse/NMS-8240): Requisition synchronization is failing due to space in requisition name Alejandro Galue
* [NMS-8248](http://issues.opennms.org/browse/NMS-8248): Many Rcsript (RScript) files in OPENNMS_DATA/tmp Jesse White
* [NMS-8273](http://issues.opennms.org/browse/NMS-8273): %post error when Minion host.key already exists Jesse White
* [NMS-8277](http://issues.opennms.org/browse/NMS-8277): %post failure in opennms-minion-features-core: sed not found Jesse White
* [NMS-8293](http://issues.opennms.org/browse/NMS-8293): Config Tester Tool doesn&#8217;t check some of the core configuration files Alejandro Galue
* [NMS-8296](http://issues.opennms.org/browse/NMS-8296): Be able to re-order the policies on a requisition through the UI Alejandro Galue
* [NMS-8299](http://issues.opennms.org/browse/NMS-8299): Topology UI recenters even if Manual Layout is selected Markus von Rüden
* [NMS-8300](http://issues.opennms.org/browse/NMS-8300): Center on Selection no longer works in STUI Markus von Rüden
* [NMS-8301](http://issues.opennms.org/browse/NMS-8301): v2 Rest Services are deployed twice to the WEB-INF/lib directory Markus von Rüden
* [NMS-8302](http://issues.opennms.org/browse/NMS-8302): Json deserialization throws "unknown property"; exception due to usage of wrong Jax-rs Provider Jesse White
* [NMS-8304](http://issues.opennms.org/browse/NMS-8304): An error on threshd-configuration.xml breaks Collectd when reloading thresholds configuration Alejandro Galue
* [NMS-8313](http://issues.opennms.org/browse/NMS-8313): Pan moving in Topology UI automatically recenters Markus von Rüden
* [NMS-8314](http://issues.opennms.org/browse/NMS-8314): Weird zoom behavior in Topology UI using mouse wheel Markus von Rüden
* [NMS-8324](http://issues.opennms.org/browse/NMS-8324): Friendly name of an IP service is never shown in BSM Dustin Frisch
* [NMS-8335](http://issues.opennms.org/browse/NMS-8335): Focal points are no longer persisted
