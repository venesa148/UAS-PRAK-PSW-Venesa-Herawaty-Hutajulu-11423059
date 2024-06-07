<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Court extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'title',
        'price',
        // 'court_code',
        'description',
        'pengelola'
    ];
}