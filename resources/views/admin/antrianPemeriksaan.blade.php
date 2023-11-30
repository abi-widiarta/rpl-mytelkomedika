@extends('layouts.layoutDashboardAdmin')

@section('content')
    <section class="flex-1 px-12 py-10">
        <div class="flex flex-col h-full">
            <header class="flex items-center justify-between mb-4">
                <div class="flex items-center justify-start space-x-4">
                    <img class="w-8" src="/img/antrian-sidebar-icon.png" alt="asd">
                    <h1 class="text-xl font-semibold">Antrian Pemeriksaan</h1>
                </div>
                <div class="flex items-center space-x-4">
                    <div
                        class="py-1 pl-4 pr-2 border-2 space-x-4 border-[#ED1C24] rounded-full flex items-center justify-between">
                        <p class="text-sm font-semibold">Admin John</p>
                        <div class="grid w-8 bg-gray-600 rounded-full place-items-center aspect-square">
                            <p class="m-0 text-white font-base">
                                J
                            </p>
                        </div>
                    </div>
                </div>
            </header>

            <div class="flex-1 w-full p-6 bg-white rounded-xl">
                <h2 class="mb-8 text-lg font-semibold">Kelola Antrian Pemeriksaan</h2>
                <div class="flex justify-between mb-6">
                    <a href="admin-data-pasien/create"
                        class="bg-[#ED1C24] text-sm px-4 py-2 font-semibold text-white rounded-full transition duration-150 hover:opacity-70">
                        Tambah Data
                    </a>
                    <div
                        class="flex items-center justify-between w-40 px-2 py-1 text-sm border-2 border-gray-300 rounded-lg focus:border-gray-600">
                        <p>Poli Umum</p>
                        <img class="w-5" src="/img/icon-chevron-down.svg" alt="">
                    </div>
                </div>
                <table class="border-collapse border-2 w-full border-[#E9E9E9] mt-8">
                    <thead>
                        <tr>
                            <th class="border-2 text-sm font-semibold py-5 border-[#E9E9E9]">
                                Nomor <br> Antrian
                            </th>

                            <th class="border-2 text-sm font-semibold border-[#E9E9E9]">
                                Nama Pasien
                            </th>
                            <th class="border-2 text-sm font-semibold border-[#E9E9E9]">
                                Email
                            </th>
                            <th class="border-2 text-sm font-semibold border-[#E9E9E9]">
                                Jenis <br> Kelamin
                            </th>
                            <th class="border-2 text-sm font-semibold border-[#E9E9E9]">
                                Tempat <br> Tanggal Lahir
                            </th>
                            <th class="border-2 font-semibold border-[#E9E9E9]">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 1; $i <= 6; $i++)
                            <tr class="text-sm">
                                <td class="border-2 border-[#E9E9E9] py-3 px-4 text-center">
                                    {{ $i }}
                                </td>
                                <td class="border-2 border-[#E9E9E9] py-3 px-4">
                                    Maya Anggraini
                                </td>
                                <td class="border-2 border-[#E9E9E9] py-3 px-4 text-center">
                                    maya@student.telkomuniversity.ac.id
                                </td>
                                <td class="border-2 border-[#E9E9E9] py-3 px-4 text-center">
                                    P
                                </td>
                                <td class="border-2 border-[#E9E9E9] py-3 px-4 text-center">
                                    Yogyakarta, 03-03-1999
                                </td>
                                <td class="border-2 border-[#E9E9E9]">
                                    <div class="flex items-center justify-center space-x-2">
                                        <button
                                            class="w-8 grid place-items-center rounded-md aspect-square bg-[#3D9B35] hover:opacity-90">
                                            <img src="/img/icon-check.svg" alt="check-icon" />
                                        </button>
                                        <button
                                            class="grid w-8 bg-red-500 rounded-md place-items-center aspect-square hover:bg-red-600">
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
@endsection