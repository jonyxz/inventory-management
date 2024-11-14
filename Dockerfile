FROM php:8.2-fpm

RUN apt-get update && \
    apt-get install -y --no-install-recommends \
    libpng-dev \
    libzip-dev \
    libjpeg-dev \
    libicu-dev \
    libfreetype6-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    curl \
    libpq-dev \
    && apt-get clean && \
    rm -rf /var/lib/apt/lists/* && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install pdo pdo_pgsql intl zip 

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/code

COPY ./code /var/www/code

RUN if [ ! -d "vendor" ]; then \
    cp .env.example .env && \
    composer install && \
    php artisan key:generate; \
    fi

EXPOSE 8000

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]