FROM php:7.4-apache

# Instalar extensiones necesarias para PHP
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copiar la configuraci�n de Apache
COPY ./src /var/www/html/

# Habilitar el m�dulo de reescritura de Apache
RUN a2enmod rewrite
