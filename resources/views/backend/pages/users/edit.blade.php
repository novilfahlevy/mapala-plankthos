<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Pengguna') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
              <div class="mb-10">
                <a href="{{ route('pengguna.index') }}" class="button">Kembali</a>
              </div>
              <form action="{{ route('pengguna.update', $user['id']) }}" method="POST">
                @csrf
                <div class="grid grid-cols-2 gap-10 mb-10">
                  <div class="flex flex-col">
                    <label for="name" class="mb-2">Nama</label>
                    <x-input type="text" name="name" id="name" value="{{ $user['name'] }}" required></x-input>
                    @error('name')
                    <p class="text-red-800 mt-2">{{ $message }}</p>
                    @enderror
                  </div>
                  <div class="flex flex-col">
                    <label for="email" class="mb-2">Email</label>
                    <x-input type="email" name="email" id="email" value="{{ $user['email'] }}" required></x-input>
                    @error('email')
                    <p class="text-red-800 mt-2">{{ $message }}</p>
                    @enderror
                  </div>
                  <div class="flex flex-col">
                    <label for="password" class="mb-2">Password</label>
                    <x-input type="text" name="password" id="password"></x-input>
                    @error('password')
                    <p class="text-red-800 mt-2">{{ $message }}</p>
                    @enderror
                  </div>
                </div>
                <button class="button !bg-green-800">Tambah</button>
              </form>
            </div>
          </div>
      </div>
  </div>
</x-app-layout>