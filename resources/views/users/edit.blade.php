@extends('dashboard')

@section('title')
    Halaman Tentang Index
@endsection

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-12">
                <h2 class="content-title">Edit User</h2>
                <h5 class="content-desc mb-4">Edit daftar User yang ada diperusahaan ini.</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                @if($errors->any())
                    <div class="alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>    
                    </div>
                @endif
                <form action="{{ route('update-users', $item->id) }}" enctype="multipart/form-data" method="post">
                    @csrf
                    @method('PUT')
                    <div class="card ">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Nama Line</label>
                                        <input type="text"
                                        id="nama_line"  name="nama_line" value="{{$item->nama_line }}" class="form-control @error('nama_line') is-invalid @enderror"/>
                                       
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" value="{{$item->email}}"
                                        id="email"  name="email" class="form-control @error('email') is-invalid @enderror"/>
                                     
                                    </div>
                                </div>


                                <div class="col-md-6 mt-4">
                                    <div class="form-group">
                                        <label for="">Departement</label>
                                        <input type="text" value="{{ $item->departement}}"
                                        id="departement"  name="departement" class="form-control @error('departement') is-invalid @enderror"/>
                                      
                                    </div>
                                </div>

                                <div class="col-md-6 mt-4">
                                    <div class="form-group">
                                        <label for="">Passsword</label>
                                        <input type="password"
                                        id="password"  name="password" class="form-control @error('password') is-invalid @enderror"/>
                                        
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Roles</label>
                                        <select name="roles" id="roles" class="form-control">
                                            <option value="ADMIN">Admin</option>
                                            <option value="USER">User</option>
                                        </select>
                                    </div>
                                </div>

                               
                            </div>
                            
                            
                            <div class="col mt-4">
                                <button type="submit" class="btn btn-primary btn-block px-5">Simpan Sekarang</button>
                            </div>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
        
    </div>
@endsection