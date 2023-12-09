<div class="w-[290px]">
  <aside
      class="w-[290px] h-screen fixed bg-white flex flex-col py-7 px-8 items-center border-r-2 border-gray-300">
      <div class="flex flex-col h-full">
          <div class="px-2 pb-4 mb-2">
              <h1 class="text-2xl text-center text-[#ED1C24] font-bold">
                  MyTelkomedika
                  <span class="block pr-1 text-base text-black text-end">Admin</span>
              </h1>
              <span class="block mt-4 h-[1px] w-full bg-gray-300"> </span>
          </div>
          <div class="flex flex-col justify-between flex-1 w-56">
              <ul class="space-y-1">
                <li><p class="mb-2 ml-2 text-sm font-semibold text-[#151C48]/80">Main menu</p></li>
                  <li>
                      <a class="{{ Request::is('admin/dashboard*') ? 'bg-gradient-to-r from-[#ED1C24]/90 via-[#ED1C24]/90 to-[#ED1C24]/50 text-white' : 'text-[#151C48] hover:bg-gray-400/10' }} flex items-center justify-start px-4 py-4 space-x-3 transition duration-150 rounded-xl hover:bg-gray-100 hover:transition"
                          href="/admin/dashboard">
                          <img class="{{ Request::is('admin/dashboard*') ? 'invert' : ''}} w-5 aspect-square z-10" src="/img/dashboard-icon.png" alt="logo" />
                          <p class="z-10 text-sm" class="font-medium">
                              Dashboard
                          </p>
                      </a>
                  </li>
                  <li>
                      <a class="{{ Request::is('admin/data-pasien*') ? 'bg-gradient-to-r from-[#ED1C24]/90 via-[#ED1C24]/90 to-[#ED1C24]/50 text-white' : 'text-[#151C48] hover:bg-gray-400/10' }} flex items-center justify-start px-4 py-4 space-x-3 transition duration-150 rounded-xl hover:bg-gray-100 hover:transition"
                          href="/admin/data-pasien">
                          <img class="{{ Request::is('admin/data-pasien*') ? 'invert' : ''}} w-5 aspect-square z-10" src="/img/data-pasien-icon.png" alt="logo" />
                          <p class="z-10 text-sm" class="font-medium">
                              Data Pasien
                          </p>
                      </a>
                  </li>
                  <li>
                      <a class="{{ Request::is('admin/data-dokter*') ? 'bg-gradient-to-r from-[#ED1C24]/90 via-[#ED1C24]/90 to-[#ED1C24]/50 text-white' : 'text-[#151C48] hover:bg-gray-400/10' }} flex items-center justify-start px-4 py-4 space-x-3 transition duration-150 rounded-xl hover:bg-gray-100 hover:transition"
                          href="/admin/data-dokter">
                          <img class="{{ Request::is('admin/data-dokter*') ? 'invert' : ''}} w-5 aspect-square z-10" src="/img/data-dokter-icon.png" alt="logo" />
                          <p class="z-10 text-sm" class="font-medium">
                              Data Dokter
                          </p>
                      </a>
                  </li>
                  <li>
                      <a class="{{ Request::is('admin/jadwal-dokter*') ? 'bg-gradient-to-r from-[#ED1C24]/90 via-[#ED1C24]/90 to-[#ED1C24]/50 text-white' : 'text-[#151C48] hover:bg-gray-400/10' }} flex items-center justify-start px-4 py-4 space-x-3 transition duration-150 rounded-xl hover:bg-gray-100 hover:transition"
                          href="/admin/jadwal-dokter">
                          <img class="{{ Request::is('admin/jadwal-dokter*') ? 'invert' : ''}} w-5 aspect-square z-10" src="/img/reservasi-saya-icon.png" alt="logo" />
                          <p class="z-10 text-sm" class="font-medium">
                              Jadwal Dokter
                          </p>
                      </a>

                  </li>
                  <li>
                      <a class="{{ Request::is('admin/antrian-pemeriksaan*') ? 'bg-gradient-to-r from-[#ED1C24]/90 via-[#ED1C24]/90 to-[#ED1C24]/50 text-white' : 'text-[#151C48] hover:bg-gray-400/10' }} flex items-center justify-start px-4 py-4 space-x-3 transition duration-150 rounded-xl hover:bg-gray-100 hover:transition"
                          href="/admin/antrian-pemeriksaan">
                          <img class="{{ Request::is('admin/antrian-pemeriksaan*') ? 'invert' : ''}} w-5 aspect-square z-10" src="/img/antrian-sidebar-icon.png" alt="logo" />
                          <p class="z-10 text-sm" class="font-medium">
                              Antrian Pemeriksaan
                          </p>
                      </a>
                  </li>
                  <li>
                      <a class="{{ Request::is('admin/pembayaran*') ? 'bg-gradient-to-r from-[#ED1C24]/90 via-[#ED1C24]/90 to-[#ED1C24]/50 text-white' : 'text-[#151C48] hover:bg-gray-400/10' }} flex items-center justify-start px-4 py-4 space-x-3 transition duration-150 rounded-xl hover:bg-gray-100 hover:transition"
                          href="/admin/pembayaran">
                          <img class="{{ Request::is('admin/pembayaran*') ? 'invert' : ''}} w-5 aspect-square z-10" src="/img/pembayaran-icon.png" alt="logo" />
                          <p class="z-10 text-sm" class="font-medium">
                              Pembayaran
                          </p>
                      </a>
                  </li>
                  <li><p class="mt-6 mb-2 ml-2 text-sm font-semibold text-[#151C48]/80">Account</p></li>
                  <li>
                    <form class="form-logout" action="/admin/logout" method="POST">
                        @csrf
                        <button type="submit" class="flex items-center justify-start px-4 py-4 space-x-3 rounded-xl">
                            <img class="z-10 w-5 aspect-square" src="/img/logout-icon.png" alt="logo" />
                            <p class="z-10 text-sm font-normal">Logout</p>
                        </button>
                    </form>
                  </li>
              </ul>
          
              {{-- @include('partials.modalConfirmLogoutAdmin') --}}
          </div>
      </div>
  </aside>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>

        const formLogout = document.querySelector(".form-logout")
        
        formLogout.addEventListener("submit", (e) => {
            e.preventDefault();
        
            Swal.fire({
            title: 'Warning',
            text: "Are you sure want to logout?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#ED1C24',
            cancelButtonColor: '#C5C5C5',
            confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.isConfirmed) {
                    formLogout.submit();
                } 
            })
        })
</script>
