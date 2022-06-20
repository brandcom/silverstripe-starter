FROM php:8.0-apache
RUN apt-get update && apt-get upgrade -y
RUN apt-get install -y libicu-dev
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN docker-php-ext-install intl && docker-php-ext-enable intl
RUN a2enmod rewrite
