# Imagen base con Apache + PHP
FROM php:8.2-apache

# Copia el contenido del proyecto al servidor
COPY . /var/www/html/

# Expone el puerto 80
EXPOSE 80
