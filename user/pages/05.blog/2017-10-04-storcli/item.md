---
title: Monitoring Storcli based Megaraid/LSI RAID controllers
date: 18:23 2017-10-09
author: Marcel Fuhrmann
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: wiki
    tag: [configuration, snmp, wiki]
---
What happens when there are broken disks and degraded RAID volumes and nobody knows about them?
Monitoring disks and RAID volumes is a fundamental part of rolling out a monitoring solution. 

Unfortunately, manufactures for RAID controllers create their own tooling, which makes it difficult to monitor them using generic monitoring protocols.
If you are familiar with the LSI MegaRAID controller, you probably also know the Storcli tool.
It almost has [super cow powers](https://unix.stackexchange.com/questions/92185/whats-the-story-behind-super-cow-powers) and provides all the information we need.

In this article, we will show you how to extend the Net-SNMP agent, monitor your RAID and disks with Net-SNMP, and use any SNMP-capable monitoring solution like OpenNMS.
We created a wiki article for all the bits and pieces needed to monitor your RAID and disks using the Storcli tool.
It also describes how to set minimal permissions for an SNMP user, support multiple controllers, and RAID volumes.
If an error occurs, OpenNMS will tell you exactly which disks are broken and which RAID volumes are degraded.

The wrapper scripts for extending the Net-SNMP agent are published in a [GitHub repository](https://github.com/opennms-config-modules/lsi-megaraid-storcli)- we hope it makes your live easier.

Would you like to know more? -> [Monitoring Storcli based Raid Controllers](https://wiki.opennms.org/wiki/storcli)
