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


            <div class="flex items-stretch px-10 pb-10 mb-10 bg-white rounded-lg">
                <div class="w-[30%] flex-col items-center">
                    <img class="w-[212px] object-cover rounded-lg mt-8 items-center" src="{{ $report->reservation->doctor->image }}" alt="doctor-1" />
                    <div class="pr-6 mt-3">
                        <h5 class="text-lg font-semibold">{{ $report->reservation->doctor->name }}</h5>
                        <div class="mt-2 mb-4 -ml-1 space-y-6">
                            <div class="flex flex-col mb-4 space-y-2">
                                <div class="flex items-center space-x-2">
                                    <div class="flex justify-center items-center w-7 rounded-full aspect-square bg-[#55FF70]/10">
                                        <img src="/img/poli-icon-green.png" alt="">
                                    </div>
                                    <p class="text-sm font-medium text-gray-500">Poli {{ Str::ucfirst($report->reservation->doctor->spesialisasi) }}</p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <div class="flex justify-center items-center w-7 rounded-full aspect-square bg-[#55FF70]/10">
                                        <img src="/img/reservasi-saya-tanggal-icon.png" alt="">
                                    </div>
                                    <p class="text-sm font-medium text-gray-500">{{ $report->reservation->tanggal }}</p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <div class="flex justify-center items-center w-7 rounded-full aspect-square bg-[#55FF70]/10">
                                        <img class="w-4" src="/img/icon-wallet.png" alt="">
                                    </div>
                                    <div class="flex">
                                        <p class="text-sm font-medium text-gray-500">Rp. {{ $report->reservation->payment->nominal }}</p>
                                        @if ($report->reservation->payment->nominal != 0)
                                            <p class="text-sm font-medium text-gray-500">- {{ $report->reservation->payment->status == 1 ? 'Lunas' : 'Belum Lunas'  }}</span></p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @if ($report->surat_dokter == 1)
                                <div class="text-medium">
                                    <a href="/riwayat-pemeriksaan/detail/pdf/{{ $report->reservation->id }}" class="inline-flex items-center w-auto space-x-2 transition-all duration-150 hover:cursor-pointer hover:opacity-70">
                                        <div class="flex justify-center items-center w-7 rounded-full aspect-square bg-[#55FF70]/10">
                                            <img class="w-4 mx-auto" src="/img/checklist-icon.png" alt="checklist" />
                                        </div>
                                        <p class="text-sm font-medium text-gray-500">Surat Dokter</p>
                                        <img src="/img/download-icon.svg" alt="">
                                    </a>
                                </div>
                            @else
                            <div data-tooltip-target="tooltip-light" data-tooltip-style="light" class="flex items-center space-x-2 transition-all duration-100 hover:cursor-pointer hover:opacity-70">
                                <div class="flex justify-center items-center w-7 rounded-full aspect-square bg-[#ED1C24]/10">
                                    <img class="w-4 mx-auto" src="/img/cross-icon.png" alt="checklist" />
                                </div>
                                <p class="text-sm font-semibold text-gray-600">Surat Dokter</p>
                            </div>
                                

                                <div id="tooltip-light" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
                                    Anda tidak eligible untuk mendapatkan surat keterangan sakit
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            @endif
                        </div>
                        @include('partials.modalReview')
                    </div>
                </div>
                <div class="w-[70%]">
                    <div class="bg-white w-full my-8 rounded-lg border-2 border-dashed border-[#3D9B35] py-4 px-6">
                        <div class="px-6 pt-4 pb-6 border-black border-dashed rounded-lg ">
                            <div class="items-center text-center">
                                <h5 class="mb-2 text-lg font-semibold text-gray-900 ">Kesimpulan Pemeriksaan</h5>
                            </div>
                            <span class="w-full my-3 mb-4 md:h-0.5 bg-[#DADADA] rounded-full block"></span>
                            <div class="flex">
                                <ul class="list-none w-[30%]">
                                    <li class="my-5 font-medium text-gray-600">Berat badan</li>
                                    <li class="my-5 font-medium text-gray-600">Tinggi badan</li>
                                    <li class="my-5 font-medium text-gray-600">Suhu tubuh</li>
                                    <li class="my-5 font-medium text-gray-600">Keluhan</li>
                                    <li class="my-5 font-medium text-gray-600">Diagnosa</li>
                                    <li class="my-5 font-medium text-gray-600">Anjuran</li>
                                    {{-- <li class="my-5">Diagnosa</li> --}}
                                </ul>
                                <ul class="ml-12 mr-4 list-none">
                                    <li class="my-5">:</li>
                                    <li class="my-5">:</li>
                                    <li class="my-5">:</li>
                                    <li class="my-5">:</li>
                                    <li class="my-5">:</li>
                                    <li class="my-5">:</li>
                                </ul>
                                <ul class="list-none ">
                                    <li class="my-5 text-base text-gray-600">{{ $report->berat_badan }} kg</li>
                                    <li class="my-5 text-base text-gray-600">{{ $report->tinggi_badan }} cm</li>
                                    <li class="my-5 text-base text-gray-600">{{ $report->suhu_badan }} celcius</li>
                                    <li class="my-5 text-base text-gray-600">{{ $report->keluhan }}</li>
                                    <li class="my-5 text-base text-gray-600">{{ $report->diagnosa}}</li>
                                    <li class="my-5 text-base text-gray-600">{{ $report->anjuran}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white w-full my-8 rounded-lg border-2 border-dashed border-[#3D9B35] py-4 px-6">
                        <div class="px-6 pt-4 pb-6 rounded-lg ">
                            <div class="items-center text-center">
                                <h5 class="mb-2 text-lg font-semibold text-gray-900 ">Obat</h5>
                            </div>
                            <span class="w-full my-3 mb-4 md:h-0.5 bg-[#DADADA] rounded-full block"></span>
                            <div class="flex">
                                <ul class="list-none w-[22%]">
                                    @foreach ($daftar_obat as $obat)
                                        <li class="my-5 font-medium text-gray-600">{{ $obat }}</li>    
                                    @endforeach
                                </ul>
                                <ul class="ml-12 mr-4 list-none">
                                    @foreach ($daftar_obat as $obat)
                                        <li class="my-5">:</li>  
                                    @endforeach
                                </ul>
                                <ul class="list-none ">
                                    @foreach ($dosis_obat as $dosis)
                                        <li class="my-5 text-gray-600">{{ $dosis }}</li>    
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <a href="/riwayat-pemeriksaan/detail/pdf/{{ $report->reservation->id }}"  class="flex space-x-2 transition-all duration-150 hover:opacity-80">
                            <img src="/img/download-icon.svg" alt="">
                            <p>Download</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
@endsection
