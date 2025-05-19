FROM php:8.2-apache

# Copiar todo el contenido de la carpeta actual al directorio raíz de Apache
COPY . /var/www/html/

# Cambiar propietario a www-data y establecer permisos adecuados
RUN chown -R www-data:www-data /var/www/html/ \
    && chmod -R 755 /var/www/html/

# Configurar Apache para usar index.html e index.php como página de inicio
RUN echo "DirectoryIndex index.html index.php" >> /etc/apache2/apache2.conf


