FROM php:7.3.9-fpm-alpine

RUN apk update \
    && apk add --no-cache curl g++ make autoconf bash

COPY ./php/configurations/* /usr/local/etc/php/conf.d/

RUN docker-php-source extract \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && docker-php-source delete

RUN docker-php-ext-install mysqli bcmath \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && composer global require hirak/prestissimo --no-plugins --no-scripts

CMD ["php-fpm"]