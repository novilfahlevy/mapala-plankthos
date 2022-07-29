<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Ulasan') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
              <div class="mb-10">
                <a href="{{ route('ulasan.index') }}" class="button">Kembali</a>
              </div>
              <form
                x-data="createReview()"
                action="{{ route('ulasan.store') }}"
                method="POST"
                enctype="multipart/form-data"
              >
                @csrf
                <div class="grid grid-cols-[30%,1fr] mb-10">
                  <div>
                    <p class="mb-2">Foto</p>
                    <label
                      class="border rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 cursor-pointer flex items-center justify-center h-[300px] w-[300px]"
                    >
                      <input type="file" name="photo" class="hidden" @change="generateBase64">
                      <img x-show="photoBase64" :src="photoBase64" class="w-full h-full !rounded-sm p-1" alt="photo">
                      <span x-show="!photoBase64">Taruh foto disini</span>
                    </label>
                    <p class="text-red-800 mt-2" x-show="photoErrorMessage" x-text="photoErrorMessage"></p>
                    @error('photo')
                    <p class="text-red-800 mt-2">{{ $message }}</p>
                    @enderror
                  </div>
                  <div>
                    <div class="flex flex-col mb-5">
                      <label for="name" class="mb-2">Nama</label>
                      <x-input type="text" name="name" id="name" required />
                      @error('name')
                      <p class="text-red-800 mt-2">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="flex flex-col mb-5">
                      <label for="position" class="mb-2">Profesi</label>
                      <x-input type="text" name="position" id="position" required />
                      @error('position')
                      <p class="text-red-800 mt-2">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="flex flex-col mb-5">
                      <label for="comment" class="mb-2">Ulasan</label>
                      <textarea name="comment" id="comment" cols="30" rows="10" required></textarea>
                      @error('comment')
                      <p class="text-red-800 mt-2">{{ $message }}</p>
                      @enderror
                    </div>
                  </div>
                </div>
                <button class="button !bg-green-800">Tambah</button>
              </form>
            </div>
          </div>
      </div>
  </div>

  <x-slot name="scripts">
    <script>
      function createReview() {
        return {
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
