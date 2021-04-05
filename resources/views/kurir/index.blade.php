@extends('master')

@section('master','aktif')
@section('kurir_data','active')
@section('judul','Kurir')

@section('konten')
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-info">
                  <h4 class="card-title" style="display:inline">Kurir Data</h4>
                  <p class="card-category">List of all registered kurir</p>
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
                            Company
                        </th>
                        <th>
                            Photo
                        </th>
                        <th>
                          Actions
                        </th>
                      </thead>
                      <tbody>
                        @foreach($kurir as $k)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$k->nama_kurir}}</td>
                            <td>{{$k->email_kurir}}</td>
                            <td>{{$k->no_kurir}}</td>
                            <td class="text-primary">{{$k->jenis}}</td>
                            <td><img src="/image/{{ $k->photo }}" alt="" style="width: 80px; height:120px;"></td>
                            <td>
                                <a href="{{route('kurir.edit',$k->id_kurir)}}"><i class="material-icons" style="font-size:20px">edit</i></a>
                                <a href="{{route('kurir.delete',$k->id_kurir)}}" style="margin-left:10px;color:red;"><i class="material-icons" style="font-size:23px">delete_forever</i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                      <!--<tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                            Dakota Rice
                          </td>
                          <td>
                            Niger
                          </td>
                          <td>
                            Oud-Turnhout
                          </td>
                          <td class="text-primary">
                            $36,738
                          </td>
                        </tr>
                        <tr>
                          <td>
                            2
                          </td>
                          <td>
                            Minerva Hooper
                          </td>
                          <td>
                            Curaçao
                          </td>
                          <td>
                            Sinaai-Waas
                          </td>
                          <td class="text-primary">
                            $23,789
                          </td>
                        </tr>
                        <tr>
                          <td>
                            3
                          </td>
                          <td>
                            Sage Rodriguez
                          </td>
                          <td>
                            Netherlands
                          </td>
                          <td>
                            Baileux
                          </td>
                          <td class="text-primary">
                            $56,142
                          </td>
                        </tr>
                        <tr>
                          <td>
                            4
                          </td>
                          <td>
                            Philip Chaney
                          </td>
                          <td>
                            Korea, South
                          </td>
                          <td>
                            Overland Park
                          </td>
                          <td class="text-primary">
                            $38,735
                          </td>
                        </tr>
                        <tr>
                          <td>
                            5
                          </td>
                          <td>
                            Doris Greene
                          </td>
                          <td>
                            Malawi
                          </td>
                          <td>
                            Feldkirchen in Kärnten
                          </td>
                          <td class="text-primary">
                            $63,542
                          </td>
                        </tr>
                        <tr>
                          <td>
                            6
                          </td>
                          <td>
                            Mason Porter
                          </td>
                          <td>
                            Chile
                          </td>
                          <td>
                            Gloucester
                          </td>
                          <td class="text-primary">
                            $78,615
                          </td>
                        </tr>
                      </tbody> -->
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection
