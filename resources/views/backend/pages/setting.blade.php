<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pengaturan') }}
        </h2>
    </x-slot>

    <x-alert />

    {{-- Visi misi --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="mb-5 text-xl">Visi dan Misi</h2>
                    <form action="{{ route('pengaturan.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="title" value="visi-misi">
                        <input type="hidden" name="visi" id="visi" value="{{ $settings['visi'] }}">
                        <input type="hidden" name="misi" id="misi" value="{{ $settings['misi'] }}">
                        <div class="mb-10">
                            <label for="visi" class="mb-2 block">Visi</label>
                            <div id="visiEditor"></div>
                        </div>
                        <div class="mb-10">
                            <label for="misi" class="mb-2 block">Misi</label>
                            <div id="misiEditor"></div>
                        </div>
                        <x-button type="submit">Submit</x-button>
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
                    <form action="{{ route('pengaturan.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="title" value="media-sosial">
                        <div class="grid grid-cols-4 gap-10 mb-10">
                            <div>
                                <label for="facebook" class="mb-2 block">Facebook URL</label>
                                <x-input type="text" name="facebook" id="facebook" class="w-full" value="{{ $settings['facebook'] }}"></x-input>
                            </div>
                            <div>
                                <label for="instagram" class="mb-2 block">Instagram URL</label>
                                <x-input type="text" name="instagram" id="instagram" class="w-full" value="{{ $settings['instagram'] }}"></x-input>
                            </div>
                            <div>
                                <label for="youtube" class="mb-2 block">Youtube URL</label>
                                <x-input type="text" name="youtube" id="youtube" class="w-full" value="{{ $settings['youtube'] }}"></x-input>
                            </div>
                            <div>
                                <label for="twitter" class="mb-2 block">Twitter URL</label>
                                <x-input type="text" name="twitter" id="twitter" class="w-full" value="{{ $settings['twitter'] }}"></x-input>
                            </div>
                        </div>
                        <x-button type="submit">Submit</x-button>
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
                    <form action="{{ route('pengaturan.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="title" value="kontak">
                        <div class="grid grid-cols-2 gap-10 mb-10">
                            <div>
                                <label for="whatsapp" class="mb-2 block">Nomor Whatsapp</label>
                                <x-input type="text" name="whatsapp" id="whatsapp" class="w-full" value="{{ $settings['whatsapp'] }}"></x-input>
                            </div>
                            <div>
                                <label for="email" class="mb-2 block">Email</label>
                                <x-input type="text" name="email" id="email" class="w-full" value="{{ $settings['email'] }}"></x-input>
                            </div>
                            <div>
                                <label for="location" class="mb-2 block">Lokasi (embed Google Maps)</label>
                                <textarea type="text" name="location" id="location" class="w-full" placeholder="Beserta tag iframe" cols="30" rows="10">
                                    {{ $settings['location'] }}
                                </textarea>
                            </div>
                        </div>
                        <x-button type="submit">Submit</x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

@include('components.editor')

<script>
    initEditor('visiEditor')
    .then(editor => {
        editor.setData(`{!! $settings['visi'] !!}`);
        editor.editing.view.document.on('keyup', (evt, data) => {
            document.getElementById('visi').value = editor.getData();
        });
    })
    .catch(error => console.log(error));
    
    initEditor('misiEditor', 'misi')
    .then(editor => {
        editor.setData(`{!! $settings['misi'] !!}`);
        editor.editing.view.document.on('keyup', (evt, data) => {
            document.getElementById('misi').value = editor.getData();
        });
    })
    .catch(error => console.log(error));
</script>