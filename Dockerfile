FROM php:8.2-apache

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Enable mod_rewrite
RUN a2enmod rewrite

# Copy all files to Apache root
COPY . /var/www/html/

# Install dependencies (if composer.json exists)
WORKDIR /var/www/html/
RUN composer install

EXPOSE 80
