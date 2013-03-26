#!/bin/bash

cd ..

php artisan migrate --package=cartalyst/sentry

php artisan db:seed




