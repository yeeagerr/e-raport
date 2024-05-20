<nav>
    <nav>
        <input type="checkbox" id="sidebar-active">
        <label for="sidebar-active" class="open-sidebar-button">
            <svg xmlns="http://www.w3.org/2000/svg" height="32" viewBox="0 -960 960 960" width="32">
                <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
            </svg>
        </label>
        <label id="overlay" for="sidebar-active"></label>
        <div class="links-container">
            <label for="sidebar-active" class="close-sidebar-button">
                <svg xmlns="http://www.w3.org/2000/svg" height="32" viewBox="0 -960 960 960" width="32">
                    <path
                        d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
                </svg>
            </label>

            <div class="gambar">
                <img src="{{asset('asset/others/LOGO.png')}}" alt="" width="70x">
            </div>
            <div class="text1">
                <h1>E RAPORT SMK MULTISTUDI HIGH SCHOOL BATAM</h1>
            </div>
            <a class="home-link" href="index.html"></a>
            <a href="#"><img src="{{asset('asset/others/CUSTOMER SERVICE BUTTON.png')}}" alt="" width="60px"></a>
            <a href="#"><img src="{{asset('asset/others/NOTIFICATION BUTTON.png')}}" alt="" width="60px"></a>
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <button type="submit" style="background-color: transparent; border:none; margin-right: 25px;"
                    href="#"><img src="{{asset('asset/others/SIGN OUT BUTTON.png')}}" alt="" width="60px"></button>
            </form>
        </div>
    </nav>

</nav>