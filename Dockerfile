FROM php:5.6-apache

RUN sed -i 's#http://deb.debian.org/debian#http://archive.debian.org/debian#g; s#http://security.debian.org/debian-security#http://archive.debian.org/debian-security#g; /^deb .*stretch-updates/ s/^/# /' /etc/apt/sources.list \
    && printf 'Acquire::Check-Valid-Until "false";\nAcquire::AllowInsecureRepositories "true";\nAcquire::AllowDowngradeToInsecureRepositories "true";\nAPT::Get::AllowUnauthenticated "true";\n' > /etc/apt/apt.conf.d/99no-check-valid-until \
    && apt-get update \
    && apt-get install -y --no-install-recommends \
        git \
        unzip \
        zip \
        libpng-dev \
        libjpeg62-turbo-dev \
        libfreetype6-dev \
        libxml2-dev \
        libicu-dev \
        libmcrypt-dev \
        libzip-dev \
        libssl-dev \
        wget \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-configure gd \
        --with-freetype-dir=/usr/include/ \
        --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install \
        pdo \
        pdo_mysql \
        mysqli \
        mbstring \
        intl \
        soap \
        gd \
        zip \
        opcache

RUN a2enmod rewrite

RUN mkdir -p /var/www/html/app/cache /var/www/html/app/logs \
    && chown -R www-data:www-data /var/www/html/app/cache /var/www/html/app/logs \
    && chmod -R 775 /var/www/html/app/cache /var/www/html/app/logs

RUN sed -ri -e 's!/var/www/html!/var/www/html/web!g' \
    /etc/apache2/sites-available/*.conf

RUN echo "date.timezone=UTC" > /usr/local/etc/php/conf.d/timezone.ini

# Composer 1
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --version=1.10.27 \
    && mv composer.phar /usr/local/bin/composer \
    && rm composer-setup.php

WORKDIR /var/www/html

EXPOSE 80