# Guide Book Project

## **Langkah-Langkah**

### 1. **Clone repository**

```bash
git clone https://github.com/HikmalRP/Ticketing_App_Bengkod.git
```

### 2. **Masuk ke direktori**

```bash
cd Ticketing_App_Bengkod
```

### 3. **Buat env**

Untuk konfigurasi database

```bash
copy .env.example .env
```

### 4. **Install Composser**

Agar command artisan bisa berjalan

```bash
composer install
```

### 5. **Generate Application Key**

Membuat kunci enkripsi aplikasi agar aplikasi bisa berjalan

```bash
php artisan key:generate
```

### 6. **Konfigurasi env**

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ticketing_app_bengkod
DB_USERNAME=root
DB_PASSWORD=
```

### 7. **Jalankan migrasi**

```bash
php artisan migrate
```

### 8. **Migrasi seeder**

```bash
php artisan db:seed
```

### 9. **Install Dependency Frontend**

```bash
npm install
```

Setelah proses instalasi selesai, jalankan build frontend

```bash
npm run build
```

### 10. **Jalankan server**

```bash
php artisan serve
```
