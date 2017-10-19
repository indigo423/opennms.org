---
title: OpenNMS Horizon 21.0.0 (Deckard) Released
date: 17:08 10/19/2017
author: Benjamin Reed
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: release
    tag: [release]
---

OpenNMS Horizon 21.0.0 (code name: [Deckard](http://bladerunner.wikia.com/wiki/Rick_Deckard)) is now available.

This release is primarily an under-the-hood update, bringing our embedded Karaf from 2.x to the very latest (4.1.2). It also includes Minion improvements, improvements to event parameter handling internally, and much more.

Note: In this release we finally reformatted all of our configuration files in `$OPENNMS_HOME/etc` to match the way they get written out if you modify them in OpenNMS. Upgrades will likely be a bit more complicated than usual.  It is strongly recommended you back up your `etc` directory and maybe keep a copy of `etc-pristine` as well so it is easier to figure out what has changed if you need to re-apply settings.

For more details on what has changed, see the complete [change log](http://docs.opennms.org/opennms/releases/21.0.0/releasenotes/#releasenotes-changelog-21.0.0).

More Info
---------

For complete info on what has changed since Horizon 20, see the [release notes](https://docs.opennms.org/opennms/releases/21.0.0/releasenotes/releasenotes.html).
