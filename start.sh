#!/bin/sh

php artisan serve --host=0.0.0.0 --port=8000 &

npm run dev -- --host=192.168.56.124
