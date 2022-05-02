# Deploying a Website in an isolated container with Docker and Docker-Compose.

### This project will be deployed using Docker Compose and a  dockerfile that builds a container with Apache2 and PHP.
#
## Technologies used:
* Docker
* Docker-Compose
* PHP
* Apache2
* Visual Studio Code
* VSCode Docker Extension

# Project deployment

In order to run this project, we'll need the following dependencies:

```bash
docker-ce
docker-ce-cli
containerd.io
docker-compose
```

In this example I'll be using a dnf-based distribution (Fedora 34), if needed check dependencies for other distros in the following webpage:

[Install Docker engine, Docker Docs](https://docs.docker.com/engine/install)

Firstly we add the Docker repositories onto DNF
```bash
$   sudo dnf -y install dnf-plugins-core

$   sudo dnf config-manager \
    --add-repo \
    https://download.docker.com/linux/fedora/docker-ce.repo
```
Then we can install Docker and Docker-compose
```bash
 sudo dnf install docker-ce docker-ce-cli containerd.io docker-compose
```
Before running any containerized applications, make sure that the Docker service is running
```bash
sudo systemctl start docker
```

Deployment is as easy as navigating to the repository main directory and running 
```bash
sudo docker-compose up -d
```
Then we can start the project going to [the following link](localhost/php/index.php)
    
    localhost/php/index.php
# Mounting a basic Webserver in a container

We used a Dockerfile to set up a basic webserver running Debian in an unattached mode, Apache2 and PHP.

```dockerfile
FROM php:8.0.0-apache
ARG debian_frontend=noninteractive
RUN apt-get update
```

This file tells Docker to mount a container running the official image of PHP8 and Apache.

It requires to run Debian (the base system) in an noninteractive mode, thus eliminating all user input and helping with the automation of the process.

Then, it tells Debian to update and sync packages. Here we could install all dependencies necessary for running our project, in this case, none.

# Running our webserver

## What options do we have?

### Bare Docker commands.

As we only have a single container, it would be enough to run a docker run command to create and deploy our webserver.

```bash
$ docker build -t sirazazel/webserver:1.0 .
$ docker run --name webserver \
  -p 80:80 \
  -w /var/www/html -v "$(pwd)/www:/var/www/html" \
  -d sirazazel/webserver:1.0 
```

This commands create an image of the dockerfile found on our actual directory (.). This image is then used on the service created with the Run command.

The Run command creates a service with the `--name` Webserver that publishes `-p` port 80 of the container with port 80 of our host, sets the working directory `-w` to `/var/www/html` and then creates and mounts a volume of `/./www` to the working directory of the container.

This service runs in detached `-d` mode, thus meaning it doesn't need any input of the user.

### The better way: Running a docker-compose script.

We can also create a simple Docker-compose script to create the service. Docker-compose scripts are easier to understand and a lot more scalable. They are capable of running and syncing multi-container applications, for example, a LAMP stack.

The webserver, database and database manager are three isolated services that can access only what they need.

And also, the deployment is easier. With Compose, we only need to run two commands to start and stop our applications.

```bash
$ docker-compose up -d
$ docker-compose down
```

Up and down create and destroy our services.
If we don't want to destroy our containers and make them accessible again, we may run:

```bash
$ docker-compose start -d
$ docker-compose stop
```

Start runs an existing service that is offline at the moment, and stop stops the service but mantaining the container offline

This is our docker-compose. In our case, it is a simple enough application, it only has one service, the webserver.

```docker-compose
version: "3.3"
services:
    www:
        build: .
        ports: 
            - "80:80"
        volumes:
            - ./www:/var/www/html
        networks:
            - default
```

The Webserver service, named `www` is built upon an image created by the dockerfile on the same directory, `"."`.

We can see that if we're using a docker-compose, we don't actually need to build an image or pick a pre-existing image, like when running in bare docker cli. The docker-compose already builds our dockerfile for us.

# Visual Studio Code integration

This implementation can be done entirely through Visual Studio Code thanks to the VSCode Docker extension.