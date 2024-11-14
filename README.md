    Nama Kelompok:
    Reza Aditya Ramadhan / A11.2022.14467
    Johan Ridho Akbar Auradhana / A11.2022.14472
    Muhammad Fachruddin / A11.2022.14476


# Laravel Filament Inventory Management

Sebuah aplikasi manajemen inventaris berbasis Laravel Filament yang berjalan di dalam Docker, dengan PostgreSQL sebagai database.
- **Ringkasan Stok Barang**: Widget ringkasan stok langsung di dashboard admin untuk memantau stok, nilai stok, dan harga rata-rata

## 🛠️ Persyaratan

- **Docker** dan **Docker Compose**

## 📥 Clone Repository

    ```bash
    git clone https://github.com/jonyxz/inventory-management.git
    cd inventory-management
    ```


## 📦 Instalasi 
    
### 1. Salin Konfigurasi .env
    ```bash
    cd code
    cp .env.example .env
    ```

### 3. Jalankan Aplikasi
    ```bash
    docker-compose up -d --build
    ```