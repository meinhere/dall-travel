<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusBus extends Model
{
    use HasFactory;

    protected $table = 'status_bus';
    protected $guarded = ['kode_status'];

    public static function boot()
    {
        parent::boot();

        self::creating(function($model){
            $model->kode_status = (string) StatusBus::count('kode_status') + 1;
        });
    }

    public function bus() {
        return $this->hasMany(Bus::class);
    }
}
