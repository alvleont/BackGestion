<x-app-layout>
    <x-slot name="header">
    <div class="rui-page-title">
            <div class="container-fluid">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Proveedores</li>

                    </ol>
                </nav>
                <h1>
                    {{Request::routeIs('proveedor.marketplace')?'Marketplace':''}}
                    {{Request::routeIs('proveedor.backlogs')?'Tus backlogs asignados':''}}
                    {{Request::routeIs('proveedor.pagos')?'Tus pagos':''}}
                    
                </h1>
            </div>
        </div>

    </x-slot>

    <div class="py-2">
    @if(Request::routeIs('proveedor.marketplace'))
    @livewire('proveedor.market-place')
    @elseif(Request::routeIs('proveedor.backlogs'))
    @livewire('proveedor.gestion-backlogs')
    @elseif(Request::routeIs('proveedor.pagos'))
    @livewire('proveedor.gestion-pagos')
    @endif
    </div>
</x-app-layout>
