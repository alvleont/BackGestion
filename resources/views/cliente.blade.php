<x-app-layout>
    <x-slot name="header">
    <div class="rui-page-title">
            <div class="container-fluid">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Clientes</li>

                    </ol>
                </nav>
                <h1>
                    {{Request::routeIs('cliente.soporte')?'Tickets de Soporte':''}}
                     {{Request::routeIs('cliente.reuniones')?'Reuniones':''}}
                    {{Request::routeIs('proveedor.backlogs')?'Tus backlogs asignados':''}}
                    {{Request::routeIs('proveedor.pagos')?'Tus pagos':''}}
                    
                </h1>
            </div>
        </div>

    </x-slot>

    <div class="py-2">
    @if(Request::routeIs('cliente.soporte'))
    @livewire('cliente.tickets-soporte')
    @elseif(Request::routeIs('cliente.reuniones'))
    @livewire('cliente.reuniones')
    @elseif(Request::routeIs('proveedor.backlogs'))
    @livewire('proveedor.gestion-backlogs')
    @elseif(Request::routeIs('proveedor.pagos'))
    @livewire('proveedor.gestion-pagos')
    @endif
    </div>
</x-app-layout>
