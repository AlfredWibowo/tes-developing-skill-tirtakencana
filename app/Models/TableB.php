<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableB extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_toko',
        'nominal_transaksi',
    ];

    public $timestamps = false;

    const UPDATED_AT = null;

    public function getRouteKeyName()
    {
        return 'kode_toko';
    }
}
