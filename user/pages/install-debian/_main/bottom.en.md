---
title: Quick Install DEB
---

## Debian and Ubuntu

Installation script installs all components of OpenNMS on a single machine and is ready to run.
This setup works for most small environments.
If you want a more customized installation, please see our [installation guide](https://docs.opennms.org/opennms/releases/latest/guide-install/guide-install.html#gi-install-opennms-debian).

<i class="fa fa-info-circle" aria-hidden="true"></i> The installation script is tested with Debian 8 "Jessie", Ubuntu 14.04 LTS and Ubuntu 16.04 LTS.

<i class="fa fa-info-circle" aria-hidden="true"></i> Please make sure you have installed an OpenJDK 8 Development Kit or Oracle Java Development Kit installed. You find instructions in the [Java installation](https://docs.opennms.org/opennms/releases/latest/guide-install/guide-install.html#gi-install-oracle-java-debian) section in our install guide.

<pre class="prettyprint">
curl -L https://github.com/opennms-forge/opennms-install/archive/1.1.tar.gz | tar xz
cd opennms-install-1.1
bash bootstrap-debian.sh
</pre>

<script type="text/javascript" src="https://asciinema.org/a/34604.js" id="asciicast-34604" async></script>

OpenNMS can be started with `systemctl {start,stop} opennms`.
The webapplication is available on _http://your-host:8980/opennms_.
Default login for the webapplication is _admin_ with password _admin_.
Please change the default password immediately to a safe password by click on the user name in the top right navigation and choose _Change Password_.
