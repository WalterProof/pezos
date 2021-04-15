FROM php:7.4-cli-alpine

# shadow and sudo to avoid running the container a root
# see:
# https://github.com/nodejs/docker-node/blob/master/docs/BestPractices.md
# https://github.com/mhart/alpine-node/issues/48
#
# alpine-sdk and autoconf to be able to install xdebug

ARG UID
ARG GID

COPY php.ini /usr/local/etc/php/php.ini

RUN apk add --no-cache --purge \
    alpine-sdk autoconf gmp-dev icu-dev libsodium-dev \
    bash bash-completion \
    curl \
    git \
    libzip-dev \
    shadow sudo \
    unzip \
    zip \
    && rm -rf /var/cache/apk/* /tmp/* \
    && addgroup -S -g $GID dev \
    && adduser -S -u $UID -G dev -s /bin/bash dev \
    && echo "dev ALL=(root) NOPASSWD:ALL" > /etc/sudoers.d/dev \
    && chmod 0440 /etc/sudoers.d/dev \
    && docker-php-ext-install zip \
    && docker-php-ext-configure zip \
    && docker-php-ext-install intl \
    && pecl install libsodium xdebug \
    && docker-php-ext-install gmp \
    && docker-php-ext-enable xdebug sodium \
    && curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer \
    && chmod +x /usr/local/bin/composer

WORKDIR /var/pkg
