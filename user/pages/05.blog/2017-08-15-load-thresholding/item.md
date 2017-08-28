---
title: Load Thresholding
date: 9:30 2017-08-28
author: Marcel Fuhrmann
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: wiki
    tag: [configuration, thresholding]
---

> System has high load!

Sounds anything but perfect.
At least when we are talking about servers.

Fortunately, I don't have to explain what load is or how it's defined because there are many explanations on the internet.
I found my favorite one on [blog.scoutapp.com](http://blog.scoutapp.com/articles/2009/07/31/understanding-load-averages).

Once you read the article, you know that the ideal load on a Linux machine depends on the number of CPU cores.
And maybe you can already foresee what that means for your threshold configs.
Yes, you will need individual thresholds for your servers depending on the amount of CPU cores.

And... wait.. 
Accidentally we have some "ready to use" configurations on the wiki.
Lucky bastard! :-)

[Would you like to know more?](https://wiki.opennms.org/wiki/Load-Configs)
