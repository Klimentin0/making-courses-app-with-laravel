# мультиуровневый билд, оптимизируем размер образа
FROM node:22-alpine AS build-stage

#sqlite bug
RUN apk add --no-cache sqlite sqlite-dev

# рабочая директория
WORKDIR /app

# копируем package.json и install npm dependencies
COPY package.json ./

RUN npm install

#копируем остальной код проекта
COPY . .


RUN npm run build

FROM php:8.3-fpm

RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg62-turbo-dev libfreetype6-dev \
    sqlite3 libsqlite3-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql pdo_sqlite


# Фиксим проблему ненайденным NPM
RUN curl -fsSL https://deb.nodesource.com/setup_16.x | bash - && \
    apt-get install -y nodejs


# рабочая директоря для php
WORKDIR /var/www/html

# копируем
COPY --from=build-stage /app /var/www/html

# ставим компоузер
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

#Всё для ларавель (зависимости)
RUN composer install --no-interaction --optimize-autoloader --no-dev

# Генерация ключа(на будущее)

# Портец открываем
EXPOSE 8000

# Команда на старте
# Copy start script into the container from the root directory
COPY start.sh /usr/local/bin/start.sh

# Делаем скрипт исполняемым
RUN chmod +x /usr/local/bin/start.sh

# Запускаем скрипт на старте
CMD ["/usr/local/bin/start.sh"]
