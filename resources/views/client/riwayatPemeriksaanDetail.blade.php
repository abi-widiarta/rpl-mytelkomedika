@extends('layouts.layoutdashboard')

@section('content')
    <section class="flex-1 px-12 py-10">
        <div class="h-full">
            <header class="flex items-center justify-between mb-8">
                <div class="flex items-center justify-start space-x-4">
                    <img class="w-8" src="/img/riwayat-pemeriksaan-icon.png" alt="asd">
                    <h1 class="text-xl font-semibold">Riwayat Pemeriksaan</h1>
                </div>
                <div class="flex items-center space-x-4">
                    <div
                        class="py-1 pl-4 pr-2 border-2 space-x-4 border-[#ED1C24] rounded-full flex items-center justify-between">
                        <p class="text-sm font-semibold">John Doe</p>
                        <div class="grid w-8 bg-gray-600 rounded-full place-items-center aspect-square">
                            <p class="m-0 text-white font-base">
                                J
                            </p>
                        </div>
                    </div>
                </div>
            </header>

            <div>
                <button type="button" class="text-black bg-white hover:bg-gray-100 font-medium rounded-lg px-2 py-2.5 mb-3 inline-flex">
                    <div class="flex items-center space-x-5 justify-items-stretch">
                        <p class="text-sm text-black">
                            1 Minggu Lalu
                        </p>
                        <div class="w-6">
                            <img class="w-4 justify-items-end" src="/img/icon-chevron-down.svg" alt="checklist" />
                        </div>
                    </div>
                </button>
            </div>

            <div class="flex items-stretch bg-white border border-gray-200 ">
                <div class="max-w-sm">
                    <a href="#">
                        <img class="w-[212px] rounded-lg mx-8 mt-8 items-center" src="/img/doctor-1.png" alt="doctor-1" />
                    </a>
                    <div class="mx-8 mt-3">
                        <a href="#">
                            <h5 class="text-lg font-bold">Dr. Chika</h5>
                        </a>
                        <p class="mb-5 text-base font-medium">Poli Umum</p>
                            <div class="mt-6 space-y-3">
                                <div class="flex items-center space-x-2">
                                    <img class="w-6" src="/img/reservasi-saya-icon.png" alt="antrian" />
                                    <p class="text-sm">Sabtu - 20 Mei 2023</p>
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
                        <button class="my-10 py-3 font-medium px-10 text-white shadow-lg bg-gradient-to-r from-[#ED1C24]/90 to-[#ED1C24]/50 rounded-lg transition duration-200 hover:bg-[#ED1C24]">
                            Review
                        </button>
                    </div>
                </div>
                <ul class= "w-full mr-32">
                    <li>
                        <div class="bg-white w-full my-8 mx-8 ml-24 rounded-lg border border-dashed border-[#3D9B35] py-4 px-6">
                            <div class="p-6 border-black border-dashed rounded-lg ">
                                <div class = "items-center text-center">
                                    <h5 class="mb-2 text-xl font-bold text-gray-900 ">Kesimpulan Pemeriksaan</h5>
                                </div>
                                <span class="w-full my-3 mb-10 md:h-0.5 bg-[#DADADA] rounded-full block"></span>
                                <div class="flex">
                                    <ul class="list-none ">
                                        <li class="my-5">Berat badan</li>
                                        <li class="my-5">Tinggi badan</li>
                                        <li class="my-5">Suhu tubuh</li>
                                        <li class="my-5">Tekanan Darah</li>
                                        <li class="my-5">Keadaan umum</li>
                                        <li class="my-5">Frekuensi nafas</li>
                                        <li class="my-5">Diagnosa</li>
                                    </ul>
                                    <ul class="ml-12 mr-4 list-none">
                                        <li class="my-5">:</li>
                                        <li class="my-5">:</li>
                                        <li class="my-5">:</li>
                                        <li class="my-5">:</li>
                                        <li class="my-5">:</li>
                                        <li class="my-5">:</li>
                                        <li class="my-5">:</li>
                                    </ul>
                                    <ul class="list-none ">
                                        <li class="my-5">42 kg</li>
                                        <li class="my-5">172 cm</li>
                                        <li class="my-5">37,2 derajat Celcius</li>
                                        <li class="my-5">80/660 mmHg</li>
                                        <li class="my-5">Tampak sakit sedang</li>
                                        <li class="my-5">3x/menit</li>
                                        <li class="my-5">Demam, batuk, pilek</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="bg-white w-full my-8 mx-8 ml-24 rounded-lg border border-dashed border-[#3D9B35] py-4 px-6">
                            <div class="p-6 border-black border-dashed rounded-lg ">
                                <div class = "items-center text-center">
                                    <h5 class="mb-2 text-xl font-bold text-gray-900 ">Kesimpulan Pemeriksaan</h5>
                                </div>
                                <span class="w-full my-3 mb-10 md:h-0.5 bg-[#DADADA] rounded-full block"></span>
                                <div class="flex">
                                    <ul class="list-none ">
                                        <li class="my-5">Antibiotik</li>
                                        <li class="my-5">Paracetamol</li>
                                        <li class="my-5">Vitamin</li>
                                    </ul>
                                    <ul class="ml-12 mr-4 list-none">
                                        <li class="my-5">:</li>
                                        <li class="my-5">:</li>
                                        <li class="my-5">:</li>
                                    </ul>
                                    <ul class="list-none ">
                                        <li class="my-5">3x sehari setelah makan</li>
                                        <li class="my-5">3x sehari setelah makan</li>
                                        <li class="my-5">3x sehari setelah makan</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection
