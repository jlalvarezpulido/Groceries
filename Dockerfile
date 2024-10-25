# Use the official PHP image as the base image
FROM php:7.4-apache

# Copy the current directory contents into the container at /var/www/html
COPY . /var/www/html

# Expose port 80
EXPOSE 80

# Set the working directory
WORKDIR /var/www/html

# Install any necessary dependencies (optional)
# RUN docker-php-ext-install mysqli pdo pdo_mysql

# Start Apache in the foreground
CMD ["apache2-foreground"]