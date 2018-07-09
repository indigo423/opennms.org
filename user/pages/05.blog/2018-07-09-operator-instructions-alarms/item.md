---
title: Usage of Operator Instructions in Alarms
date: 17:42 2018-07-09
author: Marcel Fuhrmann
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: opennms
    tag: [alarms, operator instructions, opennms]
---

Monitoring services or metrics and getting alarms isn't complicated.
A more interesting question is: How to fix them (fast)?

Monitoring systems, even in small or middle sized environments, creates a lot of different alarms.
When you are working in a team, sometimes the person who creates a test or configures a threshold that throws an alarm is not the same person who has to understand what happened and what to do next.

Either way, you should have some kind of documentation for when you need it.
Especially in the situation being on-call and getting woken up in the middle of the night.
A good approach to being well prepared in alarm situations is to have specific instructions or information regarding alarms.

Since OpenNMS is event driven, it's possible to enrich events with additional useful information.

In case you get a _nodeLostService_ alarm, you can use the _operator instruction_ field by setting a link template to a wiki or internal documentation like this `https://my-wiki/$service`.

As soon the _Alarm_ appears, you can guide a person to instructions that are actually tested and informative about how to diagnose the situation. This also helps to improve the quality of tickets in case they need to be escalated to someone else.
