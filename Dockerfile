FROM php:7.4.30-apache

#RUN rm /var/www/html/*
COPY site/ /var/www/html
EXPOSE 80
