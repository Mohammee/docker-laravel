# Docker for laravel (web development)

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://travis-ci.org/joemccann/dillinger)

Docker Compose workflow that sets up a LEMP network of containers for local Laravel development.

# Usage:
- To get started, make sure you have Docker installed on your system, and then clone [this](https://github.com/Mohammee/laravel-docker.git) repository.

 - Next, navigate in your terminal to the directory you cloned this, and spin up the containers for the web server by running ``docker-compose up -d --build``.

 - After that completes, install Laravel project added in src by command (`` composer create-project laravel/laravel . `` ) .
 
 
After Docker Compose network worked as well. 
The following are built for our web server, with their exposed ports detailed:

> nginx - :80
> php - :9000
> node - :3001
> mysql - :3306
> mailhog - :8025
> phpmyadmin - :30

# .env file 
All configuration inside .env file ``change it as needas ``
sample of .env file
```sh
DOCKER_COMPOSE_VERSION=3.2


DB_DATABASE=homestead
DB_USER=homestead
DB_PASSWORD=secret
DB_ROOT_PASSWORD=secret

SITE_PORT=8001
PMA_PORT=30

NGINX_VERSION=stable-alpine
MARIADB_VERSION=10.6
COMPOSER_VERSION=latest
NODE_VERSION=latest
MAILHOG_VERSION=latest
```


Three additional containers are included that handle Composer, NPM, and Artisan commands without having to have these platforms installed on your local computer. Use the following command examples from your project root, modifying them to fit your particular use case.

```sh
docker-compose run --rm composer (command like: update)
docker-compose run --rm npm run (command like: install)
docker-compose run --rm artisan (commands)
```

## License

MIT

**Free service, Hell Yeah!, mohammad abo sultan(Eng)**

