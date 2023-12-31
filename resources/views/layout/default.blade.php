<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:locale" content="id_ID">
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="Masjid Darussalam">
    <meta property="og:title" content="Masjid Darussalam - Taman Rahayu Regency">
    <meta name="keywords" content="darussalam, masjid darussalam, web darussalam, website darussalam, Risda, risda, masjid darussalam tamara">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}">
    <title>Masjid Darussalam - {{ $pageTitle }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/spicr/dist/css/spicr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/all.min.css') }}">

    <style>
        .perspective {
            perspective: 500px;
            backface-visibility: hidden;
        }

        .perspective-1500 {
            perspective: 1500px;
            backface-visibility: hidden;
        }

        .overlay {
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, .45)
        }

        /* Muslim Pro Custom Style Start */
        .ws {
            padding: 0;
            position: relative;
            width: 100%;
        }

        .ws a {
            text-decoration: none;
        }

        .ws .MPwidget {
            width: 100%;
            background: rgba(250, 250, 250, 0);
            margin: 0 0 10px;
            box-shadow: 0 0 0 rgba(250, 250, 250, 0);
        }

        .ws .MPheader {
            background: rgba(250, 250, 250, 0);
            padding: 0;
            min-height: 30px;
        }

        .ws .MPheader .logo {
            display: none;
        }

        .ws .MPheader .title,
        .ws .tanggal {
            padding: 0;
            height: 30px;
            line-height: 30px;
            font-size: 14px;
        }

        .ws .MPwidget .title a,
        .ws .tanggal {
            color: #888;
            font-family: 'Roboto', 'Open Sans', sans-serif;
            font-weight: bold;
            font-style: normal;
            pointer-events: none;
        }

        .ws .tanggal {
            position: absolute;
            right: 0;
            top: 0;
            z-index: 20;
            color: #06b6d4;
            float: right;
        }

        .ws .MPtimetable tr:first-child {
            display: none;
        }

        .ws .MPtimetable tr {
            display: inline-block;
            width: 100%;
            position: relative;
            padding: 10px;
        }

        .MPtimetable {
            box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
        }

        .MPtimetable tbody {
            display: flex;
            justify-content: space-between;
        }

        .MPtimetable tr {
            height: 100% !important;
            background-color: #4b5563 !important;
        }

        .MPtimetable td:nth-child(2) {
            padding: 0 !important;
        }

        .ws .MPtimetable td {
            position: relative;
            display: block;
            /* width: 74px; */
            padding: 5px;
            text-align: center;
            font-size: 10px;
            height: 20px;
            /* line-height: 20px; */
            background: rgba(250, 250, 250, 0);
            text-transform: uppercase;
            color: rgba(0, 0, 0, 0);
        }

        .ws .MPtimetable tr td:before {
            font-size: 10px;
            text-align: center;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            color: #333;
            height: 20px;
            line-height: 20px;
        }

        .ws .MPtimetable tr:nth-child(2) {
            border-radius: 0.5rem 0 0 0.5rem;
        }

        .ws .MPtimetable tr:last-child {
            border-radius: 0 0.5rem 0.5rem 0;
        }

        .ws .MPtimetable tr:nth-child(2) td:nth-child(1):before {
            content: "SUBUH";
            color: #fff;
        }

        .ws .MPtimetable tr:nth-child(3) td:nth-child(1):before {
            content: "TERBIT";
            color: #fff;

        }

        .ws .MPtimetable tr:nth-child(4) td:nth-child(1):before {
            content: "DZUHUR";
            color: #fff;

        }

        .ws .MPtimetable tr:nth-child(5) td:nth-child(1):before {
            content: "ASHAR";
            color: #fff;

        }

        .ws .MPtimetable tr:nth-child(6) td:nth-child(1):before {
            content: "MAGHRIB";
            color: #fff;

        }

        .ws .MPtimetable tr:nth-child(7) td:nth-child(1):before {
            content: "ISYA";
            color: #fff;

        }

        .ws .MPtimetable td:nth-child(2) {
            font-size: 14px;
            height: 24px;
            line-height: 20px;
            background: rgba(250, 250, 250, 0);
            text-transform: uppercase;
            text-align: center;
            color: #fff;
        }

        .ws .MPtimetable tr:nth-child(2n) {
            background-color: #1f2937 !important;
        }

        .ws .MPfooter {
            display: none;
        }

        @media screen and (max-width:425px) {
            /* .ws {
                width: 100%;
            } */

            .ws .MPtimetable tr {
                width: 16.6666%;
            }

            .ws .MPwidget {
                margin: 0;
            }

            .ws .MPheader .title,
            .ws .tanggal {
                font-size: 12px;
            }

            .ws .MPtimetable tr td:before {
                height: 17px;
                line-height: 17px;
            }

            .ws .MPtimetable td:nth-child(2) {
                font-size: 13px;
                height: 20px;
                line-height: 14px;
            }

            .MPtimetable tbody {
                display: inherit;
                justify-content: space-between;
            }
        }

        /* Muslim Pro Custom Style End */
    </style>
    @yield('style')
</head>

<body class="h-full">
    <div class="min-h-full">
        <nav class="bg-dark">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <h3 class="text-2xl text-white font-bold tracking-wide select-none">Masjid Darussalam</h3>
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                <a href="{{ url('/') }}" class="rounded-md px-3 py-2 text-sm font-medium {{ url()->current() == url('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}" aria-current="page">Beranda</a>
                                <a href="{{ route('profile') }}" class="rounded-md px-3 py-2 text-sm font-medium {{ url()->current() == route('profile') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">Profil</a>
                                <a href="{{ route('berita') }}" class="rounded-md px-3 py-2 text-sm font-medium {{ url()->current() == route('berita') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">Berita</a>
                                <a href="{{ route('gallery') }}" class="rounded-md px-3 py-2 text-sm font-medium {{ url()->current() == route('gallery') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">Gallery</a>
                                <a href="{{ route('layanan') }}" class="rounded-md px-3 py-2 text-sm font-medium {{ url()->current() == route('layanan') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">Layanan</a>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">
                            <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-sm font-medium {{ url()->current() == route('login') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">Login</a>
                            {{-- <button type="button" class="rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                                <span class="sr-only">View notifications</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                                </svg>
                            </button> --}}

                            <!-- Profile dropdown -->
                            <div class="relative ml-3 hidden">
                                <div>
                                    <button type="button" class="flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                        <span class="sr-only">Open user menu</span>
                                        <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                    </button>
                                </div>

                                <!--
                                    Dropdown menu, show/hide based on menu state.

                                    Entering: "transition ease-out duration-100"
                                    From: "transform opacity-0 scale-95"
                                    To: "transform opacity-100 scale-100"
                                    Leaving: "transition ease-in duration-75"
                                    From: "transform opacity-100 scale-100"
                                    To: "transform opacity-0 scale-95"
                                -->
                                <div class="absolute right-0 z-10 mt-2 hidden w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                                    <!-- Active: "bg-gray-100", Not Active: "" -->
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden">
                        <!-- Mobile menu button -->
                        <button type="button" id="hamburger" class="inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <!-- Menu open: "hidden", Menu closed: "block" -->
                            <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <!-- Menu open: "block", Menu closed: "hidden" -->
                            <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="hidden md:hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="{{ url('/') }}" class="block rounded-md px-3 py-2 text-base font-medium {{ url()->current() == url('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}" aria-current="page">Beranda</a>
                    <a href="{{ route('profile') }}" class="block rounded-md px-3 py-2 text-base font-medium {{ url()->current() == route('profile') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">Profil</a>
                    <a href="{{ route('berita') }}" class="block rounded-md px-3 py-2 text-base font-medium {{ url()->current() == route('berita') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">Berita</a>
                    <a href="{{ route('gallery') }}" class="block rounded-md px-3 py-2 text-base font-medium {{ url()->current() == route('gallery') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">Gallery</a>
                    <a href="{{ route('layanan') }}" class="block rounded-md px-3 py-2 text-base font-medium {{ url()->current() == route('layanan') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">Layanan</a>
                    <a href="{{ route('login') }}" class="block rounded-md px-3 py-2 text-base font-medium {{ url()->current() == route('login') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">Login</a>
                </div>
                {{-- <div class="border-t border-gray-700 pb-3 pt-4"> --}}
                <div class="border-t-0 border-gray-700 pb-0 pt-0">
                    <div class="hidden items-center px-5">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        </div>
                        <div class="ml-3">
                            <div class="text-base font-medium leading-none text-white">Tom Cook</div>
                            <div class="text-sm font-medium leading-none text-gray-400">tom@example.com</div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <header class="bg-slate-50 md:bg-slate-300 shadow">
            <div class="mx-auto max-w-7xl px-4 md:pb-6 pb-4 md:pt-4 sm:px-6 lg:px-8">
                <div class="ws">
                    <div class="tanggal">
                        <script>
                            var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                            var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
                            var date = new Date();
                            var day = date.getDate();
                            var month = date.getMonth();
                            var thisDay = date.getDay(),
                                thisDay = myDays[thisDay];
                            var yy = date.getYear();
                            var year = (yy < 1000) ? yy + 1900 : yy;
                            document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                        </script>
                    </div>
                    <script src="https://www.muslimpro.com/muslimprowidget.js?cityid=1649378&language=id&timeformat=24" async="true"></script>
                </div>
                <div class="w-full relative p-0 shadow-lg md:mt-0 mt-4">
                    <div class="flex items-center text-center">
                        <div class="w-full md:p-5 p-1 md:bg-dark bg-secondary rounded-s-lg">
                            <h3 class="font-bold md:text-3xl text-xl text-white" id="jam"></h3>
                        </div>
                        <div class="w-full md:p-5 p-1 md:bg-dark bg-secondary">
                            <h3 class="font-bold md:text-3xl text-xl text-white" id="menit"></h3>
                        </div>
                        <div class="w-full md:p-5 p-1 md:bg-dark bg-secondary rounded-e-lg">
                            <h3 class="font-bold md:text-3xl text-xl text-white" id="detik"></h3>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main>

            @yield('content')

        </main>
    </div>

    <!-- Footer Start -->
    <footer class="bg-dark pt-24 pb-12">
        <div class="container">
            <div class="mx-auto max-w-7xl">
                <div class="flex flex-wrap">
                    <div class="w-full px-4 mb-10 text-slate-300 font-medium md:w-1/3">
                        <h2 class="font-bold text-4xl text-white mb-5">Masjid Darussalam</h2>
                        <h3 class="font-bold text-2xl mb-2">Hubungi Kami</h3>
                        <div class="mb-3">
                            <p>085777408570 <span>(Maryanto)</span></p>
                            <p>081314218843 <span>(Munif)</span></p>
                        </div>
                        <p>Perum. Taman Rahayu Regency, Kec. Bantar Gebang, Kel. Ciketing Udik, Kota Bekasi, Jawa Barat</p>
                        <p>Kota Bekasi</p>
                    </div>
                    <div class="w-full px-4 font-medium mb-10 md:w-1/3">
                        <h3 class="font-semibold text-xl text-white mb-5">Pelayanan</h3>
                        <ul class="text-slate-300">
                            <li>
                                <a href="#" class="inline-block text-base hover:text-primary mb-3">Pembayaran Zakat</a>
                            </li>
                            <li>
                                <a href="#" class="inline-block text-base hover:text-primary mb-3">Penyaluran Hewan Kurban</a>
                            </li>
                            <li>
                                <a href="#" class="inline-block text-base hover:text-primary mb-3">Pengajian Rutin</a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full px-4 font-medium mb-12 md:w-1/3">
                        <h3 class="font-semibold text-xl text-white mb-5">Informasi</h3>
                        <ul class="text-slate-300">
                            <li>
                                <a href="#" class="inline-block text-base hover:text-primary mb-3">INFAQ & SODAQOH</a>
                            </li>
                            <li>
                                <a href="#" class="inline-block text-base hover:text-primary mb-3">Sholat Berjama'ah</a>
                            </li>
                            <li>
                                <a href="#" class="inline-block text-base hover:text-primary mb-3">Pengurus DKM</a>
                            </li>
                            <li>
                                <a href="#" class="inline-block text-base hover:text-primary mb-3">Khatib Jumat</a>
                            </li>
                            <li>
                                <a href="#" class="inline-block text-base hover:text-primary mb-3">TPA & PAUD</a>
                            </li>
                            <li>
                                <a href="#" class="inline-block text-base hover:text-primary mb-3">RISDA</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w-full pt-10 border-t border-slate-700">
                    <p class="font-medium md:text-sm text-xs text-slate-500 text-center">&copy; {{ date('Y') }} Masjid Darussalam All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Back to top Start -->
    <div class="h-14 w-14 bg-primary shadow-md opacity-50 hover:opacity-100 flex justify-center items-center p-4 rounded-full fixed z-[9999] bottom-4 right-4 lg:hover:animate-pulse cursor-pointer" id="to-top">
        <span class="block"><i class="fa-solid fa-fw fa-arrow-up fa0lg"></i></span>
    </div>
    <!-- Back to top End -->

    <script src="{{ asset('js/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery_easing.1.3.js') }}"></script>
    <script src="{{ asset('vendor/kute-js/dist/kute.js') }}"></script>
    <script src="{{ asset('vendor/spicr/dist/js/spicr-standalone.min.js') }}"></script>
    <script src="{{ asset('vendor/fontawesome/js/all.min.js') }}"></script>
    <script>
        $(function() {
            $('#hamburger').on('click', function() {
                $('#hamburger svg.block').toggle(300);
                $('#hamburger svg.hidden').toggle(300);
                $('#mobile-menu').slideToggle(300);
            });

            $("#to-top").hide();
            $(window).on('scroll', function() {
                if ($(this).scrollTop() > 300) {
                    $('#to-top').fadeIn();
                } else {
                    $('#to-top').fadeOut();
                }
            });

            $('#to-top').on('click', function(e) {
                e.preventDefault();

                $('html, body').animate({
                    scrollTop: 0
                }, 1500, 'easeInOutExpo');
            });

            window.setTimeout("waktu()", 1000);
        });

        function waktu() {
            var waktu = new Date();
            setTimeout("waktu()", 1000);
            document.getElementById("jam").innerHTML = set(waktu.getHours());
            document.getElementById("menit").innerHTML = set(waktu.getMinutes());
            document.getElementById("detik").innerHTML = set(waktu.getSeconds());
        }

        function set(a) {
            a = a < 10 ? '0' + a : a;
            return a;
        }
    </script>
    @yield('script')
</body>

</html>