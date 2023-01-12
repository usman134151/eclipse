#!/bin/bash
cd /var/www/html/dev-tenant.eclipsescheduling.com
sudo su
git pull
composer install
npm install
npm run dev
