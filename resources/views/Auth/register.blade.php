<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <title>Register</title>
    <link rel="stylesheet" href="{{asset('css/global.css')}}" />
    <link rel="stylesheet" href="{{asset('css/auth/register.css')}}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@500;700&display=swap" />
</head>

<body>
    <div class="form-sign-up">
        <div class="wrapper-background-white-and-r">
            <img class="background-white-and-red-1" alt="" src="./public/background-white-and-red-1@2x.png" />
        </div>
        <div class="alas-belakang"></div>
        <!-- Card Boxnya -->
        <section class="frame-parent">
            <div class="alas-login"></div>
            <img class="tampak-depan-mhs-1" loading="eager" alt=""
                src="{{asset('asset/login_register/gerbang.png')}}" />
            <div class="student-frame">
                <div class="teacher-frame">
                    <h2 class="sign-up">SIGN UP</h2>
                    <div class="back-button">
                        <div class="background-white-parent">
                            <div class="background-white"></div>
                            <div class="background-white-group">
                                <div class="background-white1"></div>
                                <div class="register-as">REGISTER AS</div>
                                <div class="red-guru-circle-frame">
                                    <div class="sircle-red"></div>
                                    <a href="{{route('register_guru')}}" class="student-circle-frame">
                                        <div class="sircle-white"></div>
                                        <img class="teacher-icon" loading="eager" alt=""
                                            src="{{asset('asset/login_register/Teacher.png')}}" />
                                        <b class="guru">
                                            <p class="guru1">GURU</p>
                                        </b>
                                    </a>
                                </div>
                                <a href="{{route('register_siswa')}}" class="red-guru-circle-frame1">
                                    <div class="sircle-red1"></div>
                                    <div class="sircle-white-parent">
                                        <div class="sircle-white1"></div>
                                        <img class="students-icon" loading="eager" alt=""
                                            src="{{asset('asset/login_register/Students.png')}}" />
                                        <b class="siswa">SISWA</b>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="ellipse-shape">
                            <div class="lingkaran"></div>
                            <img class="logo-mhs-icon" loading="eager" alt=""
                                src="{{asset('asset/login_register/LOGO MHS.png')}}" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>