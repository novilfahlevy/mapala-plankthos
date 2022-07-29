<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Informasi') }}
        </h2>
    </x-slot>

    <x-alert />

    {{-- Organisasi --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="mb-5 text-xl">Organisasi</h2>
                    <form action="{{ route('informasi.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="title" value="organisasi">
                        <div class="grid grid-cols-2 gap-10 mb-10">
                            <div>
                                <label for="angkatan" class="mb-2 block">Angkatan</label>
                                <x-input type="number" class="w-full" name="angkatan" id="angkatan" value="{{ $information['angkatan'] }}" />
                                @error('angkatan')
                                <p class="text-red-800 mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="anggota" class="mb-2 block">Anggota</label>
                                <x-input type="number" class="w-full" name="anggota" id="anggota" value="{{ $information['anggota'] }}" />
                                @error('anggota')
                                <p class="text-red-800 mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-10">
                            <input type="hidden" name="tentang" id="tentang" value="{{ $information['tentang'] }}">
                            <p class="mb-5">Tentang Plankthos</p>
                            <div id="tentangEditor"></div>
                        </div>
                        <div class="mb-10" x-data="structureOrganization()">
                            <p class="mb-2">Struktur Organisasi</p>
                            <label
                              class="border rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 cursor-pointer flex items-center justify-center w-[400px] h-[600px]"
                              id="dropzone"
                            >
                                <input type="file" name="struktur" class="hidden" @change="generateBase64">
                                <img x-show="getPhoto()" :src="getPhoto()" class="w-full h-full !rounded-sm p-1" alt="struktur">
                                <p x-show="!getPhoto()">Taruh foto disini</p>
                            </label>
                            <p class="text-red-800 mt-2" x-show="photoErrorMessage" x-text="photoErrorMessage" />
                            @error('struktur')
                            <p class="text-red-800 mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <button class="button" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Visi misi --}}
    <div class="pb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="mb-5 text-xl">Visi dan Misi</h2>
                    <form action="{{ route('informasi.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="title" value="visi-misi">
                        <div class="mb-10">
                            <input type="hidden" name="visi" id="visi" value="{{ $information['visi'] }}">
                            <label for="visi" class="mb-2 block">Visi</label>
                            <div id="visiEditor"></div>
                            @error('visi')
                            <p class="text-red-800 mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-10">
                            <input type="hidden" name="misi" id="misi" value="{{ $information['misi'] }}">
                            <label for="misi" class="mb-2 block">Misi</label>
                            <div id="misiEditor"></div>
                            @error('misi')
                            <p class="text-red-800 mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <button class="button" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Media sosial --}}
    <div class="pb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="mb-5 text-xl">Media sosial</h2>
                    <form action="{{ route('informasi.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="title" value="media-sosial">
                        <div class="grid grid-cols-4 gap-10 mb-10">
                            <div>
                                <label for="facebook" class="mb-2 block">Facebook URL</label>
                                <x-input type="text" name="facebook" id="facebook" class="w-full" value="{{ $information['facebook'] }}"></x-input>
                            </div>
                            <div>
                                <label for="instagram" class="mb-2 block">Instagram URL</label>
                                <x-input type="text" name="instagram" id="instagram" class="w-full" value="{{ $information['instagram'] }}"></x-input>
                            </div>
                            <div>
                                <label for="youtube" class="mb-2 block">Youtube URL</label>
                                <x-input type="text" name="youtube" id="youtube" class="w-full" value="{{ $information['youtube'] }}"></x-input>
                            </div>
                            <div>
                                <label for="twitter" class="mb-2 block">Twitter URL</label>
                                <x-input type="text" name="twitter" id="twitter" class="w-full" value="{{ $information['twitter'] }}"></x-input>
                            </div>
                        </div>
                        <button class="button" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Kontak --}}
    <div class="pb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="mb-5 text-xl">Kontak</h2>
                    <form action="{{ route('informasi.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="title" value="kontak">
                        <div class="grid grid-cols-2 gap-10 mb-10">
                            <div>
                                <label for="whatsapp" class="mb-2 block">Nomor Whatsapp</label>
                                <x-input type="text" name="whatsapp" id="whatsapp" class="w-full" value="{{ $information['whatsapp'] }}"></x-input>
                                @error('whatsapp')
                                <p class="text-red-800 mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="email" class="mb-2 block">Email</label>
                                <x-input type="text" name="email" id="email" class="w-full" value="{{ $information['email'] }}"></x-input>
                                @error('email')
                                <p class="text-red-800 mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="location" class="mb-2 block">Lokasi (embed Google Maps)</label>
                                <textarea type="text" name="location" id="location" class="w-full" placeholder="Beserta tag iframe" cols="30" rows="10">
                                    {{ $information['location'] }}
                                </textarea>
                                @error('location')
                                <p class="text-red-800 mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <button class="button" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <x-slot name="scripts">
        @include('components.editor')
        <script>
            function structureOrganization() {
                return {
                    photoUrl: `{{ isset($information['struktur']) && $information['struktur'] ? asset('storage/uploads/'.$information['struktur']) : '' }}`,
                    photoBase64: null,
                    photoErrorMessage: '',
                    getPhoto() {
                        if (this.photoUrl) {
                            return this.photoUrl;
                        }
                        return this.photoBase64;
                    },
                    generateBase64(event) {
                        const file = event.target.files;
                        if (file.length) {
                            const reader = new FileReader();
                            reader.readAsDataURL(file[0]);
                            reader.onload = () => {
                                this.photoErrorMessage = '';
        
                                if (checkFiletype(file[0].name)) {
                                    this.photoBase64 = reader.result;
                                } else {
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
            
            initEditor('tentangEditor')
            .then(editor => {
                editor.setData(`{!! $information['tentang'] !!}`);
                editor.editing.view.document.on('change', (evt, data) => {
                    document.getElementById('tentang').value = editor.getData();
                });
            })
            .catch(error => console.log(error));
        
            initEditor('visiEditor')
            .then(editor => {
                editor.setData(`{!! $information['visi'] !!}`);
                editor.editing.view.document.on('change', (evt, data) => {
                    document.getElementById('visi').value = editor.getData();
                });
            })
            .catch(error => console.log(error));
            
            initEditor('misiEditor', 'misi')
            .then(editor => {
                editor.setData(`{!! $information['misi'] !!}`);
                editor.editing.view.document.on('change', (evt, data) => {
                    document.getElementById('misi').value = editor.getData();
                });
            })
            .catch(error => console.log(error));
        </script>
    </x-slot>
</x-app-layout>

