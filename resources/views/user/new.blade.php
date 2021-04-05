<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan Baru</title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{asset('css/material-dashboard.css?v=2.1.2')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('demo/demo.css')}}" rel="stylesheet" />
</head>
<body>
<div class="card-body">
    <form method="post" action="{{route('pesanan.create')}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="">
                <img src="/image/{{ $produk->icon }}" alt="" width="300">
            </div>
            <div class="column" style="width: 60%;">
                <div class="form-group col-md-12">
                    <label class="bmd-label-floating">Nama Produk</label>
                    <input type="text" class="form-control" name="nama" value="{{ $produk->nama}}" readonly="true">
                </div>
                <div class="form-group col-md-12">
                    <label class="bmd-label-floating">Harga</label>
                    <input type="number" class="form-control" name="harga" value="{{ $produk->harga}}" readonly="true">
                </div>
                <div class="form-group col-md">
                    <label class="bmd-label-floating">Deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi" value="{{ $produk->deskripsi}}" readonly="true">
                </div>
            </div>
            <div class="form-group col-md-10">
                <label for="nama">Atas Nama : </label>
                <input type="text" class="form-control" name="nama">
            </div>
            <div class="form-group col-md-10">
                <label for="nama">Ke Alamat : </label>
                <input type="text" class="form-control" name="nama">
            </div>
        </div>
        <input type="hidden" name="id_produk" value="{{ $produk->id_produk}}">
        <button type="submit" class="btn btn-primary pull-left">Purchase Now</button>
        <div class="clearfix"></div>
    </form>

</body>
    <script src="{{asset('js/core/jquery.min.js')}}"></script>
    <script src="{{asset('js/core/popper.min.js')}}"></script>
    <script src="{{asset('js/core/bootstrap-material-design.min.js')}}"></script>
</html>