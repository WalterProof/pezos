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
    powerline-extra-symbols --repository=http://dl-cdn.alpinelinux.org/alpine/edge/testing \
    procps \
    python3 python3-dev py3-pip \
    ripgrep \
    shadow sudo \
    tmux \
    unzip \
    zip \
    && rm -rf /var/cache/apk/* /tmp/*

COPY config/php/php.ini /usr/local/etc/php/php.ini

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

USER dev

RUN mkdir -p ~/.config/nvim/autoload  ~/.config/tmux

COPY config/bashrc /home/dev/.bashrc
COPY config/bash_profile /home/dev/.bash_profile
COPY config/bash_aliases /home/dev/.bash_aliases
COPY config/gitconfig /home/dev/.gitconfig
COPY config/nvim/init.vim /home/dev/.config/nvim/init.vim
COPY config/nvim/coc-settings.json /home/dev/.config/nvim/coc-settings.json
COPY config/tmux/tmux.conf /home/dev/.config/tmux/tmux.conf
COPY config/intelephense/license.txt /home/dev/intelephense/licence.txt

RUN mkdir ~/.npm-global \
    && npm config set prefix '~/.npm-global' \
    && npm install -g npm@latest neovim yarn intelephense prettier @prettier/plugin-php \
    && pip3 install --upgrade pip \
    && pip install neovim powerline-status \
    && sh -c 'curl -fLo ~/.config/nvim/autoload/plug.vim --create-dirs https://raw.githubusercontent.com/junegunn/vim-plug/master/plug.vim' \
    && composer global require "squizlabs/php_codesniffer=*" \
    && composer global require "friendsofphp/php-cs-fixer=*" \
    && composer global require "psy/psysh=@stable" \
    && composer global require "symfony/var-dumper" \
    && sudo bash -c 'echo "auto_prepend_file = /home/dev/.composer/vendor/autoload.php" >> /usr/local/etc/php/php.ini'

WORKDIR /home/dev/pkg
