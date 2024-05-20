<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Inter:400,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/others/raport.css')}}">
    <title>Document</title>
</head>

<body>

    <div class="container">
        @include('component.Navbar')

        <main class="main-content">
            <div class="table-atas1"></div>
            <div class="table-atas-parent">
                <div class="table-atas2"></div>
                <div class="tampilan-raport">
                    <img class="frame-siswa-icon" alt="" src="{{asset('asset/others/FRAME SISWA.png')}}" />
                    <div class="siswa-parent">
                        <b class="raport">Raport</b>
                    </div>
                </div>
                <div class="guru-parent">
                    <b class="guru">History</b>
                    <div class="frame-siswa-parent">
                        <img class="frame-siswa-icon2" alt="" src="{{asset('asset/others/GURU.png')}}" />
                    </div>
                </div>
            </div>
        </main>


        <div id="sidebar">
            @include('component.Sidebar')
        </div>

        <div id="content1">
            <div class="background-white-parent">
                <div class="background-white"></div>
                <div class="tampilan-raport1">
                    <div class="tampilan-raport-child"></div>
                    <img class="tampilan-raport-v-1-icon" loading="lazy" alt=""
                        src="{{asset('asset/others/Tampilan-Raport-V 1.png')}}" />
                </div>
            </div>
        </div>

        <div id="content2">
            <div class="username-text">Kelas</div>
            <div class="input-area">
                <div class="bar-red"></div>
                <div class="bar-white-parent">
                    <div class="bar-white"></div>
                    <b class="xi-pplg-i">{{$user->kelas_siswa->nama_kelas}}</b>
                </div>
            </div>
            <div class="kedua">
                <div class="username-text">Wali Kelas</div>
                <div class="input-area">
                    <div class="bar-red"></div>
                    <div class="bar-white-parent">
                        <div class="bar-white"></div>
                        <b class="xi-pplg-i">{{$guru->nama}}</b>
                    </div>
                </div>
                <div class="ketiga">
                    <div class="username-text">Jurusan</div>
                    <div class="input-area">
                        <div class="bar-red"></div>
                        <div class="bar-white-parent">
                            <div class="bar-white"></div>
                            <b class="xi-pplg-i">{{$user->kelas_siswa->jurusan}}</b>
                        </div>
                    </div>
                    <div class="keempat">
                        <div class="username-text">Jumlah siswa</div>
                        <div class="input-area">
                            <div class="bar-red"></div>
                            <div class="bar-white-parent">
                                <div class="bar-white"></div>
                                <b class="xi-pplg-i">{{count($siswa)}} Siswa</b>
                            </div>
                        </div>
                    </div>

                    <footer>
                        <div class="kaki">
                        </div>
                    </footer>
                </div>
</body>

</html>