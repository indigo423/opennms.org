---
title: Automated Orderings
date: 19:46 2017-04-05
author: Marcel Fuhrmann
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: wiki
    tag: [user story, wiki]
---

### A self-sufficient printer environment

OpenNMS usually stands for network and server monitoring.
But like every good tool you can use (or misuse?!) OpenNMS in other scenarios as well.

If that is a good solution, is completely your choice! :-)

Imagine, you have a big printer environment, distributed in different locations and you don't want to order toner cartridges for every device manually.

So the goal is to let OpenNMS do that job for you!

The configuration for this is quite simple and adaptable.
It shows a full working configuration with Kyocera Mita FS1128 (b/w) and Konica Minolta Bizhub C35 (color) printers.
Every time toner levels are below 30% OpenNMS will order a compatible toner cartridge for each printer.

Would you like to know more? -> [A self-sufficient printer environment](https://wiki.opennms.org/wiki/Automated_ordering_of_consumables)
