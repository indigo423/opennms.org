---
title: Using the Platform
---

## Framework Overview

The rich and open source-friendly Java ecosystem enables building a powerful monitoring application stack.
OpenNMS persists monitoring and node inventory information in [PostgreSQL](http://postgresql.org).

<img src="../images/overview-api-architecture.svg" />

## Java-based Framework

The database schema is version controlled with [Liquibase](http://www.liquibase.org/) which allows easier updates and maintenance.
OpenNMS uses Hibernate as data persistence for PostgreSQL.

With OpenNMS you have a  choice of different time series databases:

* **[RRDtool](http://oss.oetiker.ch/rrdtool/)**: for maximal compatibility and small and medium sized performance data collections
* **[JRobin](http://www.opennms.org/wiki/JRobin)**: Java based RRD storage for maximum platform independence and small and medium sized performance data collections
* **[NewTS](https://opennms.github.io/newts/)**: For maximal scalability and medium to large performance data collections
