FROM hauptj/nginx-php:latest

ADD $PWD /var/www/

WORKDIR /var/www/

EXPOSE 80

ENTRYPOINT ["/entrypoint.sh"]