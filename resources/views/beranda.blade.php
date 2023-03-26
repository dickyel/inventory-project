@extends('dashboard')

@section('title')
    Beranda
@endsection

@section('content')
    
    <div class="content">
        <div class="row">
            <div class="col-12">
                <h2 class="content-title">Statistik</h2>
                <h5 class="content-desc mb-4">Jumlah semua barang masuk dan barang keluar</h5>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <div class="statistics-card">

                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-column justify-content-between align-items-start">
                            <h5 class="content-desc">Jumlah Barang Masuk</h5>

                            <h3 class="statistics-value"> {{ $barang_masuk }} </h3>
                        </div>

                        <button class="btn-statistics">
                            <img src="{{ asset('./dashboard/assets/img/global/times.svg') }}" alt="">
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <div class="statistics-card">

                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-column justify-content-between align-items-start">
                            <h5 class="content-desc">Jumlah Barang Keluar</h5>

                            <h3 class="statistics-value">{{ $barang_keluar }}</h3>
                        </div>

                        <button class="btn-statistics">
                            <img src="./dashboard/assets/img/global/times.svg" alt="">
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <div class="statistics-card">

                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-column justify-content-between align-items-start">
                            <h5 class="content-desc">Jumlah User Terdaftar </h5>

                            <h3 class="statistics-value">{{ $user }}</h3>
                        </div>

                        <button class="btn-statistics">
                            <img src="./dashboard/assets/img/global/times.svg" alt="">
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
