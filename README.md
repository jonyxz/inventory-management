- **Disusun oleh**:
  - Reza Aditya Ramadhan / A11.2022.14467
  - Johan Ridho Akbar Auradhana / A11.2022.14472
  - Muhammad Fachruddin / A11.2022.14476


# Laravel Filament Inventory Management

Sebuah aplikasi manajemen inventaris berbasis Laravel Filament yang dirancang untuk mengelola persediaan barang di suatu toko. Aplikasi ini berjalan dalam lingkungan Docker dengan PostgreSQL sebagai database utama.

## Fitur Utama

- **Widget Ringkasan Stok Barang**  
  Menampilkan informasi stok barang langsung di dashboard admin, mencakup total stok, nilai stok, dan harga rata-rata barang untuk kemudahan pemantauan.

- **Pengelolaan Data Admin**  
  Memungkinkan admin untuk mengelola data persediaan dengan akses yang terstruktur dan efisien.

- **Pengelolaan Data Barang**  
  Mempermudah penambahan, pengubahan, dan penghapusan data barang di dalam sistem.

- **Pengelolaan Kategori Barang**  
  Menyediakan pengelompokan barang ke dalam berbagai kategori, sehingga memudahkan analisis dan pemantauan data.

- **Pengelolaan Data Pemasok**  
  Memudahkan pelacakan informasi pemasok untuk mendukung manajemen rantai pasokan.

- **Pencatatan Riwayat Perubahan**  
  Menyimpan riwayat setiap perubahan data beserta admin yang bertanggung jawab, untuk menjaga transparansi dan akuntabilitas.

## Teknologi yang Digunakan

- **Laravel Filament**
- **Docker & Docker Compose**
- **PostgreSQL**

Aplikasi ini diharapkan dapat membantu pengelolaan persediaan barang secara efisien dan terstruktur dengan kemudahan pemantauan langsung dari dashboard.

---

## Persyaratan

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

### Konfigurasi Aplikasi
Masuk ke shell container aplikasi `inventory-management-app`

1. Salin file .env.example menjadi .env:

```bash
    cp .env.example .env
```
2. Install dependensi Laravel Filament menggunakan Composer:

```bash
    composer install
```

3. generate application key:

```bash
    php artisan key:generate
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
