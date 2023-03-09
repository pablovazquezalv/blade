FROM php:7.4-apache

RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip pdo_mysql

COPY . /var/www/html/

RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

RUN a2enmod rewrite