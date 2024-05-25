<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Wisata;
use Illuminate\Http\Request;

class DashboardWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
    public function index()
    {
        $data = [
            'title' => "Kelola Wisata - Dashboard",
            'background' => '/storage/img/bg/image-login-page.jpg',
            'wisata' => Wisata::with(['kota'])->paginate(10),
            'count' => Wisata::count()
        ];
        
        return view('dashboard.wisata.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => "Tambah Wisata - Dashboard",
            'background' => '/storage/img/bg/image-login-page.jpg',
            'kota' => Kota::all(),
        ];
        
        return view('dashboard.wisata.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wisata $wisata)
    {
        $data = [
            'title' => "Edit Wisata - Dashboard",
            'background' => '/storage/img/bg/image-login-page.jpg',
            'kota' => Kota::all(),
            'wisata' => $wisata
        ];

        return view('dashboard.wisata.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Wisata $wisata)
    {
        // dd($request->all());
        $data = $request->validate([
            "kota_kode" => ["required"],
            "jam_buka" => "required",
            "tarif_parkir" => ["required", "numeric"],
            "nama_wisata" => "required",
            "jam_tutup" => "required",
            "alamat_wisata" => ["required", "string"],
            "tarif_masuk_wisata" => ["required", "numeric"],
            "titik_lokasi" => ["required", "string", "max:50"],
        ]);

        $wisata->update($data);
        return redirect()->route('dashboard.wisata');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wisata $wisata)
    {
        //
    }
}