@extends('layouts.layoutdashboard')

@section('content')
        <div class="h-full">
            <header class="flex items-center justify-between mb-4">
                <div class="flex items-center justify-start space-x-4">
                    <img class="w-8" src="/img/antrian-sidebar-icon.png" alt="asd">
                    <h1 class="text-xl font-semibold">Reservasi Saya</h1>
                </div>
                <div class="relative flex items-center space-x-4">
                    @include('partials.dropdownProfile')
                </div>
            </header>
            <div class="mb-4">
                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown-category" class="flex justify-between text-[#777A8F] focus:outline-[#777A8F] w-40 after:hidden bg-white border border-white/40 hover:bg-white/20 font-medium rounded-xl text-xs px-5 py-2.5 text-start items-center shadow-[0px_7px_61px_0px_rgba(198,203,232,0.5)] md:text-sm md:w-48" type="button">All <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                  </svg></button>
                  <!-- Dropdown menu -->
                  <div id="dropdown-category" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-[0px_7px_61px_0px_rgba(198,203,232,0.5)] w-40 -translate-y-20 md:mt-0 md:w-44">
                    <ul class="py-2 text-xs text-[#777A8F] md:text-sm" aria-labelledby="dropdownDefaultButton">
                      <li>
                        <a href="/books/?category=all" class="block px-4 py-2 hover:bg-[#777A8F]/10">All</a>
                      </li>
                      <li>
                        <a href="/books/?category=" class="block px-4 py-2 hover:bg-[#777A8F]/10">Poli Umum</a>
                      </li>
                      {{-- @foreach ($categories as $category)
                        
                      @endforeach --}}
                      
                    </ul>
                  </div>
            </div>
            <div class="grid grid-cols-2 gap-6">
                @foreach ($daftar_reservasi as $reservasi)
                    <div onclick="location.href='/lakukan-reservasi/detail/{{ $reservasi->doctor->username }}';" class="flex justify-start py-6 pl-6 pr-10 space-x-4 transition-all duration-150 bg-white shadow-lg hover:cursor-pointer hover:pointer hover:-translate-y-1 rounded-xl shadow-gray-100">
                        <div class="space-y-2 text-center">
                            <img class="object-cover h-56 rounded-lg w-44" src="{{ $reservasi->doctor->image }}" alt="doctor-1" />
                        </div>
                        <span class="block w-[2px] bg-gray-200"></span>
                        <div class="flex flex-col justify-start flex-1">
                            <h1 class="text-lg font-semibold">{{ $reservasi->doctor->name }}</h1>
                            <p class="mb-2 text-sm font-medium text-gray-600">Poli {{ $reservasi->doctor->spesialisasi }}</p>
                            <div class="flex flex-col mb-4 space-y-2">
                                <div class="flex items-center space-x-2">
                                    <div class="flex justify-center items-center w-7 rounded-full aspect-square bg-[#ED1C24]/10">
                                        <img src="/img/reservasi-saya-tanggal-icon.png" alt="">
                                    </div>
                                    <p class="text-sm font-medium text-gray-500">{{ $reservasi->tanggal }}</p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <div class="flex justify-center items-center w-7 rounded-full aspect-square bg-[#ED1C24]/10">
                                        <img src="/img/reservasi-saya-jam-icon.png" alt="">
                                    </div>
                                    <p class="text-sm font-medium text-gray-500">270 patients</p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <div class="flex justify-center items-center w-7 rounded-full aspect-square bg-[#ED1C24]/10">
                                        <img src="/img/reservasi-saya-antrian-icon.png" alt="">
                                    </div>
                                    <p class="text-sm font-medium text-gray-500">Nomor Antrian :  {{ $reservasi->nomor_antrian }}</p>
                                </div>
                            </div>
                            <div class="flex justify-start w-full ">
                                <form action="/reservasi-saya/cancel/{{ $reservasi->id }}" method="POST">
                                    @csrf
                                    <button type="submit" class="py-3 text-sm text-white px-10 shadow-lg bg-gradient-to-r from-[#ED1C24]/90 to-[#ED1C24]/50 rounded-xl transition duration-200 hover:bg-[#ED1C24]">
                                        Batalkan
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>

{{-- 
            <div class="grid grid-cols-2 gap-8">
                @foreach ($daftar_reservasi as $reservasi)
                    <a href="#" class="flex py-6 pl-6 pr-16 space-x-10 bg-white shadow-lg rounded-xl shadow-gray-100">
                        <img class="object-cover h-56 rounded-lg w-44" src="{{ $reservasi->doctor->image }}" alt="doctor-1" />
                        <div class="flex flex-col items-start justify-between">
                            <div>
                                <h1 class="text-lg font-semibold">{{ $reservasi->doctor->name }}</h1>
                                <p class="mb-5 text-base font-medium">Poli {{ Str::ucfirst($reservasi->doctor->spesialisasi)}}</p>
                                <div class="space-y-2">
                                    <div class="flex items-center space-x-2">
                                        <img class="w-6" src="/img/reservasi-saya-icon.png" alt="antrian" />
                                        <p class="text-sm">{{ $reservasi->tanggal }}</p>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <img class="w-6" src="/img/clock-icon.png" alt="antrian" />
                                        <p class="text-sm">07.00 - 12.00</p>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <img class="w-6" src="/img/antrian-icon.png" alt="antrian" />
                                        <p class="text-sm">Antrian Nomor {{ $reservasi->nomor_antrian }}</p>
                                    </div>
                                </div>
                            </div>
                            <form action="/reservasi-saya/cancel/{{ $reservasi->id }}" method="POST">
                                @csrf
                                <button type="submit" class="py-3 text-sm text-white px-10 shadow-lg bg-gradient-to-r from-[#ED1C24]/90 to-[#ED1C24]/50 rounded-xl transition duration-200 hover:bg-[#ED1C24]">
                                    Batalkan
                                </button>
                            </form>

                        </div>
                    </a>
                @endforeach
            </div> --}}
        </div>
@endsection
