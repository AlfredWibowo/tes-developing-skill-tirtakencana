<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableC extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_toko',
        'area_sales',
    ];

    public $timestamps = false;

    const UPDATED_AT = null;

    public function getRouteKeyName()
    {
        return 'kode_toko';
    }
}
