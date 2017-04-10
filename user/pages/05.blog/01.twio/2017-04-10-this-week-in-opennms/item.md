---
title: This Week in OpenNMS: April 10th, 2017
date: 10:35 04/10/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [twio, jaxb, requisitions, datacollection, capsd, linkd, cisco, topology, enlinkd, assets, percona live, hackathon, dev-jam]
---

It's time for This Week in OpenNMS!  In the last week we worked on various internal changes, and the web UI.

<!-- git log --all --no-merges --since='2017-04-03 00:00:00' --until='2017-04-10 00:00:00' --format='%Cblue%ai %Cgreen%aN %Cred%d %Creset%s %Cblue(%H)' | sort | less -R -->

## Github Project Updates

* __Internals__

  I finished my work on using Java 8's `Optional` in our JAXB classes and other cleanups.  Markus did more work on moving requisitions into the database.  Jesse worked on more datacollection infrastructure improvements.  Ronny cleaned up a bunch of old events that referred to things like Capsd and Linkd.  Antonio worked on fixing some Cisco bridge topology issues in Enlinkd.

* __Web UI__

  Craig worked on his asset -> topology adapter.  Seth fixed a race condition in the requisition UI.


## Upcoming Events and Appearances

* __[Percona Live - April 24th through 27th, 2017](https://www.percona.com/live/17/)__

  Jesse [will be speaking at Percona](https://www.percona.com/live/17/users/jesse-white) in Santa Clara, California on April 25th, 2017.

* __[OpenNMS Hackathon - April 28th through April 30th, 2017](http://doodle.com/poll/khqydbip8ee76ine)__

  Markus is arranging an OpenNMS hackathon in Fulda, Germany at the end of April.  If you'd like to hack on the OpenNMS code fixing bugs, implementing features, or just want to talk with other OpenNMS developers, please follow this link to let them know you're interested in joining: [OpenNMS Hackathon Doodle](http://doodle.com/poll/khqydbip8ee76ine)

* __[Dev-Jam 2017 - Concordia University - July 16th through 21st](http://www.opennms.com/opennms-dev-jam-registration)__

  Our annual developers' conference, Dev-Jam, will be held in Montreal, Canada this year.  For details, please see Tarus's [announcement on the OpenNMS blog](https://opennms.org/en/blog/2017-03-07-devjam-2017).  When you're ready to register, go to [the registration page](http://www.opennms.com/opennms-dev-jam-registration).  See you there!


## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HZN-840](https://issues.opennms.org/browse/HZN-840): traps containing unreadable characters
* [NMS-6544](https://issues.opennms.org/browse/NMS-6544): Topology REST Service
* [NMS-6730](https://issues.opennms.org/browse/NMS-6730): CustomSyslogParser fails to parse process name when brackets appear in the message text
* [NMS-7879](https://issues.opennms.org/browse/NMS-7879): TemporaryDatabaseExecutionListener leaves unused test databases
* [NMS-7932](https://issues.opennms.org/browse/NMS-7932): Use JAXB in Enlinkd config factory
* [NMS-8171](https://issues.opennms.org/browse/NMS-8171): org.apache.servicemix.bundles.spring-instrument-4.0.5.RELEASE_1.jar MANIFEST doea not contain Premain-Class: org.springframework.instrument.InstrumentationSavingAgent
* [NMS-8289](https://issues.opennms.org/browse/NMS-8289): JSPs cannot use Java 8 lambdas
* [NMS-8326](https://issues.opennms.org/browse/NMS-8326): Cannot use Servlet 3.0 annotations inside webapp
* [NMS-8713](https://issues.opennms.org/browse/NMS-8713): Monitoring location just integer as longitude and latitude
* [NMS-8715](https://issues.opennms.org/browse/NMS-8715): Deleting monitoring locations does not refresh the view
* [NMS-8826](https://issues.opennms.org/browse/NMS-8826): Threshold editor help text unclear about comparison operators
* [NMS-8928](https://issues.opennms.org/browse/NMS-8928): Save syslog hostname in an event parameter
* [NMS-8989](https://issues.opennms.org/browse/NMS-8989): Node detail page is hard to use with a lot of surveillance categories
* [NMS-9028](https://issues.opennms.org/browse/NMS-9028): Monitoring Location parameter not saved using mouse
* [NMS-9072](https://issues.opennms.org/browse/NMS-9072): Let the XmlCollector use parameters defined in the service definition in xml-source url
* [NMS-9091](https://issues.opennms.org/browse/NMS-9091): java.util.Date uses lots of heap space after toString() is called
* [NMS-9092](https://issues.opennms.org/browse/NMS-9092): VMware collector support for units and value modifier
* [NMS-9095](https://issues.opennms.org/browse/NMS-9095): The poller-test command doesn't work due to Spring initialization conflicts
* [NMS-9126](https://issues.opennms.org/browse/NMS-9126): Persist string attributes over the TCP stream
* [NMS-9140](https://issues.opennms.org/browse/NMS-9140): It is possible to perform alarms/notifications actions through the Acks ReST end point without permissions
* [NMS-9164](https://issues.opennms.org/browse/NMS-9164): SNMP client code can get stuck in infinite retry loops
* [NMS-9167](https://issues.opennms.org/browse/NMS-9167): Monitoring location creation dialog fails to validate required fields
* [NMS-9187](https://issues.opennms.org/browse/NMS-9187): NPE in GeolocationProvisioningAdapter
* [NMS-9203](https://issues.opennms.org/browse/NMS-9203): ActiveMQ dead letter queue fills up all the available storage
* [NMS-9206](https://issues.opennms.org/browse/NMS-9206): interface.jsp could display the list of services for each polling package
* [NMS-9215](https://issues.opennms.org/browse/NMS-9215): JMS Northbounder ignores first-occurrance-only and sending as object message doesn't work
* [NMS-9219](https://issues.opennms.org/browse/NMS-9219): DNS Adapter on Delete Node does not delete DNS record
* [NMS-9238](https://issues.opennms.org/browse/NMS-9238): DnsResolutionMonitor should not use cache for lookups
* [NMS-9239](https://issues.opennms.org/browse/NMS-9239): SIGBUS handling issues with RRDtool can crash OpenNMS
* [NMS-9240](https://issues.opennms.org/browse/NMS-9240): Allow for choosing ifDescr over ifName for interface directory name
* [NMS-9252](https://issues.opennms.org/browse/NMS-9252): Improve handling of counter wraps/reset when using Newts
* [NMS-9257](https://issues.opennms.org/browse/NMS-9257): Remove "delete" flag from default downtime model
* [NMS-9259](https://issues.opennms.org/browse/NMS-9259): Upgrade Spring from 4.0 to 4.1
* [NMS-9266](https://issues.opennms.org/browse/NMS-9266): XML collection configs, JAR not part of main assembly
* [NMS-9272](https://issues.opennms.org/browse/NMS-9272): Exception in OspfNodeDiscovery
