<div class="w-[270px]">
  <aside
      class="w-[290px] h-screen fixed bg-white flex flex-col py-7 px-8 items-center border-r-2 border-gray-300">
      <div class="flex flex-col h-full">
          <div class="px-3 pb-4 mb-4">
              <h1 class="text-2xl text-center text-[#ED1C24] font-bold">
                  MyTelkomedika
              </h1>
              <span class="block mt-4 h-[1px] w-full bg-gray-300"> </span>
          </div>
          <div class="flex flex-col justify-between flex-1 w-56">
              <ul class="space-y-1">
                  <li>
                      <a class="{{ Request::is('dashboard*') ? 'bg-gradient-to-r from-[#ED1C24]/90 via-[#ED1C24]/90 to-[#ED1C24]/50 text-white' : 'text-[#151C48] hover:bg-gray-400/10' }} flex justify-start items-center rounded-xl space-x-3 py-4 px-4 transition duration-150 hover:bg-gray-100 hover:transition"
                          href="/dashboard">
                          <img class="{{ Request::is('dashboard*') ? 'invert' : ''}} w-[25px] z-10 " src="/img/dashboard-icon.png" alt="logo" />
                          <p class="z-10 text-sm" class="font-medium">
                              Dashboard
                          </p>
                      </a>
                  </li>
                  <li>
                      <a class="{{ Request::is('lakukan-reservasi*') ? 'bg-gradient-to-r from-[#ED1C24]/90 via-[#ED1C24]/90 to-[#ED1C24]/50 text-white' : 'text-[#151C48] hover:bg-gray-400/10' }} flex items-center justify-start px-4 py-4 space-x-3 transition duration-150 rounded-xl hover:bg-gray-100 hover:transition"
                          href="/lakukan-reservasi">
                          <img class="{{ Request::is('lakukan-reservasi*') ? 'invert' : ''}} w-[25px] z-10" src="/img/lakukan-reservasi-icon.png" alt="logo" />
                          <p class="z-10 text-sm" class="font-medium">
                              Lakukan Reservasi
                          </p>
                      </a>
                  </li>
                  <li>
                      <a class="{{ Request::is('reservasi-saya*') ? 'bg-gradient-to-r from-[#ED1C24]/90 via-[#ED1C24]/90 to-[#ED1C24]/50 text-white' : 'text-[#151C48] hover:bg-gray-400/10' }} flex items-center justify-start px-4 py-4 space-x-3 transition duration-150 rounded-xl hover:bg-gray-100 hover:transition"
                          href="/reservasi-saya">
                          <img class="{{ Request::is('reservasi-saya*') ? 'invert' : ''}} w-[25px] z-10" src="/img/reservasi-saya-icon.png" alt="logo" />
                          <p class="z-10 text-sm" class="font-medium">
                              Reservasi Saya
                          </p>
                      </a>
                  </li>
                  <li>
                      <a class="{{ Request::is('riwayat-pemeriksaan*') ? 'bg-gradient-to-r from-[#ED1C24]/90 via-[#ED1C24]/90 to-[#ED1C24]/50 text-white' : 'text-[#151C48] hover:bg-gray-400/10' }} flex items-center justify-start px-4 py-4 space-x-3 transition duration-150 rounded-xl hover:bg-gray-100 hover:transition"
                          href="/riwayat-pemeriksaan">
                          <img class="{{ Request::is('riwayat-pemeriksaan*') ? 'invert' : ''}} w-[25px] z-10" src="/img/riwayat-pemeriksaan-icon.png" alt="logo" />
                          <p class="z-10 text-sm" class="font-medium">
                              Riwayat Pemeriksaan
                          </p>
                      </a>
                  </li>
              </ul>
              @include('partials.modalConfirmLogout')
          </div>
  </aside>
</div>