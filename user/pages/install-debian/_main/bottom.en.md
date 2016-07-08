---
title: Quick Install DEB
---

## Debian and Ubuntu

Installation script installs all components of OpenNMS on a single machine and is ready to run.
This setup works for most small environments.
If you want a more customized installation, please see our [installation guide](https://docs.opennms.org/opennms/releases/latest/guide-install/guide-install.html#gi-install-opennms-debian).

<pre class="prettyprint">
curl -L https://github.com/opennms-forge/opennms-install/archive/1.1.tar.gz | tar xz
cd opennms-install-1.1
bash bootstrap-debian.sh
</pre>

<script type="text/javascript" src="https://asciinema.org/a/34604.js" id="asciicast-34604" async></script>
