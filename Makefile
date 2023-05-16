init: build start composer-install migrate-seed
build:
	./vendor/laravel/sail/bin/sail build --no-cache
start:
	 ./vendor/laravel/sail/bin/sail up -d
down:
	docker compose down -v --remove-orphans
migrate:
	./vendor/laravel/sail/bin/sail artisan migrate
migrate-seed:
	./vendor/laravel/sail/bin/sail artisan migrate
composer-install:
	./vendor/laravel/sail/bin/sail composer install
