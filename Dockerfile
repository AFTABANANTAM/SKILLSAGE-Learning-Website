# Use official PHP image
FROM php:8.2-apache

# Set working directory
WORKDIR /var/www/html

# Copy files
COPY . .

# Install composer
RUN apt-get update && apt-get install -y unzip git curl \
    && curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

# Install PHP dependencies
RUN composer install --ignore-platform-reqs

EXPOSE 80
