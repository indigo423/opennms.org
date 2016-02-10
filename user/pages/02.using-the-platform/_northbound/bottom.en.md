---
title: Northbound Integration
---

## Notifications

Send alerts to on-call system engineers by using a variety of implemented notification strategies.
Extend the platform by using the native Java API or just run scripts on the underlying operating system.

* Use E-Mail with SMTP/s protocol
* Jabber and XMPP as direct message or in XMPP chatrooms
* Support for Microblog notifications via Identica / StatusNet / Twitter
* Run external scripts
* Extend the Java native notification strategy API

## Ticketing Integration

Building monitoring application stacks requires strong integration capabilities.
With the OpenNMS platform there are several possibilities to forward monitoring information to integrate in management workflows.
Leverage from open source with using pre-built integrations or build your own ticketing integration.

* Request Tracker integration
* BMC Remedy integration
* OTRS integration
* Extensible Ticketing API

## Alarm Forwarding

Underlying monitoring events can be used to generate high level alarms.
Streams of normalized alarms can be forwarded to external applications to integrate in management workflows.

* JMS Alarm Northbound implementation
* AMQP Alarm Northbound implementation
* Forward alarms into ElasticSearch for analysis
* Send alarms via Syslog or SNMP trap protocol to legacy management solutions
* Extensible Northbound API

