<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Pengguna') }}
      </h2>
  </x-slot>

  <x-alert />

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
              <div class="mb-10">
                <a href="{{ route('pengguna.create') }}" class="button">+ Tambah Pengguna</a>
              </div>
              <table class="border-collapse table-fixed w-full text-sm mb-5">
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
                      {{ (($users->perPage() * $users->currentPage()) - $users->perPage()) + ($loop->index + 1) }}
                    </td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                      {{ $user->name }}
                    </td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                      {{ $user->email }}
                    </td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                      {{ $user->created_at->translatedFormat('d F Y') }}
                    </td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                      <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                          <svg class="fill-current h-5 w-5 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                          </svg>
                        </x-slot>
                        
                        <x-slot name="content">
                          @if ($user->id == auth()->user()->id)
                          <x-dropdown-link :href="route('pengguna.edit', $user->id)">
                            {{ __('Edit') }}
                          </x-dropdown-link>
                          @endif
                          @if ($user->id != auth()->user()->id)
                          <form
                            action="{{ route('pengguna.destroy', $user->id) }}"
                            method="POST"
                          >
                            @csrf
                            @method('DELETE')
                            <x-dropdown-link
                              href="#"
                              onclick="event.preventDefault();
                              confirm('Apakah anda yakin ingin menghapus data ini?') && this.closest('form').submit();"
                            >
                              {{ __('Hapus') }}
                            </x-dropdown-link>
                          </form>
                          @endif
                        </x-slot>
                      </x-dropdown>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              {{ $users->links() }}
            </div>
          </div>
      </div>
  </div>
</x-app-layout>