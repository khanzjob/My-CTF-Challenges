#!/bin/bash
mysql -e "create database ctftraining;" -uroot -proot 
mysql -e "use ctftraining;drop table users;create table \`users\` (\`id\` int(32) auto_increment primary key,\`username\` varchar(40) not null,\`encrypted_pass\` varchar(100) not null);" -uroot -proot 
sed -i -e "s/this_is_flag/$FLAG/" /var/www/html/config.php