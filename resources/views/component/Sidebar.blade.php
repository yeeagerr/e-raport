<div class="background-pic-rectangle">
    <div class="vector-one">
        <div class="account-bar">
            <div class="selamat-datang-text-parent">
                <div class="selamat-datang-text"></div>
                <img class="user-alt-fill-icon" loading="lazy" alt="" src="{{asset('asset/others/Human.png')}}">
            </div>
            <div class="update-account-text">
                <div class="raport-siswa-ranking-profil-wa">
                    <div class="back-ground-pics-table">
                        <div class="selamat-datang">Selamat Datang,</div>
                        <div class="user-kelas-container">
                            <b>{{$user->nama ?? $user->username}}</b>
                            <span>|</span>
                            @if ($user->nuptk || $user->nisn)
                            <b>{{$user->kelas_siswa->nama_kelas ?? ""}}</b>

                            @else
                            <b>Admin</b>

                            @endif
                        </div>
                    </div>
                    <div class="spp-jauh-lebih-murah-vector">
                        <div class="update-account">UPDATE ACCOUNT?</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="background-pic-rectangle1">
            <div class="vector-frame">
                @if ($user->nuptk ?? "")
                <a href="{{route('kelas_guru', 'KELAS')}}" class="raport-siswa-ranking-profil-wa2">
                    <div class="raport-siswa-ranking-profil-wa-item"></div>
                    <div class="ranking">Kelas</div>
                </a>
                <a href="{{route('kelas_guru', 'SISWA')}}" class="raport-siswa-ranking-profil-wa3">
                    <div class="raport-siswa-ranking-profil-wa-inner"></div>
                    <div class="profil-walikelas">Siswa</div>
                </a>
                <a href="{{route('eskul')}}" class="raport-siswa-ranking-profil-wa3">
                    <div class="raport-siswa-ranking-profil-wa-inner"></div>
                    <div class="profil-walikelas">Ekstrakulikuler</div>
                </a>
                @endif

                @if (!$user->nuptk && !$user->nisn)

                <a href="{{route('kelas_guru', 'KELAS')}}" class="raport-siswa-ranking-profil-wa2">
                    <div class="raport-siswa-ranking-profil-wa-item"></div>
                    <div class="ranking">Kelas</div>
                </a>
                <a href="{{route('kelas_guru', 'SISWA')}}" class="raport-siswa-ranking-profil-wa3">
                    <div class="raport-siswa-ranking-profil-wa-inner"></div>
                    <div class="profil-walikelas">Siswa</div>
                </a>

                <a href="{{route('eskul')}}" class="raport-siswa-ranking-profil-wa3">
                    <div class="raport-siswa-ranking-profil-wa-inner"></div>
                    <div class="profil-walikelas">Data Guru</div>
                </a>
                <a href="{{route('eskul')}}" class="raport-siswa-ranking-profil-wa3">
                    <div class="raport-siswa-ranking-profil-wa-inner"></div>
                    <div class="profil-walikelas">Ekstrakulikuler</div>
                </a>
                @endif

                @if($user->nisn ?? "")
                <a href="{{route('raport_siswa')}}" class="raport-siswa-ranking-profil-wa1">
                    <div class="raport-siswa-ranking-profil-wa-child"></div>
                    <div class="raport-siswa">Raport Siswa</div>
                </a>
                <a href="{{route('rangking_siswa')}}" class="raport-siswa-ranking-profil-wa2">
                    <div class="raport-siswa-ranking-profil-wa-item"></div>
                    <div class="ranking">Ranking</div>
                </a>
                <a href="{{route('profil_walikelas')}}" class="raport-siswa-ranking-profil-wa3">
                    <div class="raport-siswa-ranking-profil-wa-inner"></div>
                    <div class="profil-walikelas">Profil Walikelas</div>
                </a>
                @endif

            </div>
        </div>
    </div>
</div>