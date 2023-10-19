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
    <main class="flex bg-[#F3FBFF] min-h-screen">
        <div class="w-[270px]">
            <aside
                class="w-[290px] h-screen fixed bg-white flex flex-col py-7 px-8 items-center border-r-2 border-gray-300">
                <div class="flex flex-col h-full">
                    <div class="pb-4 px-3 mb-4">
                        <h1 class="text-2xl text-center text-[#ED1C24] font-bold">
                            MyTelkomedika
                        </h1>
                        <span class="block mt-4 h-[1px] w-full bg-gray-300"> </span>
                    </div>
                    <div class="flex flex-1 flex-col justify-between w-56">
                        <ul class="space-y-1">
                            <li>
                                <a class="flex justify-start items-center rounded-xl space-x-3 py-4 px-4 transition duration-150 hover:bg-gray-100 hover:transition"
                                    href="/admin-dashboard">
                                    <img class="w-[25px] z-10" src="/img/dashboard-icon.png" alt="logo" />
                                    <p class="z-10 text-sm" class="font-medium">
                                        Dashboard
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a class="flex justify-start items-center rounded-xl space-x-3 py-4 px-4 transition duration-150 hover:bg-gray-100 hover:transition bg-gradient-to-r from-[#ED1C24]/90 via-[#ED1C24]/90 to-[#ED1C24]/50 text-white"
                                    href="/admin-dashboard">
                                    <img class="w-[25px] z-10 invert" src="/img/lakukan-reservasi-icon.png"
                                        alt="logo" />
                                    <p class="z-10 text-sm" class="font-medium">
                                        Lakukan Reservasi
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a class="flex justify-start items-center rounded-xl space-x-3 py-4 px-4 transition duration-150 hover:bg-gray-100 hover:transition"
                                    href="/admin-dashboard">
                                    <img class="w-[25px] z-10" src="/img/reservasi-saya-icon.png" alt="logo" />
                                    <p class="z-10 text-sm" class="font-medium">
                                        Reservasi Saya
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a class="flex justify-start items-center rounded-xl space-x-3 py-4 px-4 transition duration-150 hover:bg-gray-100 hover:transition"
                                    href="/admin-dashboard">
                                    <img class="w-[25px] z-10" src="/img/riwayat-pemeriksaan-icon.png" alt="logo" />
                                    <p class="z-10 text-sm" class="font-medium">
                                        Riwayat Pemeriksaan
                                    </p>
                                </a>
                            </li>
                        </ul>
                        <button class="flex justify-start items-center rounded-xl space-x-3 py-4 px-4">
                            <img class="w-[25px] z-10" src="/img/logout-icon.png" alt="logo" />
                            <p class="font-normal z-10 text-sm">Logout</p>
                        </button>
                    </div>
            </aside>
        </div>
        <section class="flex-1 py-10 px-12">
            <div class="h-full">
                <header class="flex mb-8 items-center justify-between">
                    <div class="flex justify-start items-center space-x-4">
                        <img class="w-8" src="/img/antrian-sidebar-icon.png" alt="asd">
                        <h1 class="font-semibold text-xl">Lakukan Reservasi</h1>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div
                            class="py-1 pl-4 pr-2 border-2 space-x-4 border-[#ED1C24] rounded-full flex items-center justify-between">
                            <p class="text-sm font-semibold">John Doe</p>
                            <div class="grid place-items-center w-8 aspect-square bg-gray-600 rounded-full">
                                <p class="m-0 font-base text-white">
                                    J
                                </p>
                            </div>
                        </div>
                    </div>
                </header>

                <div class="space-y-6">
                    <div class="flex space-x-4 bg-white pl-6 pr-10 py-6 rounded-xl shadow-lg shadow-gray-100">
                        <div class="text-center space-y-4">
                            <img class="w-36 rounded-lg" src="/img/doctor-1.png" alt="doctor-1" />
                            <h1 class="font-semibold">Dr. Chika</h1>
                        </div>
                        <span class="block w-[2px] h-52 bg-gray-200"></span>
                        <div class="px-2 py-2 flex-1 flex flex-col justify-between">
                            <div>
                                <h2 class="text-base font-semibold mb-4">Jadwal Praktek</h2>
                                <ul class="flex justify-between">

                                    <li class="w-32">
                                        <h3 class="text-base font-semibold mb-2 capitalize">
                                            Senin
                                        </h3>
                                        <p class="text-sm">08.00 - 13.00</p>
                                    </li>
                                    <li class="w-32">
                                        <h3 class="text-base font-semibold mb-2 capitalize">
                                            Selasa
                                        </h3>
                                        <p class="text-sm">08.00 - 13.00</p>
                                    </li>
                                    <li class="w-32">
                                        <h3 class="text-base font-semibold mb-2 capitalize">
                                            Rabu
                                        </h3>
                                        <p class="text-sm">08.00 - 13.00</p>
                                    </li>
                                    <li class="w-32">
                                        <h3 class="text-base font-semibold mb-2 capitalize">
                                            Kamis
                                        </h3>
                                        <p class="text-sm">08.00 - 13.00</p>
                                    </li>
                                    <li class="w-32">
                                        <h3 class="text-base font-semibold mb-2 capitalize">
                                            Jumat
                                        </h3>
                                        <p class="text-sm">08.00 - 13.00</p>
                                    </li>
                                    <li class="w-32">
                                        <h3 class="text-base font-semibold mb-2 capitalize">
                                            Sabtu
                                        </h3>
                                        <p class="text-sm">08.00 - 13.00</p>
                                    </li>

                                </ul>
                            </div>
                            <div class="flex justify-between items-end">
                                <div class="space-y-3">
                                    <h3 class="text-base font-semibold">Poli Umum</h3>
                                    <div class="flex space-x-2 items-end">
                                        <img src="/img/star-icon.png" alt="star-icon" />
                                        <p class="inline-block text-sm translate-y-[2px]">
                                            4.6
                                        </p>
                                    </div>
                                </div>
                                <button
                                    class="py-3 text-white px-10 shadow-lg bg-gradient-to-r from-[#ED1C24]/90 to-[#ED1C24]/50 rounded-xl transition duration-200 hover:bg-[#ED1C24]">
                                    Reservasi
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="flex space-x-4 bg-white pl-6 pr-10 py-6 rounded-xl shadow-lg shadow-gray-100">
                        <div class="text-center space-y-4">
                            <img class="w-36 rounded-lg" src="/img/doctor-1.png" alt="doctor-1" />
                            <h1 class="font-semibold">Dr. Chika</h1>
                        </div>
                        <span class="block w-[2px] h-52 bg-gray-200"></span>
                        <div class="px-2 py-2 flex-1 flex flex-col justify-between">
                            <div>
                                <h2 class="text-base font-semibold mb-4">Jadwal Praktek</h2>
                                <ul class="flex justify-between">

                                    <li class="w-32">
                                        <h3 class="text-base font-semibold mb-2 capitalize">
                                            Senin
                                        </h3>
                                        <p class="text-sm">08.00 - 13.00</p>
                                    </li>
                                    <li class="w-32">
                                        <h3 class="text-base font-semibold mb-2 capitalize">
                                            Selasa
                                        </h3>
                                        <p class="text-sm">08.00 - 13.00</p>
                                    </li>
                                    <li class="w-32">
                                        <h3 class="text-base font-semibold mb-2 capitalize">
                                            Rabu
                                        </h3>
                                        <p class="text-sm">08.00 - 13.00</p>
                                    </li>
                                    <li class="w-32">
                                        <h3 class="text-base font-semibold mb-2 capitalize">
                                            Kamis
                                        </h3>
                                        <p class="text-sm">08.00 - 13.00</p>
                                    </li>
                                    <li class="w-32">
                                        <h3 class="text-base font-semibold mb-2 capitalize">
                                            Jumat
                                        </h3>
                                        <p class="text-sm">08.00 - 13.00</p>
                                    </li>
                                    <li class="w-32">
                                        <h3 class="text-base font-semibold mb-2 capitalize">
                                            Sabtu
                                        </h3>
                                        <p class="text-sm">08.00 - 13.00</p>
                                    </li>

                                </ul>
                            </div>
                            <div class="flex justify-between items-end">
                                <div class="space-y-3">
                                    <h3 class="text-base font-semibold">Poli Umum</h3>
                                    <div class="flex space-x-2 items-end">
                                        <img src="/img/star-icon.png" alt="star-icon" />
                                        <p class="inline-block text-sm translate-y-[2px]">
                                            4.6
                                        </p>
                                    </div>
                                </div>
                                <button
                                    class="py-3 text-white px-10 shadow-lg bg-gradient-to-r from-[#ED1C24]/90 to-[#ED1C24]/50 rounded-xl transition duration-200 hover:bg-[#ED1C24]">
                                    Reservasi
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="flex space-x-4 bg-white pl-6 pr-10 py-6 rounded-xl shadow-lg shadow-gray-100">
                        <div class="text-center space-y-4">
                            <img class="w-36 rounded-lg" src="/img/doctor-1.png" alt="doctor-1" />
                            <h1 class="font-semibold">Dr. Chika</h1>
                        </div>
                        <span class="block w-[2px] h-52 bg-gray-200"></span>
                        <div class="px-2 py-2 flex-1 flex flex-col justify-between">
                            <div>
                                <h2 class="text-base font-semibold mb-4">Jadwal Praktek</h2>
                                <ul class="flex justify-between">

                                    <li class="w-32">
                                        <h3 class="text-base font-semibold mb-2 capitalize">
                                            Senin
                                        </h3>
                                        <p class="text-sm">08.00 - 13.00</p>
                                    </li>
                                    <li class="w-32">
                                        <h3 class="text-base font-semibold mb-2 capitalize">
                                            Selasa
                                        </h3>
                                        <p class="text-sm">08.00 - 13.00</p>
                                    </li>
                                    <li class="w-32">
                                        <h3 class="text-base font-semibold mb-2 capitalize">
                                            Rabu
                                        </h3>
                                        <p class="text-sm">08.00 - 13.00</p>
                                    </li>
                                    <li class="w-32">
                                        <h3 class="text-base font-semibold mb-2 capitalize">
                                            Kamis
                                        </h3>
                                        <p class="text-sm">08.00 - 13.00</p>
                                    </li>
                                    <li class="w-32">
                                        <h3 class="text-base font-semibold mb-2 capitalize">
                                            Jumat
                                        </h3>
                                        <p class="text-sm">08.00 - 13.00</p>
                                    </li>
                                    <li class="w-32">
                                        <h3 class="text-base font-semibold mb-2 capitalize">
                                            Sabtu
                                        </h3>
                                        <p class="text-sm">08.00 - 13.00</p>
                                    </li>

                                </ul>
                            </div>
                            <div class="flex justify-between items-end">
                                <div class="space-y-3">
                                    <h3 class="text-base font-semibold">Poli Umum</h3>
                                    <div class="flex space-x-2 items-end">
                                        <img src="/img/star-icon.png" alt="star-icon" />
                                        <p class="inline-block text-sm translate-y-[2px]">
                                            4.6
                                        </p>
                                    </div>
                                </div>
                                <button
                                    class="py-3 text-white px-10 shadow-lg bg-gradient-to-r from-[#ED1C24]/90 to-[#ED1C24]/50 rounded-xl transition duration-200 hover:bg-[#ED1C24]">
                                    Reservasi
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="flex space-x-4 bg-white pl-6 pr-10 py-6 rounded-xl shadow-lg shadow-gray-100">
                        <div class="text-center space-y-4">
                            <img class="w-36 rounded-lg" src="/img/doctor-1.png" alt="doctor-1" />
                            <h1 class="font-semibold">Dr. Chika</h1>
                        </div>
                        <span class="block w-[2px] h-52 bg-gray-200"></span>
                        <div class="px-2 py-2 flex-1 flex flex-col justify-between">
                            <div>
                                <h2 class="text-base font-semibold mb-4">Jadwal Praktek</h2>
                                <ul class="flex justify-between">

                                    <li class="w-32">
                                        <h3 class="text-base font-semibold mb-2 capitalize">
                                            Senin
                                        </h3>
                                        <p class="text-sm">08.00 - 13.00</p>
                                    </li>
                                    <li class="w-32">
                                        <h3 class="text-base font-semibold mb-2 capitalize">
                                            Selasa
                                        </h3>
                                        <p class="text-sm">08.00 - 13.00</p>
                                    </li>
                                    <li class="w-32">
                                        <h3 class="text-base font-semibold mb-2 capitalize">
                                            Rabu
                                        </h3>
                                        <p class="text-sm">08.00 - 13.00</p>
                                    </li>
                                    <li class="w-32">
                                        <h3 class="text-base font-semibold mb-2 capitalize">
                                            Kamis
                                        </h3>
                                        <p class="text-sm">08.00 - 13.00</p>
                                    </li>
                                    <li class="w-32">
                                        <h3 class="text-base font-semibold mb-2 capitalize">
                                            Jumat
                                        </h3>
                                        <p class="text-sm">08.00 - 13.00</p>
                                    </li>
                                    <li class="w-32">
                                        <h3 class="text-base font-semibold mb-2 capitalize">
                                            Sabtu
                                        </h3>
                                        <p class="text-sm">08.00 - 13.00</p>
                                    </li>

                                </ul>
                            </div>
                            <div class="flex justify-between items-end">
                                <div class="space-y-3">
                                    <h3 class="text-base font-semibold">Poli Umum</h3>
                                    <div class="flex space-x-2 items-end">
                                        <img src="/img/star-icon.png" alt="star-icon" />
                                        <p class="inline-block text-sm translate-y-[2px]">
                                            4.6
                                        </p>
                                    </div>
                                </div>
                                <button
                                    class="py-3 text-white px-10 shadow-lg bg-gradient-to-r from-[#ED1C24]/90 to-[#ED1C24]/50 rounded-xl transition duration-200 hover:bg-[#ED1C24]">
                                    Reservasi
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
</body>

</html>
