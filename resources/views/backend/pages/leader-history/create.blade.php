<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Ketua Terdahulu') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
              <div class="mb-10">
                <a href="{{ route('ketua-terdahulu.index') }}" class="button">Kembali</a>
              </div>
              <form
                x-data="createLeaderHistory()"
                action="{{ route('ketua-terdahulu.store') }}"
                method="POST"
                enctype="multipart/form-data"
              >
                @csrf
                <div class="grid grid-cols-[50%,20%] gap-10 mb-10">
                  <div>
                    <div class="flex flex-col mb-5">
                      <label for="name" class="mb-2">Nama</label>
                      <x-input type="text" name="name" id="name" required />
                      @error('name')
                      <p class="text-red-800 mt-2">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="flex flex-col mb-5">
                      <label for="nim" class="mb-2">NIM</label>
                      <x-input type="text" name="nim" id="nim" required />
                      @error('nim')
                      <p class="text-red-800 mt-2">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="grid grid-cols-2 gap-10 mb-10">
                      <div class="flex flex-col">
                        <label for="from_year" class="mb-2">Dari Tahun</label>
                        <x-input type="number" name="from_year" id="from_year" required />
                        @error('from_year')
                        <p class="text-red-800 mt-2">{{ $message }}</p>
                        @enderror
                      </div>
                      <div class="flex flex-col">
                        <label for="to_year" class="mb-2">Sampai Tahun</label>
                        <x-input type="number" name="to_year" id="to_year" required />
                        @error('from_to')
                        <p class="text-red-800 mt-2">{{ $message }}</p>
                        @enderror
                      </div>
                    </div>
                    <button class="button !bg-green-800">Tambah</button>
                  </div>
                  <div>
                    <label
                      class="border rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 cursor-pointer flex items-center justify-center h-full !w-full"
                      id="dropzone"
                    >
                      <input type="file" name="photo" class="hidden" @change="generateBase64">
                      <img x-show="photoBase64" :src="photoBase64" class="!w-full !h-full !rounded-sm p-1" alt="photo">
                      <span x-show="!photoBase64">Taruh foto disini</span>
                    </label>
                    @error('photo')
                    <p class="text-red-800 mt-2">{{ $message }}</p>
                    @enderror
                  </div>
                </div>
              </form>
            </div>
          </div>
      </div>
  </div>

  <x-slot name="scripts">
    <script>
      function createLeaderHistory() {
        return {
          photoBase64: null,
          generateBase64(event) {
            const file = event.target.files
            if (file.length) {
              const reader = new FileReader();
              reader.readAsDataURL(file[0]);
              reader.onload = () => {
                this.photoBase64 = reader.result;
              };
              reader.onerror = function (error) {
                console.log('Error: ', error);
              };
            }
          }
        }
      }
    </script>
  </x-slot>
</x-app-layout>
