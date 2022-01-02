FROM php:8-fpm-alpine

WORKDIR /var/www/html

RUN apk update \
    && docker-php-ext-install pdo pdo_mysql