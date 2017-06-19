---
title: What the...? SNMP Daemon spams my log!
date: 21:48 2017-06-19
author: Marcel Fuhrmann
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: wiki
    tag: [configuration, snmp, wiki]
---

As soon you provide more than a handful of services monitoring and centralized logging becomes essential.
Especially when you run the Net-SNMP daemon with Docker you will notice your logs get spamed with some messages like `Cannot statfs /run/docker/netns/...: Permission denied` everytime you query for performance data.

The Wiki article is a small guide how to configure the Net-SNMP daemon to get cleaner logs and less noise for a cleaner signal.

Would you like to know more? -> [SNMP spams my log](https://wiki.opennms.org/wiki/SNMP_spams_my_log)
