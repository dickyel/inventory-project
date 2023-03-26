<?php

namespace App\Http\Controllers;

use App\Models\BarangMasuk;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class BarangMasukController extends Controller
{
    //
    public function index()
    {
        if (request()->ajax()) {
            $query = BarangMasuk::with(['user']);

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-primary" href="'. route('edit-barang-masuks', $item->id) .'">
                            Edit
                        </a>
                        <span>
                            <a href="'. route('delete-barang-masuks', $item->id) .'" class="btn btn-danger">
                                Hapus
                            </a>
                        </span>
                        
                    </div>';
                })
                ->rawColumns(['action'])
                ->make();
        }
        return view('barang_masuk.index');
    }
    
    public function create()
    {
        $users = User::all();
        return view('barang_masuk.create',[
            'users' => $users
        ]);
    }

    public function save(Request $request)
    {
        $data = $request->all();
    
        BarangMasuk::create($data);
        return redirect()->route('index-barang-masuks');
        
    }


    public function edit($id)
    {
        //
        $item = BarangMasuk::with(['user'])->findOrFail($id);
        $users = User::all();
        return view('barang_masuk.edit',[
            'item' => $item,
            'users' => $users
        ]);
    }

    public function update(Request $request, $id)
    {
        //
        $data = $request->all();

        $item = BarangMasuk::findOrFail($id);
              
   
        $item->update($data);
        
        return redirect()->route('index-barang-masuks');
    }

    public function destroy($id)
    {
        //
        $item = BarangMasuk::findOrFail($id);
        $item->delete();

        return redirect()->route('index-barang-masuks');
    }
}
