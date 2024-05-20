<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Inter:400,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/others/dashboard.css')}}">
    <title>Document</title>
</head>

<body>

    <div class="container">
        @include('component.Navbar')

        <main class="main-content">
            <div class="caraousel">
                <i>
                    <input checked type="radio" name="s"
                        style="background-image: url('{{asset('asset/others/genjet.webp')}}');">
                    <input type="radio" name="s" style="background-image: url('{{asset('asset/others/jangan.jpg')}}');">
                    <input type="radio" name="s"
                        style="background-image: url('{{asset('asset/others/guanyu rek.jpg')}}')">
                </i>
            </div>
        </main>


        <div id="sidebar">
            @include('component.Sidebar')
        </div>

        <div id="content1">
            <div class="iklan-1">
                <img class="iklan-1-item" loading="lazy" alt="" src="{{asset('asset/others/Rectangle 4187.png')}}">
                <p>spp jauh lebih murah dengan potongan 90%</p>
            </div>
        </div>
        <div id="content2">
            <div class="iklan-1">
                <img class="iklan-1-item" loading="lazy" alt="" src="{{asset('asset/others/Rectangle 4187.png')}}">
                <p>spp jauh lebih murah dengan potongan 90%</p>
            </div>
        </div>
        <div id="content3">
            <div class="iklan-1">
                <img class="iklan-1-item" loading="lazy" alt="" src="{{asset('asset/others/Rectangle 4187.png')}}">
                <p>spp jauh lebih murah dengan potongan 90%</p>
            </div>
        </div>
        <footer>
            <div class="kaki"></div>
        </footer>
    </div>
</body>

</html>