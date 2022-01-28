<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_mentor'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
