---
title: Monitor your Synology NAS with SNMP
date: 18:13 2017-09-13
author: Marcel Fuhrmann
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: wiki
    tag: [configuration, snmp, wiki]
---

Network Attached Storage devices are very popular in small or medium offices or at home to store and share data.

[Synology](https://www.synology.com) is one of the manufactures who build their devices with SNMP support to provide monitoring and managment capabilities.
This makes it very easy to let OpenNMS keep an eye on your NAS and it can tell you if something goes wrong.
All you need to do is, use the [SNMP Monitor](http://docs.opennms.org/opennms/releases/latest/guide-admin/guide-admin.html#_snmpmonitor) and configure the OIDs you want to monitor.
Nobody likes to investigate MIB files, so I have shared my configuration in our [Wiki](https://wiki.opennms.org/wiki/Synology).

The article will tell you how to monitor the following items in your Synology NAS:

* Overall system status
* Power supply status if you have redundancy
* System fan status
* CPU fan status
* Software update status
* Update server connectivity
* Physical disk drive status
* Logical raid array status

I have tested the configuration with a DS216J and DS1515+ and hope your NAS lives long and prosper.

Wiki article: [Configuration to monitor Synology NAS](https://wiki.opennms.org/wiki/Synology)
