FROM devilbox/php-fpm-8.2:latest

RUN apt-get install autoconf
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug