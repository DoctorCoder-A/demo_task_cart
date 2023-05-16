<h1>Start</h1>

первый запуск

    docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs

    
`cp .env.example .env`

`make init`

после первого запуска

`make start`

остановка

`make down`


страница:

`localhost`
