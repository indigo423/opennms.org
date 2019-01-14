---
title: Quick Install RPM
---

## CentOS and Red Hat Enterprise Linux

Installation script installs all components of OpenNMS on a single machine and is ready to run.
This setup works for most small environments.
If you want a more customized installation, please see our [installation guide](https://docs.opennms.org/opennms/releases/latest/guide-install/guide-install.html#gi-install-opennms-rhel).

<i class="fa fa-info-circle" aria-hidden="true"></i> The installation script is tested on minimal [CentOS 7.6.1810](http://isoredirect.centos.org/centos/7/isos/x86_64/CentOS-7-x86_64-Minimal-1810.iso).

<pre class="prettyprint">
curl -L https://github.com/opennms-forge/opennms-install/archive/1.3.tar.gz | tar xz
cd opennms-install-1.3
bash bootstrap-yum.sh
</pre>

<script type="text/javascript" src="https://asciinema.org/a/7yxcofm8hmxjzn25tuhuplbln.js" id="asciicast-7yxcofm8hmxjzn25tuhuplbln" async></script>

OpenNMS can be started with `systemctl {start,stop} opennms`.
The webapplication is available on _http://your-host:8980/opennms_.
Default login for the webapplication is _admin_ with password _admin_.
Please change the default password immediately to a safe password by click on the user name in the top right navigation and choose _Change Password_.
