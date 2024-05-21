<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Kota;
use App\Models\Wisata;
use App\Models\Provinsi;
use Illuminate\Http\Request;
use stdClass;

class ReservasiController extends Controller
{
    public function index() {
        $data = [
            'title' => "Halaman Home",
            'background' => '/storage/img/bg/background-landing.jpg',
            'kota' => Kota::with('provinsi')->get(),
        ];
        return view('home', $data);
    }

    public function search() {
        $data = [
            'bus' => Bus::where('status_bus_kode', '1')->get(),
        ];
        return redirect()->route('show', $data);
    }

    public function show(Kota $kota) {
        $data = [
            'title' => "Halaman Show",
            'background' => '/storage/img/bg/background-detail.jpg',
            'kota' => Kota::with('provinsi')->get(),
            'kode_kota' => $kota->kode_kota,
            'bus' => Bus::with([
                'status_bus',
                'kategori_bus',
                'reservasi'
            ])->get()
        ];
        return view('search', $data);
    }

    public function order(Kota $kota, Bus $bus) {
        
        $wisata = new stdClass();
        Wisata::with('kota')->select('kode_wisata', 'nama_wisata')->where('kota_kode', $kota->kode_kota)->get()->map(fn($item) => $wisata->{$item->kode_wisata} = $item->nama_wisata);
        
        $data = [
            'title' => "Halaman Order",
            'background' => '/storage/img/bg/background-detail.jpg',
            'wisata' => json_encode($wisata),
            'kota' => $kota,
            'bus' => $bus,
        ];

        return view('order', $data);
    }

    public function store(Request $request) {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'tanggal' => 'required',
            'jumlah' => 'required',
        ]);

        return redirect()->route('home')->with('success', 'Reservasi berhasil dibuat');
    }
}
