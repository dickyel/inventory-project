<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    //controllex menampilkan data - data terkait user
    public function index()
    {
        if (request()->ajax()) {
            $query = User::query();

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-primary" href="'. route('edit-users', $item->id) .'">
                            Edit
                        </a>
                        <span>
                            <a href="'. route('delete-users', $item->id) .'" class="btn btn-danger">
                                Hapus
                            </a>
                        </span>
                        
                    </div>';
                })
                ->rawColumns(['action'])
                ->make();
        }
        return view('users.index');
    }
    
    public function create()
    {
        return view('users.create');
    }

    public function save(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $data['password'] = bcrypt($request->password);
        
        User::create($data);
        return redirect()->route('index-users');
        
    }


    public function edit($id)
    {
        //
        $item = User::findOrFail($id);

        return view('users.edit',[
            'item' => $item
        ]);
    }

    public function update(Request $request, $id)
    {
        //
        $data = $request->all();

        if($request->password)
        {
            $data['password'] =  bcrypt($request->password);
        }
        else 
        {
            unset($data['password']);
        }
              
        $item = User::findOrFail($id);
        $item->update($data);
        
        return redirect()->route('index-users');
    }

    public function destroy($id)
    {
        //
        $item = User::findOrFail($id);
        $item->delete();

        return redirect()->route('index-users');
    }

}
