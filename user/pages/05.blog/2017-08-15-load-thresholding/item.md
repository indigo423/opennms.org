---
title: Load Thresholding
date: 21:51 2017-08-15
author: Marcel Fuhrmann
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: wiki
    tag: [configuration, thresholding]
---

"System has high load!"

Sounds everything but perfect.
At least when we are talking about servers.

Usual Windows user never heard about that because it's just a Linux thingy.
Maybe that's not totally correct, but at least Windows doesn't have a similar metric.

Fortunately I don't have to explain what load is or how it's defined because there are many explanation in the internet.
I found my favorite one on [blog.scoutapp.com](http://blog.scoutapp.com/articles/2009/07/31/understanding-load-averages).

When you have read this article you know, that the maximum load on a Linux machine depends on the amount of CPU cores.
And maybe you already foresee what that means for your threshold configs.
Yes, you will need individual thresholds for your servers depending on the amount of CPU cores.

And... wait.. Accidentally we have some "ready to use" configurations on the wiki.
Lucky bastard! :-)

Would you like to know more? link to wiki
