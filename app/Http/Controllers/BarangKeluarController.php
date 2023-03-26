<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangKeluar;
use App\Models\User;
use App\Models\BarangMasuk;
use Yajra\DataTables\Facades\DataTables;
class BarangKeluarController extends Controller
{
    //
    public function index()
    {
        if (request()->ajax()) {
            $query = BarangKeluar::with(['user','barang_masuk']);

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-primary" href="'. route('edit-barang-keluars', $item->id) .'">
                            Edit
                        </a>
                        <span>
                            <a href="'. route('delete-barang-keluars', $item->id) .'" class="btn btn-danger">
                                Hapus
                            </a>
                        </span>
                        
                    </div>';
                })
                ->rawColumns(['action'])
                ->make();
        }
        return view('barang_keluar.index');
    }
    
    public function create()
    {
        $users = User::all();
        $barang_masuks = BarangMasuk::all();
        return view('barang_keluar.create',[
            'users' => $users,
            'barang_masuks' => $barang_masuks
        ]);
    }

    public function save(Request $request)
    {
        $data = $request->all();
    
        BarangKeluar::create($data);
        return redirect()->route('index-barang-keluars');
        
    }


    public function edit($id)
    {
        //
        $item = BarangKeluar::with(['user'])->findOrFail($id);
        $users = User::all();
        $barang_masuks = BarangMasuk::all();
        return view('barang_keluar.edit',[
            'item' => $item,
            'users' => $users,
            'barang_masuks' => $barang_masuks
        ]);
    }

    public function update(Request $request, $id)
    {
        //
        $data = $request->all();

        $item = BarangKeluar::findOrFail($id);
              
        $item->update($data);
        
        return redirect()->route('index-barang-keluars');
    }

    public function destroy($id)
    {
        //
        $item = BarangKeluar::findOrFail($id);
        $item->delete();

        return redirect()->route('index-barang-keluars');
    }
}
