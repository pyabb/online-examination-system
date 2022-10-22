build:
	docker-compose build

up:
	docker-compose up -d

ps:
	docker-compose ps

stop:
	docker-compose stop

rm:
	docker-compose rm -fv

connect:
	docker-compose exec base_falcon sh

rebuild:
	make stop
	make rm
	make build
	make up
