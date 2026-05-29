<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'problem_analysis',
        'system_requirements',
        'architecture',
        'tech_stack',
        'erd_image',
        'flowchart_image',
    ];
}
