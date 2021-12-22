<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Profil') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <div class="p-5">
                    <table class="table-auto w-full mt-5">
                        <tr>
                            <th class="border px-4 py-2" width="30%">Sejarah</th>
                            <th class="border px-4 py-2" width="30%">Visi Misi</th>
                            <th class="border px-4 py-2" width="30%">Profil</th>
                            <th class="border px-4 py-2" width="10%">Aksi</th>
                          </tr>
                          @forelse ($profil as $item)
                            <tr>
                                <td class="border px-4 py-2">{{ $item->sejarah }}</td>
                                <td class="border px-4 py-2">{{ $item->visi_misi }}</td>
                                <td class="border px-4 py-2">{{ $item->profil }}</td>
                                <td class="border px-4 py-2 justify-between">
                                    <a href="{{ route('profil.edit', $item->id) }}" class="py-1 px-4 rounded-md bg-yellow-400">Edit</a>
                                </td>
                            </tr>
                          @empty
                            <tr >
                                <td class="border px-4 py-2 text-center" colspan="4">Tidak ada data</td>
                            </tr>
                          @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
