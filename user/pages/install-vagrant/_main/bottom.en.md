---
title: Vagrant
---

## Vagrant

Run OpenNMS as virtual machine with [VirtualBox](https://www.virtualbox.org/) and [Vagrant](https://www.vagrantup.com/).
Test new configurations or just evaluate OpenNMS and [Grafana](http://grafana.org) with a pre-installed Vagrant basebox image with VirtualBox.
OpenNMS Vagrant basebox image are published on the [Atlas Platform](https://atlas.hashicorp.com/opennms).

If you want a more customized installation, please see our [installation guide](http://docs.opennms.org/opennms/releases/17.0.0/guide-install/guide-install.html).

<pre class="prettyprint">
mkdir vagrant
cd vagrant
vagrant init opennms/vagrant-opennms-ubuntu-stable
vagrant up
</pre>

<script type="text/javascript" src="https://asciinema.org/a/34722.js" id="asciicast-34722" async></script>
