---
title: Quick Install RPM
---

## Installation CentOS/RHEL

Installation script installs all components of OpenNMS on a single machine and is ready to run.
This setup works for most small environments.

If you want a more customized installation, please see our [installation guide](http://docs.opennms.org/opennms/releases/17.0.0/guide-install/guide-install.html#gi-install-opennms-rhel).

<pre class="prettyprint">
curl -L https://github.com/opennms-forge/opennms-install/archive/1.0.tar.gz | tar xz
cd opennms-install-1.0
bash bootstrap-yum.sh
</pre>

<script type="text/javascript" src="https://asciinema.org/a/7yxcofm8hmxjzn25tuhuplbln.js" id="asciicast-7yxcofm8hmxjzn25tuhuplbln" async></script>


