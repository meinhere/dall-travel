<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    use HasFactory;
    protected $table = 'login';
    protected $guarded = ['id_login'];
    
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

    public static function boot()
    {
        parent::boot();

        self::creating(function($model){
            $model->id_login = (string) Login::count('id_login') + 1;
        });
    }

    public function pelanggan() {
        return $this->hasOne(Pelanggan::class);
    }

    public function karyawan() {
        return $this->hasOne(Karyawan::class);
    }
}
