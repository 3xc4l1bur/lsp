<html>
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="../assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>
            Gopud
        </title>
        <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        <!-- CSS Files -->
        <link href="{{asset('css/material-dashboard.css?v=2.1.2')}}" rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="{{asset('demo/demo.css')}}" rel="stylesheet" />
    </head>
    @yield('style')
    <style>
        @font-face{
            font-family: "Merchant-Copy";
            src : url("{{asset('/fonts/merchant_copy/Merchant-Copy.ttf')}}");
        }
        .subsidebar{
            margin-left:15px;
            margin-right:15px;
            background-color:#f4f4f4;
        }
        .sidebar .nav li .subsidebar a {
            margin-left:0;
            margin-right:0;
            margin-top:0;
        }
        .sidebar .nav li .subsidebar .active{
            font-weight:bold;
        }
        .sidebar .nav li .subsidebar .active i {
            color:black;
        }
        .sidebar .nav .aktif{
            background-color: #00bcd4;
            box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(0, 188, 212, 0.4);
            margin-left:15px;
            margin-right:15px;
            color:white;
            border-radius:3px;
        }
        .sidebar .nav .aktif > a > i{
            color:white;
        }
        .sidebar .nav .aktif > a > p{
            color:white;
        }
        .sidebar .nav .aktif .subsidebar{
            margin-left:0px;
            margin-right:0px;
        }
        .sidebar .nav .aktif a{
            margin-left:0px;
            margin-right:0px;
        }
        .table-description{
            margin-left:auto;
            margin-right:auto;
            margin-top:20px;
            margin-bottom:20px;
            width:410px;
            line-height:35px;
            table-layout:fixed;
            position : relative;
            right:-30px;
        }
        .table-description td{
            vertical-align:middle;
        }
        .inventory.aktif {
            background-color:rgb(255, 152, 0) !important;
            box-shadow:0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(255, 152, 0, 0.4) !important;
        }
        .dualsubsidebar{
            background-color:#ebebeb;
        }
        .pos.aktif {
            background-color:#4caf50 !important;
            box-shadow:0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(76, 175, 80, 0.4);
        }
        .report.aktif{
            background-color: #f44336 !important;
            box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(244, 67, 54, 0.4) !important;
        }
    </style>
    <body>
        <div class="wrapper ">
            <div class="sidebar" data-color="purple" data-background-color="white" data-image="img/sidebar-tablet.jpg">
                <div class="logo"><a href="#" class="simple-text logo-normal">
                    Goput
                </a></div>
                <div class="sidebar-wrapper">
                    <ul class="nav">
                        <li class="nav-item @yield('dashboard')">
                            <a class="nav-link" href="/dashboard">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#collapseMaster" aria-expanded="false" role="button" aria-controls="collapseMaster">
                                <i class="material-icons">person</i>
                                <p>Users Data</p>
                            </a>
                            <div class="collapse" id="collapseMaster">
                                <div class="subsidebar">
                                    <a class="nav-link @yield('users')" href="{{route('user.index')}}">
                                        <i class="material-icons">person</i>
                                        <p>Users</p>
                                    </a>
                                    <a class="nav-link @yield('kurir')" href="{{route('kurir.index')}}">
                                        <i class="material-icons">person</i>
                                        <p>Kurir</p>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item inventory @yield('produk')">
                           <a href="{{route('produk.index')}}" class="nav-link">
                                <i class="material-icons">folder_open</i>
                                <p>Products</p>
                           </a>
                        </li>
                        <li class="nav-item pos @yield('pos')">
                            <a href="{{route('pesanan.index')}}" class="nav-link">
                                <i class="material-icons">shopping_cart</i>
                                <p style="text-transform:none">Pesanan</p>
                            </a>
                        </li>
                        <li class="nav-item report @yield('report')">
                            <a href="#" class="nav-link">
                                <i class="material-icons">description</i>
                                <p>Pengiriman</p>
                            </a>
                        </li>
                    </ul>
            </div>
        </div>
        <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
            <div class="navbar-wrapper">
                <a class="navbar-brand" style="font-weight:bold;" href="javascript:;">@yield('judul')</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard">
                    <i class="material-icons">dashboard</i>
                    <p class="d-lg-none d-md-block">
                        Stats
                    </p>
                    </a>
                </li>
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
            @yield('konten')
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
          <div class="copyright float-right">
            Copyright &copy; 2020 by
            <a href="https://instagram.com/taufikamf_" target="_blank">Taufiq A M</a>. All right reserved
          </div>
        </div>
      </footer>
    </body>
    <script src="{{asset('js/core/jquery.min.js')}}"></script>
    <script src="{{asset('js/core/popper.min.js')}}"></script>
    <script src="{{asset('js/core/bootstrap-material-design.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            $('.dropdown-menu a').on('click',function(){
                $('.level-button').text($(this).text());
                $('.level-submit').attr('value',$(this).text());
            });
            $('.sidebar .nav li a').click(function(){
                if ($(this).parent().attr('class').split(' ')[1] != "aktif"){
                    if ($(this).next().attr('class') == "collapse"){
                        if ($(this).children().next().text().toLowerCase() == "inventory"){
                            $(this).css('background-color','#ff9800');
                            $(this).children("i").css("color", "white");
                            $(this).css('color','white');
                        }else if($(this).attr('class').split(' ')[1] == "inventory" && $(this).attr('class').split(' ')[2] == "dualsubside"){
                            $(this).css('color',"rgb(255, 152, 0)");
                            $(this).children('i').css('color',"rgb(255, 152, 0)");
                        }else{
                            this.style.color="white";
                            $(this).children("i").css("color", "white");
                            this.style.backgroundColor = "#00bcd4";
                        }
                        // else if($('inventory.dualsubside')){
                        //     $(this).css('color',"rgb(255, 152, 0)");
                        //     $(this).children('i').css('color',"rgb(255, 152, 0)");
                        // }
                    }else{
                        var attr = $(this).attr('data-toggle');
                        if (typeof attr != typeof undefined && attr != false){
                            if ($(this).parent().attr('class').split(' ')[1] != "inventory" || $(this).parent().attr('class').split(' ')[1] == "inventory"){
                                if($(this).parent().attr('class').split(' ')[2] != "aktif"){
                                    this.style.color = "#3C4858";
                                    this.style.backgroundColor = "transparent";
                                    $(this).children().first().css('color','#a9afbb');
                                }
                            }
                        }
                    }
                }
            });
            if ($('.active').parent().attr('class') == "dualsubsidebar"){
                $('.active').parent().parent().addClass('show');
                $('.subsidebar > .inventory.dualsubside').css('color','rgb(255, 152, 0)');
                $('.subsidebar > .inventory.dualsubside').children("i").css('color','rgb(255, 152, 0)');
            }
            $('.aktif').children('div').addClass('show');
            $('#file-profile').change(function(){
                var reader = new FileReader();
                reader.readAsDataURL($('#file-profile')[0].files[0]);
                reader.onload = function(){
                    $('#image-profile').attr('src',reader.result);
                }
                $(this).parent().css('display','none');
                $('#cancel-profile').css('display','block');
            });
        });
    </script>
    @yield('script')
    <!-- <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script> -->
</html>
