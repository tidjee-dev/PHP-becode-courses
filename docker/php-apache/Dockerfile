FROM php:8.2-apache

# Enable Apache modules for rewrite and proxy
RUN a2enmod rewrite proxy proxy_http

# Copy the custom Apache configuration
COPY ./my-vhost.conf /etc/apache2/sites-available/000-default.conf

# Expose port 80
EXPOSE 80
