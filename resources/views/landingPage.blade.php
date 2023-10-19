<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyTelkomedika | Landing Page</title>
    {{-- fonts --}}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    {{-- tailwind css --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- flowbite --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>

</head>

<body>

    <nav class="bg-white/80 backdrop-blur-lg fixed w-full z-20 top-0 left-0 px-5 shadow-lg shadow-gray-100/50">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center">
                <span
                    class="self-center text-xl md:text-2xl font-semibold whitespace-nowrap text-[#ED1C24]">MyTelkomedika</span>
            </a>
            <div class="flex md:hidden md:order-2">
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-[#ED1C24] hover:text-white transition duration-150 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="font-medium bg-gray-50 md:bg-transparent flex flex-col justify-center py-4 md:p-0 rounded-lg md:flex-row md:space-x-12 md:align-middle md:items-center">
                    <li class="relative">
                        <a href="/"
                            class="block py-2 transition duration-250 pl-3 pr-4 font-medium text-gray-900 md:hover:bg-transparent rounded md:bg-transparent md:p-0 md:hover:text-[#ED1C24] hover:bg-gray-100 md:border-0"
                            aria-current="page">Beranda</a>
                        <span
                            class="h-1 w-full {{ Request::is('/') ? 'md:block' : '' }}  hidden rounded bg-[#ED1C24] absolute"></span>
                    </li>
                    <li class="relative">
                        <a href="/contact"
                            class="block py-2 transition font-medium duration-250 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#ED1C24] md:p-0">Contact</a>
                        <span
                            class="h-1 w-full {{ Request::is('contact') ? 'md:block' : '' }}  hidden rounded bg-[#ED1C24] absolute"></span>
                    </li>
                    <li class="mt-5 md:mt-0">
                        <a href="/login"
                            class="text-white transition duration-300 shadow-lg hover:shadow-[#ED1C24]/40 text-base bg-[#ED1C24] rounded-full block md:px-7 py-2.5 text-center">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="mt-20">
        <section class="bg-white sm:px-5">
            <div class="flex flex-col md:flex-row py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
                <div
                    class="rounded-lg order-2 md:order-1 mb-8 flex-1 text-center flex flex-col items-center md:items-start md:text-start">
                    <p class="text-[#ED1C24] text-base font-medium inline-flex items-center py-0.5 rounded-md mb-2">
                        Welcome to MyTelkomedika
                    </p>
                    <h1
                        class="text-gray-900 sm:text-4xl sm:max-w-md lg:max-w-md md:max-w-[16rem] text-3xl md:text-4xl md:leading-snug lg:text-6xl font-semibold lg:leading-tight mb-4">
                        One Stop Health Care For Telyutizen
                    </h1>
                    <p class="text-sm max-w-sm md:text-base font-normal text-gray-500 mb-6">
                        Kamu meriang, ga enak badan? Tenang aja, ada Telkomedika
                        yang selalu siap mengobatimu!
                    </p>
                    <a href="#"
                        class="inline-flex text-sm transition duration-200 justify-center items-center shadow-lg shadow-[#ED1C24]/30 hover:shadow-[#ED1C24]/50 py-4 px-8 md:text-base rounded-full font-medium text-center text-white bg-[#ED1C24] mt-8 md:mt-0">
                        Baca Selengkapnya
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
                <div class="flex-1 order-1 md:order-2">
                    <img src="/img/hero.webp" alt="hero" />
                </div>
            </div>
        </section>

        <section class="bg-white">
            <div class="mx-auto max-w-screen-xl px-8 md:px-4">
                <div
                    class="bg-gradient-to-r shadow-lg shadow-[#ED1C24]/40 from-[#ED1C24] to-[#ED1C24]/60 rounded-tl-[60px] rounded-br-[60px] text-white px-6 sm:px-12 py-14 lg:p-16">
                    <ul
                        class="flex flex-col md:space-y-0 space-y-10 md:flex-row md:flex-wrap md:gap-y-10 md:justify-center md:gap-x-20 justify-between">
                        <li class="flex items-center space-x-4">
                            <div
                                class="flex items-center justify-center rounded-xl aspect-square p-4 border-2 border-white bg-white/20">
                                <img class="w-12" src="/img/features-1.webp" alt="features-1" />
                            </div>
                            <div class="tracking-wide">
                                <p class="sm:text-xl md:text-xl font-semibold mb-1">
                                    Pelayanan Gratis
                                </p>
                                <p class="sm:text-base md:text-sm text-xs md:max-w-[11rem]">
                                    Dengan membawa KTM dapatkan pelayanan gratis
                                </p>
                            </div>
                        </li>
                        <li class="flex items-center space-x-4">
                            <div
                                class="flex items-center justify-center rounded-xl aspect-square p-4 border-2 border-white bg-white/20">
                                <img class="w-12" src="/img/features-2.webp" alt="features-1" />
                            </div>
                            <div class="tracking-wide">
                                <p class="sm:text-xl md:text-xl font-semibold mb-1">
                                    Dokter Terpercaya
                                </p>
                                <p class="sm:text-base md:text-sm text-xs md:max-w-[11rem]">
                                    Dilayani oleh dokter berintegritas dan
                                    terpercaya
                                </p>
                            </div>
                        </li>
                        <li class="flex items-center space-x-4">
                            <div
                                class="flex items-center justify-center rounded-xl aspect-square p-4 border-2 border-white bg-white/20">
                                <img class="w-12" src="/img/features-3.webp" alt="features-1" />
                            </div>
                            <div class="tracking-wide">
                                <p class="sm:text-xl md:text-xl font-semibold mb-1">
                                    24 Jam
                                </p>
                                <p class="sm:text-base md:text-sm text-xs md:max-w-[11rem]">
                                    Siap melayani Telyutizen 24jam nonstop
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <img class="w-full" src="/img/wave-1.png" alt="" />

        <section class="bg-[#F3FBFF] md:-mt-10 pt-10 pb-48">
            <div class="px-4 mx-auto max-w-screen-xl text-center">
                <div class="title mb-16 md:mb-40">
                    <h1 class="mb-2 md:mb-4 text-2xl md:text-4xl font-bold tracking-tight leading-none text-[#ED1C24]">
                        Layanan Kami
                    </h1>
                    <span class="mx-auto w-32 h-0.5 md:w-64 md:h-1.5 bg-[#ED1C24] rounded-full block"></span>
                </div>

                <div
                    class="services-card flex flex-col md:space-y-0 md:gap-y-10 space-y-14 md:flex-row md:flex-wrap items-center md:justify-around">
                    <div class="max-w-[16rem] h-min bg-white border border-gray-200 rounded-xl shadow">
                        <img class="rounded-t-lg w-full" src="/img/service-1.webp" alt="" />
                        <div>
                            <div
                                class="bg-gradient-to-r relative z-10 -mt-4 py-5 px-5 rounded-xl from-[#ED1C24] to-[#F07A80]">
                                <h5 class="text-xl md:text-2xl tracking-normal text-white font-semibold">
                                    Poli Mata
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div
                        class="max-w-[16rem] lg:-translate-y-20 h-min bg-white border border-gray-200 rounded-xl shadow">
                        <img class="rounded-t-lg w-full" src="/img/service-2.webp" alt="" />
                        <div>
                            <div
                                class="bg-gradient-to-r relative z-10 -mt-4 py-5 px-5 rounded-xl from-[#ED1C24] to-[#F07A80]">
                                <h5 class="text-xl md:text-2xl tracking-normal text-white font-semibold">
                                    Poli Umum
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="max-w-[16rem] h-min bg-white border border-gray-200 rounded-xl shadow">
                        <img class="rounded-t-lg w-full" src="/img/service-3.webp" alt="" />
                        <div>
                            <div
                                class="bg-gradient-to-r relative z-10 -mt-4 py-5 px-5 rounded-xl from-[#ED1C24] to-[#F07A80]">
                                <h5 class="text-xl md:text-2xl tracking-normal text-white font-semibold">
                                    Poli Gigi
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="bg-[#263238]">
            <div class="mx-auto w-full max-w-screen-xl">
                <div class="md:flex md:justify-between py-16">
                    <div class="mb-6 md:mb-0 flex justify-center items-center p-16 text-white">
                        <a class="flex items-center">
                            <span class="self-center text-4xl font-medium whitespace-nowrap">MyTelkomedika</span>
                        </a>
                    </div>
                    <div class="flex justify-center">
                        <div class="flex flex-wrap gap-x-10 gap-y-10 px-16">
                            <div>
                                <h2 class="mb-2 text-xl text-white font-semibold tracking-wider">
                                    Address
                                </h2>
                                <p class="text-gray-300 max-w-xs">
                                    Jl. Telekomunikasi Terusan Buah Batu,
                                    Bandung - 40257, Indonesia
                                </p>
                            </div>
                            <div class="flex flex-col space-y-10">
                                <div>
                                    <h2 class="mb-2 text-xl text-white font-semibold tracking-wider">
                                        Contact Us
                                    </h2>
                                    <div class="flex items-center space-x-4">
                                        <img src="/img/footer-mail.png" alt="icon-email" />
                                        <p class="text-gray-300">
                                            clove@telkomuniversity.ac.id
                                        </p>
                                    </div>
                                    <div class="flex items-center space-x-4">
                                        <img src="/img/footer-phone.png" alt="icon-email" />
                                        <p class="text-gray-300">
                                            +62 888-8888-8888
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <h2 class="mb-2 text-xl text-white font-semibold tracking-wider">
                                        Follow Us
                                    </h2>
                                    <div class="flex items-center space-x-4">
                                        <a href="#">
                                            <img src="/img/icon-ig.png" alt="footer-icon" />
                                        </a>
                                        <a href="#">
                                            <img src="/img/icon-fb.png" alt="footer-icon" />
                                        </a>
                                        <a href="#">
                                            <img src="/img/icon-twitter.png" alt="footer-icon" />
                                        </a>
                                        <a href="#">
                                            <img src="/img/icon-linkedin.png" alt="footer-icon" />
                                        </a>
                                        <a href="#">
                                            <img src="/img/icon-yt.png" alt="footer-icon" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </main>
</body>

</html>
