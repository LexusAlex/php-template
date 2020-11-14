# Шаблон для php проектов

Структура:
/infrastructure - файлы для запуска приложения
/public - корень

Построен на [docker](https://www.docker.com/get-started) что подразумевает под собой
запуска отдельного процесса в контейнере.

## Состав
В образах всегда указывает конкретную версию.
При сборке выбираем нужный пакет.
Любой пакет можно заменить

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

Запуск команды в техническом контейнере:
1. make php-cli name=composer
2. make php-cli name='php -v'
3. make php-cli name='composer require slim/slim slim/psr7'
