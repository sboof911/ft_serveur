apt update
apt -y upgrade
apt install -y nginx
apt install -y gnupg
apt install -y wget
wget https://dev.mysql.com/get/mysql-apt-config_0.8.14-1_all.deb
apt install -y lsb-release
#dpkg -i mysql-apt-config* 1 1 4
#apt update
#apt install mysql-server
#service mysql start
apt install -y php-mbstring php-zip php-gd
apt install -y zip
wget https://files.phpmyadmin.net/phpMyAdmin/5.0.1/phpMyAdmin-5.0.1-all-languages.zip
unzip phpMyAdmin-5.0.1-all-languages.zip
mv phpMyAdmin-5.0.1-all-languages /var/www/html/phpmyadmin
mv default /etc/nginx/sites-available/
apt install -y php7.3-fpm
chown -R www-data:www-data /var/www/html/phpmyadmin
apt install -y php7.3-mysql
apt install -y php7.3-mbstring
wget https://wordpress.org/latest.tar.gz
tar xpf latest.tar.gz
mv wordpress /var/www/html
chown -R www-data:www-data /var/www/html/wordpress
#mysql -u root -e "CREATE USER 'admin'@'localhost' IDENTIFIED BY 'admin';"
#mysql -u root -e "GRANT ALL PRIVILEGES ON *.* TO 'admin'@'localhost' WITH GRANT OPTION;"
mv config.inc.php /var/www/html/phpmyadmin/
rm /var/www/html/phpmyadmin/config.sample.inc.php
mv /var/www/html/phpmyadmin /var/www/html/wordpress
#mysql -uroot -e "source /var/www/html/phpmyadmin/sql/create_tables.sql"
