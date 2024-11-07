# Filament docker 

## Installation

    ```bash
    cd code
    cp .env.example .env
    docker-compose run --rm app composer install
    docker-compose run --rm app php artisan key:generate
    ```
