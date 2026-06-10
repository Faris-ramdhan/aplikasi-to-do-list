# To-Do List App (Laravel 10 & Filament v3)

Aplikasi manajemen tugas (To-Do List) sederhana dan interaktif yang dibangun menggunakan **Laravel 10** dan **Filament Panel v3**. Aplikasi ini dilengkapi dengan fitur relasi kategori, manajemen status, prioritas tugas, filter data, dan *dashboard* statistik *real-time*.

## Fitur Utama
* **Manajemen Kategori:** Mengelompokkan tugas berdasarkan kategori.
* **Manajemen Tugas (CRUD):** Mencatat tugas dengan detail (Judul, Deskripsi, Status, Deadline, Prioritas).
* **Indikator Visual:** *Badge* warna untuk membedakan Status (Pending, In Progress, Done) dan Prioritas.
* **Filter Data:** Menyaring daftar tugas berdasarkan Status dan Kategori.
* **Dashboard Statistik:** *Widget* ringkasan jumlah tugas berdasarkan statusnya secara *real-time*.
* **Data Dummy:** Dilengkapi dengan *seeder* bawaan untuk keperluan pengujian.

## Persyaratan Sistem
* PHP ^8.1
* Composer
* MySQL (XAMPP / Laragon / dsb)

## Instruksi Instalasi

Ikuti langkah-langkah di bawah ini untuk menjalankan aplikasi di komputer lokal (*localhost*):

**1. Persiapan Folder & *Dependencies***
Buka terminal/CMD, arahkan ke folder *project*, lalu jalankan:
```bash
composer install

**2. Persiapan Folder & *Dependencies***
copy .env.example .env
php artisan key:generate

3. Konfigurasi Database
Buka file .env dan sesuaikan nama database kamu (pastikan kamu sudah membuat database kosong bernama iwu_todo di phpMyAdmin):

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=iwu_todo
DB_USERNAME=root
DB_PASSWORD=


4. Migrasi & Seeder Data
Jalankan perintah berikut untuk membuat struktur tabel dan mengisi data dummy otomatis (10 tugas contoh & 3 kategori):
php artisan migrate --seed

5. Pembuatan Akun Admin
Buat akun untuk masuk ke dalam panel aplikasi:
php artisan make:filament-user

6. Jalankan Aplikasi
Jika menggunakan XAMPP, kamu bisa langsung mengaksesnya melalui browser di:
http://localhost/IWU/public/admin

Atau menggunakan development server bawaan Laravel:
php artisan serve

Lalu akses http://127.0.0.1:8000/admin di browser kamu.
