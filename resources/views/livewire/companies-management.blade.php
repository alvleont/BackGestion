<div class='row'>
    <div class="col-md-12">
    @switch($action)
    @case('formCompany')

            <div class="card">
                <div class="card-header">
                    <div class="text-right">

                        <button wire:click="go('')" type="button" class="btn btn-success">
                            <span class="btn-label">
                                <i class="fa fa-undo"></i>
                            </span>
                            Volver
                        </button>
                        <div class='pull-left'>
                            <h4 class="card-title">Crear una Empresa</h4>

                        </div>

                    </div>

                </div>
                <div class="card-content table-responsive">
                    <div class='form-horizontal'>

                        <fieldset>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Nombre</label>
                                <div class="col-sm-10">
                                    <input wire:model='company.name' type="text" class="form-control">
                                    @error('company.name')

                                        <small class='text-danger'>{{ $message }}</small>
                                    @enderror

                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">NIT</label>
                                <div class="col-sm-10">
                                    <input wire:model='company.document' type="text" class="form-control">
                                    @error('company.document')

                                    <small class='text-danger'>{{ $message }}</small>
                                @enderror
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Teléfono</label>
                                <div class="col-sm-6">
                                    <input wire:model='company.phone' type="text" class="form-control">
                                    @error('company.phone')

                                    <small class='text-danger'>{{ $message }}</small>
                                @enderror
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Dirección</label>
                                <div class="col-sm-10">
                                    <input wire:model='company.address' type="text" class="form-control">
                                    @error('company.address')

                                    <small class='text-danger'>{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Correo Electrónico:</label>
                                <div class="col-sm-10">
                                    <input wire:model='company.email' type="text" class="form-control">
                                    @error('company.email')

                                    <small class='text-danger'>{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </fieldset>


                        <fieldset>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Características</label>
                                <div class="col-sm-10">
                                    <div class="checkbox">
                                        <input wire:model='company.is_provider' value=1 type="checkbox">
                                        <label for="checkbox1">
                                             Es Proveedor
                                        </label>
                                        @error('company.is_provider')

                                    <small class='text-danger'>{{ $message }}</small>
                                    @enderror
                                    </div>

                                    <div class="checkbox">
                                        <input wire:model='company.is_client' value=1 type="checkbox">
                                        <label for="checkbox2">
                                             Es Cliente
                                        </label>
                                        @error('company.is_client')

                                    <small class='text-danger'>{{ $message }}</small>
                                    @enderror
                                    </div>


                                </div>
                            </div>
                        </fieldset>
                        <div class='text-right'>
                            <button wire:click='saveCompany' class="btn btn-fill btn-info">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>


    @break
    @case('formCompanyUsers')

    @break
    @default


            <div class="card">
                <div class="card-header">
                    <div class="text-right">

                        <button wire:click='newCompany' type="button" class="btn btn-success">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Agregar
                        </button>
                        <div class='pull-left'>
                            <h4 class="card-title">Gestionar Empresas</h4>

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
                                <th>NIT</th>
                                <th>Empresa</th>
                                <th class="text-right">Email</th>
                                <th class="text-right">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($companies as $key=>$company)
                            <tr>
                                <td class="text-center">{{ $key+1 }}</td>
                                <td>{{ $company->document }}</td>
                                <td>{{ $company->name }}
                                </td>
                                <td class="text-right">{{ $company->email }}</td>
                                <td class="text-right td-actions">
                                    <a href="#" rel="tooltip" wire:click="viewCompany({{ $company->id }})" class="btn btn-info btn-simple btn-xs" data-original-title="Ver Empresa">
                                        <i class="ti-eye"></i>
                                    </a>
                                    <a href="#" rel="tooltip" wire:click="editCompany({{ $company->id }})"  class="btn btn-success btn-simple btn-xs" data-original-title="Editar Empresa">
                                        <i class="ti-pencil-alt"></i>
                                    </a>
                                    <a href="#" rel="tooltip" wire:click="changeCompanyStatus({{ $company->id }})"  class="btn btn-danger btn-simple btn-xs" data-original-title="Bloquear Empresa">
                                        <i class="ti-close"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    {{ $companies->links('components.lw-pagination') }}
                </div>
            </div>

    @break
    @endswitch
</div>
</div>
