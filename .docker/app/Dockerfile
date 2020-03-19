FROM php:7.4.3-fpm

RUN apt-get update -y \
    && apt-get install -y --no-install-recommends git libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql \
    && apt-get clean
