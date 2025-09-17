FROM php:8.2-apache

# Instalar extensões PDO e MySQL
RUN docker-php-ext-install pdo pdo_mysql