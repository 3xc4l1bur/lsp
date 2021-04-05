@extends('master')

@section('dashboard', 'active')
@section('judul', 'Dashboard')
@section("konten")
<p>Selamat datang {{\Session::get('user')->name}} !</p>
    <div class="container-fluid">
        <div class="row" style="justify-content:center;">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Total Users</h4>
                    </div>
                    <div class="card-body">
                        <h2 style="font-weight:bold;text-align:center;">2 Users</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Total Produk</h4>
                    </div>
                    <div class="card-body">
                        <h2 style="font-weight:bold;text-align:center;">10 Produk</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="justify-content:center;">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Total Pesanan</h4>
                    </div>
                    <div class="card-body">
                        <h2 style="font-weight:bold;text-align:center;">5 Pesanan</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Total Pengiriman</h4>
                    </div>
                    <div class="card-body">
                        <h2 style="font-weight:bold;text-align:center;">5 Pengiriman</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
