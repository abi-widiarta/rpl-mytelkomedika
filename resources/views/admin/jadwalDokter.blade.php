@extends('layouts.layoutDashboardAdmin')

@section('content')
        <div class="flex flex-col h-full">
            <header class="flex items-center justify-between mb-4">
                <div class="flex items-center justify-start space-x-4">
                    <img class="w-8" src="/img/reservasi-saya-icon.png" alt="asd">
                    <h1 class="text-xl font-semibold">Jadwal Dokter</h1>
                </div>
                <div class="relative flex items-center space-x-4">
                    @include('partials.dropdownProfile')
                </div>
            </header>

            <div class="flex-1 w-full p-6 bg-white rounded-xl">
                <h2 class="mb-8 text-lg font-semibold">Kelola Jadwal Dokter</h2>
                <div class="flex justify-between mb-6">
                    <a href="/admin/jadwal-dokter/create"
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

                            <th class="border-2 text-sm font-semibold border-[#E9E9E9]">
                                Nama Dokter
                            </th>
                            <th class="border-2 text-sm font-semibold border-[#E9E9E9]">
                                Hari
                            </th>
                            <th class="border-2 text-sm font-semibold border-[#E9E9E9]">
                                Jam Mulai
                            </th>
                            <th class="border-2 text-sm font-semibold border-[#E9E9E9]">
                                Jam Selesai
                            </th>
                            <th class="border-2 text-sm font-semibold border-[#E9E9E9] w-56">
                                Poli
                            </th>
                            <th class="border-2 font-semibold border-[#E9E9E9]">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($schedules as $schedule)
                            <tr class="text-sm">
                                <td class="border-2 border-[#E9E9E9] py-3 px-4">
                                    {{ $loop->iteration }}
                                </td>
                                <td class="border-2 border-[#E9E9E9] py-3 px-4">
                                    {{ $schedule->doctor->name }}
                                </td>
                                <td class="border-2 border-[#E9E9E9] py-3 px-4 text-center">
                                    {{ Str::ucfirst($schedule->hari) }}
                                </td>
                                <td class="border-2 border-[#E9E9E9] py-3 px-4 text-center">
                                    {{ \Carbon\Carbon::parse($schedule->jam_mulai)->format('H:i') }}
                                </td>
                                <td class="border-2 border-[#E9E9E9] py-3 px-4 text-center">
                                    {{ \Carbon\Carbon::parse($schedule->jam_selesai)->format('H:i') }}
                                </td>
                                <td class="border-2 border-[#E9E9E9] py-3 px-4 text-center">
                                    {{ Str::ucfirst($schedule->doctor->spesialisasi) }}
                                </td>
                                <td class="border-2 border-[#E9E9E9]">
                                    <div class="flex items-center justify-center space-x-2">
                                        <a
                                            href="/admin/jadwal-dokter/edit/{{ $schedule->id }}"
                                            class="grid w-8 bg-gray-400 rounded-md place-items-center aspect-square hover:bg-gray-500">
                                            <img src="/img/edit-icon.png" alt="edit-icon" />
                                        </a>
                                        <form class="schedule-delete-form" action="/admin/jadwal-dokter/delete/{{ $schedule->id }}" method="POST">
                                            @csrf
                                            <button type="submit" class="grid w-8 bg-red-500 rounded-md place-items-center aspect-square hover:bg-red-600">
                                                <img src="/img/delete-icon.png" alt="delete-icon" />
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        {{-- @for ($i = 1; $i <= 6; $i++)
                            <tr class="text-sm">
                                <td class="border-2 border-[#E9E9E9] py-3 px-4">
                                    {{ $i }}
                                </td>
                                <td class="border-2 border-[#E9E9E9] py-3 px-4">
                                    Dr. Jason
                                </td>
                                <td class="border-2 border-[#E9E9E9] py-3 px-4 text-center">
                                    Senin
                                </td>
                                <td class="border-2 border-[#E9E9E9] py-3 px-4 text-center">
                                    08.00
                                </td>
                                <td class="border-2 border-[#E9E9E9] py-3 px-4 text-center">
                                    12.00
                                </td>
                                <td class="border-2 border-[#E9E9E9] py-3 px-4 text-center">
                                    Umum
                                </td>
                                <td class="border-2 border-[#E9E9E9]">
                                    <div class="flex items-center justify-center space-x-2">
                                        <a
                                            class="grid w-8 bg-gray-400 rounded-md place-items-center aspect-square hover:bg-gray-500">
                                            <img src="/img/edit-icon.png" alt="edit-icon" />
                                        </a>
                                        <button
                                            class="grid w-8 bg-red-500 rounded-md place-items-center aspect-square hover:bg-red-600">
                                            <img src="/img/delete-icon.png" alt="delete-icon" />
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endfor --}}
                    </tbody>s
                </table>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            const formDelete = document.querySelectorAll(".schedule-delete-form")

            formDelete.forEach(form => {
                form.addEventListener("submit", (e) => {
                e.preventDefault();
                
                Swal.fire({
                title: 'Warning',
                text: "Are you sure want to delete this data?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#ED1C24',
                cancelButtonColor: '#C5C5C5',
                confirmButtonText: 'Yes'
                }).then((result) => {
                    if (result.isConfirmed) {
                    form.submit();
                    } 
                })
                })
            });
        </script>
@endsection