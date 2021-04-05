@extends('master')

@section('master','aktif')
@section('kurir_data','active')
@section('judul','Kurir')

@section('konten')
<div class="container-fluid">
        <!-- <div class="row"> -->
            <!-- <div class="col-md-10"> -->
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Kurir</h4>
                  <p class="card-category">Edit your user data</p>
                </div>
                <div class="card-body">
                  <form method="post" action="{{route('kurir.update', $kurir->id_kurir)}}" enctype="multipart/form-data">
                      {{csrf_field()}}
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                            <label class="bmd-label-floating">Full Name</label>
                            <input type="text" class="form-control" name="nama_kurir" value="{{$kurir->nama_kurir}}">
                            </div>
                        </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email address</label>
                          <input type="email" class="form-control" name="email_kurir" value="{{$kurir->email_kurir}}">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Phone Number</label>
                          <input type="text" class="form-control" name="no_kurir" value="{{$kurir->no_kurir}}">
                        </div>
                      </div>
                      <div class="col-md-3">
                          <div class="form-group">
                            <label class="bmd-label-floating">Company</label>
                            <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle level-button" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              {{$kurir->jenis}}
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Gojek</a>
                              <a class="dropdown-item" href="#">Grab</a>
                              <a class="dropdown-item" href="#">JNE</a>
                              <a class="dropdown-item" href="#">J&T</a>
                            </div>
                            </div>
                          </div>
                      </div>
                      <div class="col-md-3">
                        <label type="bmd-lavel-floating">Photo</label>
                        <input type="file" class="form-control" name="photo">
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="password" class="form-control" name="password_kurir">
                        </div>
                      </div>
                        <input type="hidden" name="jenis" value="{{$kurir->jenis}}" class="level-submit">
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Edit Kurir</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection
