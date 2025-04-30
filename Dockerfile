FROM php:latest-fpm-alpine

WORKDIR /var/www/html

COPY . /var/www/html

RUN apk add --no-cache --update zip unzip libzip-dev

RUN docker-php-ext-install pdo pdo_mysql zip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN chown -R www-data:www-data /var/www/html /bootstrap/cache /storage

EXPOSE 9000

ENTRYPOINT ["php-fpm"]