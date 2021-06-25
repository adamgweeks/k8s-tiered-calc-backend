FROM php:8.0.3-apache-buster
COPY . /var/www/html/backend
EXPOSE 80/tcp

