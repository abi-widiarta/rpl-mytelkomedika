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
                                <a class="flex justify-start items-center rounded-xl space-x-3 py-4 px-4 transition duration-150 hover:bg-gray-100 hover:transition bg-gradient-to-r from-[#ED1C24]/90 via-[#ED1C24]/90 to-[#ED1C24]/50 text-white"
                                    href="/admin-dashboard">
                                    <img class="w-[25px] z-10 invert" src="/img/dashboard-icon.png" alt="logo" />
                                    <p class="z-10 text-sm" class="font-medium">
                                        Dashboard
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a class="flex justify-start items-center rounded-xl space-x-3 py-4 px-4 transition duration-150 hover:bg-gray-100 hover:transition"
                                    href="/admin-dashboard">
                                    <img class="w-[25px] z-10" src="/img/lakukan-reservasi-icon.png" alt="logo" />
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
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="flex justify-start items-center rounded-xl space-x-3 py-4 px-4">
                                <img class="w-[25px] z-10" src="/img/logout-icon.png" alt="logo" />
                                <p class="font-normal z-10 text-sm">Logout</p>
                            </button>
                        </form>
                    </div>
            </aside>
        </div>
        <section class="flex-1 py-8 px-12">

            <div class="h-full">
                <header class="flex mb-4 items-center justify-between">
                    <div class="flex justify-start items-center space-x-4">
                        <h1 class="font-semibold text-xl">Dashboard</h1>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div
                            class="py-1 pl-4 pr-2 border-2 space-x-4 border-[#ED1C24] rounded-full flex items-center justify-between">
                            <p class="text-sm font-semibold">{{ Auth::user()->username }}</p>
                            <div class="grid place-items-center w-8 aspect-square bg-gray-600 rounded-full">
                                <p class="m-0 font-base text-white">
                                    {{ Auth::user()->username[0] }}
                                </p>
                            </div>
                        </div>
                    </div>
                </header>

                <div
                    class="px-6 pt-6 pb-8 w-full bg-gradient-to-r from-[#ED1C24]/90 via-[#ED1C24]/90 to-[#ED1C24]/20 text-white rounded-xl">
                    <h1 class="text-xl font-semibold mb-2">
                        Selamat Datang! John Doe
                    </h1>
                    <p class="text-xs">
                        Anda memiliki 3 reservasi pemeriksaan hari ini
                    </p>
                </div>

                <div class="flex gap-8 mt-6">
                    <div class="bg-white h-96 w-[70%] py-6 px-8">
                        <h3 class="font-semibold text-lg">Reservasi Saya</h3>
                        <table class="border-collapse w-full border-[#E9E9E9] mt-8">
                            <thead>
                                <tr>
                                    <th
                                        class="w-[40%] px-4 border-bottom text-start text-sm font-semibold border-[#E9E9E9]">
                                        Dokter
                                    </th>
                                    <th
                                        class="w-[20%] px-4 border-bottom text-start text-sm font-semibold border-[#E9E9E9]">
                                        Tanggal
                                    </th>
                                    <th
                                        class="w-[20%] px-4 border-bottom text-start text-sm font-semibold border-[#E9E9E9]">
                                        Jam
                                    </th>
                                    <th
                                        class="w-[20%] px-4 border-bottom text-start text-sm font-semibold border-[#E9E9E9]">
                                        Nomor Antrian
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-sm">
                                    <td class="py-4 px-4">
                                        <div class="flex space-x-4">
                                            <div
                                                class="w-10 aspect-square rounded-full overflow-hidden border-[3px] border-[#ED1C24]">
                                                <img class="aspect-square" src="/img/doctor-1.png">
                                            </div>
                                            <div>
                                                <p class="font-semibold">Dr. Chika</p>
                                                <p class="">Poli Umum</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-4">
                                        20 Mei 2023
                                    </td>
                                    <td class="py-4 px-4">
                                        09.00
                                    </td>
                                    <td class="py-4 px-4 text-center">
                                        1
                                    </td>
                                </tr>

                                <tr class="text-sm">
                                    <td class="py-4 px-4">
                                        <div class="flex space-x-4">
                                            <div
                                                class="w-10 aspect-square rounded-full overflow-hidden border-[3px] border-[#ED1C24]">
                                                <img class="aspect-square" src="/img/doctor-1.png">
                                            </div>
                                            <div>
                                                <p class="font-semibold">Dr. Chika</p>
                                                <p class="">Poli Umum</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-4">
                                        20 Mei 2023
                                    </td>
                                    <td class="py-4 px-4">
                                        09.00
                                    </td>
                                    <td class="py-4 px-4 text-center">
                                        1
                                    </td>
                                </tr>

                                <tr class="text-sm">
                                    <td class="py-4 px-4">
                                        <div class="flex space-x-4">
                                            <div
                                                class="w-10 aspect-square rounded-full overflow-hidden border-[3px] border-[#ED1C24]">
                                                <img class="aspect-square" src="/img/doctor-1.png">
                                            </div>
                                            <div>
                                                <p class="font-semibold">Dr. Chika</p>
                                                <p class="">Poli Umum</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-4">
                                        20 Mei 2023
                                    </td>
                                    <td class="py-4 px-4">
                                        09.00
                                    </td>
                                    <td class="py-4 px-4 text-center">
                                        1
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="h-96 w-[30%]">
                        <div class="bg-white h-60 py-6 px-8">
                            <h3 class="font-semibold text-lg">Antrian</h3>
                            <table class="border-collapse w-full border-[#E9E9E9] mt-8">
                                <thead>
                                    <tr class="mb-4">
                                        <th
                                            class="w-[50%] border-bottom text-start text-sm font-semibold border-[#E9E9E9]">
                                            Poli
                                        </th>
                                        <th
                                            class="w-[50%] border-bottom text-start text-sm font-semibold border-[#E9E9E9]">
                                            Nomor Antrian
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-sm">
                                        <td class="py-2 ">
                                            Umum
                                        </td>
                                        <td class="py-2 text-center">
                                            1
                                        </td>
                                    </tr>
                                    <tr class="text-sm">
                                        <td class="py-2 ">
                                            Mata
                                        </td>
                                        <td class="py-2 text-center">
                                            2
                                        </td>
                                    </tr>
                                    <tr class="text-sm">
                                        <td class="py-2 ">
                                            Gigi
                                        </td>
                                        <td class="py-2 text-center">
                                            3
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="bg-white py-6 px-8 h-32 mt-4">
                            <h3 class="font-semibold text-lg">Pembayaran</h3>
                            <p class="mt-2">Anda tidak memiliki pembayaran saat ini</p>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <h3 class="font-semibold text-lg mb-4">Rekomentasi Dokter</h3>

                    <div class="flex space-x-8">
                        <div
                            class="bg-white rounded-lg border border-[#ED1C24] py-4 px-6 shadow-lg shadow-[#ED1C24]/30">
                            <div class="flex space-x-4">
                                <div class="rounded-full overflow-hidden w-24 aspect-square">
                                    <img src="/img/doctor-1.png" alt="">
                                </div>

                                <div class="flex flex-col justify-between">
                                    <div>
                                        <p class="font-semibold text-sm">Dr. Mathilda</p>
                                        <small>Poli Mata</small>
                                    </div>

                                    <div class="flex space-x-2">
                                        <img src="/img/star-icon.png" alt="">
                                        <small>4.6</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-lg border border-[#ED1C24] py-4 px-6 shadow-lg shadow-[#ED1C24]/30">
                            <div class="flex space-x-4">
                                <div class="rounded-full overflow-hidden w-24 aspect-square">
                                    <img src="/img/doctor-1.png" alt="">
                                </div>

                                <div class="flex flex-col justify-between">
                                    <div>
                                        <p class="font-semibold text-sm">Dr. Mathilda</p>
                                        <small>Poli Mata</small>
                                    </div>

                                    <div class="flex space-x-2">
                                        <img src="/img/star-icon.png" alt="">
                                        <small>4.6</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-lg border border-[#ED1C24] py-4 px-6 shadow-lg shadow-[#ED1C24]/30">
                            <div class="flex space-x-4">
                                <div class="rounded-full overflow-hidden w-24 aspect-square">
                                    <img src="/img/doctor-1.png" alt="">
                                </div>

                                <div class="flex flex-col justify-between">
                                    <div>
                                        <p class="font-semibold text-sm">Dr. Mathilda</p>
                                        <small>Poli Mata</small>
                                    </div>

                                    <div class="flex space-x-2">
                                        <img src="/img/star-icon.png" alt="">
                                        <small>4.6</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</body>

</html>
