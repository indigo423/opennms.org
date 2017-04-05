---
title: Automated Orderings
date: 19:46 2017-04-05
author: Marcel Fuhrmann
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: wiki
    tag: [use case, wiki]
---

### A self-sufficient printer environment

#### Prologue

This article isn't a step by step tutorial and it is a little bit trimmed.
But it contains a full working configure set!
You will definitely need some OpenNMS experience to implement or understand it.
So feel free to adapt or improve it.
The OpenNMS Wiki has the complete version.

OpenNMS usually stands for network and server monitoring.
But like every good tool you can use (or misuse?!) OpenNMS in other scenarios as well.
If that is a good solution, is completely your choice!

Imagine, you have a big printer environment and you don't want to order toner cadridges for every device manually.
So the goal is to let OpenNMS do that job for you.
The configuration for this is quite simple and adaptable.


#### Problems / Challenge

* The printers have to provide snmp data.
In some cases the datacollection must be enhanced.
For example: http://issues.opennms.org/browse/NMS-5781
* Some OpenNMS default automated processes like cleanups and acknowledges will cross your plan.
* Avoid redundant configuration
* Keep it simple/adaptable

#### Configuration: Ordering toner cartridges
##### Asset fields

All nodes need some filled asset fields.
It's important because they are used for the notifications.
Similarly important are the categories.
One category for the notification filter (NameOf...Vendor) and the other for thresholding (TH-TONER-...).

```xml
<node foreign-id="101prt01" node-label="101prt01">
 <interface ip-addr="172.27.25.171" snmp-primary="P">
  <monitored-service service-name="SNMP"/>
 </interface>
 <category name="NameOfKyoceraSupplyVendor"/>
 <category name="TH-TONER-Kyocera1128"/>
 <category name="poll-5min"/>
 <asset name="manufacturer" value="Kyocera Mita"/>
 <asset name="zip" value="38118"/>
 <asset name="serialNumber" value="QRD0X12345"/>
 <asset name="address1" value="Braunschweig Street 111"/>
 <asset name="department" value="My Company"/>
 <asset name="city" value="Braunschweig"/>
 <asset name="division" value="Office Braunschweig"/>
 <asset name="modelNumber" value="FS-1128 MFP"/>
</node>
```

##### Custom events

We don't want automaticly created threshold (low/full) events.
So we create our own events.
Also we need a specific order-event to generate a order notification.

```xml
<event>
  <uei>uei.opennms.org/custom/mfp/kyocera/toner/tk130/low</uei>
  <event-label>User-defined threshold event uei.opennms.org/custom/mfp/kyocera/toner/tk130/low</event-label>
  <descr>Threshold exceeded for %service% datasource %parm[ds]% on interface %interface%, parms: %parm[all]%</descr>
  <logmsg dest="logndisplay">Threshold exceeded for %service% datasource %parm[ds]% on interface %interface%, parms: %parm[all]%</logmsg>
  <severity>Warning</severity>
</event>
<event>
  <uei>uei.opennms.org/custom/mfp/kyocera/toner/tk130/full</uei>
  <event-label>User-defined threshold event uei.opennms.org/custom/mfp/kyocera/toner/tk130/full</event-label>
  <descr>Threshold rearmed for %service% datasource %parm[ds]% on interface %interface%, parms: %parm[all]%</descr>
  <logmsg dest="logndisplay">Threshold rearmed for %service% datasource %parm[ds]% on interface %interface%, parms: %parm[all]%</logmsg>
  <severity>Warning</severity>
</event>
<event>
  <uei>uei.opennms.org/custom/mfp/kyocera/toner/tk130/order</uei>
  <event-label>User defined threshold event: Kyocera Toner TK130 Order</event-label>
  <descr>Tonerbestellung: %nodelabel%</descr>
  <logmsg dest="logndisplay">%parm[all]%</logmsg>
  <severity>Normal</severity>
</event>

```

##### Database modification

We require a little auxiliary table to build the UEI strings in our automations.
A simple table with toner UEI strings for each model (and toner color if there would be a difference). 


```sql
CREATE TABLE supplyevents (id integer, event varchar(256));
INSERT INTO supplyevents (id, event) VALUES ('1','mfp/kyocera/toner/tk130/');
opennms=# select * from supplyevents;
 id |           event
----+---------------------------
  1 | mfp/kyocera/toner/tk130/
( 1 rows)
```

##### Threshd packages

Threshd packages for each printer model.
Binded on a surveillance category '''TH-TONER-Kyocera1128'''.

```xml
<package name="TH-TONER-Kyocera1128">
 <filter>categoryname == 'TH-TONER-Kyocera1128'</filter>
 <include-range begin="1.1.1.1" end="254.254.254.254"/>
 <service name="SNMP" interval="300000" user-defined="false" status="on">
  <parameter key="thresholding-group" value="TH-TONER-Kyocera1128"/>
 </service>
</package>
```
##### Thresholds

Also required is a threshold group for the used printer model.
It contains low/full threshold definitions.

```xml
<group name="TH-TONER-Kyocera1128" rrdRepository="/opt/opennms/share/rrd/snmp/">
  <expression type="low" ds-type="prtMarkerSuppliesIndex"
	      value="30.0" rearm="80.0" trigger="1"
	      ds-label="prtMarkerSuppliesDescription"
	      triggeredUEI="uei.opennms.org/custom/mfp/kyocera/toner/tk130/low"
	      rearmedUEI="uei.opennms.org/custom/mfp/kyocera/toner/tk130/full"
	      filterOperator="or" expression="prtMSLevel / prtMSMaxCapacity * 100">
    <resource-filter field="prtMarkerSuppliesDescription">^TK\-130</resource-filter>
    <resource-filter field="prtMarkerSuppliesDescription">^TK\-130S</resource-filter>
  </expression>
</group>
```
##### Vacuumd config

And here is "the magic": Three automations are required to do the job!

###### Automations

* The first automation **orderResource** is used to check if there is a unacknowledged new toner low event and no order event.
If so, OpenNMS generates an order event and acknowledges the low event.
It's very important to check the presence of order events because every OpenNMS restart will trigger a new toner low event.
So every OpenNMS restart will order new toner.
Really expensive!
* The second automation **rearmResourceCheck** checks if there is a associated and unacknowledged toner full event.
If so, all involved events will be acknowledged.
The case is finished.
* We need a third automation **autoAckResourceNotif** to acknowledge all cleared notifications to tidy up the notification menu.

```xml
<automation name="orderResource" interval="1800000" trigger-name="orderResourceTrigger"  action-name="orderResourceAction" action-event="orderResourceActionEvent" active="true"/>
<automation name="rearmResourceCheck" interval="1800000" trigger-name="rearmResourceCheckTrigger" action-name="rearmResourceCheckAction" active="true" />
<automation name="autoAckResourceNotif" interval="60000" trigger-name="autoAckResourceNotifTrigger" action-name="autoAckResourceNotifAction" active="true" />
```

###### Triggers
```xml
    <trigger name="orderResourceTrigger" operator="&gt;=" row-count="1">
      <statement>
      select distinct
        e.nodeid as _nodeid,
        e.ipaddr as _ipaddr,
        e.eventlogmsg as _eventlogmsg,
        e.eventsource as _eventsource,
        e.serviceid as _serviceid,
        e.eventparms as _eventparms,
        e.eventseverity as _eventseverity,
        e.eventdisplay as _eventdisplay,
        e.eventlog as _eventlog,
        e.eventuei as _lowuei,
        'uei.opennms.org/custom/'||se.event||'order' as _orderuei,
        now() as _ts
      from
        events e
        join supplyevents se
          on e.eventuei = 'uei.opennms.org/custom/'||se.event||'low'
      where
        e.eventuei='uei.opennms.org/custom/'||se.event||'low' and
        e.eventackuser is null and
        not exists (
          select
            e2.eventid
          from
            events e2
          where
            e2.nodeid=e.nodeid and
            e2.eventuei='uei.opennms.org/custom/'||se.event||'order' and
            e2.eventackuser is null
        );
      </statement>
    </trigger>    <trigger name="rearmResourceCheckTrigger" operator="&gt;=" row-count="1">
      <statement>
        select distinct
          now() as _ts,
          e.nodeid as _nodeid,
          e.eventuei as _fulluei,
          'uei.opennms.org/custom/'||se.event||'order' as _orderuei,
          'uei.opennms.org/custom/'||se.event||'low' as _lowuei
        from
          events e
          join supplyevents se
            on e.eventuei = 'uei.opennms.org/custom/'||se.event||'full'
        where
          eventuei='uei.opennms.org/custom/'||se.event||'full' and
          e.eventackuser is null and
          lower(e.eventdescr) not like '%configuration has been changed%';
      </statement>
    </trigger>
    <trigger name="autoAckResourceNotifTrigger" operator="&gt;=" row-count="1">
      <statement>
        select
          n.notifyid as _notifyid
        from
          notifications n
          join events e on e.eventid = n.eventid
          join category_node cn on cn.nodeid=n.nodeid
          join categories c on c.categoryid=cn.categoryid
        where
          e.eventseverity=2 and
          n.pagetime &lt; now()-interval '2 weeks' and
          ((n.answeredby is null) or n.answeredby = '') and
          lower(c.categoryname) like 'pr-%'
      </statement>
    </trigger>
```

###### Actions

```xml
  <action name="orderResourceAction">
    <statement>
      update
        events
      set
        eventackuser = 'admin',
        eventacktime = ${_ts},
        eventseverity = 3
      where
        nodeid=${_nodeid} and
        eventuei = ${_lowuei} and
        eventackuser is null
    </statement>
  </action>

  <action name="rearmResourceCheckAction">
    <statement>
      UPDATE
        events
      SET
        eventackuser = 'admin',
        eventacktime = ${_ts},
        eventseverity = 2
      WHERE
        nodeid = ${_nodeid} and
        (
          eventuei = ${_fulluei} or
          eventuei = ${_orderuei} or
          eventuei = ${_lowuei}
        ) and
        eventackuser is null
    </statement>
  </action>


  <action name="autoAckResourceNotifAction">
    <statement>
      update
        notifications
      set
        answeredby = 'TonerBitch',
        respondtime = now()
      where
        notifyid = ${_notifyid}
    </statement>
  </action>
```

###### Action events

```xml
    <action-event name="orderResourceActionEvent" for-each-result="true">
      <assignment type="field" name="uei" value="${_orderuei}"/>
      <assignment type="field" name="nodeid" value="${_nodeid}"/>
      <assignment type="field" name="interface" value="${_ipaddr}"/>
      <assignment type="field" name="eventparms" value="${_eventparms}"/>
      <assignment type="field" name="eventseverity" value="${_eventseverity}"/>
    </action-event>
```
##### Notifications

The notifications are triggered by the order events.
We use a regex filter (attention on ~ in the UEI field!) to reduce the amount of notification definitions.
With the **rule** tag only the correct nodes will be selected.
The **destinationPath** contain the email address of the related vendor.
And **text-message** field uses asset and threshold fields to create a readable purchase order.

```xml
<notifications>
  <notification name="Toner-Order-Kyocera" status="on" writeable="yes">
    <uei>~uei.opennms.org/custom/mfp/kyocera/toner/tk.*/order</uei>
    <rule>(catincNameOfKyoceraSupplyVendor)</rule>
    <destinationPath>Toner-Order-KyoceraSupplyVendor</destinationPath>
    <text-message>Dear Sir or Madam,&lt;br&gt;&#xd;
      &lt;br&gt;&#xd;
      the printer %nodelabel%, %asset[manufacturer]% %asset[modelnumber]%, SN: %asset[serialnumber]% reports for unit %parm[#1]% a value of %parm[value]% %. Please send a unit of %parm[1]% to the following address:&lt;br&gt;&#xd;
      &lt;br&gt;&#xd;
      %asset[department]%&lt;br&gt;&#xd;
      %asset[division]%, %nodelabel%&lt;br&gt;&#xd;
      %asset[address1]%&lt;br&gt;&#xd;
      %asset[zip]%, %asset[city]%&lt;br&gt;&#xd;
      &lt;br&gt;&#xd;
      Thanks you very much.&lt;br&gt;&#xd;
      &lt;br&gt;&#xd;
      Best regards&lt;br&gt;&#xd;
      %asset[department]%&lt;br&gt;&#xd;
      &lt;br&gt;&#xd;
      &lt;br&gt;&#xd;
      -This email was automaticly generated. It's not possible to answer-</text-message>
    <subject>Toner-Order #%noticeid% - %nodelabel%</subject>
    <numeric-message>111-%noticeid%</numeric-message>
  </notification>
```
