<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;

    protected $table = 'reservasi';
    protected $primaryKey = 'kode_reservasi';
    protected $guarded = ['kode_reservasi'];

    public static function boot()
    {
        parent::boot();

        self::creating(function($model){
            $id = (string) Reservasi::count('kode_reservasi') + 1;
            $model->kode_reservasi = "RSV" . str_pad($id, 5, '0', STR_PAD_LEFT);
        });
    }

    public function reservasi_detail() {
        return $this->hasMany(ReservasiDetail::class);
    }
    
    public function feedback() {
        return $this->hasMany(Feedback::class);
    }

    public function bus() {
        return $this->belongsTo(Bus::class);
    }

    public function login() {
        return $this->belongsTo(Login::class);
    }

}
