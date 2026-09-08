FROM php:8.2-apache

# Install PDO MySQL and MySQLi extensions
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Configure Apache to listen on both port 80 and port 10000 (Render default)
RUN sed -i 's/Listen 80/Listen 80\nListen 10000/' /etc/apache2/ports.conf && \
    sed -i 's/<VirtualHost \*:80>/<VirtualHost \*:80 \*:10000>/' /etc/apache2/sites-available/000-default.conf

# Copy project files into web root
COPY . /var/www/html/

# Expose ports
EXPOSE 80 10000

# Start Apache directly using official base image command
CMD ["apache2-foreground"]
