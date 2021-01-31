FROM php:7.4-cli-alpine

# shadow and sudo to avoid running the container a root
# see:
# https://github.com/nodejs/docker-node/blob/master/docs/BestPractices.md
# https://github.com/mhart/alpine-node/issues/48
#
# alpine-sdk and autoconf to be able to install xdebug
# automake ctags libluv-dev libuv luajit python nodejs for neovim

ARG UID
ARG GID

RUN apk add --no-cache --purge \
    alpine-sdk autoconf automake libuv luajit gmp-dev icu-dev libsodium-dev \
    bash bash-completion \
    ctags \
    curl \
    fzf --repository http://dl-3.alpinelinux.org/alpine/edge/community/ \
    git \
    libzip-dev \
    libltdl \
    libmcrypt-dev \
    neovim neovim-doc --repository http://dl-3.alpinelinux.org/alpine/edge/community/ libluv-dev \
    nginx \
    nodejs nodejs-npm \
    openrc openssh \
    powerline-extra-symbols --repository=http://dl-cdn.alpinelinux.org/alpine/edge/testing \
    procps \
    python3 python3-dev py3-pip \
    ripgrep \
    shadow sudo \
    tmux \
    unzip \
    zip \
	&& rm -rf /var/cache/apk/* /tmp/* \
    && rc-update add sshd \
    && ssh-keygen -A \
    && rc-status \
    && touch /run/openrc/softlevel

COPY config/php/php.ini /usr/local/etc/php/php.ini
COPY start.sh /usr/local/bin/start

RUN addgroup -S -g $GID dev \
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

RUN ["sudo", "chmod", "+x", "/usr/local/bin/start"]
CMD ["sudo", "/usr/local/bin/start"]
