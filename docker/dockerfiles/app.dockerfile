FROM php:8-fpm-alpine

WORKDIR /var/www/html

RUN apk update

# RUN apk add sudo

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

RUN apk add --no-cache bash curl git


RUN curl -sS https://get.symfony.com/cli/installer | bash

ENV PATH="$HOME/.symfony5/bin:$PATH"

RUN mv /root/.symfony5/bin/symfony /usr/local/bin/symfony

RUN git config --global user.email "app@app.com"
RUN git config --global user.name "app app"

RUN apk add --update bzip2-dev

RUN docker-php-ext-install bz2

RUN docker-php-ext-install pdo pdo_mysql

RUN apk add autoconf

RUN apk add build-base
RUN apk add --update linux-headers

RUN pecl install xdebug

RUN docker-php-ext-enable xdebug

RUN apk add nginx

COPY ./docker/nginx/nginx.conf /etc/nginx/nginx.conf

COPY ./docker/entrypoint.sh /etc/entrypoint.sh

RUN chmod +x /etc/entrypoint.sh

CMD [ "/etc/entrypoint.sh" ]