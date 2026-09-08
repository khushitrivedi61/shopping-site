FROM php:8.2-apache

# Install PDO MySQL and MySQLi extensions
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy project files into web root
COPY . /var/www/html/

# Copy startup script and make executable
COPY start.sh /start.sh
RUN chmod +x /start.sh

# Expose Render default port
EXPOSE 10000 80

# Run entrypoint script
CMD ["/start.sh"]
