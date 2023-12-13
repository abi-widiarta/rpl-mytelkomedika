<!-- Modal toggle -->
<button data-modal-target="static-modal" data-modal-toggle="static-modal" class="py-3 text-sm text-white px-10 shadow-lg bg-gradient-to-r from-[#ED1C24]/90 to-[#ED1C24]/50 rounded-xl transition duration-200 hover:bg-[#ED1C24]">
  Reservasi
</button>

<!-- Main modal -->
<div id="static-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative max-h-full py-4">
        <!-- Modal content -->
        <div class="relative w-full px-10 bg-white rounded-lg shadow">
          <div class="flex items-center justify-center w-full h-full pt-6">
            <div class="mt-2 mb-8 text-center">
                <h3 class="mb-3 text-xl font-semibold leading-6 text-gray-800 capitalize" id="modal-title">Reservasi</h3>
                <span class="block w-full h-[3px] bg-gray-600/10 mb-8 rounded-md"></span>
                <div class="flex space-x-8">
                  <div class="flex flex-col items-center">
                    <img class="object-cover mb-2 rounded-md w-36 h-44" src="{{ $doctor->image }}" alt="">
                    <h2 class="text-base font-semibold">{{ $doctor->name }}</h2>
                    <p>Poli {{  ucfirst($doctor->spesialisasi) }}</p>
                  </div>
                  <div class="h-full w-96">
                    <form action="/lakukan-reservasi" method="post">
                      @csrf
                      <div class="flex justify-between space-x-4">
                        <div class="flex flex-col items-start mb-4 space-y-2 w-[65%]">
                          <label class="text-sm font-semibold" for="datepicker">Pilih Tanggal</label>
                          <input name="tanggal_reservasi" autocomplete="off" class="border border-gray-300 bg-white text-gray-900 text-sm rounded-md block w-full px-2 py-2 focus:outline-[#ED1C24]/50 mr-3" id="datepicker" type="text" placeholder="dd/mm/yyyy">
                        </div>
                        <div class="mb-4 w-[35%]">
                          <label
                              for="hari"
                              class="block mb-2 text-sm font-medium text-gray-900"
                              >Hari</label
                          >
                          <select id="select-jam" name="hari" id="hari" class="bg-white disabled:bg-slate-100 disabled:text-gray-500 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 focus:outline-primary/50">
                            <option disabled selected>Pilih Jam</option>
                          </select>
                        </div>

                      </div>
                      
                      <div class="flex flex-col items-start mb-6 space-y-2">
                        <label class="text-sm font-semibold" for="keluhan">Keluhan Awal</label>
                        <textarea name="keluhan_awal" autocomplete="off" class="resize-none w-full px-2 py-2 border border-gray-300 bg-white text-gray-900 text-sm rounded-md block p-1 focus:outline-[#ED1C24]/50 mr-3" name="keluhan" id="keluhan" rows="5"></textarea>
                      </div>

                      <div class="space-x-4 sm:flex sm:items-center">
                        <button
                            type="button"
                            data-modal-hide="static-modal"
                            class="cursor-pointer border rounded-lg text-gray-900 bg-white font-medium hover:shadow-xl shadow-lg transition duration-200 text-sm w-full sm:w-auto px-6 py-2.5 text-center active:opacity-50 active:translate-y-2 active:shadow-sm">
                            Cancel
                        </button>

                        <button type="submit"
                            class="text-white rounded-lg bg-[#ED1C24] font-medium shadow-lg transition duration-200 hover:shadow-[#ED1C24]/50 shadow-[#ED1C24]/30 text-sm w-full sm:w-auto px-6 py-2.5 text-center active:opacity-50 active:translate-y-2 active:shadow-sm">
                            Reservasi
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
            </div>
          </div>
        </div>
    </div>
</div>

<script defer>
  let dokterHariPraktek = <?= json_encode($doctor->doctor_schedule) ?>;
  let maxSelectableDate =  new Date(<?= json_encode($doctor->doctor_schedule[0]->tanggal_berlaku_sampai) ?>);
  const selectJam = document.querySelector('#select-jam')

  console.log(maxSelectableDate)

  // Objek yang memetakan nama hari ke indeks (Minggu = 0, Senin = 1, ..., Sabtu = 6)
  var dayIndexMap = {
      'minggu': 0,
      'senin': 1,
      'selasa': 2,
      'rabu': 3,
      'kamis': 4,
      'jumat': 5,
      'sabtu': 6
  };

  // Extracting the 'hari' properties from each object and converting to lowercase
  var hariArray = dokterHariPraktek.map(schedule => dayIndexMap[schedule.hari.toLowerCase()]);
  console.log(hariArray)

  $(function() {
    $("#datepicker").datepicker({
      beforeShowDay: function(date) {
        // Mendapatkan indeks hari (0 = Minggu, 1 = Senin, ..., 6 = Sabtu)
        var dayIndex = date.getDay();
        // console.log(dayIndex)

        // Mengecek apakah hari ini dapat dipilih
        var isSelectable = hariArray.indexOf(dayIndex) != -1;

        
        isSelectable = isSelectable && date <= maxSelectableDate && date >= new Date(new Date().setHours(0, 0, 0, 0));;

        return [isSelectable, isSelectable ? "ui-state-selectable" : "ui-state-disabled"];
      },

      onSelect: function(dateText, inst) {
        // Callback ini akan dipanggil ketika suatu tanggal dipilih
        var selectedDate = new Date(dateText);
        var selectedDayIndex = selectedDate.getDay();

        var selectedDay

        selectJam.innerHTML = `
          <option disabled selected>Pilih Jam</option>
        `

        console.log("Tanggal yang dipilih:", selectedDate);
        console.log("Hari yang dipilih:", selectedDayIndex);

        switch (selectedDayIndex) {
          case 0:
            selectedDay = 'minggu'
            break;
          case 1:
            selectedDay = 'senin'
          break;
          case 2:
            selectedDay = 'selasa'
          break;
          case 3:
            selectedDay = 'rabu'
          break;
          case 4:
            selectedDay = 'kamis'
          break;
          case 5:
            selectedDay = 'jumat'
          break;
          case 6:
            selectedDay = 'sabtu'
          break;
          default:
            break;
        }


        dokterHariPraktek.forEach(element => {
          if(element.hari ==  selectedDay) {
            console.log(element.jam_mulai)
            selectJam.innerHTML += 
            `
              <option value="${ element.hari}">${element.jam_mulai.substring(0, 5)} - ${element.jam_selesai.substring(0, 5)}</option>
            `
          }
        });
        // console.log(selectedDay)

        // Lakukan sesuatu dengan tanggal atau hari yang dipilih
      }
    });
  });


</script>