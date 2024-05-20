<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Inter:400,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/others/rangking.css')}}">
    <title>Document</title>
</head>

<body>

    <div class="container">
        @include('component.Navbar')


        <main class="main-content">
            <div class="rata-rata-nilai">
                <div class="table-atas"></div>
                <div class="useraltfill-parent">
                    <div class="useraltfill">
                        <div class="selamat-datapada"></div>
                        <img class="user-alt-fill-icon2" loading="lazy" alt=""
                            src="{{asset('asset/others/Human.png')}}" />
                    </div>
                    <div class="rata-nilai-unknown">
                        <div class="selamat-kepada-parent">
                            <div class="selamat-kepada1">Selamat Kepada</div>
                            <div class="user-kelas">
                                <div class="account-area-and-header-parent">
                                    <div class="account-area-and-header">
                                        <div class="user-kelas-container2">
                                            <b>{{$user->nama}} </b>
                                            <span>|</span>
                                            <b>{{$user->kelas_siswa->nama_kelas}}</b>
                                        </div>
                                    </div>
                                    <b class="rata-rata">Rata - Rata Nilai : 9.99</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rank05-wrapper">
                    <b class="rank05">RANK.05</b>
                </div>
            </div>
        </main>


        <div id="sidebar">
            @include('component.Sidebar')
        </div>

        <div id="content1">
            <div class="visible-scrollbar">
                <div class="blak1">
                    <div class="rectangle-parent5">
                        <div class="frame-child9"></div>
                        <div class="selamat-kepada-you-parent">
                            <div class="selamat-kepada-you"></div>
                            <div class="ellipse-parent">
                                <div class="ellipse-div"></div>
                                <img class="user-alt-fill-icon3" loading="lazy" alt=""
                                    src="{{asset('asset/others/Human.png')}}" />
                            </div>
                        </div>
                        <div class="rata-rata-nilai1"></div>
                        <div class="user-kelas-container3">
                            <b>USER </b>
                            <span>|</span>
                            <b> KELAS</b>
                        </div>
                        <b class="rata-rata1">Rata - Rata Nilai : uknown</b>
                        <b class="b5">01.</b>
                    </div>
                </div>

                <div class="blak2">
                    <div class="rectangle-parent5">
                        <div class="frame-child9"></div>
                        <div class="selamat-kepada-you-parent">
                            <div class="selamat-kepada-you"></div>
                            <div class="ellipse-parent">
                                <div class="ellipse-div"></div>
                                <img class="user-alt-fill-icon3" loading="lazy" alt=""
                                    src="{{asset('asset/others/Human.png')}}" />
                            </div>
                        </div>
                        <div class="rata-rata-nilai1"></div>
                        <div class="user-kelas-container3">
                            <b>USER </b>
                            <span>|</span>
                            <b> KELAS</b>
                        </div>
                        <b class="rata-rata1">Rata - Rata Nilai : uknown</b>
                        <b class="b5">02.</b>
                    </div>
                </div>

                <div class="blak3">
                    <div class="rectangle-parent5">
                        <div class="frame-child9"></div>
                        <div class="selamat-kepada-you-parent">
                            <div class="selamat-kepada-you"></div>
                            <div class="ellipse-parent">
                                <div class="ellipse-div"></div>
                                <img class="user-alt-fill-icon3" loading="lazy" alt="" src="asset/Human.png" />
                            </div>
                        </div>
                        <div class="rata-rata-nilai1"></div>
                        <div class="user-kelas-container3">
                            <b>USER </b>
                            <span>|</span>
                            <b> KELAS</b>
                        </div>
                        <b class="rata-rata1">Rata - Rata Nilai : uknown</b>
                        <b class="b5">03.</b>
                    </div>
                </div>

                <div class="blak4">
                    <div class="rectangle-parent5">
                        <div class="frame-child9"></div>
                        <div class="selamat-kepada-you-parent">
                            <div class="selamat-kepada-you"></div>
                            <div class="ellipse-parent">
                                <div class="ellipse-div"></div>
                                <img class="user-alt-fill-icon3" loading="lazy" alt="" src="asset/Human.png" />
                            </div>
                        </div>
                        <div class="rata-rata-nilai1"></div>
                        <div class="user-kelas-container3">
                            <b>USER </b>
                            <span>|</span>
                            <b> KELAS</b>
                        </div>
                        <b class="rata-rata1">Rata - Rata Nilai : uknown</b>
                        <b class="b5">04.</b>
                    </div>
                </div>
                <div class="blak5">
                    <div class="rectangle-parent5">
                        <div class="frame-child9"></div>
                        <div class="selamat-kepada-you-parent">
                            <div class="selamat-kepada-you"></div>
                            <div class="ellipse-parent">
                                <div class="ellipse-div"></div>
                                <img class="user-alt-fill-icon3" loading="lazy" alt="" src="asset/Human.png" />
                            </div>
                        </div>
                        <div class="rata-rata-nilai1"></div>
                        <div class="user-kelas-container3">
                            <b>USER </b>
                            <span>|</span>
                            <b> KELAS</b>
                        </div>
                        <b class="rata-rata1">Rata - Rata Nilai : uknown</b>
                        <b class="b5">05.</b>
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