@extends('dashboard')

@section('title')
    Halaman Tentang Index
@endsection

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-12">
                <h2 class="content-title">Tambah Barang Masuk</h2>
                <h5 class="content-desc mb-4">Tambah daftar barang masuk yang ada di perusahaan ini.</h5>
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
                <form action="{{ route('save-barang-masuks') }}" enctype="multipart/form-data" method="post">
                    @csrf
                   
                    <div class="card ">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Tanggal Masuk Barang</label>
                                        
                                        <input type="text" id="datepicker"
                                        id="tanggal_masuk_barang"  name="tanggal_masuk_barang" class="form-control @error('tanggal_masuk_barang') is-invalid @enderror"/>
                                        @error('tanggal_barang_masuk')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror 
                                    </div>
                                </div>

                        
                                <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
                                       
                                <div class="col-md-6 mt-4">
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


                                <div class="col-md-6 mt-4">
                                    <div class="form-group">
                                        <label for="">Nama Customer</label>
                                        <input type="text"
                                        id="nama_customer"  name="nama_customer" class="form-control @error('nama_customer') is-invalid @enderror"/>
                                        @error('nama_customer')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 mt-4">
                                    <div class="form-group">
                                        <label for="">Model</label>
                                        <input type="model"
                                        id="model"  name="model" class="form-control @error('model') is-invalid @enderror"/>
                                        @error('model')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 mt-4">
                                    <div class="form-group">
                                        <label for="">Rwo</label>
                                        <input type="number"
                                        id="rwo"  name="rwo" class="form-control @error('rwo') is-invalid @enderror"/>
                                        @error('rwo')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 mt-4">
                                    <div class="form-group">
                                        <label for="">Rwo Qty</label>
                                        <input type="number"
                                        id="rwo_qty"  name="rwo_qty" class="form-control @error('rwo_qty') is-invalid @enderror"/>
                                        @error('rwo_qty')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 mt-4">
                                    <div class="form-group">
                                        <label for="">HC</label>
                                        <input type="number"
                                        id="hc"  name="hc" class="form-control @error('hc') is-invalid @enderror"/>
                                        @error('hc')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 mt-4">
                                    <div class="form-group">
                                        <label for="">Plan Output</label>
                                        <input type="number"
                                        id="plan_output"  name="plan_output" class="form-control @error('plan_output') is-invalid @enderror"/>
                                        @error('plan_output')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-6 mt-4">
                                    <div class="form-group">
                                        <label for="">Actual Output</label>
                                        <input type="number"
                                        id="actual_output"  name="actual_output" class="form-control @error('actual_output') is-invalid @enderror"/>
                                        @error('actual_output')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 mt-4">
                                    <div class="form-group">
                                        <label for="">Set Up Time Plan</label>
                                        <input type="number"
                                        id="set_up_time_plan"  step="0.01" min="0" name="set_up_time_plan" class="form-control @error('set_up_time_plan') is-invalid @enderror"/>
                                        @error('set_up_time_plan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 mt-4">
                                    <div class="form-group">
                                        <label for="">Set Up Time Actual</label>
                                        <input type="number"
                                        id="set_up_time_actual"  step="0.01" min="0"  name="set_up_time_actual" class="form-control @error('set_up_time_actual') is-invalid @enderror"/>
                                        @error('set_up_time_actual')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 mt-4">
                                    <div class="form-group">
                                        <label for="">Set Up Time Var</label>
                                        <input type="number"
                                        id="set_up_time_var"  name="set_up_time_var" class="form-control @error('set_up_time_var') is-invalid @enderror"/>
                                        @error('set_up_time_var')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 mt-4">
                                    <div class="form-group">
                                        <label for="">Running Time Plan</label>
                                        <input type="number"
                                        id="running_time_plan"  step="0.01" min="0"  name="running_time_plan" class="form-control @error('running_time_plan') is-invalid @enderror"/>
                                        @error('running_time_plan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 mt-4">
                                    <div class="form-group">
                                        <label for="">Running Time Actual</label>
                                        <input type="number"
                                        id="running_time_actual"  step="0.01" min="0"  name="running_time_actual" class="form-control @error('running_time_actual') is-invalid @enderror"/>
                                        @error('running_time_actual')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 mt-4">
                                    <div class="form-group">
                                        <label for="">Running Time Var</label>
                                        <input type="number"
                                        id="running_time_var"  step="0.01" min="0"  name="running_time_var" class="form-control @error('running_time_var') is-invalid @enderror"/>
                                        @error('running_time_var')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 mt-4">
                                    <div class="form-group">
                                        <label for="">Total Plan</label>
                                        <input type="number"
                                        id="total_plan"  step="0.01" min="0"  name="total_plan" class="form-control @error('total_plan') is-invalid @enderror"/>
                                        @error('total_plan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                
                          
                                <div class="col-md-6 mt-4">
                                    <div class="form-group">
                                        <label for="">Total Actual</label>
                                        <input type="number"
                                        id="total_actual"  step="0.01" min="0" name="total_actual" class="form-control @error('total_actual') is-invalid @enderror"/>
                                        @error('total_actual')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 mt-4">
                                    <div class="form-group">
                                        <label for="">Total Var</label>
                                        <input type="number"
                                        id="total_var"  step="0.01" min="0"  name="total_var" class="form-control @error('total_var') is-invalid @enderror"/>
                                        @error('total_var')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class=" col-md-6 mt-4">
                                    <div class="form-group">
                                        <label for="">Remark</label>
                                        <input type="text"
                                        id="remark"  name="remark" class="form-control @error('remark') is-invalid @enderror"/>
                                        @error('remark')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            
                            </div>
                            <div class="col-md-12 mt-4">
                                <button type="submit" class="btn btn-primary btn-block px-5">Simpan Sekarang</button>
                            </div>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
        
    </div>
@endsection

@push('end-script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<script>
    
    $( function() {
        $( "#datepicker" ).datepicker({
        showButtonPanel: true,
        format: 'yyyy-mm-dd'
        });
    });
</script>
@endpush