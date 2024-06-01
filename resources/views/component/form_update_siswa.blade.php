<form action="{{route('update_siswa_post', $siswa->id)}}" method="POST">
    @method('PUT')
    @csrf
    <b class="update-data-siswa1">UPDATE ACCOUNT SISWA</b>

    <div class="gerak1">
        <div class="nama34">
            <div class="bar-red90"></div>
            <input type="text" name="nama" class="bar-white90" value="{{$siswa->nama}}" />
            <div class="username-text78">Nama</div>
        </div>
    </div>
    <div class="gerak1">
        <div class="nama34">
            <div class="bar-red90"></div>
            <input readonly type="text" class="bar-white90" value="{{$siswa->nisn}}" />
            <div class="username-text78">Nisn</div>
        </div>
    </div>

    {{-- <div class="gerak1">
        <div class="nama34">
            <div class="bar-red90"></div>
            <select type="text" class="bar-white90">
                @foreach ($kelas as $i)
                <option value="{{$i->nama_kelas}}" {{$siswa->kelas_siswa->nama_kelas == $i->nama_kelas ? "selected" :
                    ""}}>{{$i->nama_kelas}}</option>
                @endforeach
            </select>
            <div class="username-text78">Kelas</div>
        </div>
    </div> --}}

    <div class="gerak1">
        <div class="nama34">
            <div class="bar-red90"></div>
            <input type="text" name="username" class="bar-white90" value="{{$siswa->username}}" />
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