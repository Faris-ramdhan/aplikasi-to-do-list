<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Task;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Membuat 3 Kategori
        $kategoriSkripsi = Category::create(['name' => 'Tugas Kuliah & Skripsi']);
        $kategoriIT = Category::create(['name' => 'Proyek & IT']);
        $kategoriPribadi = Category::create(['name' => 'Aktivitas Pribadi']);

        // 2. Menyiapkan 10 Data Tugas Contoh
        $tasks = [
            [
                'category_id' => $kategoriSkripsi->id,
                'title' => 'Menyusun Bab 1 Proposal Aplikasi Karang Taruna',
                'description' => 'Fokus pada latar belakang masalah di desa Parungserab.',
                'status' => 'in-progress',
                'deadline' => Carbon::now()->addDays(3)->toDateString(),
                'priority' => 'high',
            ],
            [
                'category_id' => $kategoriIT->id,
                'title' => 'Testing Endpoint API menggunakan Postman',
                'description' => 'Memastikan semua respon JSON dari backend sudah sesuai format.',
                'status' => 'done',
                'deadline' => Carbon::now()->subDays(1)->toDateString(),
                'priority' => 'medium',
            ],
            [
                'category_id' => $kategoriPribadi->id,
                'title' => 'Sesi Workout: Fokus Pembentukan Otot',
                'description' => 'Latihan beban sesuai jadwal untuk menaikkan massa otot lengan dan dada.',
                'status' => 'pending',
                'deadline' => Carbon::now()->toDateString(),
                'priority' => 'high',
            ],
            [
                'category_id' => $kategoriIT->id,
                'title' => 'Mempelajari Dokumentasi Laravel Filament v3',
                'description' => 'Eksplorasi fitur Widget dan kustomisasi Resource.',
                'status' => 'done',
                'deadline' => Carbon::now()->subDays(2)->toDateString(),
                'priority' => 'high',
            ],
            [
                'category_id' => $kategoriSkripsi->id,
                'title' => 'Meeting dengan Ketua Karang Taruna',
                'description' => 'Membahas kebutuhan fitur geotagging untuk pelaporan kegiatan lingkungan.',
                'status' => 'pending',
                'deadline' => Carbon::now()->addDays(5)->toDateString(),
                'priority' => 'high',
            ],
            [
                'category_id' => $kategoriPribadi->id,
                'title' => 'Merapikan Setup Meja PC',
                'description' => 'Membersihkan keyboard dan merapikan manajemen kabel di bawah meja.',
                'status' => 'pending',
                'deadline' => Carbon::now()->addDays(1)->toDateString(),
                'priority' => 'low',
            ],
            [
                'category_id' => $kategoriIT->id,
                'title' => 'Perpanjang Layanan Single Web Hosting',
                'description' => 'Cek tagihan di Hostinger sebelum jatuh tempo bulan depan.',
                'status' => 'pending',
                'deadline' => Carbon::now()->addDays(7)->toDateString(),
                'priority' => 'high',
            ],
            [
                'category_id' => $kategoriSkripsi->id,
                'title' => 'Mencari Referensi UI/UX Android',
                'description' => 'Cari referensi desain material di internet untuk tampilan mobile.',
                'status' => 'in-progress',
                'deadline' => Carbon::now()->addDays(2)->toDateString(),
                'priority' => 'medium',
            ],
            [
                'category_id' => $kategoriPribadi->id,
                'title' => 'Belanja Kebutuhan Makanan Protein Tinggi',
                'description' => 'Beli telur, dada ayam, dan susu untuk stok mingguan pendukung latihan fisik.',
                'status' => 'pending',
                'deadline' => Carbon::now()->addDays(1)->toDateString(),
                'priority' => 'medium',
            ],
            [
                'category_id' => $kategoriIT->id,
                'title' => 'Merapikan Repository GitHub',
                'description' => 'Commit dan push perubahan terakhir agar kode lebih terstruktur.',
                'status' => 'pending',
                'deadline' => Carbon::now()->toDateString(),
                'priority' => 'low',
            ],
        ];

        // Memasukkan semua data tugas ke dalam database
        foreach ($tasks as $task) {
            Task::create($task);
        }
    }
}