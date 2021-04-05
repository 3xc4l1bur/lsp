@extends('master')

@section('master','aktif')
@section('pesanan','active')
@section('judul','Pesanan')

@section('konten')
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-info">
                  <h4 class="card-title" style="display:inline">Data Pesanan</h4>
                  <p class="card-category">List of all delivery</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Nama Pemesan
                        </th>
                        <th>
                          Alamat
                        </th>
                        <th>
                          Produk
                        </th>
                        <th>
                            Jumlah
                        </th>
                        <th>
                            Tanggal Pemesanan
                        </th>
                        <th>
                          Actions
                        </th>
                      </thead>
                      <tbody>
                        @foreach($pesanan as $p)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$p->nama}}</td>
                            <td>{{$p->alamat}}</td>
                            <td>{{$p->phone}}</td>
                            <td></td>
                            <td>{{$p->tgl_pesanan}}</td>
                            <td>
                                <a href="{{route('kurir.edit',$u->id)}}"><i class="material-icons" style="font-size:20px">edit</i></a>
                                <a href="{{route('kurir.delete',$u->id)}}" style="margin-left:10px;color:red;"><i class="material-icons" style="font-size:23px">delete_forever</i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection
