#!/bim/bash

set -e

git pull origin main 

php8.3 artisan down

php8.3 composer.phar install --no dev -- optimize-autoloader

php8.3 artisan migrate --force

php8.3 artisan config:cache

php8.3 artisan event:cache

php8.3 artisan route:cache

php8.3 artisan view:cache

php8.3 artisan up