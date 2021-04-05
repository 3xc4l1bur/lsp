@extends('master')
@section('inventory','aktif')
@section('produk','active')
@section('judul','Product')

@section('konten')
<div class="container-fluid">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Add The Product</h4>
            <p class="card-category">Register some product into your system</p>
        </div>
        <div class="card-body">
            <form method="post" action="{{route('produk.store')}}" enctype="multipart/form-data">
                {{csrf_field()}}
            <div class="row">
           
                    <div class="form-group col-md-12">
                    <label class="bmd-label-floating">Nama Produk</label>
                    <input type="text" class="form-control" name="nama">
                    </div>
                
                
                <div class="form-group col-md-12">
                    <label class="bmd-label-floating">Harga</label>
                    <input type="number" class="form-control" name="harga">
                </div>
                
                <div class="form-group col-md-6">
                    <label class="bmd-label-floating">Deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi">
                </div>
                <div class="col-md-6">
                    <label class="bmd-label-floating">Icon</label>  
                    <input type="file" class="form-control" name="icon">
                </div>
            </div>
            <button type="submit" class="btn btn-primary pull-right">Add Product</button>
            <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
@endsection
