<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="dist/css/new_style.css">
    <link rel="icon" href="https://cdn0.iconfinder.com/data/icons/rounded-icons-for-it/512/source-code-program-html-php-512.png
">


</head>

<body class="hold-transition login-page" id="home_page">
    <div class="login-box">

        <div class="login-logo ">
            <h5 class="ml10 my-auto">
                <span class="text-wrapper my-auto">
                    <span class="letters my-auto">first project in laravel</span>
                </span>
            </h5>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <form action="{{url('from')}}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email" name="user_email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 p-2">
                        <input type="submit" class=" btn btn-primary form-control w-100" value="SignIn"
                            onclick="alertt()">
                    </div>


            </div>

            </form>
            <form action="{{url('registration')}}">
                <div class="col-12 p-2">

                    <button class=" btn btn-success form-control w-100 registration"><a
                            href="registration">Registration</a></button>
                </div>
            </form>

            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- Global js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

    <script src="dist/js/global.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>