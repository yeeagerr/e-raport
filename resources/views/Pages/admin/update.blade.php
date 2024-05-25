<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/others/update-siswa.css')}}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" />
</head>

<body>

    <div class="index-update-data-siswa1">
        <div class="wrapper-background-white-and-r5">
            <img class="background-white-and-red-15" alt="" src="./public/background-white-and-red-1@2x.png" />
        </div>
        <div class="alas-belakang5"></div>
        <div class="alas-login5"></div>
        <div class="background-red4"></div>
        <div class="background-white8"></div>
        <img class="mhs-pic-icon4" alt="" src="{{asset('asset/others/MHS PIC.png')}}" />

        @include('component.form_update_admin')

        <div class="logo-mhs7">
            <div class="lingkaran8"></div>
            <img class="logo-mhs-icon8" alt="" src="{{asset('asset/others/LOGO.png')}}" />
        </div>
    </div>
</body>

</html>