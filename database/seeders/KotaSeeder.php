<?php

namespace Database\Seeders;

use App\Models\Kota;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   

        // daftar kota di jawa timur
        Kota::create([
            'provinsi_kode' => '35', 
            'kode_kota' => '3578',
            'nama_kota' => 'Surabaya',
        ]);

        Kota::create([
            'provinsi_kode' => '35', 
            'kode_kota' => '3579',
            'nama_kota' => 'Batu',
        ]);

        Kota::create([
            'provinsi_kode' => '35', 
            'kode_kota' => '3507',
            'nama_kota' => 'Malang',
        ]);

        Kota::create([
            'provinsi_kode' => '35',
            'kode_kota' => '3526',
            'nama_kota' => 'Bangkalan',
        ]);
        
        Kota::create([
            'provinsi_kode' => '35',
            'kode_kota' => '3527',
            'nama_kota' => 'Sampang',
        ]);
        
        Kota::create([
            'provinsi_kode' => '35',
            'kode_kota' => '3529',
            'nama_kota' => 'Sumenep',
        ]);

        Kota::create([
            'provinsi_kode' => '35',
            'kode_kota' => '3503',
            'nama_kota' => 'Trenggalek'
        ]);

        Kota::create([
            'provinsi_kota' => '35',
            'kode_kota' => '3514',
            'nama_kota' => 'Pasuruan',
        ]);

        Kota::create([
            'provinsi_kota' => '35',
            'kode_kota' => '3508',
            'nama_kota' => 'Lumajang',
        ]);

        Kota::create([
            'provinsi_kota' => '35',
            'kode_kota' => '3519',
            'nama_kota' => 'Madiun',
        ]);

        Kota::create([
            'provinsi_kota' => '35',
            'kode_kota' => '3515',
            'nama_kota' => 'Sidoarjo',
        ]);

        Kota::create([
            'provinsi_kota' => '35',
            'kode_kota' => '3528',
            'nama_kota' => 'Pamekasan',
        ]);

        Kota::create([
            'provinsi_kota' => '35',
            'kode_kota' => '3523',
            'nama_kota' => 'Tuban', 
        ]);
        
        Kota::create([
            'provinsi_kota' => '35',
            'kode_kota' => '3524',
            'nama_kota' => 'Lamongan', 
        ]);
        
        
        Kota::create([
            'provinsi_kode' => '35', 
            'kode_kota' => '3501',
            'nama_kota' => 'Pacitan',
        ]);

        Kota::create([
            'provinsi_kode' => '35', 
            'kode_kota' => '3506',
            'nama_kota' => 'Kediri',
        ]);

        Kota::create([
            'provinsi_kode' => '35', 
            'kode_kota' => '3520',
            'nama_kota' => 'Magetan',
        ]);

        Kota::create([
            'provinsi_kode' => '35', 
            'kode_kota' => '3516',
            'nama_kota' => 'Mojokerto',
        ]);



        // daftar kota di jawa tengah
        Kota::create([
            'provinsi_kode' => '33', 
            'kode_kota' => '3374',
            'nama_kota' => 'Semarang',
        ]);

        Kota::create([
            'provinsi_kode' => '33', 
            'kode_kota' => '3372',
            'nama_kota' => 'Magelang',
        ]);


        // daftar kota di Yogyakarta
        Kota::create([
            'provinsi_kode' => '34', 
            'kode_kota' => '3471',
            'nama_kota' => 'Yogyakarta',
        ]);


    }
}