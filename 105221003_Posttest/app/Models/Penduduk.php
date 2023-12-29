<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $table = 'penduduk';
    protected $fillable = ['nik', 'name', 'provinsi', 'kota', 'nomor'];
}
