start:
	 ./vendor/laravel/sail/bin/sail up -d
down:
	docker-compose down --remove-orphans
migrate:
	./vendor/laravel/sail/bin/sail artisan migrate

