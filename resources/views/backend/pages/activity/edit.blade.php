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
                <div class="mb-5">
                  <p class="mb-2">Thumbnail</p>
                  <label
                    class="border rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 cursor-pointer flex items-center justify-center h-[300px] !w-[400px]"
                    id="dropzone"
                  >
                    <input type="file" name="thumbnail" class="hidden" @change="generateBase64">
                    <img :src="photoBase64 || photoUrl" class="w-full h-full !rounded-sm p-1" alt="thumbnail">
                  </label>
                  @error('thumbnail')
                  <p class="text-red-800 mt-2">{{ $message }}</p>
                  @enderror
                </div>
                <div class="flex flex-col mb-5">
                  <label for="title" class="mb-2">Nama Kegiatan</label>
                  <x-input type="text" name="title" id="title" value="{{ $activity->title }}" required />
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

  <div class="pb-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
              {{-- Komentar --}}
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

              {{-- Form Komentar --}}
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
  </div>

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
          photoUrl: `{{ asset('storage/uploads/'.$activity->thumbnail_url) }}`,
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