@extends('layouts.layoutDashboardAdmin')

@section('content')
        {{-- @foreach ($schedule as $s)
            <p>{{ $s }}</p>
        @endforeach --}}
        <div class="flex flex-col h-full">
            <header class="flex items-center justify-between mb-4">
                <div class="flex items-center justify-start space-x-4">
                    <img class="w-8" src="/img/antrian-sidebar-icon.png" alt="asd">
                    <h1 class="text-xl font-semibold">Antrian Pemeriksaan</h1>
                </div>
                <div class="relative flex items-center space-x-4">
                    @include('partials.dropdownProfile')
                </div>
            </header>

            <div class="flex-1 w-full p-6 bg-white rounded-xl">
                <div class="flex justify-between mb-4">
                    <h2 class="text-lg font-semibold">Kelola Antrian Pemeriksaan</h2>
                    <div class="flex items-start space-x-2">
                        <form class="flex" action="/admin/antrian-pemeriksaan">
                            <div class="">
                                <select required id="select-jam" name="poli" id="jam" class="block w-full p-2 text-sm text-gray-900 bg-white border border-gray-300 rounded-lg disabled:bg-slate-100 disabled:text-gray-500 focus:outline-primary/50">
                                    <option disabled>Pilih Poli</option>
                                    <option {{ request('poli') == 'umum' ? 'selected' : ''}} value="umum">Poli Umum</option>
                                    <option {{ request('poli') == 'mata' ? 'selected' : ''}} value="mata">Poli Mata</option>
                                    <option {{ request('poli') == 'gigi' ? 'selected' : ''}} value="gigi">Poli Gigi</option>
                                </select>
                            </div>
                            <div class="flex pr-2 items-center border border-gray-300 rounded-lg bg-white shadow-[0px_7px_61px_0px_rgba(198,203,232,0.5)]">
                                <input value="{{ request('tanggal_reservasi') }}" required name="tanggal_reservasi" autocomplete="off" class="text-gray-900 text-sm mr-2 rounded-md block w-full px-2 py-2 focus:outline-[#ED1C24]/50" id="datepicker" type="text">
                                <img class="w-5" src="/img/reservasi-saya-icon.png" alt="">
                            </div>
                            <div class="">
                                <select required id="select-jam" name="jam_mulai" id="jam" class="block w-full p-2 text-sm text-gray-900 bg-white border border-gray-300 rounded-lg disabled:bg-slate-100 disabled:text-gray-500 focus:outline-primary/50">
                                    <option disabled>Pilih Jam</option>
                                    @foreach ($daftar_jam as $jam)
                                        <option {{ request('jam_mulai') == $jam->jam_mulai ? 'selected' : ''}} value="{{ $jam->jam_mulai }}">
                                            {{ \Carbon\Carbon::parse($jam->jam_mulai)->format('H:i') }}
                                            -
                                            {{ \Carbon\Carbon::parse($jam->jam_selesai)->format('H:i') }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit">Cari</button>
                        </form>
                    </div>
                </div>
                <div class="flex space-x-2 text-sm">
                    <ul>
                        <li>Tanggal</li>
                        <li>Dokter Bertugas</li>
                        <li>Poli</li>
                    </ul>
                    <ul>
                        <li>:</li>
                        <li>:</li>
                        <li>:</li>
                    </ul>
                    <ul>
                        <li>12-12-2023</li>
                        @isset($reservations[0]->doctor->name)
                            <li>{{ $reservations[0]->doctor->name }}</li>
                        @endisset
                        @isset($reservations[0]->doctor->spesialisasi)
                            <li>{{ Str::ucfirst($reservations[0]->doctor->spesialisasi) }}</li>
                        @endisset
                    </ul>
                </div>  
                {{-- <div class="flex justify-between mb-6">
                    <a href="admin-data-pasien/create"
                        class="bg-[#ED1C24] text-sm px-4 py-2 font-semibold text-white rounded-full transition duration-150 hover:opacity-70">
                        Tambah Data
                    </a>
                    <div
                        class="flex items-center justify-between w-40 px-2 py-1 text-sm border-2 border-gray-300 rounded-lg focus:border-gray-600">
                        <p>Poli Umum</p>
                        <img class="w-5" src="/img/icon-chevron-down.svg" alt="">
                    </div>
                </div> --}}
                <table class="border-collapse border-2 w-full border-[#E9E9E9] mt-8">
                    <thead>
                        <tr>
                            <th class="border-2 text-sm font-semibold py-5 border-[#E9E9E9]">
                                Nomor <br> Antrian
                            </th>

                            <th class="border-2 text-sm font-semibold border-[#E9E9E9]">
                                Nama Pasien
                            </th>
                            <th class="border-2 text-sm font-semibold border-[#E9E9E9]">
                                Email
                            </th>
                            <th class="border-2 text-sm font-semibold border-[#E9E9E9]">
                                Jenis <br> Kelamin
                            </th>
                            <th class="border-2 text-sm font-semibold border-[#E9E9E9]">
                                Status
                            </th>
                            <th class="border-2 font-semibold border-[#E9E9E9]">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reservations as $reservation)
                            <tr class="text-sm {{  $reservation->status == 'completed' ? 'bg-green-300/30' : '' }}">
                                <td class="border-2 border-[#E9E9E9] py-3 px-4 text-center">
                                    {{ $reservation->nomor_antrian }}
                                </td>
                                <td class="border-2 border-[#E9E9E9] py-3 px-4">
                                    {{ $reservation->patient->name }}
                                </td>
                                <td class="border-2 border-[#E9E9E9] py-3 px-4 text-center">
                                    {{ $reservation->patient->email }}
                                </td>
                                <td class="border-2 border-[#E9E9E9] py-3 px-4 text-center">
                                    {{ $reservation->patient->jenis_kelamin }}
                                </td>
                                <td class="border-2 border-[#E9E9E9] py-3 px-4 text-center">
                                    {{ $reservation->status }}
                                </td>
                                <td class="border-2 border-[#E9E9E9]">
                                    <div class="flex items-center justify-center space-x-2">
                                        <form class="flex space-x-2" action="/admin/antrian-pemeriksaan/complete/{{ $reservation->id }}" method="post">
                                            @csrf
                                            <button
                                                {{  $reservation->status == 'completed' ? 'disabled' : '' }}
                                                type="submit"
                                                class="w-8 grid place-items-center rounded-md aspect-square bg-[#3D9B35] disabled:opacity-50 hover:opacity-90">
                                                <img src="/img/icon-check.svg" alt="check-icon" />
                                            </button>
                                            <a
                                                href="/admin/antrian-pemeriksaan/hasil-pemeriksaan/{{ $reservation->id }}"
                                                class="grid w-8 bg-red-500 rounded-md place-items-center aspect-square hover:bg-red-600">
                                                <img src="/img/delete-icon.png" alt="delete-icon" />
                                            </a>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            
                        @endforeach
                        @for ($i = 1; $i <= 6; $i++)
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/datepicker.min.js"></script>
        <script>
            // Mendapatkan tanggal saat ini
            let today = new Date();
            let dd = String(today.getDate()).padStart(2, '0');
            let mm = String(today.getMonth() + 1).padStart(2, '0'); // January is 0!
            let yyyy = today.getFullYear();

            today = mm + '/' + dd + '/' + yyyy;

            // Menetapkan tanggal saat ini sebagai placeholder
            document.getElementById('datepicker').setAttribute('value', today);


            $(function () {
                $("#datepicker").datepicker({
                    minDate: 0, // Hanya hari ini atau setelahnya
                    // onSelect: function (dateText, inst) {
                    //     // Tanggal awal
                    // var originalDate = $("#datepicker").val();

                    // // Buat objek Date dari string tanggal
                    // var dateObject = new Date(originalDate);

                    // // Ambil tahun, bulan, dan tanggal
                    // var year = dateObject.getFullYear();
                    // var month = ('0' + (dateObject.getMonth() + 1)).slice(-2); // Tambah 1 karena bulan dimulai dari 0
                    // var day = ('0' + dateObject.getDate()).slice(-2);

                    // // Format ulang tanggal
                    // var formattedDate = year + '-' + month + '-' + day;

                    // // Hasilnya adalah "2023-12-18"
                    // console.log(formattedDate);
                                                
                    //     // Lakukan pengalihan halaman dengan menggunakan window.location
                    //     // Gantilah URL sesuai kebutuhan Anda
                    //     window.location.href = '/admin/antrian-pemeriksaan?tanggal=' + formattedDate;
                    // }
                });
            });
        </script>
@endsection