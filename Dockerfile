FROM php:8.0.3-apache-buster
RUN mkdir -p /var/www/html/backend
COPY . /var/www/html/
COPY . /var/www/html/backend

EXPOSE 80/tcp

