@extends('layouts.layoutDashboardAdmin')

@section('content')
        {{-- @if(session('success'))
            @include('partials.modalLoginSuccess')
        @endif --}}
        <div class="h-full">
            <header class="flex items-center justify-between mb-4">
                <div class="flex items-center justify-start space-x-4">
                    <h1 class="text-xl font-semibold">Dashboard</h1>
                </div>
                <div class="relative flex items-center space-x-4">
                   @include('partials.dropdownProfile')
                </div>
            </header>
            <div class="grid grid-cols-4 gap-6 mt-6">
                <div class="flex justify-start gap-4 px-4 py-6 bg-white rounded-xl">
                    <div class="grid place-items-center bg-[#FFE8E8] rounded-xl p-3">
                        <img class="w-8" src="/img/dashboard-admin-pasien-icon.svg" alt="">
                    </div>
                    <div class="flex flex-col justify-center">
                        <h2 class="text-xl font-semibold">{{ $total_pasien }}</h2>
                        <p class="text-sm font-medium text-gray-500">Total Pasien</p>
                    </div>
                </div>
                <div class="flex justify-start gap-4 px-4 py-6 bg-white rounded-xl">
                    <div class="grid place-items-center bg-[#E8F8FF] rounded-xl p-3">
                        <img class="w-8" src="/img/dashboard-admin-doctor-icon.svg" alt="">
                    </div>
                    <div class="flex flex-col justify-center">
                        <h2 class="text-xl font-semibold">{{ $total_dokter }}</h2>
                        <p class="text-sm font-medium text-gray-500">Total Dokter</p>
                    </div>
                </div>
                <div class="flex justify-start gap-4 px-4 py-6 bg-white rounded-xl">
                    <div class="grid place-items-center bg-[#FFF4EF] rounded-xl p-3">
                        <img class="w-8" src="/img/dashboard-admin-pembayaran-icon.svg" alt="">
                    </div>
                    <div class="flex flex-col justify-center">
                        <h2 class="text-xl font-semibold">{{ $total_pembayaran }}</h2>
                        <p class="text-sm font-medium text-gray-500">Pembayaran</p>
                    </div>
                </div>
                <div class="flex justify-start gap-4 px-4 py-6 bg-white rounded-xl">
                    <div class="grid place-items-center bg-[#DCFCE7] rounded-xl p-3">
                        <img class="w-8" src="/img/dashboard-admin-poli-icon.svg" alt="">
                    </div>
                    <div class="flex flex-col justify-center">
                        <h2 class="text-xl font-semibold">3</h2>
                        <p class="text-sm font-medium text-gray-500">Total Poli</p>
                    </div>
                </div>
            </div>

            <div class="flex gap-6 mt-10">
                <div class="flex w-[40%] flex-col gap-6">
                    <div class="p-6 bg-white rounded-2xl">
                        <h2 class="font-semibold">Dokter Setiap Poli</h2>
                        {!! $doctor_chart->container() !!}
                    </div>
                    <div class="p-6 bg-white rounded-2xl">
                        <h2 class="font-semibold">Review Setiap Poli</h2>
                        {!! $review_chart->container() !!}
                    </div>
                </div>

                <div class="flex flex-col space-y-6 w-[60%]" >
                    <div class="flex flex-col w-full gap-6 p-6 pb-8 bg-white rounded-xl">
                        <h2 class="font-semibold">Antrian Pemeriksaan</h2>
                        <div class="grid w-full grid-cols-3 gap-6">
                            <div>
                                <p class="mb-3 text-sm font-medium">Poli Umum</p>
                                <div class="flex items-center space-x-4 bg-[#FFE8E8] p-4 rounded-lg">
                                    <img src="/img/dashboard-admin-ticket-umum-icon.svg" alt="">
                                    <h2 class="font-bold text-[#FF5050] text-2xl">No 7</h2>
                                </div>
                            </div>
                            <div>
                                <p class="mb-3 text-sm font-medium">Poli Umum</p>
                                <div class="flex items-center space-x-4 bg-[#E8F8FF] p-4 rounded-lg">
                                    <img src="/img/dashboard-admin-ticket-mata-icon.svg" alt="">
                                    <h2 class="font-bold text-[#41B6FF] text-2xl">No 7</h2>
                                </div>
                            </div>
                            <div>
                                <p class="mb-3 text-sm font-medium">Poli Umum</p>
                                <div class="flex items-center space-x-4 bg-[#DCFCE7] p-4 rounded-lg">
                                    <img src="/img/dashboard-admin-ticket-gigi-icon.svg" alt="">
                                    <h2 class="font-bold text-[#3CD755] text-2xl">No 7</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex flex-col w-full h-full gap-6 p-6 pb-8 bg-white rounded-xl">
                        <h2 class="font-semibold">Menunggu Laporan Pemeriksaan (10)</h2>
                        
                    </div>

                    <div class="flex flex-col w-full h-full gap-6 p-6 pb-8 bg-white rounded-xl">
                        <h2 class="font-semibold">Menunggu Pembayaran (10)</h2>
                        
                    </div>
                </div>

                
            </div>


            


            {{-- <div class="mt-8">
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
            </div> --}}

        </div>
        <script src="{{ $doctor_chart->cdn() }}"></script>
        <script src="{{ $review_chart->cdn() }}"></script>

        {{ $doctor_chart->script() }}
        {{ $review_chart->script() }}
@endsection
