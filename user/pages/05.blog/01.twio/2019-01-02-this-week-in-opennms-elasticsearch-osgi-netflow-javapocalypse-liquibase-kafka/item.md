---
title: This Week in OpenNMS - January 2nd, 2019 - Refactoring, Modernization, and the New Year! &#127881;
date: 11:37 01/02/2019
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: twio
    tag: [elasticsearch, drools, alarmd, osgi, flows, javapocalypse, liquibase, kafka, bootstrap, topology]
---

It's time for This Week in OpenNMS!  We're back!  And this time, it's personal.

In the last few weeks we did lots of refactoring and cleanup and continued some projects that were in-progress.

<!-- git log --author=bamboo@opennms.org --invert-grep --all --no-merges --color=always --since='2018-12-17 00:00:00' --until='2019-01-02 00:00:00' --format='%Cblue%ai %Cgreen%aN %Creset%s %Cblue(%H)%Cred%d' --author-date-order | sort | less -R -->


## Github Project Updates

* __Internals, APIs, and Documentation__

  * Jesse and David did more work on indexing alarms in Elasticsearch.
  * Markus did more work on cleaning up imports in our code.
  * Jesse fixed a potential deadlock in reloading the Drools context in Alarmd.
  * Patrick continued his work on modernizing the SNMP collector codebase.
  * Patrick did more refactoring of integer parsing in our codebase.
  * Matt worked on fixing some potential concurrent modification exceptions in OSGi service binding.
  * I worked on fixing the BestMatchPingerFactory to use the loopback address to test validity on startup.
  * Dustin updated flow classification to handle omnidirectional flows.
  * I refactored the `opennms` script to fix all `shellcheck` warnings.
  * Markus worked on fixing potential OOM issues in the daemon refactor branch.
  * I did a bunch of work to get OpenNMS running under Java 9.
  * David worked on prioritization of event definitions.
  * I worked on updating our database upgrade infrastructure to Liquibase 3.
  * Antonio worked on pushing topology data to Kafka.

* __Web & UI__

  * Dustin refactored his work on browser notifications a bit.
  * Sebastian continued to work on the Bootstrap 4 UI migration.
  * Antonio continued his work on a link and topology refactor.



<!--
## Upcoming Events and Appearances

* **[OpenNMS Training - December 10th through 14th, 2018](https://www.opennms.com/training/)**

  The OpenNMS Group will be [offering hands-on OpenNMS training](https://www.opennms.com/training/) in our Apex, NC office.
-->

## Until Next Week…

If there’s anything you’d like me to talk about in a future TWiO, or you just have a comment or criticism you’d like to share, don’t hesitate to [say hi](mailto:twio@opennms.org).

\- Ben

<!--
  https://github.com/OpenNMS/twio-fodder/blob/master/scripts/twio-issues-list.pl
-->

## Resolved Issues Since Last TWiO

* [HZN-1419](https://issues.opennms.org/browse/HZN-1419): Add support for prioritizing the event definitions
* [HZN-1450](https://issues.opennms.org/browse/HZN-1450): Add example on how to use Drools with alarms for nagging events
* [HZN-1451](https://issues.opennms.org/browse/HZN-1451): Prevent CME in OSGI service binding
* [NMS-10369](https://issues.opennms.org/browse/NMS-10369): Performance problems with the Topology Map on large networks
* [NMS-10465](https://issues.opennms.org/browse/NMS-10465): Event configuration should be able to match event parameters by key & value
* [NMS-10495](https://issues.opennms.org/browse/NMS-10495): linkDown alarms are not generated for unknown ifIndex values
* [NMS-10509](https://issues.opennms.org/browse/NMS-10509): Harden Drools engine in alarmd
