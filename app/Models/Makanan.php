<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    use HasFactory;

    protected $table = 'makanans';

    protected $primaryKey = 'kd_makanan';
    
    public $incrementing = false;

    protected $fillable = [
        'kd_makanan',
        'nama',
        'kategori',
        'harga',
        'ket',
    ];
}
