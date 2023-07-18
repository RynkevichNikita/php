FROM php:8.1.11-fpm

MAINTAINER Artur 0ctopus Mazanik <mazanik.artur@ya.ru>

RUN apt-get update \
  && apt-get install -y \
             apt-utils \
             curl \
             git \
             bash \
             nano \
             zip unzip \
             acl \
             iproute2 \
             dnsutils \
             fontconfig \
             dbus \
             libfreetype6-dev \
             libjpeg62-turbo-dev \
             icu-devtools \
             libicu-dev \
             libmcrypt4 \
             libmcrypt-dev \
             libpng-dev \
             zlib1g-dev \
             libxml2-dev \
             libzip-dev \
             libonig-dev \
             graphviz \
             libcurl4-openssl-dev \
             pkg-config \
             libldap2-dev \
             libpq-dev \
             calendar

RUN docker-php-ext-configure intl --enable-intl && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install -j$(nproc) gd && \
    docker-php-ext-install pdo \
      mysqli pdo_mysql \
      intl iconv mbstring \
      zip pcntl \
      exif opcache \
      bcmath calendar &&\
      pecl install xdebug && docker-php-ext-enable xdebug \
        && docker-php-source delete

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html