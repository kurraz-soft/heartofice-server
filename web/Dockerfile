FROM mileschou/phalcon:7.2-apache
COPY ./src /var/www/html
#COPY ./php /usr/local/etc/php

RUN a2enmod rewrite
RUN pecl install xdebug
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && php composer-setup.php --install-dir=/bin --filename=composer
RUN apt-get update
RUN apt-get install git -y
RUN composer install || composer update

EXPOSE 80