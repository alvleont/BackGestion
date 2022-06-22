<x-filament::page>
    <form wire:submit.prevent="save">
    {{ $this->form }}


    <x-filament::button wire:click='save'>Guardar Acta y Cerrar Reunión</x-filament::button>
</form>

</x-filament::page>
