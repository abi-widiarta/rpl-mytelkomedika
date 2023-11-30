@extends('layouts.layoutdashboard')

@section('content')
    <section class="flex-1 px-12 py-10">
        <div class="h-full">
            <header class="flex items-center justify-between mb-8">
                <div class="flex items-center justify-start space-x-4">
                    <img class="w-8" src="/img/antrian-sidebar-icon.png" alt="asd">
                    <h1 class="text-xl font-semibold">Lakukan Reservasi</h1>
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

            <div class="space-y-6">
                <div class="flex py-6 pl-6 pr-10 space-x-4 bg-white shadow-lg rounded-xl shadow-gray-100">
                    <div class="space-y-4 text-center">
                        <img class="rounded-lg w-36" src="/img/doctor-1.png" alt="doctor-1" />
                        <h1 class="font-semibold">Dr. Chika</h1>
                    </div>
                    <span class="block w-[2px] h-52 bg-gray-200"></span>
                    <div class="flex flex-col justify-between flex-1 px-2 py-2">
                        <div>
                            <h2 class="mb-4 text-base font-semibold">Jadwal Praktek</h2>
                            <ul class="flex justify-between">

                                <li class="w-32">
                                    <h3 class="mb-2 text-base font-semibold capitalize">
                                        Senin
                                    </h3>
                                    <p class="text-sm">08.00 - 13.00</p>
                                </li>
                                <li class="w-32">
                                    <h3 class="mb-2 text-base font-semibold capitalize">
                                        Selasa
                                    </h3>
                                    <p class="text-sm">08.00 - 13.00</p>
                                </li>
                                <li class="w-32">
                                    <h3 class="mb-2 text-base font-semibold capitalize">
                                        Rabu
                                    </h3>
                                    <p class="text-sm">08.00 - 13.00</p>
                                </li>
                                <li class="w-32">
                                    <h3 class="mb-2 text-base font-semibold capitalize">
                                        Kamis
                                    </h3>
                                    <p class="text-sm">08.00 - 13.00</p>
                                </li>
                                <li class="w-32">
                                    <h3 class="mb-2 text-base font-semibold capitalize">
                                        Jumat
                                    </h3>
                                    <p class="text-sm">08.00 - 13.00</p>
                                </li>
                                <li class="w-32">
                                    <h3 class="mb-2 text-base font-semibold capitalize">
                                        Sabtu
                                    </h3>
                                    <p class="text-sm">08.00 - 13.00</p>
                                </li>

                            </ul>
                        </div>
                        <div class="flex items-end justify-between">
                            <div class="space-y-3">
                                <h3 class="text-base font-semibold">Poli Umum</h3>
                                <div class="flex items-end space-x-2">
                                    <img src="/img/star-icon.png" alt="star-icon" />
                                    <p class="inline-block text-sm translate-y-[2px]">
                                        4.6
                                    </p>
                                </div>
                            </div>
                            <button
                                class="py-3 text-white px-10 shadow-lg bg-gradient-to-r from-[#ED1C24]/90 to-[#ED1C24]/50 rounded-xl transition duration-200 hover:bg-[#ED1C24]">
                                Reservasi
                            </button>
                        </div>
                    </div>
                </div>

                <div class="flex py-6 pl-6 pr-10 space-x-4 bg-white shadow-lg rounded-xl shadow-gray-100">
                    <div class="space-y-4 text-center">
                        <img class="rounded-lg w-36" src="/img/doctor-1.png" alt="doctor-1" />
                        <h1 class="font-semibold">Dr. Chika</h1>
                    </div>
                    <span class="block w-[2px] h-52 bg-gray-200"></span>
                    <div class="flex flex-col justify-between flex-1 px-2 py-2">
                        <div>
                            <h2 class="mb-4 text-base font-semibold">Jadwal Praktek</h2>
                            <ul class="flex justify-between">

                                <li class="w-32">
                                    <h3 class="mb-2 text-base font-semibold capitalize">
                                        Senin
                                    </h3>
                                    <p class="text-sm">08.00 - 13.00</p>
                                </li>
                                <li class="w-32">
                                    <h3 class="mb-2 text-base font-semibold capitalize">
                                        Selasa
                                    </h3>
                                    <p class="text-sm">08.00 - 13.00</p>
                                </li>
                                <li class="w-32">
                                    <h3 class="mb-2 text-base font-semibold capitalize">
                                        Rabu
                                    </h3>
                                    <p class="text-sm">08.00 - 13.00</p>
                                </li>
                                <li class="w-32">
                                    <h3 class="mb-2 text-base font-semibold capitalize">
                                        Kamis
                                    </h3>
                                    <p class="text-sm">08.00 - 13.00</p>
                                </li>
                                <li class="w-32">
                                    <h3 class="mb-2 text-base font-semibold capitalize">
                                        Jumat
                                    </h3>
                                    <p class="text-sm">08.00 - 13.00</p>
                                </li>
                                <li class="w-32">
                                    <h3 class="mb-2 text-base font-semibold capitalize">
                                        Sabtu
                                    </h3>
                                    <p class="text-sm">08.00 - 13.00</p>
                                </li>

                            </ul>
                        </div>
                        <div class="flex items-end justify-between">
                            <div class="space-y-3">
                                <h3 class="text-base font-semibold">Poli Umum</h3>
                                <div class="flex items-end space-x-2">
                                    <img src="/img/star-icon.png" alt="star-icon" />
                                    <p class="inline-block text-sm translate-y-[2px]">
                                        4.6
                                    </p>
                                </div>
                            </div>
                            <button
                                class="py-3 text-white px-10 shadow-lg bg-gradient-to-r from-[#ED1C24]/90 to-[#ED1C24]/50 rounded-xl transition duration-200 hover:bg-[#ED1C24]">
                                Reservasi
                            </button>
                        </div>
                    </div>
                </div>

                <div class="flex py-6 pl-6 pr-10 space-x-4 bg-white shadow-lg rounded-xl shadow-gray-100">
                    <div class="space-y-4 text-center">
                        <img class="rounded-lg w-36" src="/img/doctor-1.png" alt="doctor-1" />
                        <h1 class="font-semibold">Dr. Chika</h1>
                    </div>
                    <span class="block w-[2px] h-52 bg-gray-200"></span>
                    <div class="flex flex-col justify-between flex-1 px-2 py-2">
                        <div>
                            <h2 class="mb-4 text-base font-semibold">Jadwal Praktek</h2>
                            <ul class="flex justify-between">

                                <li class="w-32">
                                    <h3 class="mb-2 text-base font-semibold capitalize">
                                        Senin
                                    </h3>
                                    <p class="text-sm">08.00 - 13.00</p>
                                </li>
                                <li class="w-32">
                                    <h3 class="mb-2 text-base font-semibold capitalize">
                                        Selasa
                                    </h3>
                                    <p class="text-sm">08.00 - 13.00</p>
                                </li>
                                <li class="w-32">
                                    <h3 class="mb-2 text-base font-semibold capitalize">
                                        Rabu
                                    </h3>
                                    <p class="text-sm">08.00 - 13.00</p>
                                </li>
                                <li class="w-32">
                                    <h3 class="mb-2 text-base font-semibold capitalize">
                                        Kamis
                                    </h3>
                                    <p class="text-sm">08.00 - 13.00</p>
                                </li>
                                <li class="w-32">
                                    <h3 class="mb-2 text-base font-semibold capitalize">
                                        Jumat
                                    </h3>
                                    <p class="text-sm">08.00 - 13.00</p>
                                </li>
                                <li class="w-32">
                                    <h3 class="mb-2 text-base font-semibold capitalize">
                                        Sabtu
                                    </h3>
                                    <p class="text-sm">08.00 - 13.00</p>
                                </li>

                            </ul>
                        </div>
                        <div class="flex items-end justify-between">
                            <div class="space-y-3">
                                <h3 class="text-base font-semibold">Poli Umum</h3>
                                <div class="flex items-end space-x-2">
                                    <img src="/img/star-icon.png" alt="star-icon" />
                                    <p class="inline-block text-sm translate-y-[2px]">
                                        4.6
                                    </p>
                                </div>
                            </div>
                            <button
                                class="py-3 text-white px-10 shadow-lg bg-gradient-to-r from-[#ED1C24]/90 to-[#ED1C24]/50 rounded-xl transition duration-200 hover:bg-[#ED1C24]">
                                Reservasi
                            </button>
                        </div>
                    </div>
                </div>

                <div class="flex py-6 pl-6 pr-10 space-x-4 bg-white shadow-lg rounded-xl shadow-gray-100">
                    <div class="space-y-4 text-center">
                        <img class="rounded-lg w-36" src="/img/doctor-1.png" alt="doctor-1" />
                        <h1 class="font-semibold">Dr. Chika</h1>
                    </div>
                    <span class="block w-[2px] h-52 bg-gray-200"></span>
                    <div class="flex flex-col justify-between flex-1 px-2 py-2">
                        <div>
                            <h2 class="mb-4 text-base font-semibold">Jadwal Praktek</h2>
                            <ul class="flex justify-between">

                                <li class="w-32">
                                    <h3 class="mb-2 text-base font-semibold capitalize">
                                        Senin
                                    </h3>
                                    <p class="text-sm">08.00 - 13.00</p>
                                </li>
                                <li class="w-32">
                                    <h3 class="mb-2 text-base font-semibold capitalize">
                                        Selasa
                                    </h3>
                                    <p class="text-sm">08.00 - 13.00</p>
                                </li>
                                <li class="w-32">
                                    <h3 class="mb-2 text-base font-semibold capitalize">
                                        Rabu
                                    </h3>
                                    <p class="text-sm">08.00 - 13.00</p>
                                </li>
                                <li class="w-32">
                                    <h3 class="mb-2 text-base font-semibold capitalize">
                                        Kamis
                                    </h3>
                                    <p class="text-sm">08.00 - 13.00</p>
                                </li>
                                <li class="w-32">
                                    <h3 class="mb-2 text-base font-semibold capitalize">
                                        Jumat
                                    </h3>
                                    <p class="text-sm">08.00 - 13.00</p>
                                </li>
                                <li class="w-32">
                                    <h3 class="mb-2 text-base font-semibold capitalize">
                                        Sabtu
                                    </h3>
                                    <p class="text-sm">08.00 - 13.00</p>
                                </li>

                            </ul>
                        </div>
                        <div class="flex items-end justify-between">
                            <div class="space-y-3">
                                <h3 class="text-base font-semibold">Poli Umum</h3>
                                <div class="flex items-end space-x-2">
                                    <img src="/img/star-icon.png" alt="star-icon" />
                                    <p class="inline-block text-sm translate-y-[2px]">
                                        4.6
                                    </p>
                                </div>
                            </div>
                            <button
                                class="py-3 text-white px-10 shadow-lg bg-gradient-to-r from-[#ED1C24]/90 to-[#ED1C24]/50 rounded-xl transition duration-200 hover:bg-[#ED1C24]">
                                Reservasi
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
