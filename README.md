# Шаблон для php проектов

Структура:

/infrastructure - файлы инфраструктуры для запуска приложения

/public - корень

/src - файлы приложения

/tests - тесты

Построен на [docker](https://www.docker.com/get-started) что подразумевает под собой
запуска отдельного процесса в контейнере.

## Состав
В образах всегда нужно указывать конкретную версию образа.
Любой пакет можно заменить любым.
Преимущество докера в том, что можно моделировать реальное окружение.

Сборка 1.

nginx + php-fpm alpine docker-compose.yml
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

apache + php-fpm docker-compose-apache-alpine.yml
1. httpd:2.4-alpine
2. php:7.4-fpm-alpine

## Использование
```
make build-apache-alpine - собрать контейнеры из образов
make up-apache-alpine - запуск контейнеров
make down-apache-alpine - остановка контейнеров
```
Сборка 3.
nginx + php-fpm debian docker-compose-nginx-debian.yml
1. nginx:1.19
2. php:7.4-fpm

## Использование
```
make build-nginx-debian - собрать контейнеры из образов
make up-nginx-debian - запуск контейнеров
make down-nginx-debian - остановка контейнеров
```
Запуск команды в техническом контейнере:
1. make php-cli-alpine name=composer
2. make php-cli-alpine name='php -v'
3. make php-cli-alpine name='composer require slim/slim slim/psr7'

## Тесты

Запуск тестов phpunit. Все способы эквивалентны

```
make phpunit
docker-compose run --rm php-cli-alpine composer test
docker-compose run --rm php-cli-alpine ./vendor/bin/phpunit
```
