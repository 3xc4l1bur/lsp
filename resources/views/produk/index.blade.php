@extends('master')

@section('inventory','aktif')
@section('produk','active')
@section('judul','Product')

@section('konten')
    <div class="col-md-12">
        <div class="card card-plain">
        <div class="card-header card-header-warning">
            <h4 class="card-title mt-0" style="display:inline">Products</h4>
            <a href="{{route('produk.add')}}" style="float:right;color:white;margin-top:12px;margin-right:7px;">
                <i class="material-icons" style="color:white;margin-right:5px;margin-bottom:3px">playlist_add</i>Add Product</a>
            <p class="card-category">List of products </p>
        </div>
        <div class="row justify-content-between">
            <div class="justify-content-end" style="margin-top:25px;margin-right:20px;">
                <div class="input-group no-border">
                    <input type="text" value="" class="form-control" placeholder="Search..." id="search-form">
                    <button type="submit" class="btn btn-white btn-round btn-just-icon" id="search-btn">
                    <i class="material-icons">search</i>
                    <div class="ripple-container"></div>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body" style="padding-top:0;">
            <div class="table-responsive">
            <table class="table table-hover">
                <thead class="">
                <th>
                    ID
                </th>
                <th>
                    Nama Produk
                </th>
                <th>
                    Icon
                </th>
                <th>Harga</th>
                <th>Deskripsi</th>
                </thead>
                <tbody id="table-val">
                    @foreach($produk as $p)
                    <tr>
                        <td>{{$p->id_produk}}</td>
                        <td>{{$p->nama}}</td>
                        <td><img src="/image/{{$p->icon}}" alt="" width="50"></td>
                        <td>{{$p->harga}}</td>
                        <td>{{$p->deskripsi}}</td>
                        <td style="display:block;width:100px">
                            <a href="{{route('produk.edit',$p->id_produk)}}"><i class="material-icons" style="font-size:20px">edit</i></a>
                            <a href="{{route('produk.delete',$p->id_produk)}}" style="color:red;"><i class="material-icons" style="font-size:23px">delete_forever</i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
@endsection
