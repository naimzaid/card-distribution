# Use the latest version of PHP 7
FROM php:7-apache

# Set the working directory to /app
WORKDIR /app

# Copy the contents of the current directory to /app in the container
COPY . /app

# Install dependencies required by the project
RUN apt-get update && apt-get install -y \
    libmcrypt-dev \
    libpq-dev \
    libcurl3-dev \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-install \
    mbstring \
    pdo \
    pdo_mysql \
    curl \
    && pecl install mcrypt-1.0.2 \
    && docker-php-ext-enable mcrypt

# Configure Apache to use the public directory
RUN a2enmod rewrite
COPY .htaccess /app/.htaccess

# Expose port 80 to the host
EXPOSE 80

# Start Apache when the container starts
CMD ["apache2-foreground"]
