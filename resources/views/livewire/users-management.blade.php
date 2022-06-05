<div>
    @switch('action')

        @case('formUser')

        @break

        @default
        <div class='row'>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="text-right">

                            <button type="button" class="btn btn-success">
                                <span class="btn-label">
                                    <i class="fa fa-plus"></i>
                                </span>
                                Agregar
                            </button>
                            <div class='pull-left'>
                                <h4 class="card-title">Gestionar Usuarios</h4>

                            </div>

                        </div>

                    </div>
                    <div class="card-content table-responsive">
                        <div class='row'>
                            <div class='col-lg-4'>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                    <input type="text" wire:model='filter' class="form-control" placeholder="Buscar...">
                                </div>
                            </div>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Nombre</th>
                                    <th>Empresas</th>
                                    <th class="text-right">Email</th>
                                    <th class="text-right">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $key=>$user)
                                <tr>
                                    <td class="text-center">{{ $key+1 }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>@forelse($user->companies as $company)
                                    <li>{{ $company->name }}</li>
                                    @empty
                                    <i>No hay una empresa asignada a este usuario</i>
                                    @endforelse
                                    </td>
                                    <td class="text-right">{{ $user->email }}</td>
                                    <td class="td-actions text-right">
                                        <a href="#" rel="tooltip" title="" class="btn btn-info btn-simple btn-xs" data-original-title="Ver Perfil">
                                            <i class="ti-user"></i>
                                        </a>
                                        <a href="#" rel="tooltip" title="" class="btn btn-success btn-simple btn-xs" data-original-title="Editar Perfil">
                                            <i class="ti-pencil-alt"></i>
                                        </a>
                                        <a href="#" rel="tooltip" title="" class="btn btn-danger btn-simple btn-xs" data-original-title="Bloquear">
                                            <i class="ti-close"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>


        @break


    @endswitch
</div>
