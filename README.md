Stock Inventory Web - Genesys Test

Instalasi & Konfigurasi

1. Clone Repository

```bash
git clone https://github.com/RanggaRijasa/Genesys-Test-Logic-dan-Test-Praktek.git
cd StockInventory
```

2. Instal Dependency Laravel & Frontend

```bash
composer install
npm install
```

3. Konfigurasi File Environment

```bash
cp .env.example .env
```

Lalu edit file `.env` dan sesuaikan bagian database:

```
DB_CONNECTION=mysql
DB_DATABASE=stockinventory_db
DB_USERNAME=root
DB_PASSWORD=       
```

4. Generate APP_KEY

```bash
php artisan key:generate
```

5. Buat Database MySQL

Masuk ke phpMyAdmin / MySQL dan jalankan perintah berikut:

```sql
CREATE DATABASE stockinventory_db;
USE stockinventory_db;
```

6. Migrasi Struktur Database

```bash
php artisan migrate
```

7. Jalankan Server

```bash
php artisan serve
npm run dev
```

Akses aplikasi di:  
http://127.0.0.1:8000

Reset Data (Opsional)

Gunakan ini untuk mereset isi database:

```sql
DELETE FROM purchases;
DELETE FROM sales;
DELETE FROM inventories;
ALTER TABLE inventories AUTO_INCREMENT = 1;
```
