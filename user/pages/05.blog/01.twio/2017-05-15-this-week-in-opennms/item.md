---
title: This Week in OpenNMS: May 1st, 2017
date: 11:21 05/01/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, minion, packaging, smoke tests, syslog, kafka, elasticsearch, ws-man, jmx, karaf, activemq, rest, geolocation, bsm, dev-jam]
---

It's time for This Week in OpenNMS!  In the last week we worked on various internal changes, documentation, and web code.

<!-- git log --all --no-merges --since='2017-05-01 00:00:00' --until='2017-05-15 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)' | sort | less -R -->

## Github Project Updates

* __Internals and Documentation__

  I did a bit more work on packaging issues (OpenNMS and Minion).  I also spent a lot of time on flapping smoke tests, and Seth added more test coverage for syslog/kafka/Elasticsearch.  Markus did some cleanup on WS-Man support.  Marcel and Ronny improved the JMX documentation.  Seth continued to work on updating our embedded Karaf to version 4.  Jesse improved performance in the ActiveMQ connector by configuring it to use asynchronous sends.

* __Web__

  Alejandro continued his work on improvements to the v2 ReST API.  Markus fixed some geomap timeout and address lookup bugs.  Markus also continued his work on improving the various status information provided on the front page.


## Upcoming Events and Appearances

* __[Dev-Jam 2017 - Concordia University - July 16th through 21st](http://www.opennms.com/opennms-dev-jam-registration)__

  Our annual developers' conference, Dev-Jam, will be held in Montreal, Canada this year.  For details, please see Tarus's [announcement on the OpenNMS blog](https://opennms.org/en/blog/2017-03-07-devjam-2017).  When you're ready to register, go to [the registration page](http://www.opennms.com/opennms-dev-jam-registration).  See you there!


## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HZN-616](https://issues.opennms.org/browse/HZN-616): Build Debian packages
* [HZN-623](https://issues.opennms.org/browse/HZN-623): Limit and secure that ports opened by the Karaf container
* [HZN-994](https://issues.opennms.org/browse/HZN-994): Complete data collection support for Minion
* [HZN-1016](https://issues.opennms.org/browse/HZN-1016): Provide generic functionality to resolve geolcations and remove the current implementation from nodemaps
* [HZN-1018](https://issues.opennms.org/browse/HZN-1018): Requisition support for Minion
* [NMS-4648](https://issues.opennms.org/browse/NMS-4648): Wrong ticket status ids in automation (CLOSED is 5 not 3 it seems)
* [NMS-6856](https://issues.opennms.org/browse/NMS-6856): Add support for CompositeAttributes/CompositeMembers to JmxCollector
* [NMS-8935](https://issues.opennms.org/browse/NMS-8935): Elasticsearch event forwarding gets Hibernate lazy init exception
* [NMS-9034](https://issues.opennms.org/browse/NMS-9034): Remove the opennms-elasticsearch-event-forwarder feature
* [NMS-9187](https://issues.opennms.org/browse/NMS-9187): NPE in GeolocationProvisioningAdapter
* [NMS-9250](https://issues.opennms.org/browse/NMS-9250): Clean up JAXB config classes
* [NMS-9326](https://issues.opennms.org/browse/NMS-9326): Upgrade from 19.0.1 to 19.1.0 fails 
* [NMS-9342](https://issues.opennms.org/browse/NMS-9342): Geomap on the start page is throwing require js error