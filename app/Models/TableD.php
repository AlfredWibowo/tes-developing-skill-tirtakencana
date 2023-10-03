<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableD extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_sales',
        'nama_sales'
    ];

    public $timestamps = false;

    const UPDATED_AT = null;

    public function getRouteKeyName()
    {
        return 'kode_sales';
    }
}
