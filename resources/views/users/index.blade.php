@extends('dashboard')

@section('title')
    Index
@endsection

@push('ends-tyle')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
@endpush

@section('content')

<div
    class="content">
    <div class="row">
        <div class="col-12">
            <h2 class="content-title">User </h2>
            <p class="content-desc">
                Daftar nama - nama user 
            </p>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('add-users') }}" class="btn btn-primary mb-3">
                            + Tambah User
                        </a>
                        <div class="table-responsive">
                            <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Departement</th>
                                        <th>Roles</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                             
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</div>

@endsection

@push('end-script')
    <script type="text/javascript">
        // AJAX DataTable
        $(document).ready(function() {
            $('#crudTable').DataTable(
                {
                    processing:true,
                    serverSide: true,
                    ordering: true,

                    ajax: {
                        url: '{!! url()->current() !!}',
                    },
                  
                    columns: [
                        { data: 'id', name: 'id' },
                        { data: 'nama_line', name: 'nama_line' },
                        { data: 'email', name: 'email' },
                        { data: 'departement', name: 'departement' },
                        { data: 'roles', name: 'roles' },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false,
                            width: '15%'
                        },
                    ],
                 
                }
            );
        });
    </script>
@endpush