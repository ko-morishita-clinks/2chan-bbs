FROM php:8.1.6-apache

RUN apt-get update && apt-get install -y \
    libonig-dev \
  && docker-php-ext-install pdo_mysql mysqli


COPY ./docker/php/php.ini /usr/local/etc/php/php.ini