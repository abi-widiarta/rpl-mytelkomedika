@extends('layouts.layoutDashboardAdmin')

@section('content')
        <div class="flex flex-col h-full">
            <header class="flex items-center justify-between mb-4">
                <div class="flex items-start justify-start space-x-4">
                  <img src="/img/data-pasien-icon.png" alt="asd">
                  <h1 class="text-xl font-semibold">Jadwal Dokter</h1>
                </div>
                <div class="relative flex items-center space-x-4">
                    @include('partials.dropdownProfile')
                </div>
            </header>

            <div class="relative flex-1 w-full p-6 pt-8 pb-8 bg-white rounded-xl">
              <a class="inline-block px-3 py-2 mb-2 text-white transition-all duration-150 bg-gray-400 rounded-full hover:shadow-md active:translate-y-1" href="/admin/jadwal-dokter">
                <div class="flex space-x-2 text-sm">
                  <p>◀</p>
                  <p>Kembali</p>
                </div>
              </a>
                <h2 class="mb-8 text-lg font-semibold text-center">Edit Jadwal Dokter</h2>
                <div class="flex w-full">
                  <form id="add-form" action="/admin/jadwal-dokter/update/{{ $schedule->id }}" class="flex flex-col items-center w-full bg-gray" method="POST">
                    @csrf
                    <input type="hidden" name="dokter" value="{{ $schedule->doctor->id }}">
                    <div class="flex space-x-8 w-[36%] mb-4">
                      <div class="w-full">
                        <div class="mb-6">
                          <label
                              for="dokter"
                              class="block mb-2 text-sm font-medium text-gray-900"
                              >Dokter</label
                          >
                          <input
                          type="text"
                          id="dokter"
                          name="dokter"
                          value="{{ $schedule->doctor->name }}"
                          disabled
                          {{-- value="{{ $patient->username }}" --}}
                          class="bg-white disabled:bg-slate-100 disabled:text-gray-500 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 focus:outline-primary/50"
                          required
                        />
                          
                          {{-- <select name="dokter" id="dokter" class="bg-white disabled:bg-slate-100 disabled:text-gray-500 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 focus:outline-primary/50">
                            <option disabled selected>Pilih Dokter</option>
                            @foreach ($doctors as $doctor)
                              <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                            @endforeach
                          </select> --}}
                        </div>
                        <div class="mb-6">
                          <label
                              for="hari"
                              class="block mb-2 text-sm font-medium text-gray-900"
                              >Hari</label
                          >
                          <select name="hari" id="hari" class="bg-white disabled:bg-slate-100 disabled:text-gray-500 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 focus:outline-primary/50">
                            <option disabled>Pilih Hari</option>
                            <option {{ $schedule->hari == "senin" ? "selected" : "" }} value="senin">Senin</option>
                            <option {{ $schedule->hari == "selasa" ? "selected" : "" }} value="selasa">Selasa</option>
                            <option {{ $schedule->hari == "rabu" ? "selected" : "" }} value="rabu">Rabu</option>
                            <option {{ $schedule->hari == "kamis" ? "selected" : "" }} value="kamis">Kamis</option>
                            <option {{ $schedule->hari == "jumat" ? "selected" : "" }} value="jumat">Jumat</option>
                            <option {{ $schedule->hari == "sabtu" ? "selected" : "" }} value="sabtu">Sabtu</option>
                            <option {{ $schedule->hari == "minggu" ? "selected" : "" }} value="minggu">Minggu</option>
                          </select>
                        </div>
                        <div class="mb-6">
                          <label
                              for="jam_mulai"
                              class="block mb-2 text-sm font-medium text-gray-900"
                              >Jam Mulai</label
                          >
                          <input
                              type="time"
                              id="jam_mulai"
                              name="jam_mulai"
                              value="{{ $schedule->jam_mulai }}"
                              {{-- value="{{ $patient->username }}" --}}
                              class="bg-white disabled:bg-slate-100 disabled:text-gray-500 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 focus:outline-primary/50"
                              required
                          />
                        </div>
                        <div class="mb-6">
                          <label
                              for="jam_selesai"
                              class="block mb-2 text-sm font-medium text-gray-900"
                              >Jam Selesai</label
                          >
                          <input
                              type="time"
                              id="jam_selesai"
                              name="jam_selesai"
                              value="{{ $schedule->jam_selesai }}"
                              {{-- value="{{ $patient->username }}" --}}
                              class="bg-white disabled:bg-slate-100 disabled:text-gray-500 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 focus:outline-primary/50"
                              required
                          />
                        </div>
                        <div class="mb-6">
                          <label
                              for="tanggal_berlaku_sampai"
                              class="block mb-2 text-sm font-medium text-gray-900"
                              >Tanggal Berlaku Sampai</label
                          >
                          <input
                              type="date"
                              id="tanggal_berlaku_sampai"
                              name="tanggal_berlaku_sampai"
                              value="{{ $schedule->tanggal_berlaku_sampai }}"
                              class="bg-white disabled:bg-slate-100 disabled:text-gray-500 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 focus:outline-primary/50"
                              required
                          />
                        </div>
                      </div>
                    </div>
                    <button id="btn-tambah" type="submit"
                        class="text-white rounded-full bg-[#ED1C24] font-medium shadow-lg transition duration-200 hover:shadow-[#ED1C24]/50 shadow-[#ED1C24]/30 text-sm w-80 px-6 py-2.5 text-center active:opacity-50 active:translate-y-2 active:shadow-sm">
                        Tambah
                    </button>
                  </form>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
             const formUpdate = document.querySelector("#add-form")
    
              formUpdate.addEventListener("submit", (e) => {
              e.preventDefault();
              
              Swal.fire({
              title: 'Warning',
              text: "Are you sure want to update this data?",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#ED1C24',
              cancelButtonColor: '#C5C5C5',
              confirmButtonText: 'Yes'
              }).then((result) => {
                  if (result.isConfirmed) {
                    formUpdate.submit();
                    toggleDisable();
                  } 
              })
              })

          function toggleDisable(){
            const btnTambah = document.querySelector("#btn-tambah");
            btnTambah.setAttribute('disabled', true);
            btnTambah.style.opacity = 0.6
            btnTambah.style.pointerEvents = "none"
          }
        </script>

        
@endsection