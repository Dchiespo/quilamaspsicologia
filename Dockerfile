# Imagen oficial de PHP + Apache
FROM php:8.2-apache

# Habilitar extensiones necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copiar el proyecto al servidor
COPY . /var/www/html/

# Dar permisos correctos
RUN chmod -R 755 /var/www/html

# Habilitar mod_rewrite por si algún día lo necesitas
RUN a2enmod rewrite
