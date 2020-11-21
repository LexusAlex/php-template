FROM php:7.4-cli-alpine

RUN docker-php-ext-install pdo_mysql

RUN mv $PHP_INI_DIR/php.ini-development $PHP_INI_DIR/php.ini

RUN apk add unzip

ENV COMPOSER_ALLOW_SUPERUSER 1

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/bin --filename=composer --quiet \
    && rm -rf /root/.composer/cache

WORKDIR /template