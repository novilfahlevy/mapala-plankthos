<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Kegiatan') }}
      </h2>
  </x-slot>

  <x-alert />

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
              <div class="mb-10">
                <a href="{{ route('admin.kegiatan.index') }}" class="button">Kembali</a>
              </div>
              <form
                x-data="editActivity()"
                action="{{ route('admin.kegiatan.update', $activity->id) }}"
                method="POST"
                enctype="multipart/form-data"
              >
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 lg:grid-cols-2 mb-5">
                  <div class="mb-5 lg:mb-0">
                    <p class="mb-2">Thumbnail</p>
                    <label
                      class="border rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 cursor-pointer flex items-center justify-center h-[300px] w-[500px]"
                      id="dropzone"
                    >
                      <input type="file" name="thumbnail" class="hidden" @change="generateThumbnailBase64">
                      <img x-show="isThereAThumbnail()" :src="thumbnailBase64 || thumbnailUrl" class="w-full h-full !rounded-sm p-1" alt="thumbnail">
                      <span x-show="!isThereAThumbnail()">Taruh foto disini</span>
                    </label>
                    <p class="text-red-800 mt-2" x-show="thumbnailErrorMessage" x-text="thumbnailErrorMessage"></p>
                    @error('thumbnail')
                    <p class="text-red-800 mt-2">{{ $message }}</p>
                    @enderror
                  </div>
                  <div>
                    <p class="mb-2">Foto</p>
                    <label
                      :class="`border rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 cursor-pointer flex ${areThereSomeFiles ? 'items-start justify-start' : 'items-center justify-center'} gap-2 p-2 h-[300px] w-[500px]`"
                      id="dropzone"
                    >
                      <input type="file" name="photos[]" class="hidden" multiple @change="generatePhotoBase64">
                      <template x-for="(photo, index) in (photoBase64.length ? photoBase64 : photoUrls)" :key="index">
                        <img :src="photo" class="w-[100px] h-[100px] !rounded-sm" alt="photos">
                      </template>
                      <span x-show="!areThereSomeFiles()">Taruh foto disini</span>
                    </label>
                    <p class="text-red-800 mt-2" x-show="photoErrorMessage" x-text="photoErrorMessage"></p>
                    @error('photos')
                    <p class="text-red-800 mt-2">{{ $message }}</p>
                    @enderror
                  </div>
                </div>
                <div class="flex flex-col mb-5">
                  <label for="title" class="mb-2">Nama Kegiatan</label>
                  <x-input type="text" name="title" id="title" value="{{ $activity->title }}" required />
                  @error('title')
                  <p class="text-red-800 mt-2">{{ $message }}</p>
                  @enderror
                </div>
                <div class="flex flex-col mb-5">
                  <label for="tanggal" class="mb-2">Tanggal kegiatan</label>
                  <x-input type="date" name="tanggal" id="tanggal" value="{{ $activity->tanggal->format('Y-m-d') }}" required />
                  @error('tanggal')
                  <p class="text-red-800 mt-2">{{ $message }}</p>
                  @enderror
                </div>
                <div class="flex flex-col mb-5">
                  <label for="title" class="mb-2">Divisi</label>
                  <select name="divisionId" id="divisionId">
                    <option value="">Umum (tidak terfokus divisi manapun)</option>
                    @foreach ($divisions as $division)
                    <option value="{{ $division->id }}" {{ $division->id === $activity->division_id ? 'selected' : '' }}>{{ $division->name }}</option>
                    @endforeach
                  </select>
                  @error('title')
                  <p class="text-red-800 mt-2">{{ $message }}</p>
                  @enderror
                </div>
                <div class="flex flex-col mb-5">
                  <label for="content" class="mb-2">Konten</label>
                  <input type="hidden" name="content" value="{{ $activity->content }}" id="content">
                  <div id="contentEditor"></div>
                  @error('content')
                  <p class="text-red-800 mt-2">{{ $message }}</p>
                  @enderror
                </div>
                <button class="button !bg-green-800">Edit</button>
              </form>
            </div>
          </div>
      </div>
  </div>

  {{-- <div class="pb-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
              <ul class="mb-10">
                @foreach ($comments as $comment)
                <li class="flex flex-col py-3 px-5 rounded-sm bg-slate-100 mb-2">
                  <div class="flex items-center justify-between mb-5">
                    <p>{{ $comment->name }} {{ $comment->email ? '('.$comment->email.')' : '' }}</p>
                    <div class="flex items-center">
                      <p class="mr-5">{{ $comment->created_at->format('d F Y, H:m:s') }}</p>
                      <form
                        action="{{ route('admin.komentar-kegiatan.destroy', $comment->id) }}"
                        method="POST"
                      >
                        @csrf
                        @method('DELETE')
                        <a
                          href="#"
                          onclick="event.preventDefault();
                          confirm('Apakah anda yakin ingin menghapus komentar ini?') && this.closest('form').submit();"
                          class="cursor-pointer select-none text-red-800"
                        >
                          {{ __('Hapus') }}
                        </a>
                      </form>
                    </div>
                  </div>
                  <p>{{ $comment->comment }}</p>
                </li>
                @endforeach
              </ul>

              {{ $comments->links() }}

              <form
                class="border-t pt-8 mt-8"
                action="{{ route('admin.komentar-kegiatan.store') }}"
                method="POST"
              >
                @csrf
                <input type="hidden" name="activityId" value="{{ $activity->id }}">
                <div class="flex flex-col mb-5">
                  <label for="comment" class="mb-2">Komentar</label>
                  <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
                  @error('comment')
                  <p class="text-red-800 mt-2">{{ $message }}</p>
                  @enderror
                </div>
                <button class="button !bg-green-800">Komentar</button>
              </form>
            </div>
          </div>
      </div>
  </div> --}}

  <x-slot name="scripts">
    <script>
      function editActivity() {
        return {
          init() {
            initEditor('contentEditor')
            .then(editor => {
                editor.setData(`{!! $activity->content !!}`);
                editor.editing.view.document.on('change', (evt, data) => {
                    document.getElementById('content').value = editor.getData();
                });
            })
            .catch(error => console.log(error));
          },
          thumbnailUrl: `{{ asset('storage/uploads/'.$activity->thumbnail_url) }}`,
          thumbnailBase64: null,
          thumbnailErrorMessage: '',
          photoUrls: @json($activity->photos->map(fn($photo) => asset('storage/uploads/'.$photo->photo_url))),
          photoBase64: [],
          photoErrorMessage: '',
          isThereAThumbnail() {
            return this.thumbnailBase64 || this.thumbnailUrl;
          },
          areThereSomeFiles() {
            return this.photoBase64.length || this.photoUrls.length;
          },
          generateThumbnailBase64(event) {
            const file = event.target.files;
            this.thumbnailErrorMessage = '';
            if (file.length) {
              const reader = new FileReader();
              reader.readAsDataURL(file[0]);
              reader.onload = () => {
                if (checkFiletype(file[0].name)) {
                  this.thumbnailBase64 = reader.result;
                } else {
                  event.target.value = null;
                  this.thumbnailErrorMessage = `Masukkan gambar atau foto.`;
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
                event.target.value = null;
                this.photoErrorMessage = 'Masukkan gambar atau foto.';
              }
            }
          }
        }
      }
    </script>
  </x-slot>
</x-app-layout>

@include('components.editor')