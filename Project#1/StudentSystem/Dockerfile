FROM php:7.2-apache

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

RUN docker-php-ext-install pdo_mysql && docker-php-ext-enable pdo_mysql

# Uncomment if you require the gd php extension
RUN apt-get update && \
    apt-get install -y libfreetype6-dev libjpeg62-turbo-dev && \
    docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ && \
    docker-php-ext-install gd \
    && docker-php-ext-install -j$(nproc) gd

# Uncomment if you require opcache
RUN docker-php-ext-install opcache

# Uncomment if you requrie apache rewrite mod.
RUN a2enmod rewrite

# Uncomment to enable xdebug
# RUN pecl install xdebug-beta &&\
#     docker-php-ext-enable xdebug &&\
#     echo "xdebug.remote_enable=on" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini &&\
#     echo "xdebug.remote_autostart=on" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini &&\
#     echo "xdebug.remote_connect_back=off" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini &&\
#     echo "xdebug.remote_handler=dbgp" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini &&\
#     echo "xdebug.profiler_enable=0" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini &&\
#     echo "xdebug.profiler_output_dir=\"/var/www/html\"" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini &&\
#     echo "xdebug.remote_port=9000" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini &&\
#     echo "xdebug.remote_host = host.docker.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

RUN apt-get clean

# Docker imajı çalıştığında Apache'yi başlat
CMD ["apache2-foreground"]