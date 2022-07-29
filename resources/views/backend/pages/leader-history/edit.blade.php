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
                action="{{ route('ketua-terdahulu.update', $leader->id) }}"
                method="POST"
                enctype="multipart/form-data"
              >
                @csrf
                @method('PUT')
                <div class="grid grid-cols-[20%,1fr] gap-10 mb-10">
                  <div>
                    <p class="mb-2">Foto</p>
                    <label
                      class="border rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 cursor-pointer flex items-center justify-center h-[300px] w-full"
                    >
                      <input type="file" name="photo" class="hidden" @change="generateBase64">
                      <img x-show="photoBase64" :src="photoBase64" class="!w-full !h-full !rounded-sm p-1" alt="photo">
                      <img x-show="!photoBase64" :src="photoUrl" class="!w-full !h-full !rounded-sm p-1" alt="photo">
                    </label>
                    <p class="text-red-800 mt-2" x-show="photoErrorMessage" x-text="photoErrorMessage"></p>
                    @error('photo')
                    <p class="text-red-800">{{ $message }}</p>
                    @enderror
                  </div>
                  <div>
                    <div class="flex flex-col mb-5">
                      <label for="name" class="mb-2">Nama</label>
                      <x-input type="text" name="name" id="name" value="{{ $leader->name }}" required />
                      @error('name')
                      <p class="text-red-800">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="flex flex-col mb-5">
                      <label for="nim" class="mb-2">NIM</label>
                      <x-input type="text" name="nim" id="nim" value="{{ $leader->nim }}" required />
                      @error('nim')
                      <p class="text-red-800">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="grid grid-cols-2 gap-10 mb-10">
                      <div class="flex flex-col">
                        <label for="from_year" class="mb-2">Dari Tahun</label>
                        <x-input type="number" name="from_year" value="{{ $leader->from_year }}" id="from_year" required />
                        @error('from_year')
                        <p class="text-red-800">{{ $message }}</p>
                        @enderror
                      </div>
                      <div class="flex flex-col">
                        <label for="to_year" class="mb-2">Sampai Tahun</label>
                        <x-input type="number" name="to_year" id="to_year" value="{{ $leader->to_year }}" required />
                        @error('to_year')
                        <p class="text-red-800">{{ $message }}</p>
                        @enderror
                      </div>
                    </div>
                  </div>
                </div>
                <button class="button !bg-green-800">Edit</button>
              </form>
            </div>
          </div>
      </div>
  </div>

  <x-slot name="scripts">
    <script>
      function createLeaderHistory() {
        return {
          photoUrl: `{{ asset('storage/uploads/'.$leader->photo_url) }}`,
          photoBase64: null,
          photoErrorMessage: '',
          generateBase64(event) {
            const file = event.target.files
            if (file.length) {
              const reader = new FileReader();
              reader.readAsDataURL(file[0]);
              reader.onload = () => {
                if (checkFiletype(file[0].name)) {
                  this.photoBase64 = reader.result;
                } else {
                  event.target.value = null;
                  this.photoErrorMessage = `Masukkan gambar atau foto`;
                }
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
