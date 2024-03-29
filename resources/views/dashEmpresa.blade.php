<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home Empresa') }}
        </h2>
        <p>Bienvenido, rol:{{ Auth::user()->rol }}, name:{{ Auth::user()->name }} </p>

    </x-slot>
    <x-crearPostulacion>
        
    </x-crearPostulacion>
</x-app-layout>
