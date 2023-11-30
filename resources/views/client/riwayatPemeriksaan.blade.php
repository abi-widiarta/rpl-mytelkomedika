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
                    <div class="px-3 pb-4 mb-4">
                        <h1 class="text-2xl text-center text-[#ED1C24] font-bold">
                            MyTelkomedika
                        </h1>
                        <span class="block mt-4 h-[1px] w-full bg-gray-300"> </span>
                    </div>
                    <div class="flex flex-col justify-between flex-1 w-56">
                        <ul class="space-y-1">
                            <li>
                                <a class="flex items-center justify-start px-4 py-4 space-x-3 transition duration-150 rounded-xl hover:bg-gray-100 hover:transition"
                                    href="/admin-dashboard">
                                    <img class="w-[25px] z-10" src="/img/dashboard-icon.png" alt="logo" />
                                    <p class="z-10 text-sm" class="font-medium">
                                        Dashboard
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center justify-start px-4 py-4 space-x-3 transition duration-150 rounded-xl hover:bg-gray-100 hover:transition"
                                    href="/admin-dashboard">
                                    <img class="w-[25px] z-10" src="/img/lakukan-reservasi-icon.png" alt="logo" />
                                    <p class="z-10 text-sm" class="font-medium">
                                        Lakukan Reservasi
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center justify-start px-4 py-4 space-x-3 transition duration-150 rounded-xl hover:bg-gray-100 hover:transition"
                                    href="/admin-dashboard">
                                    <img class="w-[25px] z-10" src="/img/reservasi-saya-icon.png" alt="logo" />
                                    <p class="z-10 text-sm" class="font-medium">
                                        Reservasi Saya
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a class="flex justify-start items-center rounded-xl space-x-3 py-4 px-4 transition duration-150 hover:bg-gray-100 hover:transition bg-gradient-to-r from-[#ED1C24]/90 via-[#ED1C24]/90 to-[#ED1C24]/50 text-white"
                                    href="/admin-dashboard">
                                    <img class="w-[25px] z-10 invert" src="/img/riwayat-pemeriksaan-icon.png"
                                        alt="logo" />
                                    <p class="z-10 text-sm" class="font-medium">
                                        Riwayat Pemeriksaan
                                    </p>
                                </a>
                            </li>
                        </ul>
                        <button class="flex items-center justify-start px-4 py-4 space-x-3 rounded-xl">
                            <img class="w-[25px] z-10" src="/img/logout-icon.png" alt="logo" />
                            <p class="z-10 text-sm font-normal">Logout</p>
                        </button>
                    </div>
            </aside>
        </div>
        <section class="flex-1 px-12 py-10">

            <div class="h-full">
                <header class="flex items-center justify-between mb-8">
                    <div class="flex items-center justify-start space-x-4">
                        <img class="w-8" src="/img/riwayat-pemeriksaan-icon.png" alt="asd">
                        <h1 class="text-xl font-semibold">Riwayat Pemeriksaan</h1>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div
                            class="py-1 pl-4 pr-2 border-2 space-x-4 border-[#ED1C24] rounded-full flex items-center justify-between">
                            <p class="text-sm font-semibold">John Doe</p>
                            <div class="grid w-8 bg-gray-600 rounded-full place-items-center aspect-square">
                                <p class="m-0 text-white font-base">
                                    J
                                </p>
                            </div>
                        </div>
                    </div>
                </header>

                <div class="flex">

                    <div class="flex py-6 pl-6 pr-10 space-x-6 bg-white shadow-lg rounded-xl shadow-gray-100">
                        <img class="w-[212px] rounded-lg" src="/img/doctor-1.png" alt="doctor-1" />
                        <div class="flex flex-col items-start justify-between">
                            <div>
                                <h1 class="text-lg font-bold">Dr.Chika</h1>
                                <p class="mb-5 text-base font-medium">Poli Umum</p>
                                <div class="mt-6 space-y-3">
                                    <div class="flex items-center space-x-2">
                                        <img class="w-6" src="/img/reservasi-saya-icon.png" alt="antrian" />
                                        <p class="text-sm">Sabtu - 20 Mei 2023</p>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <div class="w-6">
                                            <img class="w-4 mx-auto" src="/img/checklist-icon.png" alt="checklist" />
                                        </div>
                                        <p class="text-sm text-gray-500">
                                            Surat Dokter
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <button
                                class="py-3 font-medium px-10 text-white shadow-lg bg-gradient-to-r from-[#ED1C24]/90 to-[#ED1C24]/50 rounded-lg transition duration-200 hover:bg-[#ED1C24]">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</body>

</html>
