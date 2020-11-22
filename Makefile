### docker
# Полный цикл пересборки проекта
init: down-clear build-pull up
# Собрать контейнеры из образов
build:
	docker-compose build
# Скачать обновления и собрать образы
build-pull:
	docker-compose build --pull
# Запуск контейнеров
up:
	docker-compose up -d
# Перезапустить контейнеры
restart:
	docker-compose restart
# Остановить и удалить все контейнеры с префиксом php-template
down:
	docker-compose down --remove-orphans
# Остановка, удаление контейнеров и удаление томов
down-clear:
	docker-compose down -v --remove-orphans
# Удалить вообще все, что есть в системе
remove-all-system:
	docker system prune -a
# запуск команды в техническом контейнере для composer phpunit и др.
php-cli:
	docker-compose run --rm php-cli $(name)
up-apache-alpine:
	docker-compose -f docker-compose-apache-alpine.yml up -d
down-apache-alpine:
	docker-compose -f docker-compose-apache-alpine.yml down --remove-orphans
build-apache-alpine:
	docker-compose -f docker-compose-apache-alpine.yml build
build-nginx-debian:
	docker-compose -f docker-compose-nginx-debian.yml build
up-nginx-debian:
	docker-compose -f docker-compose-nginx-debian.yml up -d
down-nginx-debian:
	docker-compose -f docker-compose-nginx-debian.yml down --remove-orphans