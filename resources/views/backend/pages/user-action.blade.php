<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Riwayat Aktifitas Penggunaan') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 bg-white border-b border-gray-200">
                  <div class="flex items-center justify-between mb-10">
                      <h2 class="text-lg">Aktifitas</h2>
                      <p>Total {{ $actions->count() }}</p>
                  </div>
                  <table class="border-collapse table-fixed w-full text-sm mb-5">
                      <thead>
                        <tr>
                          <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
                            No
                          </th>
                          <th class="border-b dark:border-slate-600 font-medium p-4 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
                            Nama user
                          </th>
                          <th class="border-b dark:border-slate-600 font-medium p-4 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
                            Aksi
                          </th>
                          <th class="border-b dark:border-slate-600 font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
                            Tanggal
                          </th>
                        </tr>
                      </thead>
                      <tbody class="bg-white dark:bg-slate-800">
                        @foreach ($actions as $action)
                        <tr>
                          <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                            {{ (($actions->perPage() * $actions->currentPage()) - $actions->perPage()) + ($loop->index + 1) }}
                          </td>
                          <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                            {{ $action->username }}
                          </td>
                          <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                            {{ $action->action }}
                          </td>
                          <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                            {{ $action->created_at->translatedFormat('d F Y, H:m') }}
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {{ $actions->links() }}
              </div>
          </div>
      </div>
  </div>
</x-app-layout>
