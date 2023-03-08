#!/bin/bash
cd /var/www/html/dev-tenant.eclipsescheduling.com
sudo su
git stash
git pull

composer install
npm install
npm run dev
php artisan route:cache
php artisan cache:clear
