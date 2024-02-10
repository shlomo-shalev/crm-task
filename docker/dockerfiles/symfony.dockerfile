FROM php:8-alpine

WORKDIR /var/www/html

RUN apk update

# RUN apk add sudo

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

RUN apk add --no-cache bash curl git

RUN curl -sS https://get.symfony.com/cli/installer | bash

ENV PATH="$HOME/.symfony5/bin:$PATH"

RUN mv /root/.symfony5/bin/symfony /usr/local/bin/symfony

