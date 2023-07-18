#!/bin/bash
cd /var/www/html/beta.eclipsescheduling.com
sudo su
git stash
git pull
composer install
npm install
npm run dev
php artisan route:cache
php artisan cache:clear
sudo chmod -R 777 /var/www/html/beta.eclipsescheduling.com/storage
sudo chown -R www-data:www-data /var/www/html/beta.eclipsescheduling.com
