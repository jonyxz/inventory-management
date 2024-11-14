- **Disusun oleh**:
  - Reza Aditya Ramadhan / A11.2022.14467
  - Johan Ridho Akbar Auradhana / A11.2022.14472
  - Muhammad Fachruddin / A11.2022.14476


# Laravel Filament Inventory Management

Sebuah aplikasi manajemen inventaris berbasis Laravel Filament yang berjalan di dalam Docker, dengan PostgreSQL sebagai database.
- **Widget Ringkasan Stok Barang**: Tampilkan langsung di dashboard admin untuk memantau stok, nilai stok, dan harga rata-rata.

## 🛠️ Persyaratan

- **Docker** dan **Docker Compose**

## 📥 Clone Repository

```bash
    git clone https://github.com/jonyxz/inventory-management.git
    cd inventory-management
```

## 📦 Instalasi 

### Build Aplikasi

Build dan jalankan aplikasi menggunakan `docker compose` :

```bash
    docker-compose up -d --build
```

### Migrasi Database

Masuk ke shell container aplikasi `inventory-management-app` dan migrasi database untuk membuat tabel:

```bash
    php artisan migrate
```

### Tambahkan Data Dummy

Mengisi database dengan data dummy (opsional):

```bash
    php artisan migrate:fresh --seed
```

### 🌐 Akses Aplikasi

Setelah aplikasi berjalan, Anda dapat mengakses dashboard admin melalui:

- **URL**: [http://localhost:8000](http://localhost:8000)
- **Login Admin**:
  - **Email**: `admin@example.com`
  - **Password**: `katasandi`

> **Catatan**: Jika Anda menggunakan data dummy, akun admin dengan email `admin@example.com` dan password `katasandi` sudah disediakan.
