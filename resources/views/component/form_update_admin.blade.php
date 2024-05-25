<form action="{{route('update_admin_post', $user->id)}}" method="POST">
    @csrf
    <b class="update-data-siswa1">UPDATE ACCOUNT ADMIN</b>


    <div class="gerak1">
        <div class="nama34">
            <div class="bar-red90"></div>
            <input type="text" name="username" class="bar-white90" value="{{$user->username}}" />
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