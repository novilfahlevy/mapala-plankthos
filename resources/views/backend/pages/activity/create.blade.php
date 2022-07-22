<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Kegiatan') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
              <div class="mb-10">
                <a href="{{ route('admin.kegiatan.index') }}" class="button">Kembali</a>
              </div>
              <form
                x-data="createActivity()"
                action="{{ route('admin.kegiatan.store') }}"
                method="POST"
                enctype="multipart/form-data"
              >
                @csrf
                <div class="mb-5">
                  <label
                    class="border rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 cursor-pointer flex items-center justify-center h-[200px] !w-[300px]"
                    id="dropzone"
                  >
                    <input type="file" name="thumbnail" class="hidden" @change="generateBase64">
                    <img x-show="photoBase64" :src="photoBase64" class="w-full h-full !rounded-sm p-1" alt="thumbnail">
                    <span x-show="!photoBase64">Taruh foto disini</span>
                  </label>
                  @error('thumbnail')
                  <p class="text-red-800 mt-2">{{ $message }}</p>
                  @enderror
                </div>
                <div class="flex flex-col mb-5">
                  <label for="title" class="mb-2">Nama Kegiatan</label>
                  <x-input type="text" name="title" id="title" required />
                  @error('title')
                  <p class="text-red-800 mt-2">{{ $message }}</p>
                  @enderror
                </div>
                <div class="flex flex-col mb-5">
                  <label for="content" class="mb-2">Konten</label>
                  <input type="hidden" name="content" id="content">
                  <div id="contentEditor"></div>
                  @error('content')
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
      function createActivity() {
        return {
          init() {
            initEditor('contentEditor')
            .then(editor => {
                editor.editing.view.document.on('keyup', (evt, data) => {
                    document.getElementById('content').value = editor.getData();
                });
            })
            .catch(error => console.log(error));
          },
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

@include('components.editor')