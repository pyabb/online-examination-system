FROM php:7.4.30-fpm-alpine3.16
RUN apk update
RUN docker-php-ext-install bcmath mysqli pdo pdo_mysql
WORKDIR /var/www/html
COPY . /var/www/html
