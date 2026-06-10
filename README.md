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
