FROM php:latest

WORKDIR /app

COPY . /app

CMD php -S 0.0.0:$PORT -t /app