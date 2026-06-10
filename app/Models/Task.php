<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // Pastikan category_id masuk ke dalam fillable
    protected $fillable = [
        'category_id',
        'title',
        'description',
        'status',
        'deadline',
        'priority',
    ];

    // INI ADALAH FUNGSI YANG DICARI OLEH FILAMENT
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}