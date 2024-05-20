<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Inter:400,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/others/list_siswa.css')}}">
    <title>Document</title>
</head>

<body>

    <div class="container">
        @include('component.Navbar')

        <main class="main-content">
            <div class="second-row-separator">
                <div class="table-atas"></div>
                <div class="fourth-row-separator">
                    <div class="table1"></div>
                    <button class="sign-out-button1">
                        <div class="table-atas1"></div>
                        <div class="sign-out-button-inner">
                            <div class="rectangle-parent3">
                                <div class="frame-child11"></div>
                                <b class="siswa1">SISWA</b>
                            </div>
                        </div>
                        <img class="sign-out-button2" onclick="window.location.href='{{route('dashboard')}}'" alt=""
                            src="{{asset('asset/others/SIGN OUT BUTTON.png')}}" />
                    </button>
                </div>
            </div>
        </main>


        <div id="sidebar">
            @include('component.Sidebar')
        </div>

        <div id="content1">
            <div class="visible-scrollbar">
                @php
                $count = 0;
                @endphp
                @foreach ($siswa as $i)
                <div class="ke{{$count++}}">
                    <div class="update-data-button">
                        <div class="update-data-button-child"></div>

                        @if ($user->nuptk)
                        <button class="useraltfill-instance">
                            <img class="useraltfill-instance-child" alt="" src="./public/rectangle-4178.svg" />
                            <a href="/input-siswa copy 2/resu.html" class="edit-data-nilai">Biodata Siswa</a>
                        </button>
                        @else
                        <button class="useraltfill-instance">
                            <img class="useraltfill-instance-child" alt="" src="./public/rectangle-4178.svg" />
                            <a href="/input-siswa copy 2/resu.html" class="edit-data-nilai">Edit Data Nilai</a>
                        </button>

                        <button class="useraltfill-instance" style="left: 370px">
                            <img class="useraltfill-instance-child" alt="" src="./public/rectangle-4178.svg" />
                            <a href="/input-siswa copy 2/resu.html" class="edit-data-nilai">Input Raport</a>
                        </button>
                        @endif

                        <div class="welcome-message-parent">
                            <div class="welcome-message"></div>
                            <img class="user-alt-fill-icon1" loading="lazy" alt="" src="asset/Human.png" />
                        </div>
                        <div class="text"></div>
                        <h3 class="nama-kelas-container">
                            <b>{{$i->nama}} </b>
                            <span>|</span>
                            <b> {{$i->kelas_siswa->nama_kelas}}</b>
                        </h3>
                        <b class="b">{{$count}}</b>
                    </div>
                </div>
                @endforeach
            </div>
        </div>


        <footer>
            <div class="kaki">
            </div>
        </footer>
    </div>
</body>

</html>