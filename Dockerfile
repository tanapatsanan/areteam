FROM php:8.1-apache

# Install system deps and PHP extensions commonly needed
RUN apt-get update && apt-get install -y --no-install-recommends \
    zip unzip git libzip-dev libpng-dev libjpeg-dev libfreetype6-dev libonig-dev && \
    docker-php-ext-configure gd --with-jpeg --with-freetype && \
    docker-php-ext-install pdo pdo_mysql mbstring gd zip && \
    apt-get clean && rm -rf /var/lib/apt/lists/*

# Composer (from official Composer image)
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy app
COPY . /var/www/html

# Install PHP dependencies if composer.json exists
RUN if [ -f composer.json ]; then composer install --no-dev --optimize-autoloader; fi

# Enable Apache rewrite for pretty URLs if needed
RUN a2enmod rewrite

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
CMD ["apache2-foreground"]
