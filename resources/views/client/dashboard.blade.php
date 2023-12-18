@extends('layouts.layoutdashboard')

@section('content')

        <div class="h-full">
            <header class="flex items-center justify-between mb-4">
                <div class="flex items-center justify-start space-x-4">
                    <h1 class="text-xl font-semibold">Dashboard</h1>
                </div>
                <div class="relative flex items-center space-x-4">
                   @include('partials.dropdownProfile')
                </div>
            </header>
            <div
                class="px-6 pt-6 pb-8 w-full bg-gradient-to-r from-[#ED1C24]/90 via-[#ED1C24]/90 to-[#ED1C24]/20 text-white rounded-xl">
                <h1 class="mb-2 text-xl font-semibold">
                    Selamat Datang! {{ Auth::user()->name }}
                </h1>
                <p class="text-xs">
                    Anda memiliki 3 reservasi pemeriksaan hari ini
                </p>
            </div>

            <div class="flex gap-8 mt-6">
                <div class="bg-white h-96 w-[70%] py-6 px-8">
                    <h3 class="mb-4 text-lg font-semibold">Reservasi Saya</h3>
                    <div class="w-full mb-4">
                        <div class="flex w-full pb-2 font-medium border-b-2 border-slate-100">
                            <p class="w-[45%]">Dokter</p>
                            <p class="w-[20%] text-center">Tanggal</p>
                            <p class="w-[10%] text-center">Jam</p>
                            <p class="w-[25%] text-center">Nomor Antrian</p>
                        </div>
                    </div>
                    <div class="w-full space-y-2">
                        @foreach ($daftar_reservasi as $reservasi)
                                <div class="flex text-sm  rounded-lg bg-[#F6FBFF]">
                                        <div class="w-[45%] px-4 py-4 rounded-lg">
                                            <div class="flex space-x-4">
                                                <div
                                                    class="w-10 aspect-square rounded-full overflow-hidden border-[3px] {{ $reservasi->doctor->spesialisasi == 'umum' ? 'border-[#9FAEFF]' : ($reservasi->doctor->spesialisasi == 'mata' ? 'border-[#FF0000]' : ($reservasi->doctor->spesialisasi == 'gigi' ? 'border-[#55FF70]' : '')) }} ">
                                                    <img class="object-cover scale-110 aspect-square" src="{{ $reservasi->doctor->image }}">
                                                </div>
                                                <div>
                                                    <p class="font-semibold">{{ $reservasi->doctor->name }}</p>
                                                    <p class="">Poli {{ Str::ucfirst($reservasi->doctor->spesialisasi) }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-[20%] px-4 py-4 text-center">
                                            {{ $reservasi->tanggal }}
                                        </div>
                                        <div class="w-[10%] py-4 text-center">
                                            {{  \Carbon\Carbon::parse($reservasi->jam)->format('H:i') }}
                                        </div>
                                        <div class="w-[25%] py-4 text-center">
                                            {{ $reservasi->nomor_antrian }}
                                        </div>
                                </div>
                            @endforeach
                    </div>
                    {{-- <table class="border-separate w-full border-[#E9E9E9] mt-8 border-spacing-y-1">
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
                            @foreach ($daftar_reservasi as $reservasi)
                                <tr class="text-sm border-2 border-red-400 rounded-lg">
                                        <td class="px-4 py-4 bg-white rounded-lg">
                                            <div class="flex space-x-4">
                                                <div
                                                    class="w-10 aspect-square rounded-full overflow-hidden border-[3px] border-[#ED1C24]">
                                                    <img class="object-cover aspect-square" src="{{ $reservasi->doctor->image }}">
                                                </div>
                                                <div>
                                                    <p class="font-semibold">{{ $reservasi->doctor->name }}</p>
                                                    <p class="">Poli {{ Str::ucfirst($reservasi->doctor->spesialisasi) }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-4">
                                            {{ $reservasi->tanggal }}
                                        </td>
                                        <td class="px-4 py-4">
                                            {{ $reservasi->jam }}
                                        </td>
                                        <td class="px-4 py-4 text-center">
                                            {{ $reservasi->nomor_antrian }}
                                        </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table> --}}
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
@endsection
