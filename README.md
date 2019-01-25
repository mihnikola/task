# Task_project
# Ova aplikacija je radjena na operativnom sistemu Ubuntu 18.04
# Za aplikaciju je potrebno da se instalira: php7.2, sa komponentama kao sto su: xml,tokenizer,mbstring,pdo,openssl. Neophodan je apache2 da se instalira, kao i mysql server.
# Aplikacija se nalazi na lokaciji apache servera t.j. /var/www/html/task_project 
# Koraci po kojima se ova aplikacija instalirala su:

Instalacija php verzije 7.2 :
 1. sudo apt-get install software-properties-common
 2. sudo add-apt-repository ppa:ondrej/php
 3. sudo apt-get update
 4. sudo apt-get install php7.2
 5. sudo apt-get install php7.2-zip
 6. sudo apt-get install php-mbstring
 7. sudo apt-get install php-xml
 
 Instalacija mysql servera:
 1.sudo apt install mysql-server
 2.sudo mysql_secure_installation
(Nakon toga ce Vas pitati za konfiguraciju VALIDATE PASSWORD PLUGIN.)
 3. sudo mysql
 
 Instalacija apache servera:
 
   1. sudo apt update
   2. sudo apt install apache2

 
 
 Instalacija composer-a:
1. php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
2. php -r "if (hash_file('sha384', 'composer-setup.php') ===       '93b54496392c062774670ac18b134c3b3a95e5a5e5c8f1a9f115f203b75bf9a129d5daa8ba6a13e2cc8a1da0806388a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
3. php composer-setup.php
4. php -r "unlink('composer-setup.php');"

 Instalacija laravel-a:
 
 php composer.phar global require "laravel/installer" 

 Kreiranje laravel projekta: 
 
 php composer.phar create-project --prefer-dist laravel/laravel /var/www/html/task_project 
 
  Podizanje servera:
  cd /var/www/html/my_laravel php artisan serve
