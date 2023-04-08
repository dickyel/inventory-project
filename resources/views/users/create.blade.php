@extends('dashboard')

@section('title')
    Halaman User
@endsection

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-12">
                <h2 class="content-title">Tambah User</h2>
                <h5 class="content-desc mb-4">Tambah daftar User yang ada diperusahaan ini.</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('save-users') }}" enctype="multipart/form-data" method="post">
                    @csrf
                   
                    <div class="card ">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Nama Line</label>
                                        <input type="text"
                                        id="nama_line"  name="nama_line" class="form-control @error('nama_line') is-invalid @enderror"/>
                                        @error('nama_line')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email"
                                        id="email"  name="email" class="form-control @error('email') is-invalid @enderror"/>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 mt-4">
                                    <div class="form-group">
                                        <label for="">Departement</label>
                                        <input type="text"
                                        id="departement"  name="departement" class="form-control @error('departement') is-invalid @enderror"/>
                                        @error('departement')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 mt-4">
                                    <div class="form-group">
                                        <label for="">Passsword</label>
                                        <input type="password"
                                        id="password"  name="password" class="form-control @error('password') is-invalid @enderror"/>
                                        @error('departement')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 mt-4">
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