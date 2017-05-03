FROM php:7.1-apache

RUN apt-get update && apt-get install -y libgpgme11-dev
RUN pecl install gnupg
RUN echo "extension=gnupg.so" >> /usr/local/etc/php/conf.d/gnupg.ini
