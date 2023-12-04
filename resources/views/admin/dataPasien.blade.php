@extends('layouts.layoutDashboardAdmin')

@section('content')
    <section class="flex-1 px-12 py-10">
        <div class="flex flex-col h-full">
            <header class="flex items-center justify-between mb-4">
                <div class="flex items-start justify-start space-x-4">
                    <img src="/img/data-pasien-icon.png" alt="asd">
                    <h1 class="text-xl font-semibold">Data Pasien</h1>
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
                <h2 class="mb-8 text-lg font-semibold">Kelola Data Pasien</h2>
                <div class="flex justify-between mb-6">
                    <a href="/admin/data-pasien/create"
                        class="bg-[#ED1C24] text-sm px-4 py-2 font-semibold text-white rounded-full transition duration-150 hover:opacity-70">
                        Tambah Data
                    </a>
                    <div
                        class="flex justify-between px-2 py-1 text-sm border-2 border-gray-300 rounded-md focus:border-gray-600">
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
                        @foreach ($patients as $patient)
                            <tr class="text-sm">
                                <td class="border-2 border-[#E9E9E9] py-3 px-4">
                                    1
                                </td>
                                <td class="border-2 border-[#E9E9E9] py-3 px-4">
                                    {{ $patient->nim }}
                                </td>
                                <td class="border-2 border-[#E9E9E9] py-3 px-4">
                                    {{ $patient->name }}
                                </td>
                                <td class="border-2 border-[#E9E9E9] py-3 px-4">
                                    {{ $patient->email }}
                                </td>
                                <td class="border-2 border-[#E9E9E9] py-3 px-4 text-center">
                                    {{ $patient->jenis_kelamin }}
                                </td>
                                <td class="border-2 border-[#E9E9E9] py-3 px-4">
                                    {{ $patient->tanggal_lahir }}
                                </td>
                                <td class="border-2 border-[#E9E9E9]">
                                    <div class="flex items-center justify-center space-x-2">
                                        <a
                                            href="/admin/data-pasien/{{ $patient->username }}/edit"
                                            class="grid w-8 bg-gray-400 rounded-md place-items-center aspect-square hover:bg-gray-500">
                                            <img src="/img/edit-icon.png" alt="edit-icon" />
                                        </a>
                                        @include('partials.modalConfirm')
                                      
                                        {{-- <button
                                            class="grid w-8 bg-red-500 rounded-md place-items-center aspect-square hover:bg-red-600">
                                            <img src="/img/delete-icon.png" alt="delete-icon" />
                                        </button> --}}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
