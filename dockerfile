FROM php:8.1-fpm-alpine

# Instalar dependencias necesarias y la extensión pdo_mysql
RUN apk add --no-cache \
    libpng libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    bash \
    linux-headers \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd \
    && apk add --no-cache --virtual .build-deps \
    autoconf \
    dpkg-dev \
    dpkg \
    file \
    g++ \
    gcc \
    libc-dev \
    make \
    pkgconf \
    re2c \
    && apk del .build-deps

# Instalar PDO y PDO_MySQL
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Copiar los archivos de tu proyecto
#COPY . /var/www/html/
