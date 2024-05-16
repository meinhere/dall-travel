<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kota extends Model
{
    use HasFactory;

    protected $table = 'kota';
    protected $fillable = ['kode_kota', 'provinsi_kode', 'nama_kota'];

    public function provinsi() {
        return $this->belongsTo(Provinsi::class);
    }

    public function wisata() {
        return $this->hasMany(Wisata::class);
    }
}
