# silverstripe docker starter

Simplify the installation of a Silverstripe Dev Environment.

It is based on the [silverstripe/installer](https://github.com/silverstripe/silverstripe-installer) and includes a
`docker-compose.yml`-File, that spawns a webserver and a database to run Silverstripe. It also includes Webpack to
compile scss/js and to autoreload the browser when you change anything.


## Disclaimer

‼️‼️‼️‼️‼️‼️‼️‼️‼️‼️‼️‼️‼️‼️‼️‼️  
WARNING  
This is still in beta and might change.  
For local development only.  
‼️‼️‼️‼️‼️‼️‼️‼️‼️‼️‼️‼️‼️‼️‼️‼️


## Install

**Requirements**

You need to have Docker installed. So if you don't have it, head over to https://www.docker.com/ and install it.

**Get the Code**

Via git

```
git clone git@github.com:brandcom/silverstripe-docker-starter.git && rm -fr silverstripe-docker-starter/.git`
```

or composer

```
composer create-project -s dev  brandcom/silverstripe-docker-starter silverstripe-docker-starter
```

or download a zip file 

https://github.com/brandcom/silverstripe-docker-starter/archive/refs/heads/latest.zip


**Start the containers**

```
cd silverstripe-docker-starter
docker-compose up -d
```

Silverstripe is now running: http://localhost:8000/  
The Admin is here: http://localhost:8000/admin/ (admin/admin)


## What's included?

* SilverStripe 4.10.0 running on Apache with PHP8.0
* MariaDB 10.5.15
* Webpack 5.73.0 as frontend build tool with sass support and live reload


## Running commands

**composer**

```
docker run --rm --interactive --tty --volume $PWD:/app composer <command>
```

**npm**

```
 docker run --rm --interactive --tty --workdir /app --volume $PWD:/app node:18.4-alpine npm <command>
```
