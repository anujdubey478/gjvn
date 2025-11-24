<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topper extends Model
{
    use HasFactory;

    protected $fillable = [
        'class_name',
        'first_rank_name',
        'second_rank_name',
        'third_rank_name',
        'is_active',
        'order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
