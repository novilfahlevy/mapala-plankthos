<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Galeri') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
              <div class="mb-10">
                <a href="{{ route('galeri.index') }}" class="button">Kembali</a>
              </div>
              <form
                x-data="createGallery()"
                action="{{ route('galeri.update', $gallery->id) }}"
                method="POST"
                enctype="multipart/form-data"
              >
                @csrf
                @method('PUT')
                <div class="grid grid-cols-[30%,1fr] gap-10 mb-10">
                  <div>
                    <p class="mb-2">Foto</p>
                    <label
                      class="border rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 cursor-pointer flex items-center justify-center h-[300px] w-full"
                    >
                      <input type="file" name="photo" class="hidden" @change="generateBase64">
                      <img x-show="photoBase64" :src="photoBase64" class="w-full h-full rounded-sm p-1" alt="photo">
                      <img x-show="!photoBase64" :src="photoUrl" class="w-full h-full rounded-sm p-1" alt="photo">
                    </label>
                    @error('photo')
                    <p class="text-red-800">{{ $message }}</p>
                    @enderror
                  </div>
                  <div>
                    <div class="flex flex-col mb-5">
                      <label for="title" class="mb-2">Nama Kegiatan</label>
                      <x-input type="text" name="title" id="title" value="{{ $gallery->title }}" required />
                      @error('title')
                      <p class="text-red-800">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="flex flex-col mb-5">
                      <label for="division" class="mb-2">Divisi</label>
                      <x-input type="text" name="division" id="division" value="{{ $gallery->division }}" />
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
      function createGallery() {
        return {
          photoUrl: `{{ asset('storage/uploads/'.$gallery->photo_url) }}`,
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
