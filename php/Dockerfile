FROM php:7.2-apache

#RUN apt-get update && /
#    apt-get install php7.2-mysqli

#RUN /usr/local/bin/docker-php-ext-configure pdo_mysql &&  \
RUN /usr/local/bin/docker-php-ext-install mysqli && \
    /usr/local/bin/docker-php-ext-install pdo_mysql && \
    /usr/local/bin/docker-php-ext-configure pdo_mysql --with-pdo-mysql

#COPY src/ /var/www/html/

