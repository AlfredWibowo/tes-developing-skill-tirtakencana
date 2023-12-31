<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableA extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_toko_baru',
        'kode_toko_lama',
    ];

    public $timestamps = false;

    const UPDATED_AT = null;

    public function getRouteKeyName()
    {
        return 'kode_toko_baru';
    }
}
