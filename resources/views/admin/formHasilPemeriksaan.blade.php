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

            <div class="flex-1 w-full px-6 pt-6 pb-24 bg-white rounded-xl">
                <div class="flex justify-between mb-4">
                    <h2 class="text-lg font-semibold">Kelola Hasil Pemeriksaan</h2>
                    {{-- <div class="flex items-start space-x-2">
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
                    </div> --}}
                </div>
                <div class="flex mb-8 space-x-2 text-sm">
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
                        @isset($reservation->doctor->name)
                            <li>{{ $reservation->doctor->name }}</li>
                        @endisset
                        @isset($reservation->doctor->spesialisasi)
                            <li>{{ Str::ucfirst($reservation->doctor->spesialisasi) }}</li>
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
                <div class="w-full">
                  <h1 class="mb-10 text-lg font-semibold text-center">Form Hasil Pemeriksaan</h1>
                  <form class="w-[80%] mx-auto pl-6 space-y-8" action="/admin/antrian-pemeriksaan/hasil-pemeriksaan/{{ $reservation->id }}" method="post">
                    @csrf
                    <div class="flex items-center">
                      <label class="w-[20%] text-sm" for="patient">Pasien</label>
                      <input name="name" disabled value="{{ $reservation->patient->name }}" class="w-[70%] bg-white disabled:bg-slate-100 disabled:text-gray-500 border border-gray-300 text-gray-900 text-sm rounded-lg block p-2.5 focus:outline-primary/50"  id="patient" type="text">
                    </div>
                    <div class="flex items-center">
                      <label class="w-[20%] text-sm" for="berat_badan">Berat Badan (Kg)</label>
                      <input name="berat_badan" class="w-[70%] bg-white disabled:bg-slate-100 disabled:text-gray-500 border border-gray-300 text-gray-900 text-sm rounded-lg block p-2.5 focus:outline-primary/50"  id="berat_badan" type="text">
                    </div>
                    <div class="flex items-center">
                      <label class="w-[20%] text-sm" for="tinggi_badan">Tinggi Badan (cm)</label>
                      <input name="tinggi_badan" class="w-[70%] bg-white disabled:bg-slate-100 disabled:text-gray-500 border border-gray-300 text-gray-900 text-sm rounded-lg block p-2.5 focus:outline-primary/50"  id="tinggi_badan" type="text">
                    </div>
                    <div class="flex items-center">
                      <label class="w-[20%] text-sm" for="suhu_badan">Suhu Tubuh (C)</label>
                      <input name="suhu_badan" class="w-[70%] bg-white disabled:bg-slate-100 disabled:text-gray-500 border border-gray-300 text-gray-900 text-sm rounded-lg block p-2.5 focus:outline-primary/50"  id="suhu_tubuh" type="text">
                    </div>
                    <div class="flex items-center">
                      <label class="w-[20%] text-sm" for="keluhan">Keluhan</label>
                      <input type="text" name="keluhan" class="w-[70%] resize-none bg-white disabled:bg-slate-100 disabled:text-gray-500 border border-gray-300 text-gray-900 text-sm rounded-lg block p-2.5 focus:outline-primary/50" name="keluhan" id="keluhan">
                    </div>
                    <div class="flex items-center">
                      <label class="w-[20%] text-sm" for="diagnosa">Diagnosa</label>
                      <input type="text" name="diagnosa" class="w-[70%] resize-none bg-white disabled:bg-slate-100 disabled:text-gray-500 border border-gray-300 text-gray-900 text-sm rounded-lg block p-2.5 focus:outline-primary/50" name="diagnosa" id="keluhan">
                    </div>
                    <div class="flex items-center">
                      <label class="w-[20%] text-sm" for="anjuran">Anjuran</label>
                      <input name="anjuran" class="w-[70%] resize-none bg-white disabled:bg-slate-100 disabled:text-gray-500 border border-gray-300 text-gray-900 text-sm rounded-lg block p-2.5 focus:outline-primary/50" name="anjuran" id="keluhan">
                    </div>
                    <div class="flex items-center">
                      <label class="w-[20%] text-sm" for="anjuran">Daftar Obat</label>
                      <textarea rows="3" name="obat" class="w-[70%] resize-none bg-white disabled:bg-slate-100 disabled:text-gray-500 border border-gray-300 text-gray-900 text-sm rounded-lg block p-2.5 focus:outline-primary/50" name="obat" id="obat"></textarea>
                    </div>
                    <div class="flex items-center">
                      <label class="w-[20%] text-sm" for="diagnosa">Biaya</label>
                      <input type="text" name="biaya" class="w-[70%] resize-none bg-white disabled:bg-slate-100 disabled:text-gray-500 border border-gray-300 text-gray-900 text-sm rounded-lg block p-2.5 focus:outline-primary/50" id="biaya">
                    </div>
                    <div class="flex items-center">
                      <label class="w-[20%] text-sm" for="anjuran">Surat Dokter</label>
                      {{-- <input name="surat_dokter" type="checkbox"> --}}
                      <input type="checkbox" name="surat_dokter" value="1">
                    </div>
                    <button id="btn-tambah" type="submit"
                        class="text-white block mx-auto rounded-full bg-[#ED1C24] font-medium shadow-lg transition duration-200 hover:shadow-[#ED1C24]/50 shadow-[#ED1C24]/30 text-sm w-80 px-6 py-2.5 text-center active:opacity-50 active:translate-y-2 active:shadow-sm">
                        Tambah
                    </button>
                  </form>
                </div>
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
            // document.getElementById('datepicker').setAttribute('value', today);

            console.log(document.getElementById('#obat'))

            document.getElementById('obat').placeholder = "Paracetamol - 3x sehari setelah makan \nAntibiotik - 2x sehari setelah makan \nVitamin - 2x sehari setelah makan";

        </script>
@endsection