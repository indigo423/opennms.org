---
title: Running an OpenNMS Minion with Docker
date: 12:23 2018-05-30
author: Ronny Trommer
body_classes: header-lite fullwidth blogstyling
taxonomy:
    category: docker
    tag: [docker, minion]
---

Running a Minion with Docker is relatively easy, you just need to have Docker installed. It makes also updating the Minion very easy cause you can follow the tags _latest_ for latest stable version or trying a _bleeding_ snapshot. You can configure everything through environment variables. At a bare minimum you need something like this:

```
docker run --rm -d \
  -e "MINION_LOCATION=Apex-Office" \
  -e "OPENNMS_BROKER_URL=tcp://opennms-ip:61616" \
  -e "OPENNMS_HTTP_URL=http://opennms-ip:8980/opennms" \
  -e "OPENNMS_HTTP_USER=minion" \
  -e "OPENNMS_HTTP_PASS=minion" \
  -e "OPENNMS_BROKER_USER=minion" \
  -e "OPENNMS_BROKER_PASS=minion" \
  opennms/minion:latest -c
```

Using `docker run --rm` takes care you don't have state in the image and it is deleted as soon you stop the process.
As simple this is to start and configure a Minion, this approach has two disadvantages:

* The credentials used for authentication can be exposed to logs
* It is a one-shot command you run from the CLI and it will not survive reboots

To address the credentials problem please read the [Dealing with Credentials](https://github.com/opennms-forge/docker-minion#dealing-with-credentials) section in our readme which explains how to avoid this.

The second part is relatively easy to address using [Docker Compose](https://docs.docker.com/compose/) and _systemd_.
You need two things, a Docker compose file which describes and configures the service and a systemd unit file. You can find a [docker-compose.yml](https://github.com/opennms-forge/docker-minion/blob/master/docker-compose.yml) example in our repository.
Download it the file modify it to your needs in the following directory structure `/etc/docker/minion/docker-compose.yml`.

Create a docker-compose service unit file with the following content `/etc/systemd/system/docker-compose@.service`:

```
[Unit]
Description=%i service with docker compose
Requires=docker.service
After=docker.service

[Service]
Restart=always
WorkingDirectory=/etc/docker/%i
ExecStart=/usr/local/bin/docker-compose up
ExecStop=/usr/local/bin/docker-compose stop

[Install]
WantedBy=multi-user.target
```

You can now enable and start your service with `systemctl enable docker-compose@minion` and `systemctl start docker-compose@minion`.
If you want you can now add more Docker Compose services in any subdirectory and control them with systemd.

gl & hf
