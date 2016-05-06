---
title: Northbound Integration
---

## Notifications

Send alerts to on-call system engineers using a variety of implemented notification strategies.
Extend the platform by using the native Java API or run scripts on the underlying operating system.

* Use E-Mail with SMTP/s protocol
* Slack and Mattermost (and other Slack-compatible) teams via outbound webhook integration
* Jabber and XMPP as direct message or in XMPP chatrooms
* Support for Microblog notifications via Identica / StatusNet / Twitter
* Run external scripts
* Extend the Java native notification strategy API

## Ticketing Integration

Building monitoring application stacks requires strong integration capabilities.
With the OpenNMS platform there are several possibilities to forward monitoring information to integrate in management workflows.
Leverage from open source with using pre-built integrations or build your own ticketing integration.

* Request Tracker (RT) integration
* BMC Remedy integration
* OTRS integration
* IBM Tivoli Service Request Manager (TSRM) integration
* Atlassian JIRA integration
* Extensible Ticketing API

## Alarm Forwarding

Underlying monitoring events can be used to generate high level alarms.
Streams of normalized alarms can be forwarded to external applications to integrate in management workflows.

* JMS Alarm Northbound implementation
* AMQP Alarm Northbound implementation
* Forward alarms into ElasticSearch for analysis
* Send alarms via Syslog or SNMP trap protocol to legacy management solutions
* Extensible Northbound API

