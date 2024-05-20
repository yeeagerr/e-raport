<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <title>Sign Up</title>
    <link rel="stylesheet" href="{{asset('css/auth/register_siswa.css')}}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;800&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap" />
</head>

<body>
    <div class="container">
        <div class="form-sign-up-siswa">
            <!-- <div class="wrapper-background-white-and-r">
        <img class="background-white-and-red-1" alt="" src="./public/background-white-and-red-1@2x.png" />
      </div> -->
            <div class="alas-belakang"></div>
            <section class="user-frame">
                <div class="userframe-container">
                    <div class="alas-login"></div>

                    @include('component.FormRegister_siswa')

                    <img class="mhs-pic-icon" loading="eager" alt=""
                        src="{{asset('asset/login_register/gerbang.png')}}" />
                </div>
                <div class="logo-mhs">
                    <div class="lingkaran"></div>
                    <img class="logo-mhs-icon" loading="eager" alt=""
                        src="{{asset('asset/login_register/LOGO MHS.png')}}" />
                </div>
            </section>
        </div>
    </div>
</body>

</html>