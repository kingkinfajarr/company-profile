<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-5 text-center py-24">
                    <h1 class="font-bold text-3xl">Selamat Datang, 
                        <span class="text-sky-500">{{ Auth::user()->name }}</span>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
