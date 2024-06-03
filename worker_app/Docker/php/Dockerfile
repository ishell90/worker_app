FROM php:8.2.19-fpm-alpine3.20

RUN apk update \
    && apk upgrade \
    && apk add curl libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql pgsql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

#ADD ./php.ini /usr/local/etc/php/conf.d/40-custom.ini

WORKDIR /var/www/worker_app

CMD ["php-fpm"]
