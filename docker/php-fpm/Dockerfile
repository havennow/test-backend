FROM composer as composer

FROM php:7.4-fpm

WORKDIR "/application"

# Fix debconf warnings upon build
ARG DEBIAN_FRONTEND=noninteractive

# Install selected extensions and other stuff
RUN apt-get update \
    && apt-get install -y git bash wget curl gnupg libbz2-dev zlib1g-dev zip libzip-dev libpng-dev libicu-dev libtidy-dev

RUN docker-php-ext-install opcache pdo pdo_mysql bz2 gd intl tidy tokenizer zip
RUN pecl install redis && docker-php-ext-enable redis
RUN pecl install xdebug && docker-php-ext-enable xdebug

RUN apt-get purge --auto-remove nodejs
# Install Nodejs and Yarn
RUN wget -qO- https://deb.nodesource.com/setup_12.x > /root/node_setup.sh
RUN chmod 777 /root/node_setup.sh | bash -c "/root/node_setup.sh"

RUN apt install -y curl software-properties-common
RUN apt install -y nodejs
RUN npm install yarn --global

COPY --from=composer /usr/bin/composer /usr/bin/composer