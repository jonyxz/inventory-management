**Nama Kelompok:**
Reza Aditya Ramadhan / A11.2022.14467
Johan Ridho Akbar Auradhana / A11.2022.144
Muhammad Fachruddin / A11.2022.14476

# Filament docker 

## Installation

    ```bash
    cd code
    cp .env.example .env
    docker-compose run --rm inventory-app composer install
    docker-compose run --rm inventory-app php artisan key:generate
    ```
