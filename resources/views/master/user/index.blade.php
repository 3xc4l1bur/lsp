@extends('master')

@section('master','aktif')
@section('users','active')
@section('judul','Users')

@section('konten')
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-info">
                  <h4 class="card-title" style="display:inline">Users Data</h4>
                  <a href="user/add" style="float:right;color:white;margin-top:12px;margin-right:7px;"><i class="material-icons" style="color:white;margin-right:7px;margin-bottom:3px">person_add</i>Add User</a>
                  <p class="card-category">List of all registered users</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Email
                        </th>
                        <th>
                          Phone Number
                        </th>
                        <th>
                            Address
                        </th>
                        <th>
                            Level
                        </th>
                        <th>
                          Actions
                        </th>
                      </thead>
                      <tbody>
                        @foreach($users as $u)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$u->name}}</td>
                            <td>{{$u->email}}</td>
                            <td>{{$u->phone}}</td>
                            <td>{{$u->address}}</td>
                            <td class="text-primary">{{$u->level}}</td>
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
