FROM php:8.1-fpm-alpine

# Instalar dependencias y extensiones necesarias
RUN apk add --no-cache \
    bash \
    linux-headers \
    libpng libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd \
    && docker-php-ext-install pdo pdo_mysql mysqli \
    && apk del libpng-dev libjpeg-turbo-dev freetype-dev

# Reducir tamaño eliminando cachés
RUN rm -rf /var/cache/apk/* /tmp/*


# Copiar el archivo php.ini
COPY php.ini /usr/local/etc/php/