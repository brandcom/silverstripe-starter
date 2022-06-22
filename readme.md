# silverstripe docker starter

### WARNING: This is still in beta and might change

### WARNING: This is still in beta and might change

### WARNING: This is still in beta and might change

### Install

1. get the code

Via git: `git clone git@github.com:brandcom/silverstripe-docker-starter.git`

or composer: `composer create-project -s dev  brandcom/silverstripe-docker-starter my-project`

or download zip: https://github.com/brandcom/silverstripe-docker-starter/archive/refs/heads/latest.zip

2. Start the containers

```
cd silverstripe-docker-starter
docker-compose up -d
```

Silverstripe is now running: http://localhost:8000/  
The Admin is here: http://localhost:8000/admin/ (admin/admin)

### What's included?

* SilverStripe 4.10.0 running on Apache with PHP8.0
* MariaDB 10.5.15
* Webpack 5.73.0 as frontend build tool with sass support and live reload

### Run composer commands

```
docker run --rm --interactive --tty --volume $PWD:/app composer <command>
```

### Run npm commands

```
 docker run --rm --interactive --tty --workdir /app --volume $PWD:/app node:18.4-alpine npm <command>
```
