FROM hauptj/nginx-php:latest

ADD $PWD /var/www/

COPY $PWD/files/root/entrypoint.sh /entrypoint.sh

WORKDIR /var/www/

EXPOSE 80

ENTRYPOINT ["/entrypoint.sh"]