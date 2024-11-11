# Use the official PHP image from DockerHub
FROM php:8.2-apache

# Enable mod_rewrite for Apache (necessary for some PHP apps)
RUN a2enmod rewrite

# Copy the PHP files into the container's web server directory
COPY . /var/www/html/

# Set the working directory to the app directory
WORKDIR /var/www/html/

# Expose the default Apache port
EXPOSE 80
