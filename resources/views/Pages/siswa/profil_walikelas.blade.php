<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous"
        defer></script>
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <title>Document</title>
</head>

<body>

    <script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>


    <section class="h-screen w-screen bg-gray-200 flex flex-col-reverse sm:flex-row min-h-0 min-w-0">
        <aside class="sm:h-full md:hidden sm:w-16 w-full h-12 bg-gray-800 text-gray-200">
            <ul class="text-center flex flex-row sm:flex-col w-full">
                <li class="h-14 border-b border-gray-900 hidden sm:block">
                    <a id="page-icon" href="/" class="h-full w-full hover:bg-gray-700 block p-3">
                        <img class="object-contain h-full w-full"
                            src="https://avatars1.githubusercontent.com/u/6157842?v=4" alt="open-source" />
                    </a>
                </li>
                <li class="sm:border-b border-gray-900 flex-1 sm:w-full" title="Inbox">
                    <a id="page-icon" href="/" class="h-full w-full hover:bg-gray-700 block p-3">
                        <i class="fas fa-inbox fill-current"> </i>
                    </a>
                </li>
                <li class="sm:border-b border-gray-900 flex-1 sm:w-full" title="Settings">
                    <a id="page-icon" href="/" class="h-full w-full hover:bg-gray-700 block p-3">
                        <i class="fas fa-cogs fill-current"> </i>
                    </a>
                </li>
                <li class="sm:border-b border-gray-900 flex-1 sm:w-full" title="Users">
                    <a id="page-icon" href="/" class="h-full  w-full hover:bg-gray-700 block p-3">
                        <i class="fas fa-users fill-current"> </i>
                    </a>
                </li>
            </ul>
        </aside>
        <main class="sm:h-full flex-1 flex flex-col min-h-0 min-w-0 overflow-x-hidden">
            @include('component.Navbar')

            <section class="flex-1 pt-3 md:p-6 lg:mb-0 lg:min-h-0 lg:min-w-0">
                <div class="flex flex-col lg:flex-row h-full w-full">

                    @include('component.Sidebar')

                    <div class="border h-full w-full lg:flex-1 px-3 min-h-0 min-w-0">

                        <!-- overflow content right -->
                        <div class="w-full h-full min-h-0 min-w-0 mt-10">
                            <div class="bg-red-800 w-full h-12 shadow rounded-t-2xl">
                            </div>
                            <div class="bg-red-700 w-full h-24 shadow rounded-b-xl">
                                <div class="flex justify-center">
                                    <button
                                        class="border-solid border-2 border-sky-500relative mt-6 items-center content-center text-center py-2 px-8 text-black text-base font-bold nded-full overflow-hidden bg-white rounded-full transition-all duration-400 ease-in-out shadow-md hover:scale-105 hover:text-white hover:shadow-lg active:scale-90 before:absolute before:top-0 before:-left-full before:w-full before:h-full before:bg-gradient-to-r before:from-red-800 before:to-red-800 before:transition-all before:duration-500 before:ease-in-out before:z-[-1] before:rounded-full hover:before:left-0">
                                        DAFTAR GURU
                                    </button>
                                </div>
                            </div>


                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                @foreach ($guru as $i)
                                @if ($i->kela_id !== null && $user->nisn)
                                <a href="{{route('walikelas', $i->id)}}"
                                    class="bg-red-800 h-[220px] w-full mt-10 rounded-xl shadow-md overflow-hidden">
                                    <div class="relative flex">
                                        <div
                                            class="relative w-20 mt-[60px] ms-5 h-20 bg-white rounded-full flex justify-center items-center text-center p-5 shadow-xl">
                                            <img src="{{asset('asset/others/Human.png')}}" class="relative" width="50px"
                                                alt="">
                                        </div>
                                        <div class="flex flex-col mt-[60px] gap-2 py-2">
                                            <p class="ms-4 text-white text-lg font-extrabold">{{$i->nama}}</p>
                                            <p class="ms-4 text-white text-lg font-extrabold">Wali Kelas :
                                                {{$i->kelas_siswa->nama_kelas}}</p>
                                            <p class="ms-4 text-white text-sm">Jurusan : {{$i->kelas_siswa->jurusan}}
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                @endif
                                @endforeach

                            </div>

                        </div>


                    </div>





            </section>
            <!-- 
    <footer class="px-6 py-3 border-t flex w-full items-end">
      <p class="text-gray-600">Made by @codingsafari</p>
      <div class="flex-1"></div>
      <button
        class="shadow-md ml-auto border rounded-full ml-2 w-14 h-14 text-center leading-none text-green-200 bg-green-600 hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent">
        <i class="fas fa-question fill-current"></i>
      </button>
    </footer> -->

        </main>
    </section>

    <style>

    </style>

</html>