<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Pengguna') }}
      </h2>
  </x-slot>

  <x-alert />

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
              <div class="mb-10">
                <a href="{{ route('pengguna.create') }}" class="button">+ Tambah Pengguna</a>
              </div>
              <table class="border-collapse table-fixed w-full text-sm">
                <thead>
                  <tr>
                    <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
                      No
                    </th>
                    <th class="border-b dark:border-slate-600 font-medium p-4 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
                      Nama
                    </th>
                    <th class="border-b dark:border-slate-600 font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
                      Email
                    </th>
                    <th class="border-b dark:border-slate-600 font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
                      Tanggal akun dibuat
                    </th>
                    <th class="border-b dark:border-slate-600 font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
                      Aksi
                    </th>
                  </tr>
                </thead>
                <tbody class="bg-white dark:bg-slate-800">
                  @foreach ($users as $user)
                  <tr>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                      {{ $loop->index + 1 }}
                    </td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                      {{ $user->name }}
                    </td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                      {{ $user->email }}
                    </td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                      {{ $user->created_at->format('d F Y') }}
                    </td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                      @if ($user->id != auth()->user()->id)
                      <a href="{{ route('pengguna.edit', $user->id) }}" class="button !bg-sky-800">Edit</a>
                      <form
                        class="inline-block"
                        id="deleteUser"
                        action="{{ route('pengguna.destroy', $user->id) }}"
                        onsubmit="return confirm('Apakah anda yakin ingin menghapus user ini?')"
                        method="POST"
                      >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="button !bg-red-800">Hapus</button>
                      </form>
                      @else
                      <p class="mb-0">Akun anda</p>
                      @endif
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>  
            </div>
          </div>
      </div>
  </div>
</x-app-layout>