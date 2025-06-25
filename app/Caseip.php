<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caseip extends Model
{
    protected $table ='case';
    protected $fillable = [
        'id',
        'tipeiphone',
        'warna',
        'stok',
        'harga',
        'gambar'
    ];
}