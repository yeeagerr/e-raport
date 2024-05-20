<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" />
</head>

<body>
    <div class="form-login">
        <div class="wrapper-backround-pic">
            <img class="backround-pic-icon" alt="" src="./public/backround-pic@2x.png" />
        </div>
        <div class="backround"></div>
        <section class="background-pic-frame">
            <div class="backround-login"></div>
            <div class="main-frame">
                <img class="gambar-mhs-icon" loading="eager" alt=""
                    src="{{asset('asset/login_register/gerbang.png')}}" />
            </div>
            <div class="inner-frame">
                <div class="label-frame">
                    <div class="sign-in-text">
                        <div class="greeting-text">
                            <div class="login-text">
                                <div class="selamat-datang-di-container">
                                    <p class="selamat-datang-di-e-raport">
                                        <span><b>SELAMAT DATANG DI E - RAPORT</b><span class="span"> </span></span>
                                    </p>
                                    <p class="multistudi-high-school">
                                        MULTISTUDI HIGH SCHOOL BATAM
                                    </p>
                                </div>
                            </div>

                            @include('component.FormLogin')
                            <b class="sign-up-container">
                                <span>Belum ada akun? </span>
                                <a href="{{route('register')}}" class="sign-up">Sign Up</a>
                            </b>
                        </div>
                    </div>
                </div>
            </div>
            <div class="logo-mhs">
                <div class="ellipse-shape">
                    <div class="lingkaran"></div>
                    <img class="logo-mhs-icon" loading="eager" alt=""
                        src="{{asset('asset/login_register/LOGO MHS.png')}}" />
                </div>
            </div>
        </section>
    </div>
</body>
<script src="{{asset('js/login.js')}}"></script>

</html>