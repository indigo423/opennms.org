---
title: Vagrant
---

## Vagrant

Run OpenNMS as virtual machine with [VirtualBox](https://www.virtualbox.org/) and [Vagrant](https://www.vagrantup.com/).
Test new configurations or evaluate OpenNMS and [Grafana](http://grafana.org) with a pre-installed Vagrant basebox image with VirtualBox.
OpenNMS Vagrant basebox image are published on the [Atlas Platform](https://atlas.hashicorp.com/opennms).

If you want a more customized installation, please see our [installation guide](https://docs.opennms.org/opennms/releases/install/guide-install/guide-install.html).

<pre class="prettyprint">
mkdir vagrant
cd vagrant
vagrant init opennms/vagrant-opennms-ubuntu-stable
vagrant up
</pre>

<script type="text/javascript" src="https://asciinema.org/a/34722.js" id="asciicast-34722" async></script>

OpenNMS can be started with `systemctl {start,stop} opennms`.
The webapplication is available on _http://localhost:8980/opennms_.
Default login for the webapplication is _admin_ with password _admin_.
Please change the default password immediately to a safe password by click on the user name in the top right navigation and choose _Change Password_.
