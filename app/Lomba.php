<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lomba extends Model
{
    
    protected $table = 'lomba';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kategori',
        'pengumuman',
        'deskripsi',
        'peraturan',
    ];
}
