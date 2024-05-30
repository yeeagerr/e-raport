@if ($user->nuptk ?? "")
<a href="{{route('kelas_guru', 'kelas')}}" class="raport-siswa-ranking-profil-wa2">
    <div class="raport-siswa-ranking-profil-wa-item"></div>
    <div class="ranking">Kelas</div>
</a>
<a href="{{route('kelas_guru', 'siswa')}}" class="raport-siswa-ranking-profil-wa3">
    <div class="raport-siswa-ranking-profil-wa-inner"></div>
    <div class="profil-walikelas">Siswa</div>
</a>
{{-- <a href="{{route('eskul')}}" class="raport-siswa-ranking-profil-wa3">
    <div class="raport-siswa-ranking-profil-wa-inner"></div>
    <div class="profil-walikelas">Ekstrakulikuler</div>
</a> --}}
@endif

@if (!$user->nuptk && !$user->nisn && $user->username && $user->password)

<a href="{{route('kelas_guru', 'kelas')}}" class="raport-siswa-ranking-profil-wa2">
    <div class="raport-siswa-ranking-profil-wa-item"></div>
    <div class="ranking">Kelas</div>
</a>
<a href="{{route('kelas_guru', 'siswa')}}" class="raport-siswa-ranking-profil-wa3">
    <div class="raport-siswa-ranking-profil-wa-inner"></div>
    <div class="profil-walikelas">Siswa</div>
</a>

<a href="{{route('profil_walikelas')}}" class="raport-siswa-ranking-profil-wa3">
    <div class="raport-siswa-ranking-profil-wa-inner"></div>
    <div class="profil-walikelas">Data Guru</div>
</a>
{{-- <a href="{{route('eskul')}}" class="raport-siswa-ranking-profil-wa3">
    <div class="raport-siswa-ranking-profil-wa-inner"></div>
    <div class="profil-walikelas">Ekstrakulikuler</div>
</a> --}}
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