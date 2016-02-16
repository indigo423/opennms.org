---
title: Ubuntu Vagrant Box Update
date: 17:34 12/07/2015
author: Ronny Trommer
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: release
    tag: [release, vagrant, ubuntu, opennms]
---

We have updated our [Vagrant](https://www.vagrantup.com/) box hosted on the [Atlas platform](https://atlas.hashicorp.com/opennms/boxes/vagrant-opennms-ubuntu-stable) with latest OpenNMS Horizon 17 pre-configured with RRDtool.
This is also the first VirtualBox image which comes with a pre-installed [Grafana 2.5](http://grafana.org/) and has the Grafana OpenNMS Plugin as data source installed and is ready to be used.
All you have to do is run

```
vagrant init opennms/vagrant-opennms-ubuntu-stable
vagrant up
```

If you run the default Vagrant box it uses a NAT interface.
To have access to the running application from your box just add the following lines in your Vagrantfile:

```
config.vm.network "forwarded_port", guest: 8980, host: 8980
config.vm.network "forwarded_port", guest: 3000, host: 3000
```

You want to build the box for a different provider than VirtualBox with [packer](https://packer.io/) just fork or contribute to the [opennms-packer](https://github.com/opennms-forge/packer-opennms) repository.

We have added a also a [quick install](https://github.com/opennms-forge/opennms-install/blob/master/bootstrap-debian.sh) script for Debian and Ubuntu.
