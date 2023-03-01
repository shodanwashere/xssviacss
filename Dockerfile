FROM nginx

RUN rm /usr/share/nginx/html/*
COPY site/ /usr/share/nginx/html/
