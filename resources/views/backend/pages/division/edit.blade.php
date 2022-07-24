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
                <a href="{{ route('divisi.index') }}" class="button">Kembali</a>
              </div>
              <form action="{{ route('divisi.update', $division['id']) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="flex flex-col mb-10">
                  <label for="name" class="mb-2">Nama</label>
                  <x-input type="text" name="name" id="name" placeholder="Contoh: Divisi Mangrove" value="{{ $division['name'] }}" required></x-input>
                  @error('name')
                  <p class="text-red-800 mt-2">{{ $message }}</p>
                  @enderror
                </div>
                <div class="flex flex-col mb-10">
                  <label for="description" class="mb-2">Description</label>
                  <textarea name="description" id="description" placeholder="Contoh: Divisi Mangrove adalah divisi yang..." cols="30" rows="10">{{ $division['description'] }}</textarea>
                  @error('description')
                  <p class="text-red-800 mt-2">{{ $message }}</p>
                  @enderror
                </div>
                <button class="button !bg-green-800">Edit</button>
              </form>
            </div>
          </div>
      </div>
  </div>
</x-app-layout>