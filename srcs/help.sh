apt update
apt -y upgrade
apt install -y nginx
mv default /etc/nginx/sites-available/
##########installation mysql################
apt install -y gnupg
apt install -y wget
echo "mysql-apt-config mysql-apt-config/select-server select mysql-5.7" | debconf-set-selections
wget https://dev.mysql.com/get/mysql-apt-config_0.8.14-1_all.deb
apt install -y lsb-release
dpkg -i mysql-apt-config*
apt update
apt install -y mysql-server
###########installation phpmyadmin##############
apt install -y php-mbstring php-zip php-gd
apt install -y zip
wget https://files.phpmyadmin.net/phpMyAdmin/5.0.1/phpMyAdmin-5.0.1-all-languages.zip
unzip phpMyAdmin-5.0.1-all-languages.zip
mv phpMyAdmin-5.0.1-all-languages /var/www/html/phpmyadmin
apt install -y php7.3-fpm
apt install -y php7.3-mysql
apt install -y php7.3-mbstring
###########installation wordpress##############
wget https://wordpress.org/latest.tar.gz
tar xpf latest.tar.gz
mv wordpress /var/www/html
chown -R mysql: /var/lib/mysql
service mysql start 
##########configuration##############
mysql -u root -e "CREATE USER 'admin'@'localhost' IDENTIFIED BY 'admin';"
mysql -u root -e "GRANT ALL PRIVILEGES ON *.* TO 'admin'@'localhost' WITH GRANT OPTION;"
rm /var/www/html/phpmyadmin/config.sample.inc.php
mv config.inc.php /var/www/html/phpmyadmin/
mv /var/www/html/phpmyadmin /var/www/html/wordpress
chown -R www-data:www-data /var/www/html/wordpress
mysql -u root -e "source /var/www/html/wordpress/phpmyadmin/sql/create_tables.sql"
##########SSL certifation###########
mv nginx.key /etc/ssl/nginx/
mv nginx.crt
