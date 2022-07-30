<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Divisi') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
              <div class="mb-10">
                <a href="{{ route('admin.divisi.index') }}" class="button">Kembali</a>
              </div>
              <form x-data="createDivision()" action="{{ route('admin.divisi.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-[30%,1fr] mb-10">
                  <div>
                    <p class="mb-2">Logo</p>
                    <label
                      class="border rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 cursor-pointer flex items-center justify-center h-[300px] w-[300px]"
                    >
                      <input type="file" name="logo" class="hidden" @change="generatePhotoBase64">
                      <img x-show="photoBase64" :src="photoBase64" class="w-full h-full !rounded-sm p-1" alt="logo">
                      <span x-show="!photoBase64">Taruh foto disini</span>
                    </label>
                    <p class="text-red-800 mt-2" x-show="photoErrorMessage" x-text="photoErrorMessage"></p>
                    @error('logo')
                    <p class="text-red-800 mt-2">{{ $message }}</p>
                    @enderror
                  </div>
                  <div>
                    <p class="mb-2">Background</p>
                    <label
                      class="border rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 cursor-pointer flex items-center justify-center h-[300px] w-full"
                    >
                      <input type="file" name="background" class="hidden" @change="generateBackgroundBase64">
                      <img x-show="backgroundBase64" :src="backgroundBase64" class="w-full h-full !rounded-sm p-1" alt="background">
                      <span x-show="!backgroundBase64">Taruh foto disini</span>
                    </label>
                    <p class="text-red-800 mt-2" x-show="backgroundErrorMessage" x-text="backgroundErrorMessage"></p>
                    @error('background')
                    <p class="text-red-800 mt-2">{{ $message }}</p>
                    @enderror
                  </div>
                </div>
                <div class="flex flex-col mb-10">
                  <label for="name" class="mb-2">Nama</label>
                  <x-input type="text" name="name" id="name" placeholder="Contoh: Divisi Mangrove"></x-input>
                  @error('name')
                  <p class="text-red-800 mt-2">{{ $message }}</p>
                  @enderror
                </div>
                <div class="flex flex-col mb-10">
                  <label for="description" class="mb-2">Description</label>
                  <textarea name="description" id="description" placeholder="Contoh: Divisi Mangrove adalah divisi yang..." cols="30" rows="10"></textarea>
                  @error('description')
                  <p class="text-red-800 mt-2">{{ $message }}</p>
                  @enderror
                </div>
                <button class="button !bg-green-800">Tambah</button>
              </form>
            </div>
          </div>
      </div>
  </div>

  <x-slot name="scripts">
    <script>
      function createDivision() {
        return {
          photoBase64: null,
          photoErrorMessage: '',
          backgroundBase64: null,
          backgroundErrorMessage: '',
          generatePhotoBase64(event) {
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
          },
          generateBackgroundBase64(event) {
            const file = event.target.files
            if (file.length) {
              const reader = new FileReader();
              reader.readAsDataURL(file[0]);
              reader.onload = () => {
                if (checkFiletype(file[0].name)) {
                  this.backgroundBase64 = reader.result;
                } else {
                  event.target.value = null;
                  this.backgroundErrorMessage = `Masukkan gambar atau foto`;
                }
              };
              reader.onerror = function (error) {
                console.log('Error: ', error);
              };
            }
          },
        }
      }
    </script>
  </x-slot>
</x-app-layout>