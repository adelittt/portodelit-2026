<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    // Tambahkan baris ini untuk memberi izin input data ✨
    protected $fillable = [
        'title',
        'description',
        'status',
        'tags',
        'image',
    ];
}
