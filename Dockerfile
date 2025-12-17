#Install Base Image
FROM php:8.1-apache

#Copy files
COPY . .

#Install dependencies
RUN docker-php-ext-install mysqli pdo pdo_mysql || true

#Expose port
EXPOSE 80