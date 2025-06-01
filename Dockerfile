FROM php:8.4-cli

# Install tools
RUN apt-get update && apt-get install -y git unzip zip

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Install PHPStan (or Psalm below)
WORKDIR /var/www/html
COPY composer.json composer.json
RUN composer install
