<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>RegistrationForm_v10 by Colorlib</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- LINEARICONS -->
    <link rel="stylesheet" href="dist/css/fonts/linearicons/style.css">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="dist/css/registration.css">
    <link rel="icon" href="https://cdn0.iconfinder.com/data/icons/rounded-icons-for-it/512/source-code-program-html-php-512.png
">

</head>

<body>

    <div class="wrapper">
        <div class="inner">
            <img src="https://www10.0zz0.com/2021/10/06/10/725791308.png" alt="" class="image-1">
            <form method="POST" class="card">
                @csrf
                <div>
                    <h3>New Account?</h3>
                    <div class="form-holder">
                        <span class="lnr lnr-user"></span>
                        <input type="text" class="form-control" placeholder="Name" name="user">
                    </div>
                    <div class="form-holder">
                        <span class="lnr lnr-envelope"></span>
                        <input type="text" class="form-control" placeholder="Mail" name="email">
                    </div>
                    <div class="form-holder">
                        <span class="lnr lnr-user"></span>
                        <input type="text" class="form-control" placeholder="Age" name="age">
                    </div>
                    <div class="form-holder">
                        <span class="lnr lnr-phone-handset"></span>
                        <input type="text" class="form-control" placeholder="Phone Number" name="phone">
                    </div>
                    <div class="form-holder">
                        <span class="lnr lnr-lock"></span>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>

                    <button type="submit" id="register_user">
                        <span>Register</span>
                    </button>

                </div>

                <img src="https://www10.0zz0.com/2021/10/06/10/926284003.png" alt="" class="image-2">
            </form>
        </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="dist/js/global.js"></script>
    <script src="globel.js"></script>

</body>

</html>