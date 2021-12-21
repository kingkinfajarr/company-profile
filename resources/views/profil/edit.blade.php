<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Edit Profil') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
            <form action="{{ route('profil.update', $profil->id) }}" method="POST">
              @csrf
              @method('put')
              <div class="w-full">
                <div class="sejarah">
                  <p>Sejarah</p>
                  <textarea name="sejarah" class="w-full h-36">{{ $profil->sejarah }}</textarea>
                </div>
                <div class="visi_misi mt-5">
                  <p>Visi Misi</p>
                  <textarea name="visi_misi" class="w-full h-36">{{ $profil->visi_misi }}</textarea>
                </div>
                <div class="profil mt-5">
                  <p>Profil</p>
                  <textarea name="profil" class="w-full h-36">{{ $profil->profil }}</textarea>
                </div>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
                  Update
                </button>
              </div>
            </form>
          </div>
      </div>
  </div>
</x-app-layout>
