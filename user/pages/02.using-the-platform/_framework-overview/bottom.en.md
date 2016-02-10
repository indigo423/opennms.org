---
title: Using the Platform
---

## Framework Overview

The open source friendly and rich Java ecosystem allows to build a powerful monitoring application stack.
OpenNMS persists monitoring and node inventory information with [PostgreSQL](http://postgres.org).

![plattform-overview](/images/overview-api-architecture.png)

## Java-based Framework

The database schema is version controlled with [Liquibase](http://www.liquibase.org/) which allows easier updates and maintenance.
OpenNMS uses Hibernate as data persistence for PostgreSQL.

With OpenNMS you have a  choice between different Time Series Data Bases:

* **[RRDtool](http://oss.oetiker.ch/rrdtool/)**: for maximal compatibility and small and medium sized performance data collections
* **[JRobin](http://www.opennms.org/wiki/JRobin)**: Java based RRD storage for maximum platform independence and small and medium sized performance data collections
* **[NewTS](https://opennms.github.io/newts/)**: For maximal scalability and medium to large performance data collections