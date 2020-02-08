service php7.3-fpm start
chown -R mysql: /var/lib/mysql;
service mysql start 
nginx -g "daemon off;"
