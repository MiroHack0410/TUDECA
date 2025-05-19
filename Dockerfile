# Usa imagen oficial con Apache y PHP
FROM php:8.2-apache

# Copia tu app al directorio correcto de Apache
COPY . /var/www/html/

# Asegúrate de que los archivos tienen permisos adecuados
RUN chmod -R 755 /var/www/html/

# Activa index.html y/o index.php como página de inicio
RUN echo "DirectoryIndex index.html index.php" >> /etc/apache2/apache2.conf

