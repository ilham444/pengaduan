<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    // Kolom yang dapat diisi melalui Mass Assignment
    protected $fillable = [
        'judul', 'deskripsi', 'status', 'tanggapan', 'user_id', 'created_at', 'updated_at'
    ];

}
