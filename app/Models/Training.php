<?php

namespace App\Models;

use App\Models\Mentor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Training extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'mentor_id',
        'harga',
        'tanggal',
        'deskripsi'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    // public function mentor()
    // {
    //     return $this->belongsTo(Mentor::class, 'mentor_id');
    // }
}
