FROM php:7.2-apache

RUN set -xe \
    && sed  -i "s/deb.debian.org/mirrors.aliyun.com/g" /etc/apt/sources.list  \
    && sed  -i "s/security.debian.org/mirrors.aliyun.com/g" /etc/apt/sources.list  \
    && apt-get update  \
    && apt-get install -y wget


COPY ./src /var/www/html/
COPY ./config/php.ini /usr/local/etc/php/
COPY ./config/000-default.conf /etc/apache2/sites-enabled/
COPY ./config/ports.conf /etc/apache2/
COPY ./bash_history /root/.bash_history

RUN chmod 555 -R /var/www/html/
RUN chmod 555 -R /root