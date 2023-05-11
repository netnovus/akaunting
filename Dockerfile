FROM node:latest AS node
FROM php:8.1-fpm-alpine3.15

# Arguments defined in docker-compose.yml
ARG AKAUNTING_DOCKERFILE_VERSION=0.1
ARG SUPPORTED_LOCALES="en_US.UTF-8"

# Add Repositories
RUN rm -f /etc/apk/repositories &&\
    echo "http://dl-cdn.alpinelinux.org/alpine/v3.15/main" >> /etc/apk/repositories && \
    echo "http://dl-cdn.alpinelinux.org/alpine/v3.15/community" >> /etc/apk/repositories

# Add Dependencies
RUN apk add --update --no-cache \
    nano \
    bash \
    nginx

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

# Install PHP Extensions
RUN chmod +x /usr/local/bin/install-php-extensions && sync && \
    install-php-extensions gd zip intl imap xsl pgsql opcache bcmath mysqli pdo_mysql

# Configure Extension
RUN docker-php-ext-configure \
    opcache --enable-opcache


# COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer
# FROM base as composer
# COPY --from=composer /usr/bin/composer /usr/bin/composer
# ENV COMPOSER_ALLOW_SUPERUSER=1 \
#     COMPOSER_MEMORY_LIMIT=-1 \
#     COMPOSER_HOME=/tmp/composer \
#     PATH="/app/vendor/bin:${PATH}"
# RUN mkdir /tmp/composer && chmod 777 /tmp/composer

# RUN apt-get add --update nodejs nodejs-npm

# Installing composer
RUN curl -sS https://getcomposer.org/installer -o composer-setup.php
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer
RUN rm -rf composer-setup.php

COPY --from=node /usr/local/lib/node_modules /usr/local/lib/node_modules
COPY --from=node /usr/local/bin/node /usr/local/bin/node
RUN ln -s /usr/local/lib/node_modules/npm/bin/npm-cli.js /usr/local/bin/npm
WORKDIR /var/www

RUN chown -R www-data:www-data /var/www

