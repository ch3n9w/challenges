FROM ubuntu:20.04

RUN sed -i "s/http:\/\/archive.ubuntu.com/http:\/\/mirrors.ustc.edu.cn/g" /etc/apt/sources.list && \
    sed -i "/security.ubuntu.com/d" /etc/apt/sources.list && \
    apt-get update && \
    DEBIAN_FRONTEND=noninteractive apt-get -y install tzdata software-properties-common && \
    apt-get update && \
    apt-get -y upgrade && \
    apt-get -y install vim apache2 php php-mysql mysql-server-8.0


COPY ./security.sql /security.sql
RUN rm -r /var/www/html
COPY ./html /var/www/html

COPY ./config/php.ini /etc/php/php.ini

RUN service mysql restart && \
    mysql -e "create user test@localhost identified by 'test';" -u root &&\
    mysql -e "grant all privileges on *.* to test@localhost;" -u root && \
    mysql -e "CREATE DATABASE security;" -u test -ptest&& \
    mysql -e "source /security.sql" -u test -ptest && \
    rm /security.sql

RUN echo 'ServerName 127.0.0.1' >> /etc/apache2/apache2.conf

ADD start.sh /
RUN chmod +x /start.sh
CMD ["/start.sh"]
