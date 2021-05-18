#Start from the latest ubuntu image
FROM ubuntu:20.04

#Install Apache2, PHP7.4, MariaDB, debconfutils and VIM
RUN apt-get update \
    && DEBIAN_FRONTEND=noninteractive apt-get install -y git libnss-sss nano apache2 php7.4 libapache2-mod-php vim \
    && apt-get install -y debconf-utils \
    && apt-get clean

RUN echo "phpmyadmin phpmyadmin/internal/skip-preseed boolean true" | debconf-set-selections
RUN echo "phpmyadmin phpmyadmin/reconfigure-webserver multiselect apache2" | debconf-set-selections
RUN echo "phpmyadmin phpmyadmin/mysql/admin-user string nobody" | debconf-set-selections
RUN echo "phpmyadmin phpmyadmin/mysql/admin-pass password password" | debconf-set-selections
RUN echo "phpmyadmin phpmyadmin/mysql/app-pass password password" |debconf-set-selections
RUN echo "phpmyadmin phpmyadmin/app-password-confirm password password" | debconf-set-selections
RUN echo "phpmyadmin phpmyadmin/dbconfig-install boolean false" | debconf-set-selections

RUN apt-get install -y -q phpmyadmin mariadb-server \
    && apt-get clean

WORKDIR /etc/apache2
COPY apache2.conf .
COPY envvars .
COPY ports.conf .

WORKDIR /etc/apache2/sites-available
COPY 000-default.conf .
#COPY default-ssl.conf .

WORKDIR /etc/phpmyadmin
COPY config.inc.php .

# WORKDIR /etc/mysql/
# RUN rm debian.cnf
# COPY debian.cnf .

# WORKDIR /etc/mysql/mariadb.conf.d
# RUN rm 50-server.cnf
# COPY 50-server.cnf .

# WORKDIR /etc/init.d
# RUN rm mysql
# COPY mysql .

# RUN echo yes
# VOLUME /var/lib/mysql

# RUN mkdir -p /var/run/mysqld /var/lib/mysql
# RUN usermod -d /var/lib/mysql/ nobody
# RUN find /var/lib/mysql -type f -exec touch {} \;
# RUN touch /var/run/mysqld/mysqld.sock
# RUN chmod -R 4777 /var/log/mysql /var/lib/mysql
# RUN chown -R nobody:nogroup /var/lib/mysql
# RUN chown -R nobody:nogroup /var/run/mysqld
# RUN chown -R nobody:nogroup /var/run/mysqld/mysqld.sock


CMD /bin/bash
ENTRYPOINT []
 
RUN ln -sf /usr/share/zoneinfo/America/Chicago /etc/localtime
RUN echo "America/Chicago" > /etc/timezone
RUN dpkg-reconfigure --frontend noninteractive tzdata
ENV DEBIAN_FRONTEND=noninteractive

RUN chmod -R 777 /var/lib/mysql /var/log/mysql /var/lib/phpmyadmin
RUN rm -fr /var/lib/mysql/mysql /var/lib/mysql/performance_schema
RUN apt-get install uuid-runtime


WORKDIR /app
COPY script.sh .
RUN chmod a+x script.sh
RUN chown -R 777 /app
#RUN a2enmod ssl 
#EXPOSE 8081
#CMD ["apachectl", "-D", "FOREGROUND"]
#CMD ["/bin/bash", "/app/script.sh"]

