# Filament docker 

## Installation

    ```bash
    cd code
    cp .env.example .env
    docker-compose run --rm inventory-app composer install
    docker-compose run --rm inventory-app php artisan key:generate
    ```
