---
title: Process Monitoring with SNMP
date: 09:42 2017-04-29
author: Marcel Fuhrmann, Ronny Trommer
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: wiki
    tag: [monitoring, process, snmp]
---

A default use case in monitoring is you want to make sure processes which don't provide network services are running on your systems.
For the reason, they provide no network services you can't use black box testing and you need an agent on your system which gives you an insight view on your operating system.
An agent which is easy to install and configure on Linux or Unix is the Net-SNMP agent and using a monitoring solution which supports SNMP like OpenNMS.

By default there are basically two ways with Net-SNMP, using the HOST-RESOURCES-MIB or using the UCD-SNMP-MIB which are both provided by the Net-SNMP agent.
The result using one or the other is the same but it has some impact on configuring and maintaining your monitoring system.
This article will give you some insight views to decide when you should choose one or another.
In this example, we will discuss different solutions monitoring a two single processes and a multiprocess application.

## Using the Host Resources MIB

When you are using the Host Resources MIB the key information are in two tables, the `hrSWRunName` and the according `hrhrSWRunStatus`.

In OpenNMS you can use the [HostResourceSwRunMonitor](http://docs.opennms.org/opennms/releases/19.0.1/guide-admin/guide-admin.html#_hostresourceswrunmonitor).
The key parameters are

* `service-name`: The name of the process you want to monitor from the `hrSWRunName` table.
* `match-all`: In case there are multiple processes running, all processes need to be in the run-level state
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

For each process, you want to monitor you have to create a service monitor named like `Process-docker-proxy`, `Process-tincd` and `Process-dockerd`.

**Pro:**
It allows to setup a granular monitoring for every process.
The service monitors can be used in "Service Level Management" on the start page for availability calculation and notifications for each process.

**Cons:**
You have to configure and maintain for each process you want to monitor in OpenNMS a service monitor. It is not possible to configure something like: "At least a number x of y processes need to be running to have the service to be ok.

## Using the UCD-SNMP-MIB

Net-SNMP has a mechanism to monitor processes on the system with the `proc` directive in the configuration file.
Directive `proc` is pretty easy to configure:

`proc docker-proxy 20 5`

First argument is the name of the process you want to monitor in this case the process named `docker-proxy`.
There should be run at least 5 to maximum 20 processes named `docker-proxy` to be ok.
The maximum and minimum number of processes is optional and when they don't exist, at least one process should be running to be ok.
If you would like use a configuration management tool to configure your SNMP agent, you can create use the `includeDir /etc/snmp/conf.d` directive in `snmpd.conf`.
That way you can drop for each application you want to monitor a  `.conf` file with the `proc` directive and will be included.

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
iso.3.6.1.4.1.2021.2.1.5.4 = INTEGER: 1
```

Error Message

```
snmpwalk -v 2c -c useVersion3 localhost .1.3.6.1.4.1.2021.2.1.101
iso.3.6.1.4.1.2021.2.1.101.1 = ""
iso.3.6.1.4.1.2021.2.1.101.2 = ""
iso.3.6.1.4.1.2021.2.1.101.3 = ""
iso.3.6.1.4.1.2021.2.1.101.4 = ""
```

Error Flag

```
snmpwalk -v 2c -c useVersion3 localhost .1.3.6.1.4.1.2021.2.1.100
iso.3.6.1.4.1.2021.2.1.100.1 = INTEGER: 0
iso.3.6.1.4.1.2021.2.1.100.2 = INTEGER: 0
iso.3.6.1.4.1.2021.2.1.100.3 = INTEGER: 0
iso.3.6.1.4.1.2021.2.1.100.4 = INTEGER: 0
```

To monitor the tables above OpenNMS has a [PrTableMonitor](http://docs.opennms.org/opennms/releases/19.0.1/guide-admin/guide-admin.html#_prtablemonitor) which uses the SNMP tables above.
There are no specific configuration parameters necessary, cause the configuration how the processes are monitored is configured in the Net-SNMP configuration.

In OpenNMS, you configure just one monitor named like `Process-Table`.
As soon the Net-SNMP agent identifies a process is not running in the specified boundaries the _Error Flag_ table is updated and is changed from `0` to `1`.
The OpenNMS monitor will go down and gives you a list of names with the processes which are not in a desired state.

**Pro:**
You have only to configure one PrTable Monitor in OpenNMS, nevertheless how many processes you want to monitor.
The detailed configuration which process needs to be monitored is configured on the system itself, the SNMP agent needs to be configured anyway and configuration management tools are in place in larger environments.
It is possible to configure in detail how many processes and which processes need to be monitored. Only one service goes done if multiple processes fail.

**Cons:**
There is only on service in OpenNMS for all services, it is not possible notify different people for specific processes.
In case you have one process which fails and the monitor goes down and a second process fails, the event reason in OpenNMS documents only the event reason for the initial process failure.
