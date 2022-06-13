@csrf
<div class="block">
    <x-jet-label for="id" value="{{ __('Id')}}" />
    <x-jet-input id="id" class="block mt-1 w-full" type="text" name="id" :value="old('id', $movimiento->id)" required autofocus />
    <x-jet-label for="tipoM" value="{{ __('Tipo de Movimiento')}}" />
    <x-jet-input id="tipoM" class="block mt-1 w-full" type="text" name="tipoM" :value="old('tipoM', $movimiento->tipoM)" required autofocus />
    <x-jet-label for="fechaM" value="{{ __('Fecha de Movimiento')}}" />
    <x-jet-input id="fechaM" class="block mt-1 w-full" type="date" name="fechaM" :value="old('fechaM', $movimiento->fechaM)" required autofocus />
    <x-jet-label for="responsable" value="{{ __('Responsable')}}" />
    <x-jet-input id="responsable" class="block mt-1 w-full" type="text" name="responsable" :value="old('responsable', $movimiento->responsable)" required autofocus />
    <x-jet-label for="destino" value="{{ __('Destino')}}" />
    <x-jet-input id="destino" class="block mt-1 w-full" type="text" name="destino" :value="old('destino', $movimiento->destino)" required autofocus />
    <x-jet-label for="autoriza" value="{{ __('Autoriza')}}" />
    <x-jet-input id="autoriza" class="block mt-1 w-full" type="text" name="autoriza" :value="old('autoriza', $movimiento->autoriza)" required autofocus />

    <div class="flex justify-center">
        <div class="p-2">
            <div class="flex justify-end">
                <a href="{{ route('movimientos.create') }}">
                    <x-jet-button type="submit">
                        Guardar
                    </x-jet-button>
            </div>
        </div>
    </div>    
</div>