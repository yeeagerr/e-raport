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
                        @include('component.update_links')
                    </div>
                </div>
            </div>
        </div>
        <div class="background-pic-rectangle1">
            <div class="vector-frame">
                @include('component.Sidelist')
            </div>
        </div>
    </div>
</div>