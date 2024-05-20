<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Inter:400,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/others/walikelas.css')}}">
    <title>Document</title>
</head>

<body>

    <div class="container">
        @include('component.Navbar')


        <main class="main-content">
            <div class="table-atas"></div>
            <div class="table-atas-parent">
                {{-- <img class="table-atas-icon" alt="" src="./public/table-atas.svg" /> --}}
                <img onclick="window.location.href='{{route('dashboard')}}'" class="sign-out-button1" loading="lazy"
                    alt="" src="{{asset('asset/others/SIGN OUT BUTTON.png')}}" />
            </div>
        </main>


        <div id="sidebar">
            @include('component.Sidebar')
        </div>

        <div id="content1">
            <div class="vector-parent">
                <h3 class="edi-prayitno-spd">{{$id->nama}}</h3>
                <img class="icon-image" loading="lazy" alt="" src="{{asset('asset/others/icon _image_.png')}}" />
                <button class="rectangle-parent3">
                    <div class="frame-child4"></div>
                    <div class="social-media">Social Media</div>
                </button>
            </div>

        </div>

        <div id="content2">
            <div class="rectangle-parent2">
                <div class="positionrek">
                    <div class="pertama">
                        <div class="username-text">BRUH</div>
                        <button class="bar-red-group">
                            <div class="bar-red1"></div>
                            <div class="bar-white-group">
                                <div class="bar-white1"></div>
                                <b class="b1">+6283748372</b>
                            </div>
                        </button>
                    </div>
                    <div class="kedua">
                        <div class="username-text">BRUH</div>
                        <button class="bar-red-group">
                            <div class="bar-red1"></div>
                            <div class="bar-white-group">
                                <div class="bar-white1"></div>
                                <b class="b1">+6283748372</b>
                            </div>
                        </button>
                    </div>
                    <div class="ketiga">
                        <div class="username-text">BRUH</div>
                        <button class="bar-red-group">
                            <div class="bar-red1"></div>
                            <div class="bar-white-group">
                                <div class="bar-white1"></div>
                                <b class="b1">+6283748372</b>
                            </div>
                        </button>
                    </div>
                    <div class="keempat">
                        <div class="username-text">BRUH</div>
                        <button class="bar-red-group">
                            <div class="bar-red1"></div>
                            <div class="bar-white-group">
                                <div class="bar-white1"></div>
                                <b class="b1">+6283748372</b>
                            </div>
                        </button>
                    </div>
                    <div class="kelima">
                        <div class="username-text">BRUH</div>
                        <button class="bar-red-group">
                            <div class="bar-red1"></div>
                            <div class="bar-white-group">
                                <div class="bar-white1"></div>
                                <b class="b1">+6283748372</b>
                            </div>
                        </button>
                    </div>
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