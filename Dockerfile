FROM chialab/php-dev:8.0

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

