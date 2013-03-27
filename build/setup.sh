#!/bin/bash


cd ..

php artisan key:generate

php artisan migrate --package=cartalyst/sentry

php artisan migrate

php artisan db:seed




