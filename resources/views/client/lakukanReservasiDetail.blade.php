@extends('layouts.layoutdashboard')

@section('content')
        <div class="flex flex-col h-full overflow-hidden">
            <header class="flex items-center justify-between mb-8">
                <div class="flex items-center justify-start space-x-4">
                    <img class="w-8" src="/img/riwayat-pemeriksaan-icon.png" alt="asd">
                    <h1 class="text-xl font-semibold">Riwayat Pemeriksaan</h1>
                </div>
                <div class="relative flex items-center space-x-4">
                    @include('partials.dropdownProfile')
                </div>
            </header>
            
            <div class="bg-white rounded-xl">
              <a href="/lakukan-reservasi" class="inline-flex items-center justify-center mt-5 ml-4 transition-all duration-150 bg-gray-200 rounded-full hover:opacity-50 w-7 aspect-square">
                <img src="/img/chevron-back-icon.svg" alt="">
              </a>
              <div class="flex flex-1 items-stretch px-2.5 pt-3 pb-10 overflow-hidden ">
                  <div class="w-auto">
                      <img class="items-center object-cover h-56 mx-auto mb-4 rounded-lg w-44" src="{{ $doctor->image }}" alt="doctor-1" />
                      <div class="mx-8 ">
                        <div class="flex flex-col justify-start flex-1">
                          <h1 class="mb-4 text-lg font-semibold">{{ $doctor->name }}</h1>
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
                          <div class="flex items-center mb-6 space-x-1">
                              <p class="text-sm font-semibold">Rating : 0.0</p>
                              <img src="/img/star-icon.png" alt="">
                          </div>
                          <div class="flex justify-start w-full ">
                              @include('partials.modalReservasi')
                          </div>
                        </div>
                      </div>
                  </div>
                  <span class="block w-[2px] bg-gray-200/50 mr-8"></span>
                  <div class="flex-1">
                    {{-- profile dokter --}}
                    <div class="mb-10">
                      <div class="flex items-center mb-4 space-x-2">
                        <img class="w-6" src="/img/profile-dokter-icon.svg" alt="">
                        <h1 class="text-sm font-medium">Profile Dokter</h1>
                      </div>
                      <p class="w-[90%] text-sm text-[#526069] ml-1 mr-10 text-justify">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. 
                      </p>
                    </div>
                    {{-- jadwal dokter --}}
                    <div class="mb-10">
                      <div class="flex items-center mb-4 space-x-2">
                        <img class="w-5" src="/img/jadwal-dokter-icon.svg" alt="">
                        <h1 class="text-sm font-medium">Jadwal Dokter</h1>
                      </div>
                      <div class="relative overflow-x-auto w-[60%]">
                        {{-- head --}}
                        <div class="flex pb-2">
                          <div class="w-[80%] font-medium text-sm text-left text-gray-500">
                            Hari
                          </div>
                          <div class="w-[20%] font-medium text-sm text-left text-gray-500">
                            Jam
                          </div>
                        </div>
                        {{-- item --}}
                        <div class="flex flex-col">
                          @if ($schedules->isEmpty())
                              <div class="flex py-2.5 border-t">
                                <div class="w-[80%] text-sm text-left text-gray-500">
                                  Belum memiliki jadwal
                                </div>
                              </div>
                          @else
                            @foreach ($schedules as $schedule)
                              @if ($schedule->hari == 'senin')
                                <div class="flex py-2.5 border-t order-1">
                              @endif
                              @if ($schedule->hari == 'selasa')
                                <div class="flex py-2.5 border-t order-2">
                              @endif
                              @if ($schedule->hari == 'rabu')
                                <div class="flex py-2.5 border-t order-3">
                              @endif
                              @if ($schedule->hari == 'kamis')
                                <div class="flex py-2.5 border-t order-4">
                              @endif
                              @if ($schedule->hari == 'jumat')
                                <div class="flex py-2.5 border-t order-5">
                              @endif
                              @if ($schedule->hari == 'sabtu')
                                <div class="flex py-2.5 border-t order-6">
                              @endif
                              @if ($schedule->hari == 'minggu')
                                <div class="flex py-2.5 border-t order-7">
                              @endif
                                    <div class="w-[80%] text-sm text-left text-gray-500">
                                      {{ Str::ucfirst($schedule->hari) }}
                                    </div>
                                    <div class="w-[20%] text-sm text-left text-gray-500 flex justify-between">
                                      <p>{{ \Carbon\Carbon::parse($schedule->jam_mulai)->format('H:i') }}</p>
                                      <p>-</p>
                                      <p>{{ \Carbon\Carbon::parse($schedule->jam_selesai)->format('H:i') }}</p>
                                    </div>
                                </div>
                            @endforeach
                          @endif
                        </div>
                        {{-- <div class="flex py-2.5">
                          <div class="w-[80%] text-sm text-left text-gray-500">
                          </div>
                          <div class="w-[20%] text-sm text-left text-gray-500">
                            08.00 - 10.00
                          </div>
                        </div>
                        <div class="flex py-2.5 border-t">
                          <div class="w-[80%] text-sm text-left text-gray-500">
                            Selasa
                          </div>
                          <div class="w-[20%] text-sm text-left text-gray-500">
                            08.00 - 10.00
                          </div>
                        </div>
                        <div class="flex py-2.5">
                          <div class="w-[80%] text-sm text-left text-gray-500">
                            
                          </div>
                          <div class="w-[20%] text-sm text-left text-gray-500">
                            08.00 - 10.00
                          </div>
                        </div>
                        <div class="flex py-2.5 border-t">
                          <div class="w-[80%] text-sm text-left text-gray-500">
                            Selasa
                          </div>
                          <div class="w-[20%] text-sm text-left text-gray-500">
                            08.00 - 10.00
                          </div>
                        </div>
                        <div class="flex py-2.5">
                          <div class="w-[80%] text-sm text-left text-gray-500">
                            
                          </div>
                          <div class="w-[20%] text-sm text-left text-gray-500">
                            08.00 - 10.00
                          </div>
                        </div> --}}
                      </div>
                    </div>
                    {{-- review dokter --}}
                    <div>
                      <div class="flex items-center mb-2 space-x-2">
                        <img class="w-6" src="/img/review-dokter-icon.svg" alt="">
                        <h1 class="text-sm font-medium">Review</h1>
                      </div>
                      <div>
                        {{-- review card --}}
                        <div class="flex items-start space-x-4 border-b w-[90%] pt-4 pb-4">
                          <div class="w-9 flex justify-center items-center aspect-square rounded-full bg-[#ED1C24]/10">
                            <img class="w-6" src="/img/thumb-up-icon.svg" alt="">
                          </div>
                          <div>
                            <p class="text-[#526069] font-medium mb-1 text-sm">Steven Kurniawan</p>
                            <div class="flex mb-2">
                              <img src="/img/star-icon.png" alt="">
                              <img src="/img/star-icon.png" alt="">
                              <img src="/img/star-icon.png" alt="">
                              <img src="/img/star-icon.png" alt="">
                              <img src="/img/star-icon.png" alt="">
                            </div>
                            <p class="text-sm text-[#526069]">Dokternya ramah sangat informatif</p>
                          </div>
                        </div>
                        {{-- review card --}}
                        <div class="flex items-start space-x-4 border-b w-[90%] pt-4 pb-4">
                          <div class="w-9 flex justify-center items-center aspect-square rounded-full bg-[#ED1C24]/10">
                            <img class="w-6" src="/img/thumb-up-icon.svg" alt="">
                          </div>
                          <div>
                            <p class="text-[#526069] font-medium mb-1 text-sm">Steven Kurniawan</p>
                            <div class="flex mb-2">
                              <img src="/img/star-icon.png" alt="">
                              <img src="/img/star-icon.png" alt="">
                              <img src="/img/star-icon.png" alt="">
                              <img src="/img/star-icon.png" alt="">
                              <img src="/img/star-icon.png" alt="">
                            </div>
                            <p class="text-sm text-[#526069]">Dokternya ramah sangat informatif</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  {{-- <ul class="mr-32">
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
                  </ul> --}}
              </div>
            </div>
        </div>
@endsection
