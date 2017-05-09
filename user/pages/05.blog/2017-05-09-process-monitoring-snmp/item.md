---
title: Process Monitoring with SNMP
date: 09:42 2017-05-09
author: Marcel Fuhrmann, Ronny Trommer
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: wiki
    tag: [monitoring, process, snmp]
---

Monitoring processes that don't provide network servies is a default use case in network monitoring.
Because they aren't providing network services, black box testing won't work- you need an agent on your system providing an inside view of your operating system.
The Net-SNMP agent is easy to install and configure on Linux or Unix.
It's compatible with any monitoring solution that supports SNMP, such as OpenNMS.

By default, there are basically two methods utilizing Net-SNMP: using the HOST-RESOURCES-MIB or using the UCD-SNMP-MIB. Both are supported by the Net-SNMP agent.
Both methods produce the same result, but each will impact your monitoring system configuration and maintenance differently.  

To help you decide which method to use, this article will discuss the costs and benefits for each.
In this example, we will discuss different monitoring solutions for two single processes and a multiprocess application.

## Using the Host Resources MIB

When you are using the Host Resources MIB, the key information is in two tabular objects: the `hrSWRunName` and the according `hrhrSWRunStatus`.

In OpenNMS, you can use the [HostResourceSwRunMonitor](http://docs.opennms.org/opennms/releases/19.0.1/guide-admin/guide-admin.html#_hostresourceswrunmonitor).
The key parameters are:

* `service-name`: The name of the process you want to monitor from the `hrSWRunName` object.
* `match-all`: In case there are multiple processes running, all processes need to be in the named run-level state
* `run-level`: The status of the process status, by default it is set to `2` and does not need to be changed.

The output of an SNMP is shown below:

```
snmpwalk -v 2c -c useVersion3 localhost .1.3.6.1.2.1.25.4.2.1.2
.1.3.6.1.2.1.25.4.2.1.2.895 = STRING: "dockerd"
.1.3.6.1.2.1.25.4.2.1.2.938 = STRING: "tincd"
.1.3.6.1.2.1.25.4.2.1.2.1416 = STRING: "docker-proxy"
.1.3.6.1.2.1.25.4.2.1.2.1428 = STRING: "docker-proxy"
.1.3.6.1.2.1.25.4.2.1.2.1635 = STRING: "docker-proxy"
.1.3.6.1.2.1.25.4.2.1.2.1761 = STRING: "docker-proxy"
.1.3.6.1.2.1.25.4.2.1.2.1880 = STRING: "docker-proxy"
.1.3.6.1.2.1.25.4.2.1.2.1902 = STRING: "docker-proxy"
.1.3.6.1.2.1.25.4.2.1.2.1916 = STRING: "docker-proxy"
.1.3.6.1.2.1.25.4.2.1.2.1928 = STRING: "docker-proxy"
.1.3.6.1.2.1.25.4.2.1.2.1941 = STRING: "docker-proxy"
.1.3.6.1.2.1.25.4.2.1.2.1954 = STRING: "docker-proxy"
.1.3.6.1.2.1.25.4.2.1.2.1972 = STRING: "docker-proxy"
```

```
snmpwalk -v 2c -c useVersion3 localhost .1.3.6.1.2.1.25.4.2.1.7
.1.3.6.1.2.1.25.4.2.1.7.895 = INTEGER: runnable(2)
.1.3.6.1.2.1.25.4.2.1.7.938 = INTEGER: runnable(2)
.1.3.6.1.2.1.25.4.2.1.7.1416 = INTEGER: runnable(2)
.1.3.6.1.2.1.25.4.2.1.7.1428 = INTEGER: runnable(2)
.1.3.6.1.2.1.25.4.2.1.7.1635 = INTEGER: runnable(2)
.1.3.6.1.2.1.25.4.2.1.7.1761 = INTEGER: runnable(2)
.1.3.6.1.2.1.25.4.2.1.7.1880 = INTEGER: runnable(2)
.1.3.6.1.2.1.25.4.2.1.7.1902 = INTEGER: runnable(2)
.1.3.6.1.2.1.25.4.2.1.7.1916 = INTEGER: runnable(2)
.1.3.6.1.2.1.25.4.2.1.7.1928 = INTEGER: runnable(2)
.1.3.6.1.2.1.25.4.2.1.7.1941 = INTEGER: runnable(2)
.1.3.6.1.2.1.25.4.2.1.7.1954 = INTEGER: runnable(2)
.1.3.6.1.2.1.25.4.2.1.7.1972 = INTEGER: runnable(2)
```

For each process you want to monitor, you have to create a service monitor named something like `Process-docker-proxy`, `Process-tincd` and `Process-dockerd`.

**Pro:**
It allows you to set up granular monitoring for every process.
The service monitors can be used in "Service Level Management" on the start page for availability calculation and notifications for each process.

**Cons:**
You have to configure and maintain a service monitor for each process you want to monitor in OpenNMS.
It is not possible to configure something like: "At least a number x of y processes need to be running to have the service to be ok."

## Using the UCD-SNMP-MIB

Net-SNMP has a mechanism to monitor processes on the system with the `proc` directive in the configuration file.
The `proc` directive is pretty easy to configure:

`proc docker-proxy 20 5`

First argument is the name of the process you want to monitor, in this case the process named `docker-proxy`.
You should run at least 5 but not more than 20 processes named `docker-proxy` to be safe.
The maximum and minimum number of processes is optional and when they don't exist, at least one process should be running to be ok.
If you would like use a configuration management tool to configure your SNMP agent, you can use the `includeDir /etc/snmp/conf.d` directive in `snmpd.conf`.
That way you can drop a  `.conf` file with the `proc` directive for each application you want to monitor, and each will be included.

The example to monitor `tincd`, `dockerd` and `docker-proxy` with the configured `proc` looks like the following:

Name of the process

```
snmpwalk -v 2c -c useVersion3 localhost .1.3.6.1.4.1.2021.2.1.2
iso.3.6.1.4.1.2021.2.1.2.1 = STRING: "tincd"
iso.3.6.1.4.1.2021.2.1.2.2 = STRING: "dockerd"
iso.3.6.1.4.1.2021.2.1.2.3 = STRING: "docker-proxy"
```

Number of instances

```
snmpwalk -v 2c -c useVersion3 localhost .1.3.6.1.4.1.2021.2.1.5
iso.3.6.1.4.1.2021.2.1.5.1 = INTEGER: 3
iso.3.6.1.4.1.2021.2.1.5.2 = INTEGER: 1
iso.3.6.1.4.1.2021.2.1.5.3 = INTEGER: 13
```

Error Message

```
snmpwalk -v 2c -c useVersion3 localhost .1.3.6.1.4.1.2021.2.1.101
iso.3.6.1.4.1.2021.2.1.101.1 = ""
iso.3.6.1.4.1.2021.2.1.101.2 = ""
iso.3.6.1.4.1.2021.2.1.101.3 = ""
```

Error Flag

```
snmpwalk -v 2c -c useVersion3 localhost .1.3.6.1.4.1.2021.2.1.100
iso.3.6.1.4.1.2021.2.1.100.1 = INTEGER: 0
iso.3.6.1.4.1.2021.2.1.100.2 = INTEGER: 0
iso.3.6.1.4.1.2021.2.1.100.3 = INTEGER: 0
```

The [PrTableMonitor](http://docs.opennms.org/opennms/releases/19.0.1/guide-admin/guide-admin.html#_prtablemonitor) uses the tables above to monitor the status of running processes.
There are no specific configuration parameters necessary, because the configuration of how and which processes are monitored is located in the Net-SNMP configuration.

In OpenNMS, configure just one monitor named something like `Process-Table`.
As soon as the Net-SNMP agent identifies a process is not running in the specified boundaries, the _Error Flag_ table is updated and is changed from `0` to `1`.
The OpenNMS monitor will go down and give you a list of names with the processes that are not in a desired state.

**Pro:**
You have only to configure one PrTable Monitor in OpenNMS, regardless of how many processes you want to monitor.
The detailed configuration of which process needs to be monitored is configured on the monitored system itself; the SNMP agent needs to be configured anyway, and configuration management tools are in place in larger environments.
It is possible to configure in detail how many processes and which processes need to be monitored.
Only one service goes down if multiple processes fail.

**Cons:**
There is only one service in OpenNMS for all services, it is not possible to notify different people for specific processes.
In case you have one process that fails and the monitor goes down and a second process fails, the event reason in OpenNMS documents only the event reason for the initial process failure.
