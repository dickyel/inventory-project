@extends('dashboard')

@section('title')
    Index
@endsection

@push('end-style')
<script src="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css"></script>
@endpush

@section('content')

<div
    class="content">
    <div class="row">
        <div class="col-12">
            <h2 class="content-title">Barang Masuk </h2>
            <p class="content-desc">
                Daftar Barang  - barang yang masuk 
            </p>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('add-barang-masuks') }}" class="btn btn-primary mb-3">
                            + Tambah Barang Masuk
                        </a>
                        <div class="table-responsive">
                            <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Masuk</th>
                                        <th>Nama Line</th>
                                        <th>Customer</th>
                                        <th>Model</th>
                                        <th>Rwo</th>
                                        <th>Rwo Qty</th>
                                        <th>HC</th>
                                        <th>Plan Output</th>
                                        <th>Actual Ouput</th>
                                        <th>Set Up Time Plan</th>
                                        <th>Set Up Time Actual</th>
                                        <th>Set Up Time Var</th>
                                        <th>Running Time Plan</th>
                                        <th>Running Time Actual</th>
                                        <th>Running Time Var</th>
                                        <th>Total Plan</th>
                                        <th>Total Actual</th>
                                        <th>Total Var</th>
                                        <th>Remark</th>
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
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/datatables-buttons-excel-styles@1.2.0/js/buttons.html5.styles.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/datatables-buttons-excel-styles@1.2.0/js/buttons.html5.styles.templates.min.js"></script>
    <script type="text/javascript">
        // AJAX DataTable
        $(document).ready(function() {
            $('#crudTable').DataTable(
                {
                    processing:true,
                    serverSide: true,
                    ordering: true,
                    dom: 'Bfrtip',
                    buttons: [
                        {
                            extend: 'excelHtml5',
                            text: 'Export ke Excel',
                            title: 'Laporan Barang Masuk' ,
                            messageTop: 'Departement : Insert & Backend Production',
                            customize: function (xlsx) {
                                var sheet = xlsx.xl.worksheets['sheet1.xml'];
 
                                // jQuery selector to add a border
                                $('row c[r*="10"]', sheet).attr( 's', '25' );
                            },
                            exportOptions: {
                                columns: [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19],
                                format: {
                                    body:function(data,row,column,node){
                                        return data;
                                    }
                                }
                            },
                         
                        },
                        {
                            extend: 'pdfHtml5',
                            text: 'Export ke PDF',
                            title: 'Laporan Barang Masuk',
                            customize: function(doc) {
                                // menambahkan border pada tabel
                                doc.content[1].table.body.forEach(function(row) {
                                    row.forEach(function(cell) {
                                    cell.border = [true, true, true, true];
                                    });
                                });

                                // mengatur posisi kertas menjadi horizontal
                                doc.pageOrientation = 'landscape';
                            },
                            exportOptions: {
                                columns: [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19],
                                format: {
                                    body:function(data,row,column,node){
                                        return data;
                                    }
                                }
                            },
                        }
                    ],
                    ajax: {
                        url: '{!! url()->current() !!}',
                    },
                    columns: [
                        
                        {
                            data: 'id', name: 'id'
                        },
                        {
                            data: 'tanggal_masuk_barang', name: 'tanggal_masuk_barang'
                        },
                        {
                            data: 'user.nama_line', name: 'user.nama_line'
                        },
                        {
                            data: 'nama_customer', name: 'nama_customer'
                        },
                        {
                            data: 'model', name: 'model'
                        },
                        {
                            data: 'rwo', name: 'rwo'
                        },
                        {
                            data: 'rwo_qty', name: 'rwo_qty'
                        },
                        {
                            data: 'hc', name: 'hc'
                        },
                        {
                            data: 'plan_output', name: 'plan_output'
                        },
                        {
                            data: 'actual_output', name: 'actual_output'
                        },
                        {
                            data: 'set_up_time_plan', name: 'set_up_time_plan'
                        },
                        {
                            data: 'set_up_time_actual', name: 'set_up_time_actual'
                        },
                        {
                            data: 'set_up_time_var', name: 'set_up_time_var'
                        },
                        {
                            data: 'running_time_plan', name: 'running_time_plan'
                        },
                        {
                            data: 'running_time_actual', name: 'running_time_actual'
                        },
                        {
                            data: 'running_time_var', name: 'running_time_var'
                        },
                        {
                            data: 'total_plan', name: 'total_plan'
                        },
                        {
                            data: 'total_actual', name: 'total_actual'
                        },
                        {
                            data: 'total_var', name: 'total_var'
                        },
                        {
                            data: 'remark', name: 'remark'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false,
                            width: '15%'
                        },
                    ]
                }
            );
        });
    </script>
@endpush