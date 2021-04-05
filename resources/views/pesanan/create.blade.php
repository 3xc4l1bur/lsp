<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        <!-- CSS Files -->
        <link href="{{asset('css/material-dashboard.css?v=2.1.2')}}" rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="{{asset('demo/demo.css')}}" rel="stylesheet" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top">
            <div class="container-fluid">
            <div class="navbar-wrapper">
                <a class="navbar-brand" style="font-weight:bold;" href="javascript:;">Home</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons">person</i>
                    <p class="d-lg-none d-md-block">
                        Account
                    </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                    <a class="dropdown-item" href="{{route('logout')}}">Log out</a>
                    </div>
                </li>
                </ul>
            </div>
            </div>
        </nav>
        <div class="content">
        <div class="row" style="margin-top: 50px;">
        @foreach($produk as $p)
        <div class="card" style="width: 18rem; margin-left:40px;">
            <img src="/image/{{ $p->icon }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $p->nama }}</h5>
                <small class="card-subtitle">Rp {{ $p->harga }}</small>
                <p class="card-text">{{ $p->deskripsi }}</p>
                <a href="{{route('pesanan.add',$p->id_produk)}}" class="btn btn-primary">Buy</a>
            </div>
        </div>
        @endforeach
        </div>
        </div>
        <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://wa.me/6285781046614" style="margin-left:20px;">
                    <i class="fa fa-whatsapp" style="font-size:20px;"></i>
                </a>
              </li>
              <li>
                <a href="https://instagram.com/taufikamf_" style="margin-left:-10px;">
                    <i class="fa fa-instagram" style="font-size:20px;"></i>
                </a>
              </li>
            </ul>
          </nav>
</body>
<script src="{{asset('js/core/jquery.min.js')}}"></script>
<script src="{{asset('js/core/popper.min.js')}}"></script>
<script src="{{asset('js/core/bootstrap-material-design.min.js')}}"></script>
</html>