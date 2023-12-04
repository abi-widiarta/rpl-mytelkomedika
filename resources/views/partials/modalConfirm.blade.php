<div x-data="{ isOpen: false }" class="relative flex justify-center">
  {{-- <button @click="isOpen = true" class="px-6 py-2 mx-auto tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
      Open Modal
  </button> --}}
   <button @click="isOpen = true"  class="grid w-8 bg-red-500 rounded-md place-items-center aspect-square hover:bg-red-600">
      <img src="/img/delete-icon.png" alt="delete-icon" />
  </button>

  <div x-show="isOpen" 
      x-transition:enter="transition duration-150 ease-out"
      x-transition:enter-start="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95"
      x-transition:enter-end="translate-y-0 opacity-100 sm:scale-100"
      x-transition:leave="transition duration-150 ease-in"
      x-transition:leave-start="translate-y-0 opacity-100 sm:scale-100"
      x-transition:leave-end="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95"
      class="fixed inset-0 z-10 overflow-y-auto" 
      aria-labelledby="modal-title" role="dialog" aria-modal="true"
  >
      <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center bg-gray-600/25 sm:block sm:p-0">
          <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

          <div class="relative inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl h-80 sm:my-8 sm:align-middle sm:p-6">
              <div class="flex flex-col items-center justify-center w-full h-full ">
                  <div class="flex items-center justify-center">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                      </svg>
                  </div>

                  <div class="mt-2 mb-8 text-center">
                      <h3 class="text-lg font-medium leading-6 text-gray-800 capitalize" id="modal-title">WARNING</h3>
                      <p class="mt-2 text-sm text-gray-500">
                          Are you sure to delete this data?
                      </p>
                  </div>

                  <div class="sm:flex sm:items-center ">
                    <button @click="isOpen = false" class="w-full px-4 py-2 mt-2 text-sm font-medium tracking-wide text-gray-700 capitalize transition-colors duration-300 transform border border-gray-200 rounded-md sm:mt-0 sm:w-auto sm:mx-2 hover:bg-gray-100 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-40">
                        Cancel
                    </button>

                    <button class="w-full px-4 py-2 mt-2 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-[#ED1C24] rounded-md sm:w-auto sm:mt-0 hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40">
                        Delete
                    </button>
                </div>
              </div>
          </div>
      </div>
  </div>
</div>

<script>
</script>