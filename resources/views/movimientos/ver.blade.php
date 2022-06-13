<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ver Movimiento') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="block">
                <x-jet-label for="id" value="{{ __('Id')}}" />
                <x-jet-input id="id" class="block mt-1 w-full" type="text" name="id" :value="old('id', $movimiento->id)" readonly />
                <x-jet-label for="tipoM" value="{{ __('Tipo de Movimiento')}}" />
                <x-jet-input id="tipoM" class="block mt-1 w-full" type="text" name="tipoM" :value="old('tipoM', $movimiento->tipoM)" readonly />
                <x-jet-label for="fechaM" value="{{ __('Fecha de Movimiento')}}" />
                <x-jet-input id="fechaM" class="block mt-1 w-full" type="date" name="fechaM" :value="old('fechaM', $movimiento->fechaM)" readonly />
                <x-jet-label for="responsable" value="{{ __('Responsable')}}" />
                <x-jet-input id="responsable" class="block mt-1 w-full" type="text" name="responsable" :value="old('responsable', $movimiento->responsable)" readonly />
                <x-jet-label for="destino" value="{{ __('Destino')}}" />
                <x-jet-input id="destino" class="block mt-1 w-full" type="text" name="destino" :value="old('destino', $movimiento->destino)" readonly />
                <x-jet-label for="autoriza" value="{{ __('Autoriza')}}" />
                <x-jet-input id="autoriza" class="block mt-1 w-full" type="text" name="autoriza" :value="old('autoriza', $movimiento->autoriza)" readonly />
                </div>
            </div>
        </div>    
    </div>
</x-app-layout>