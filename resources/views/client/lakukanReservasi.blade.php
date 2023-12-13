@extends('layouts.layoutdashboard')

@section('content')
        <div class="h-full">
            <header class="flex items-center justify-between mb-8">
                <div class="flex items-center justify-start space-x-4">
                    <img class="w-8" src="/img/antrian-sidebar-icon.png" alt="asd">
                    <h1 class="text-xl font-semibold">Lakukan Reservasi</h1>
                </div>
                <div class="relative flex items-center space-x-4">
                    @include('partials.dropdownProfile')
                </div>
            </header>

            <div class="grid grid-cols-2 gap-6">
                
                @foreach ($doctors as $doctor)
                    <div onclick="location.href='/lakukan-reservasi/detail/{{ $doctor->username }}';" class="flex justify-start py-6 pl-6 pr-10 space-x-4 transition-all duration-150 bg-white shadow-lg hover:cursor-pointer hover:pointer hover:-translate-y-1 rounded-xl shadow-gray-100">
                        <div class="space-y-2 text-center">
                            <img class="object-cover h-56 rounded-lg w-44" src="{{ $doctor->image }}" alt="doctor-1" />
                        </div>
                        <span class="block w-[2px] bg-gray-200"></span>
                        <div class="flex flex-col justify-start flex-1">
                            <h1 class="mb-2 text-lg font-semibold">{{ $doctor->name }}</h1>
                            <div class="flex flex-col mb-4 space-y-2">
                                <div class="flex items-center space-x-2">
                                    <div class="flex justify-center items-center w-7 rounded-full aspect-square bg-[#ED1C24]/10">
                                        <img src="/img/poli-icon.png" alt="">
                                    </div>
                                    <p class="text-sm font-medium text-gray-500">Poli {{ Str::ucfirst($doctor->spesialisasi) }}</p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <div class="flex justify-center items-center w-7 rounded-full aspect-square bg-[#ED1C24]/10">
                                        <img src="/img/patient-icon.png" alt="">
                                    </div>
                                    <p class="text-sm font-medium text-gray-500">270 patients</p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <div class="flex justify-center items-center w-7 rounded-full aspect-square bg-[#ED1C24]/10">
                                        <img src="/img/review-icon.png" alt="">
                                    </div>
                                    <p class="text-sm font-medium text-gray-500">60+ reviews</p>
                                </div>
                            </div>
                            <div class="flex items-center mb-4 space-x-1">
                                <p class="text-sm font-semibold">Rating : {{ $doctor->rating }}.0</p>
                                <img src="/img/star-icon.png" alt="">
                            </div>
                            <div class="flex justify-start w-full ">
                                <a href="/lakukan-reservasi/detail" class="py-2.5 text-sm text-white px-12 shadow-lg bg-gradient-to-r from-[#ED1C24]/90 to-[#ED1C24]/50 rounded-lg transition duration-200 hover:bg-[#ED1C24]">
                                    Detail
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- @foreach ($doctors as $doctor)
                <div class="flex py-6 pl-6 pr-10 space-x-4 bg-white shadow-lg rounded-xl shadow-gray-100">
                    <div class="space-y-2 text-center">
                        <img class="object-cover h-56 bg-red-300 rounded-lg w-44" src="{{ $doctor->image }}" alt="doctor-1" />
                    </div>
                    <span class="block w-[2px] h-56 bg-gray-200"></span>
                    <div class="flex flex-col justify-between flex-1 px-2 py-2">
                        <div class="mb-2">
                            <h1 class="mb-2 text-base font-semibold">{{ $doctor->name }}</h1>
                            <div class="flex items-center mb-6 space-x-2">
                                <img src="/img/poli-icon.png" alt="icon-poli">
                                <p class="text-sm text-gray-600">Poli {{ ucfirst($doctor->spesialisasi) }}</p>
                            </div>
                            <p class="mb-2 text-sm font-medium">Jadwal Praktek</p>
                            <ul class="flex justify-between pl-0.5">
                                <li class="inline-block mb-4">
                                    <h3 class="mb-1 text-sm font-medium capitalize">
                                        Senin
                                    </h3>
                                    <p class="text-sm">08.00 - 13.00</p>
                                </li>
                                <li class="inline-block mb-4">
                                    <h3 class="mb-1 text-sm font-medium capitalize">
                                        Selasa
                                    </h3>
                                    <p class="text-sm">08.00 - 13.00</p>
                                </li>
                                <li class="inline-block mb-4">
                                    <h3 class="mb-1 text-sm font-medium capitalize">
                                        Rabu
                                    </h3>
                                    <p class="text-sm">08.00 - 13.00</p>
                                </li>
                                <li class="inline-block mb-4">
                                    <h3 class="mb-1 text-sm font-medium capitalize">
                                        Kamis
                                    </h3>
                                    <p class="text-sm">08.00 - 13.00</p>
                                </li>
                                <li class="inline-block mb-4">
                                    <h3 class="mb-1 text-sm font-medium capitalize">
                                        Jumat
                                    </h3>
                                    <p class="text-sm">08.00 - 13.00</p>
                                </li>
                                <li class="inline-block mb-4">
                                    <h3 class="mb-1 text-sm font-medium capitalize">
                                        Sabtu
                                    </h3>
                                    <p class="text-sm">08.00 - 13.00</p>
                                </li>
                                <li class="inline-block mb-4">
                                    <h3 class="mb-1 text-sm font-medium capitalize">
                                        Minggu
                                    </h3>
                                    <p class="text-sm">08.00 - 13.00</p>
                                </li>
                            </ul>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="space-y-3 ">
                                <div class="flex items-center space-x-2">
                                    <img src="/img/star-icon.png" alt="star-icon" />
                                    <p class="inline-block text-sm translate-y-[2px]">
                                        4.6
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach --}}
            </div>
        </div>

        <script defer>
            let modal = document.querySelectorAll(".modal-reservasi")
            let modalContainer = document.querySelectorAll(".modal-reservasi-container")

            let arrModal = Array.from( modal )
            let arrModalContainer = Array.from( modalContainer )

            arrModal.forEach(el => {
                setTimeout(() => {
                  el.classList.remove("hidden")
                }, 250);
            });

            arrModalContainer.forEach(el => {
                setTimeout(() => {
                  el.style.backgroundColor = "rgba(0,0,0,0.2)"
                }, 250);
            });
            
          
            function reverseBgColor() {
              console.log("reverse")
              // modalContainer.style.backgroundColor = "rgba(0,0,0,0)"
            };

            function setData(data) {
                console.log(data)
            }
          
             // Daftar hari yang dapat dipilih (contoh: Senin dan Rabu)
            var dokterHariPraktek = [1, 3]; // 0 = Minggu, 1 = Senin, ..., 6 = Sabtu
          
          $(function() {
            $("#datepicker").datepicker({
              beforeShowDay: function(date) {
                // Mendapatkan indeks hari (0 = Minggu, 1 = Senin, ..., 6 = Sabtu)
                var dayIndex = date.getDay();
          
                // Mengecek apakah hari ini dapat dipilih
                var isSelectable = dokterHariPraktek.indexOf(dayIndex) != -1;
          
                // Mengecek apakah tanggal berada dalam satu bulan ke depan
                var isWithinOneMonth = date >= new Date() && date <= new Date(new Date().setMonth(new Date().getMonth() + 1));
          
                return [isSelectable && isWithinOneMonth, isSelectable ? "ui-state-selectable" : "ui-state-disabled"];
              }
            });
          });

          
          </script>
@endsection
