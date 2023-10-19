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
                            <span class="block text-black text-end text-base pr-1">Admin</span>
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
                                    <img class="w-[25px] z-10 invert" src="/img/data-pasien-icon.png" alt="logo" />
                                    <p class="z-10 text-sm" class="font-medium">
                                        Data Pasien
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a class="flex justify-start items-center rounded-xl space-x-3 py-4 px-4 transition duration-150 hover:bg-gray-100 hover:transition"
                                    href="/admin-dashboard">
                                    <img class="w-[25px] z-10" src="/img/data-dokter-icon.png" alt="logo" />
                                    <p class="z-10 text-sm" class="font-medium">
                                        Data Dokter
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a class="flex justify-start items-center rounded-xl space-x-3 py-4 px-4 transition duration-150 hover:bg-gray-100 hover:transition"
                                    href="/admin-dashboard">
                                    <img class="w-[25px] z-10" src="/img/reservasi-saya-icon.png" alt="logo" />
                                    <p class="z-10 text-sm" class="font-medium">
                                        Jadwal Dokter
                                    </p>
                                </a>

                            </li>
                            <li>
                                <a class="flex justify-start items-center rounded-xl space-x-3 py-4 px-4 transition duration-150 hover:bg-gray-100 hover:transition"
                                    href="/admin-dashboard">
                                    <img class="w-[25px] z-10" src="/img/antrian-sidebar-icon.png" alt="logo" />
                                    <p class="z-10 text-sm" class="font-medium">
                                        Antrian Pemeriksaan
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a class="flex justify-start items-center rounded-xl space-x-3 py-4 px-4 transition duration-150 hover:bg-gray-100 hover:transition"
                                    href="/admin-dashboard">
                                    <img class="w-[25px] z-10" src="/img/pembayaran-icon.png" alt="logo" />
                                    <p class="z-10 text-sm" class="font-medium">
                                        Pembayaran
                                    </p>
                                </a>
                            </li>
                        </ul>
                        <button class="flex justify-start items-center rounded-xl space-x-3 py-4 px-4">
                            <img class="w-[25px] z-10" src="/img/logout-icon.png" alt="logo" />
                            <p class="font-normal z-10 text-sm">Logout</p>
                        </button>
                    </div>
                </div>
            </aside>
        </div>

        <section class="flex-1 py-10 px-12">
            <div class="h-full flex flex-col">
                <header class="flex mb-4 items-center justify-between">
                    <div class="flex justify-start items-start space-x-4">
                        <img src="/img/data-pasien-icon.png" alt="asd">
                        <h1 class="font-semibold text-xl">Data Pasien</h1>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div
                            class="py-1 pl-4 pr-2 border-2 space-x-4 border-[#ED1C24] rounded-full flex items-center justify-between">
                            <p class="text-sm font-semibold">Admin John</p>
                            <div class="grid place-items-center w-8 aspect-square bg-gray-600 rounded-full">
                                <p class="m-0 font-base text-white">
                                    J
                                </p>
                            </div>
                        </div>
                    </div>
                </header>

                <div class="bg-white w-full rounded-xl flex-1 p-6">
                    <h2 class="text-lg font-semibold mb-8">Kelola Data Pasien</h2>
                    <div class="flex justify-between mb-6">
                        <a href="admin-data-pasien/create"
                            class="bg-[#ED1C24] text-sm px-4 py-2 font-semibold text-white rounded-full transition duration-150 hover:opacity-70">
                            Tambah Data
                        </a>
                        <div
                            class="flex justify-between py-1 px-2 text-sm rounded-md border-2 border-gray-300 focus:border-gray-600">
                            <input type="text" class="w-56" />
                            <img class="w-5" src="/img/icon-search.svg" alt="">
                        </div>
                    </div>
                    <table class="border-collapse border-2 w-full border-[#E9E9E9] mt-8">
                        <thead>
                            <tr>
                                <th class="border-2 w-1 text-sm font-semibold py-5 border-[#E9E9E9]">
                                    No
                                </th>
                                <th class="border-2 text-sm font-semibold py-5 border-[#E9E9E9]">
                                    Nim
                                </th>
                                <th class="border-2 text-sm font-semibold border-[#E9E9E9]">
                                    Nama Pasien
                                </th>
                                <th class="border-2 text-sm font-semibold border-[#E9E9E9]">
                                    Email
                                </th>
                                <th class="border-2text-sm font-semibold border-[#E9E9E9]">
                                    Jenis <br />
                                    Kelamin
                                </th>
                                <th class="border-2 text-sm font-semibold border-[#E9E9E9] w-56">
                                    Tempat <br>
                                    Tanggal Lahir
                                </th>
                                <th class="border-2 font-semibold border-[#E9E9E9]">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 1; $i <= 8; $i++)
                                <tr class="text-sm">
                                    <td class="border-2 border-[#E9E9E9] py-3 px-4">
                                        {{ $i }}
                                    </td>
                                    <td class="border-2 border-[#E9E9E9] py-3 px-4">
                                        1301213197
                                    </td>
                                    <td class="border-2 border-[#E9E9E9] py-3 px-4">
                                        John Doe
                                    </td>
                                    <td class="border-2 border-[#E9E9E9] py-3 px-4">
                                        johndoe@student.telkomuniversity.ac.id
                                    </td>
                                    <td class="border-2 border-[#E9E9E9] py-3 px-4 text-center">
                                        L
                                    </td>
                                    <td class="border-2 border-[#E9E9E9] py-3 px-4">
                                        Yogyakarta, 20-01-2003
                                    </td>
                                    <td class="border-2 border-[#E9E9E9]">
                                        <div class="flex items-center justify-center space-x-2">
                                            <a
                                                class="w-8 grid place-items-center rounded-md aspect-square bg-gray-400 hover:bg-gray-500">
                                                <img src="/img/edit-icon.png" alt="edit-icon" />
                                            </a>
                                            <button
                                                class="w-8 grid place-items-center rounded-md aspect-square bg-red-500 hover:bg-red-600">
                                                <img src="/img/delete-icon.png" alt="delete-icon" />
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
