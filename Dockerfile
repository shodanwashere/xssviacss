FROM httpd:latest

RUN rm /usr/local/apache2/htdocs/*
COPY site/ /usr/local/apache2/htdocs/