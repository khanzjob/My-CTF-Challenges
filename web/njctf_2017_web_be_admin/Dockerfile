FROM ctftraining/base_image_nginx_mysql_php_56

LABEL Organization="CTFTraining" Author="CoColi <CoColizdf@gmail.com>"

MAINTAINER CoColi@CTFTraining <cocolizdf@gmail.com>


COPY src /var/www/html

RUN cp /usr/local/etc/php/php.ini-production /usr/local/etc/php/php.ini \
    && sed -i -e 's/output_buffering = 4096/output_buffering = on/' /usr/local/etc/php/php.ini \ 
    && mv /var/www/html/flag.sh / \
    && chmod +x /flag.sh
