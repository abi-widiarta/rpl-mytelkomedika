@extends('layouts.layoutdashboard')

@section('content')
    <section class="flex-1 px-12 py-8">
        <div class="h-full">
            <header class="flex items-center justify-between mb-4">
                <div class="flex items-center justify-start space-x-4">
                    <h1 class="text-xl font-semibold">Dashboard</h1>
                </div>
                <div class="flex items-center space-x-4">
                    <div
                        class="py-1 pl-4 pr-2 border-2 space-x-4 border-[#ED1C24] rounded-full flex items-center justify-between">
                        <p class="text-sm font-semibold">{{ Auth::user()->username }}</p>
                        <div class="grid w-8 bg-gray-600 rounded-full place-items-center aspect-square">
                            <p class="m-0 text-white font-base">
                                {{ Auth::user()->username[0] }}
                            </p>
                        </div>
                    </div>
                </div>
            </header>

            <div
                class="px-6 pt-6 pb-8 w-full bg-gradient-to-r from-[#ED1C24]/90 via-[#ED1C24]/90 to-[#ED1C24]/20 text-white rounded-xl">
                <h1 class="mb-2 text-xl font-semibold">
                    Selamat Datang! {{ Auth::user()->username }}
                </h1>
                <p class="text-xs">
                    Anda memiliki 3 reservasi pemeriksaan hari ini
                </p>
            </div>

            <div class="flex gap-8 mt-6">
                <div class="bg-white h-96 w-[70%] py-6 px-8">
                    <h3 class="text-lg font-semibold">Reservasi Saya</h3>
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
                                <td class="px-4 py-4">
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
                                <td class="px-4 py-4">
                                    20 Mei 2023
                                </td>
                                <td class="px-4 py-4">
                                    09.00
                                </td>
                                <td class="px-4 py-4 text-center">
                                    1
                                </td>
                            </tr>

                            <tr class="text-sm">
                                <td class="px-4 py-4">
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
                                <td class="px-4 py-4">
                                    20 Mei 2023
                                </td>
                                <td class="px-4 py-4">
                                    09.00
                                </td>
                                <td class="px-4 py-4 text-center">
                                    1
                                </td>
                            </tr>

                            <tr class="text-sm">
                                <td class="px-4 py-4">
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
                                <td class="px-4 py-4">
                                    20 Mei 2023
                                </td>
                                <td class="px-4 py-4">
                                    09.00
                                </td>
                                <td class="px-4 py-4 text-center">
                                    1
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="h-96 w-[30%]">
                    <div class="px-8 py-6 bg-white h-60">
                        <h3 class="text-lg font-semibold">Antrian</h3>
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

                    <div class="h-32 px-8 py-6 mt-4 bg-white">
                        <h3 class="text-lg font-semibold">Pembayaran</h3>
                        <p class="mt-2">Anda tidak memiliki pembayaran saat ini</p>
                    </div>
                </div>
            </div>

            <div class="mt-8">
                <h3 class="mb-4 text-lg font-semibold">Rekomentasi Dokter</h3>

                <div class="flex space-x-8">
                    <div
                        class="bg-white rounded-lg border border-[#ED1C24] py-4 px-6 shadow-lg shadow-[#ED1C24]/30">
                        <div class="flex space-x-4">
                            <div class="w-24 overflow-hidden rounded-full aspect-square">
                                <img src="/img/doctor-1.png" alt="">
                            </div>

                            <div class="flex flex-col justify-between">
                                <div>
                                    <p class="text-sm font-semibold">Dr. Mathilda</p>
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
                            <div class="w-24 overflow-hidden rounded-full aspect-square">
                                <img src="/img/doctor-1.png" alt="">
                            </div>

                            <div class="flex flex-col justify-between">
                                <div>
                                    <p class="text-sm font-semibold">Dr. Mathilda</p>
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
                            <div class="w-24 overflow-hidden rounded-full aspect-square">
                                <img src="/img/doctor-1.png" alt="">
                            </div>

                            <div class="flex flex-col justify-between">
                                <div>
                                    <p class="text-sm font-semibold">Dr. Mathilda</p>
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
@endsection
