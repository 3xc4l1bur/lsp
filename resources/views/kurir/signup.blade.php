<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Courier</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-design-iconic-font.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Main css -->
    <link rel="stylesheet" href="css/signstyle.css">
    <style>
        i.error, h4.error{
            color:red;
            font-weight:500;
        }
        input.error{
            border-bottom:1px solid red;
        }
        .error{
            border-radius: 10px;
            border-color: red;
            border-width: 2px;
            background-color: #F7D6D9;
            color: red;
        }
    </style>
</head>
<body>

    <div class="main">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="judul">
                    <h1>GOPUD</h1>
                </div>
                <div class="signin-content" style="margin-left:50px;">
                    <div class="signin-form">
                        <h2 class="form-title" style="font-size:25px;" >Courier Sign Up</h2>
                        @if (count($errors) > 0)
                        <div class="error">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <br>
                        @endif
                        <form method="POST" class="register-form" id="login-form" action="{{route('kurir.signup')}}" style="margin-bottom: 30px;" runat="server" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="signin-image" style="margin-left:-10px;margin-bottom:10px;">
                                <figure><img src="#" id="preview" style="width: 200px;"><figcaption>Your Photos</figcaption></figure>
                                <input type="file" id="img-input" name="photo">
                            </div>
                            <script type="text/javascript">
                                var reader = new FileReader();
                                reader.onload = function (e) {
                                    $('#preview').attr('src', e.target.result);
                                }
                                
                                function readURL(input) {
                                        if (input.files && input.files[0]) {
                                            reader.readAsDataURL(input.files[0]);
                                        }
                                    }
                                    
                                    $("#img-input").change(function(){
                                        readURL(this);
                                    });
                            </script>
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material icons-name"></i></label>
                                <input type="text" name="nama_kurir" class="your-name" placeholder="Your Name" value="{{ old('nama_kurir')}}">
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="email_kurir" class="email" placeholder="Your Email" value="{{ old('email_kurir')}}">
                            </div>
                            <div class="form-group">
                                <label for="phone-number"><i class="zmdi zmdi-phone"></i></label>
                                <input type="text" name="no_kurir" class="phone-number" placeholder="Your Phone Number" value="{{ old('no_kurir')}}">
                            </div>
                            <div class="form-group">
                                <label for="jenis">Choose your company : </label>
                                <select name="jenis" id="jenis" style="margin-left: 170px;">
                                    <option value="gojek">Gojek</option>
                                    <option value="grab">Grab</option>
                                    <option value="jne">JNE</option>
                                    <option value="jnt">J&T</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password_kurir" class="password" placeholder="Your Password">
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password_kurir" class="password" placeholder="Confirm Your Password">
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Sign up"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="js/vendor/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
