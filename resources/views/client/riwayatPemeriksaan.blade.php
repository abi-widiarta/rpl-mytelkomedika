@extends('layouts.layoutdashboard')

@section('content')
        <div class="h-full">
            <header class="flex items-center justify-between mb-8">
                <div class="flex items-center justify-start space-x-4">
                    <img class="w-8" src="/img/riwayat-pemeriksaan-icon.png" alt="asd">
                    <h1 class="text-xl font-semibold">Riwayat Pemeriksaan</h1>
                </div>
                <div class="relative flex items-center space-x-4">
                    @include('partials.dropdownProfile')
                </div>
            </header>

            <div class="flex">
                @foreach ($daftar_pemeriksaan as $pemeriksaan)
                    <div class="flex py-6 pl-6 pr-10 space-x-6 bg-white shadow-lg rounded-xl shadow-gray-100">
                        <img class="w-[212px] rounded-lg" src="{{ $pemeriksaan->doctor->image }}" alt="doctor-1" />
                        <div class="flex flex-col items-start justify-between">
                            <div>
                                <h1 class="text-lg font-semibold">{{ $pemeriksaan->doctor->name }}</h1>
                                <p class="mb-5 text-base font-medium">Poli {{ Str::ucfirst($pemeriksaan->doctor->spesialisasi) }}</p>
                                <div class="mt-6 space-y-3">
                                    <div class="flex items-center space-x-2">
                                        <img class="w-6" src="/img/reservasi-saya-icon.png" alt="antrian" />
                                        <p class="text-sm">{{ $pemeriksaan->tanggal }}</p>
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
                            <a  
                                href="/riwayat-pemeriksaan/detail/{{ $pemeriksaan->id }}"
                                class="py-3 font-medium px-10 text-white shadow-lg bg-gradient-to-r from-[#ED1C24]/90 to-[#ED1C24]/50 rounded-lg transition duration-200 hover:bg-[#ED1C24]">
                                Detail
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
@endsection
