<form action="{{route('update_guru_post', $id->id)}}" method="POST">
    @method('PUT')

    @csrf
    <b class="update-data-siswa1">UPDATE ACCOUNT SISWA</b>

    <div class="gerak1">
        <div class="nama34">
            <div class="bar-red90"></div>
            <input type="text" name="nama" class="bar-white90" value="{{$id->nama}}" />
            <div class="username-text78">Nama</div>
        </div>
    </div>

    @if (!$user->nuptk && !$user->nisn)
    <div class="gerak1">
        <div class="nama34">
            <div class="bar-red90"></div>
            <input type="text" read name="nuptk" class="bar-white90" value="{{$id->nuptk}}" />
            <div class="username-text78">Nuptk</div>
        </div>
    </div>

    @else
    <div class="gerak1">
        <div class="nama34">
            <div class="bar-red90"></div>
            <input type="text" readonly class="bar-white90" value="{{$id->nuptk}}" />
            <div class="username-text78">Nuptk</div>
        </div>
    </div>
    @endif


    @if (!$user->nuptk && !$user->nisn)
    <div class="gerak1">
        <div class="nama34">
            <div class="bar-red90"></div>
            <select type="text" class="bar-white90" name="kelas">
                <option value="">Tidak Ada</option>
                @foreach ($kelas as $i)
                <option value="{{$i->id}}" {{$id->kelas_siswa->nama_kelas ?? "" == $i->nama_kelas ? "selected" :
                    ""}}>{{$i->nama_kelas}}</option>
                @endforeach
            </select>
            <div class="username-text78">Kelas</div>
        </div>
    </div>
    @endif

    <div class="gerak1">
        <div class="nama34">
            <div class="bar-red90"></div>
            <input type="text" name="username" class="bar-white90" value="{{$id->username}}" />
            <div class="username-text78">Username</div>
        </div>
    </div>
    <div class="gerak1">
        <div class="nama34">
            <div class="bar-red90"></div>
            <input type="text" name="password" class="bar-white90" />
            <div class="username-text78">Password</div>
        </div>
    </div>


    <div class="submit10">
        <div class="bar-red77"></div>
        <div class="bar-white77"></div>
        <input type="submit" class="submit11">SUBMIT</input>
    </div>
</form>