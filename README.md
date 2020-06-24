# PHP Training

## Prerequisites

* First, you need to install Docker [e.g. Docker for Mac](https://docs.docker.com/docker-for-mac/) and Docker-Compose.

## How to start/stop the containers
* to start all containers in detached mode:
```bash
docker-compose up -d
```

* to access the CLI of the PHP container:
```bash 
docker-compose run --rm php-cli
```

* to stop **all** containers:
```bash 
docker stop $(docker ps -q)
``` 

* to stop the current docker-compose containers:
```bash
docker-compose down
```

## How to access your files
* Add your files to the `public/`-directory
* You can access them via [http://fizzbuzz.localtest.me/app.php](http://fizzbuzz.localtest.me/app.php) 
