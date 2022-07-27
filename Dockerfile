FROM php:8.1-fpm-alpine

WORKDIR /app

COPY . /app

CMD php artisan serve --host=0.0.0.0 --port=8080

EXPOSE 8080