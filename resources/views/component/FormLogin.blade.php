<form action="{{route('login_guru')}}" method="POST" style="display: none">
    @csrf
    <input class="username" name="usernameGuru" type="text" />
    <input class="password" name="passGuru" type="password" />
    <input type="submit" id="submitteacher" />
</form>

<form action="{{ route('login_siswa') }}" method="POST">
    @csrf
    <div class="sign-in">SIGN IN</div>
    <div class="white-bar-frame">
        <p class="white-bar-frame-child">Username</p>
        <div class="password-logo">
            <div class="bar-red"></div>
            <img class="username-logo-icon" alt="" src=" {{asset('asset/login_register/USERNAME LOGO.png')}}" />
            <input type="text" class="bar-white username1" name="usernameSiswa" required />
        </div>
    </div>
    <div class="sign-up-text">
        <div class="school-logo-frame">
            <div class="password-text">
                <p class="password">Password</p>
            </div>
        </div>
        <div class="password-logo-frame">
            <div class="bar-red1"></div>
            <img class="password-logo-icon" loading="eager" alt=""
                src="{{asset('asset/login_register/PASSWORD LOGO.png')}}" />
            <input type="password" class="bar-white password1" name="passwordSiswa" required />
        </div>
    </div>
    <div class="sign-up-text1">
        <div class="welcome-frame-siswa-siswa-guru">
            <div class="login-as-text">
                <div class="login-as">Login as</div>
            </div>
            <div class="frame-parent">
                <!-- SISWA -->

                <button type="submit" class="frame-siswa-parent">
                    <img class="frame-siswa-icon" alt="" src="{{asset('asset/login_register/siswa.png')}}" />
                    <b class="siswa">SISWA</b>
                </button>

                <!-- GURU -->

                <label for="submitteacher" class="frame-siswa-group">
                    <img class="frame-siswa-icon1" alt="" src="{{asset('asset/login_register/guru.png')}}" />
                    <b class="guru">GURU</b>
                </label>
            </div>
        </div>
    </div>
</form>