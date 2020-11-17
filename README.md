# Шаблон для php проектов

Структура:
/infrastructure - файлы для запуска приложения
/public - корень

Построен на [docker](https://www.docker.com/get-started) что подразумевает под собой
запуска отдельного процесса в контейнере.

## Состав
В образах всегда нужно указывать конкретную версию образа.
При сборке выбираем нужный пакет.
Любой пакет можно заменить любым.

Сборка 1.

nginx + php-fpm docker-compose.yml
1. nginx:1.19-alpine
2. php:7.4-fpm-alpine
3. php:7.4-cli-alpine
4. mariadb:10

## Использование
```
make init - полный цикл пересборки
make build - собрать контейнеры из образов
make up - запуск контейнеров
make down - остановка контейнеров
```

Сборка 2.

apache + php-fpm docker-compose-apache.yml
1. httpd:2.4-alpine
2. php:7.4-fpm-alpine

## Использование
```
make build-apache - собрать контейнеры из образов
make up-apache - запуск контейнеров
make down-apache - остановка контейнеров
```

Запуск команды в техническом контейнере:
1. make php-cli name=composer
2. make php-cli name='php -v'
3. make php-cli name='composer require slim/slim slim/psr7'
