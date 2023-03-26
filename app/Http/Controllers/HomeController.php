<?php

namespace App\Http\Controllers;

use App\Models\BarangKeluar;
use App\Models\BarangMasuk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::count();
        $barang_masuk = BarangMasuk::count();
        $barang_keluar = BarangKeluar::count();   
        return view('beranda',
            [
                'user' => $user,
                'barang_masuk' => $barang_masuk,
                'barang_keluar' => $barang_keluar
            ]
        );
    }

   
}
