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
                <div class="grid grid-cols-2 mb-5">
                  <div>
                    <p class="mb-2">Thumbnail</p>
                    <label
                      class="border rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 cursor-pointer flex items-center justify-center h-[300px] w-[500px]"
                      id="dropzone"
                    >
                      <input type="file" name="thumbnail" class="hidden" @change="generateThumbnailBase64">
                      <img x-show="thumbnailBase64" :src="thumbnailBase64" class="w-full h-full !rounded-sm p-1" alt="thumbnail">
                      <span x-show="!thumbnailBase64">Taruh foto disini</span>
                    </label>
                    <p class="text-red-800 mt-2" x-show="thumbnailErrorMessage" x-text="thumbnailErrorMessage"></p>
                    @error('thumbnail')
                    <p class="text-red-800 mt-2">{{ $message }}</p>
                    @enderror
                  </div>
                  <div>
                    <p class="mb-2">Foto</p>
                    <label
                      :class="`border rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 cursor-pointer flex ${photoBase64.length ? 'items-start justify-start' : 'items-center justify-center'} gap-2 p-2 h-[300px] w-[500px]`"
                      id="dropzone"
                    >
                      <input type="file" name="photos[]" class="hidden" multiple @change="generatePhotoBase64">
                      <template x-for="(photo, index) in photoBase64" :key="index">
                        <img :src="photo" class="w-[100px] h-[100px] !rounded-sm" alt="photos">
                      </template>
                      <span x-show="!photoBase64.length">Taruh foto disini</span>
                    </label>
                    <p class="text-red-800 mt-2" x-show="photoErrorMessage" x-text="photoErrorMessage"></p>
                    @error('photos')
                    <p class="text-red-800 mt-2">{{ $message }}</p>
                    @enderror
                  </div>
                </div>
                <div class="flex flex-col mb-5">
                  <label for="title" class="mb-2">Nama Kegiatan</label>
                  <x-input type="text" name="title" id="title" required />
                  @error('title')
                  <p class="text-red-800 mt-2">{{ $message }}</p>
                  @enderror
                </div>
                <div class="flex flex-col mb-5">
                  <label for="tanggal" class="mb-2">Tanggal kegiatan</label>
                  <x-input type="date" name="tanggal" id="tanggal" required />
                  @error('tanggal')
                  <p class="text-red-800 mt-2">{{ $message }}</p>
                  @enderror
                </div>
                <div class="flex flex-col mb-5">
                  <label for="title" class="mb-2">Divisi</label>
                  <select name="divisionId" id="divisionId">
                    <option value="">Umum (tidak terfokus divisi manapun)</option>
                    @foreach ($divisions as $division)
                    <option value="{{ $division->id }}">{{ $division->name }}</option>
                    @endforeach
                  </select>
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
    @include('components.editor')
    <script>
      function createActivity() {
        return {
          init() {
            initEditor('contentEditor')
            .then(editor => {
                editor.editing.view.document.on('change', (evt, data) => {
                    document.getElementById('content').value = editor.getData();
                });
            })
            .catch(error => console.log(error));
          },
          photoBase64: [],
          photoErrorMessage: [],
          thumbnailBase64: null,
          thumbnailErrorMessage: '',
          generateThumbnailBase64(event) {
            const file = event.target.files
            this.thumbnailErrorMessage = '';
            if (file.length) {
              const reader = new FileReader();
              reader.readAsDataURL(file[0]);
              reader.onload = () => {
                if (checkFiletype(file[0].name)) {
                  this.thumbnailBase64 = reader.result;
                } else {
                  this.thumbnailErrorMessage = `Masukkan gambar atau foto`;
                }
              };

              reader.onerror = function (error) {
                console.log('Error: ', error);
              };
            }
          },
          generatePhotoBase64(event) {
            this.photoBase64 = [];
            this.photoErrorMessage = '';
            const files = Array.from(event.target.files)
            if (files.length) {
              if (checkFiletype(files.map(file => file.name))) {
                files.forEach(file => {
                  const reader = new FileReader();
                  reader.readAsDataURL(file);
                  reader.onload = () => {
                    this.photoBase64.push(reader.result);
                  };
                  reader.onerror = function (error) {
                    console.log('Error: ', error);
                  };
                });
              } else {
                this.photoErrorMessage = `Masukkan gambar atau foto`;
              }
            }
          }
        }
      }
    </script>
  </x-slot>
</x-app-layout>
