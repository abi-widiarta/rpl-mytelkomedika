@extends('layouts.layoutDashboardAdmin')

@section('content')
        <div class="flex flex-col h-full">
            <header class="flex items-center justify-between mb-4">
                <div class="flex items-start justify-start space-x-4">
                    <img src="/img/data-dokter-icon.png" alt="asd">
                    <h1 class="text-xl font-semibold">Pembayaran</h1>
                </div>
                <div class="relative flex items-center space-x-4">
                    @include('partials.dropdownProfile')
                </div>
            </header>

            <div class="flex-1 w-full p-6 bg-white rounded-xl">
                <h2 class="mb-8 text-lg font-semibold">Kelola Pembayaran</h2>
                {{-- <div class="flex justify-between mb-6">
                    <a href="/admin/data-dokter/create"
                        class="bg-[#ED1C24] text-sm px-4 py-2 font-semibold text-white rounded-full transition duration-150 hover:opacity-70">
                        Tambah Data
                    </a>
                    <div
                        class="flex justify-between px-2 py-1 text-sm border-2 border-gray-300 rounded-md focus:border-gray-600">
                        <input type="text" class="w-56" />
                        <img class="w-5" src="/img/icon-search.svg" alt="">
                    </div>
                </div> --}}
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 rtl:text-right">
                        <thead class="text-xs text-gray-700 uppercase border-b">
                            <tr>
                                <th scope="col" class="py-3 pl-2 pr-6">
                                    No
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Pasien
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Poli
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Tanggal
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nominal
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($payments as $payment)
                                <tr class="{{ $payment->status == 1 ? 'bg-green-100' : 'bg-white'}}  border-b">
                                    <td scope="row" class="py-4 pl-4 pr-6">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td scope="row" class="py-4 pl-2 pr-6">
                                        {{ $payment->reservation->patient->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{  Str::ucfirst($payment->reservation->doctor->spesialisasi) }}
                                    </td>
                                    <td class="px-6 py-4 ">
                                        {{ $payment->reservation->tanggal }}
                                    </td>
                                    <td class="px-6 py-4">
                                        Rp. {{ $payment->nominal }}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        {{ $payment->status == 0 ? 'Belum Lunas' : 'Lunas'}}
                                    </td>
                            
                                    <td class="px-6 py-4">
                                        <div class="flex items-center justify-center space-x-2">
                                            <a  
                                                {{-- href="/admin/data-dokter/edit/{{ $doctor->username }}" --}}
                                                class="grid w-8 bg-gray-400 rounded-md place-items-center aspect-square hover:bg-gray-500">
                                                <img src="/img/edit-icon.png" alt="edit-icon" />
                                            </a>
                                            <form class="doctor-delete-form" action="/admin/pembayaran/complete/{{ $payment->id }}" method="POST">
                                                @csrf
                                                <button type="submit" class="grid w-8 bg-red-500 rounded-md place-items-center aspect-square hover:bg-red-600">
                                                    <img src="/img/delete-icon.png" alt="delete-icon" />
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            const formDelete = document.querySelectorAll(".doctor-delete-form")

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