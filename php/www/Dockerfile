# Image de base : PHP avec Apache
FROM php:8.2-apache

# Installation des extensions nécessaires
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Copie des fichiers de l'application dans le répertoire web d'Apache
COPY . /var/www/html/

# Configuration des droits d'accès
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# Activation du module rewrite (souvent utile avec PHP)
RUN a2enmod rewrite

# Exposition du port
EXPOSE 80
