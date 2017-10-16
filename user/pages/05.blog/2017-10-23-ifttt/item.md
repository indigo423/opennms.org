---
title: Sneak peek IFTTT integration in Horizon 21
date: 21:48 2017-10-23
author: Marcel Fuhrmann
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: wiki
    tag: [configuration, ifttt]
---

People familiar with production lines are familiar with using [Stack Lights](https://en.wikipedia.org/wiki/Stack_light) to indicate the status of a machine.

Wouldn't it be cool to have something similar as a status indicator for your IT-Infrastructure?
This question is probably ~20 years old and we've ended up with things like the [USB Table Traffic Light](https://shop.netways.de/produkt/nagios-usb-ampel-medium/) that you can buy now for arround 70,-€.
Some diehard users of OpenNMS might already know its ancestor: [onmsblink](https://github.com/opennms-forge/onmsblink).
It uses the [blink1](https://blink1.thingm.com) USB multicolour LED and shows overall status using the highest outstanding alarm severity.

Instead of using USB and always dealing with weird scripts to make things happen, Christian Pape developed a very powerful generic [IFTTT](https://en.wikipedia.org/wiki/IFTTT) integration at DevJam 2016, which will be available in Horizon 21.
Using the IFTTT service, you can create rules and trigger Internet of Things devices with your OpenNMS instance. It has a lot of potential.

To give an example, I'll show how I use a [LIFX WiFi internet capable multicolour Light Bulb](https://eu.lifx.com/collections/featured-products/products/lifx-plus) with a fancy [IKEA Light Shade](http://www.ikea.com/us/en/catalog/products/70096377) and the IFTTT web service.
The use case is similar to the USB blink, which is to indicate status with the color of the light bulb.
The funny part is: because the Light Bulb uses WiFi and is internet enabled, you can place the bulb **wherever** you want.

I've placed it in my office and I can instantly see the health of my systems without touching a computer.
There is nothing more relaxing than being welcomed with a fresh green light in the morning and going to grab a cup of coffee.

We have published this example as part of our [IFTTT documentation](http://docs.opennms.org/opennms/branches/release-21.0.0/guide-admin/guide-admin.html#ga-ifttt).
I hope you get inspired to connect things with the internet and trigger real world events with OpenNMS.

It would be marvellous to get some of your stories.
Feel free to connect on [chat.opennms.org](https://chat.opennms.org/) or [Twitter](https://twitter.com/opennms?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor).

So long
