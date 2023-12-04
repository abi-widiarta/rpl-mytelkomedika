<div x-data="{ isOpen: false }" class="relative flex justify-center">
  {{-- <button @click="isOpen = true" class="px-6 py-2 mx-auto tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
      Open Modal
  </button> --}}
  <button @click="isOpen = true" class="py-3 text-white px-10 shadow-lg bg-gradient-to-r from-[#ED1C24]/90 to-[#ED1C24]/50 rounded-xl transition duration-200 hover:bg-[#ED1C24]">
    Reservasi
  </button>
   {{-- <button @click="isOpen = true"  class="grid w-8 bg-red-500 rounded-md place-items-center aspect-square hover:bg-red-600">
      <img src="/img/delete-icon.png" alt="delete-icon" />
  </button> --}}

  <div x-show="isOpen" 
      x-transition:enter="transition duration-100 ease-out"
      x-transition:enter-start="translate-y-4 opacity-0 sm:translate-y-0"
      x-transition:enter-end="translate-y-0 opacity-100 sm:scale-100"
      x-transition:leave="transition duration-100 ease-in"
      x-transition:leave-start="translate-y-0 opacity-100 sm:scale-100"
      x-transition:leave-end="translate-y-4 opacity-0 sm:translate-y-0"
      class="fixed inset-0 z-10 overflow-y-auto" 
      aria-labelledby="modal-title" role="dialog" aria-modal="true"
  >
      <div id="modal-reservasi-container" class="items-end justify-center hidden min-h-screen px-4 pt-4 pb-20 text-center transition-all duration-500 sm:block sm:p-0">
          <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

          <div id="modal-reservasi" class="relative hidden inline-block px-10 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl modal-reservasi sm:my-8 sm:align-middle">
              <div class="flex flex-col items-center justify-center w-full h-full ">
                  <div class="mt-2 mb-8 text-center">
                      <h3 class="mb-3 text-xl font-semibold leading-6 text-gray-800 capitalize" id="modal-title">Reservasi</h3>
                      <span class="block w-full h-[3px] bg-gray-600/10 mb-8 rounded-md"></span>
                      <div class="flex space-x-8">
                        <div>
                          <img  class="mb-2 rounded-md" src="/img/doctor-1.png" alt="">
                          <h2 class="text-lg font-semibold">Dr. Anika</h2>
                          <p>Poli Mata</p>
                        </div>
                        <div class="h-full w-80">
                          <form action="" method="">
                            <div class="flex flex-col items-start mb-4 space-y-2">
                              <label class="text-sm font-semibold" for="datepicker">Pilih Tanggal</label>
                              <input autocomplete="off" class="border border-gray-300 bg-white text-gray-900 text-sm rounded-md block w-full px-2 py-2 focus:outline-[#ED1C24]/50 mr-3" name="date" type="text" id="datepicker" placeholder="dd/mm/yyyy">
                            </div>
                            <div class="flex flex-col items-start mb-6 space-y-2">
                              <label class="text-sm font-semibold" for="keluhan">Keluhan Awal</label>
                              <textarea autocomplete="off" class="resize-none w-full px-2 py-2 border border-gray-300 bg-white text-gray-900 text-sm rounded-md block p-1 focus:outline-[#ED1C24]/50 mr-3" name="keluhan" id="keluhan" rows="5"></textarea>
                            </div>

                            <div class="space-x-4 sm:flex sm:items-center">
                              {{-- <button class="w-full px-4 py-2 mt-2 text-sm font-medium tracking-wide text-gray-700 capitalize transition-colors duration-300 transform border border-gray-200 rounded-md sm:mt-0 sm:w-auto sm:mx-2 hover:bg-gray-100 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-40">
                                  Cancel
                              </button> --}}

                              <button
                                  @click="isOpen = false"
                                  class="border rounded-lg text-gray-900 bg-white font-medium shadow-lg transition duration-200 text-sm w-full sm:w-auto px-6 py-2.5 text-center active:opacity-50 active:translate-y-2 active:shadow-sm">
                                  Cancel
                              </button>

                              <button type="submit"
                                  class="text-white rounded-lg bg-[#ED1C24] font-medium shadow-lg transition duration-200 hover:shadow-[#ED1C24]/50 shadow-[#ED1C24]/30 text-sm w-full sm:w-auto px-6 py-2.5 text-center active:opacity-50 active:translate-y-2 active:shadow-sm">
                                  Reservasi
                              </button>

                              
          
                              {{-- <button class="w-full px-4 py-2 mt-2 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-[#ED1C24] rounded-md sm:w-auto sm:mt-0 hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40">
                                  Delete
                              </button> --}}
                            </div>

                          </form>

                        </div>
                      </div>
                  </div>

                  
              </div>
          </div>
      </div>
  </div>
</div>

<script defer>
  let modal = document.querySelector("#modal-reservasi")
  let modalContainer = document.querySelector("#modal-reservasi-container")
  setTimeout(() => {
    modal.classList.remove("hidden")
  }, 250);

  setTimeout(() => {
    modalContainer.style.backgroundColor = "rgba(0,0,0,0.2)"
  }, 250);

  function reverseBgColor() {
    console.log("reverse")
    // modalContainer.style.backgroundColor = "rgba(0,0,0,0)"
  };

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