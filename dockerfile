FROM php:7.4-fpm-alpine

WORKDIR /var/www/html/

COPY . /var/www/html/

RUN apk update && apk add --no-cache \
    postgresql-dev \
    && docker-php-ext-install pdo pdo_pgsql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

CMD ["php-fpm"]

