<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Inter:400,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/others/profil_walkas.css')}}">
    <title>Document</title>
</head>

<body>

    <div class="container">
        @include('component.Navbar')

        <main class="main-content">
            <div class="table-atas-parent">
                <div class="table-atas"></div>
                <button class="table-atas-group">
                    <div class="table-atas1"></div>
                    <b class="profile-wali-kelas">PROFILE WALI KELAS</b>
                </button>
            </div>
        </main>


        <div id="sidebar">
            @include('component.Sidebar')
        </div>
        @php
        $count = 0;
        @endphp
        @foreach ($guru as $i)
        @if ($i->kela_id !== null && $user->nisn)
        <div id="content{{$count++}}">
            <a href="{{route('walikelas', $i->id)}}" class="account-bar1">
                <div class="account-bar-item"></div>
                <div class="ellipse-parent">
                    <div class="ellipse-div"></div>
                    <img class="user-alt-fill-icon1" loading="lazy" alt="" src="{{asset('asset/others/Human.png')}}" />
                </div>
                <div class="account-bar-inner1">
                    <div class="frame-parent1">
                        <div class="edi-prayitno-spd-ppkn-wrapper">
                            <h2 class="edi-prayitno-spd-container">
                                <p class="edi-prayitno-spd">{{$i->nama}}</p>
                                {{-- <p class="ppkn">PPKN</p> --}}
                            </h2>
                        </div>
                        <div class="guru-mata-pelajaran">
                            Wali Kelas {{$i->kelas_siswa->nama_kelas}}
                        </div>
                    </div>
                </div>
            </a>

        </div>
        @endif

        @if (!$user->nisn)
        <div id="content{{$count++}}">
            <a href="{{route('walikelas', $i->id)}}" class="account-bar1">
                <div class="account-bar-item"></div>
                <div class="ellipse-parent">
                    <div class="ellipse-div"></div>
                    <img class="user-alt-fill-icon1" loading="lazy" alt="" src="{{asset('asset/others/Human.png')}}" />
                </div>
                <div class="account-bar-inner1">
                    <div class="frame-parent1">
                        <div class="edi-prayitno-spd-ppkn-wrapper">
                            <h2 class="edi-prayitno-spd-container">
                                <p class="edi-prayitno-spd">{{$i->nama}}</p>
                                {{-- <p class="ppkn">PPKN</p> --}}
                            </h2>
                        </div>
                        @if ($i->kela_id !== null )
                        <div class="guru-mata-pelajaran">
                            Wali Kelas {{$i->kelas_siswa->nama_kelas}}
                        </div>
                        @endif

                    </div>
                </div>
            </a>

        </div>
        @endif
        @endforeach



        <footer>
            <div class="kaki">
            </div>
        </footer>
    </div>
</body>

</html>