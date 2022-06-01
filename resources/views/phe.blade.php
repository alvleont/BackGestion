<x-app-layout>
    <x-slot name="header">


        <div class="rui-page-title">
            <div class="container-fluid">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Colaboradores</li>

                    </ol>
                </nav>
                <h1>
                    {{Request::routeIs('phe.backlogs')?'Backlogs':''}}
                    {{Request::routeIs('proveedor.backlogs')?'Tus backlogs asignados':''}}
                    {{Request::routeIs('proveedor.pagos')?'Tus pagos':''}}
                    
                </h1>
            </div>
        </div>



    </x-slot>

    
    @if(Request::routeIs('phe.backlogs'))
    @livewire('gestionbacklog')
    @elseif(Request::routeIs('proveedor.backlogs'))
    @livewire('proveedor.gestion-backlogs')
    @elseif(Request::routeIs('proveedor.pagos'))
    @livewire('proveedor.gestion-pagos')
    @endif

</x-app-layout>