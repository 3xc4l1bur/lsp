<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-design-iconic-font.min.css">

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
            <div class="container" style="width: 540px;">
                <div class="judul">
                    <h1>GOPUD</h1>
                </div>
                <div class="signin-content" style="margin-left:50px;">
                    <div class="signin-form">
                        <h2 class="form-title" style="font-size:25px;" >Sign Up</h2>
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
                        <form method="POST" class="register-form" id="login-form" action="{{route('user.signup')}}" style="margin-bottom: 30px;">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material icons-name"></i></label>
                                <input type="text" name="name" class="your-name" placeholder="Your Name" value="{{ old('name')}}">
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="email" class="email" placeholder="Your Email" value="{{ old('email')}}">
                            </div>
                            <div class="form-group">
                                <label for="address"><i class="zmdi zmdi-home"></i></label>
                                <input type="text" name="address" class="address" placeholder="Your Address" value="{{ old('address')}}">
                            </div>
                            <div class="form-group">
                                <label for="phone-number"><i class="zmdi zmdi-phone"></i></label>
                                <input type="text" name="phone" class="phone-number" placeholder="Your Phone Number" value="{{ old('phone')}}">
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" class="password" placeholder="Your Password">
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" class="password" placeholder="Confirm Your Password">
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Sign up"/>
                            </div>
                        </form>
                        <a href="{{url('/kurir_regis')}}" style="margin-right: 30px;">You're a courier?</a>
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
