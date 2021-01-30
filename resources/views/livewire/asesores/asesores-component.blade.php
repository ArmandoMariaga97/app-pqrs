<div x-data="
    { open_form: @entangle('open_form').defer,
      form_edit: @entangle('form_edit').defer,

      name: @entangle('name').defer,
      documento: @entangle('documento').defer,
      email: @entangle('email').defer,
      celular: @entangle('celular').defer,
      ciudad: @entangle('ciudad').defer,
      direccion: @entangle('direccion').defer,
      id_asesor: @entangle('id_asesor').defer,

    }">

        @include('livewire.asesores.alerts')

        <div class="row">

            <div x-show="!open_form" class="col-md-12 mb-1">
                <div class="float-md-right">
                    <button x-on:click="open_form = true" class="btn btn-success round btn-glow px-2" type="button" >Agregar Asesor</button>
                </div>
            </div>
            
            <template x-if="open_form">
                @include("livewire.asesores.forms")
            </template>

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 align="center" class="card-title">ASESORES REGISTRADOS</h2>
                    </div>
                    <hr>
                    <div class="card-content collapse show">
                        <div class="row justify-content-center">
                            <div class="col-md-12 row justify-content-center mb-1">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" wire:model="buscar" placeholder="Buscar...">
                                </div>
                                <div class="col-md-3">
                                    <select  class="form-control" wire:model="orderBy">
                                        <option value="documento">Ordenar por documento</option>
                                        <option value="name">Ordenar por Nombres</option>
                                        <option value="email">Ordenar por Correo</option>
                                        <option value="celular">Ordenar por Celular</option>
                                        <option value="direccion">Ordenar por dirección</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select  class="form-control" wire:model="paginate">
                                        <option value="5">Mostrar primeros 5</option>
                                        <option value="10">Mostrar primeros 10</option>
                                        <option value="20">Mostrar primeros 20</option>
                                        <option value="50">Mostrar primeros 50</option>
                                        <option value="1000">Mostrar todos</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                            <tr>
                                <th style="width:5%;">#</th>
                                <th style="width:15%;">Documento</th>
                                <th style="width:20%;">Nombres</th>
                                <th style="width:15%;">Correo</th>
                                <th style="width:15%;">Celular</th>
                                <th style="width:15%;">Dirección</th>
                                <th style="width:15%;">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse($asesores as $asesor)
                                    <tr>
                                        <td>{{ $cont }}.</td>
                                        <td>{{ $asesor->documento }}</td>
                                        <td>{{ $asesor->name }}</td>
                                        <td>{{ $asesor->email }}</td>
                                        <td>{{ $asesor->celular }}</td>
                                        <td>{{ $asesor->direccion }}</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <button x-on:click="open_form = true, $wire.edit({{ $asesor->id }})" class="btn btn-success ir-arriba" title="Editar asesor"><i class="icon-note"></i></button>
                                                </div>
                                                <div class="col-md-6">
                                                    <buttom data-toggle="modal" data-target="#delete-modal-{{ $asesor->id }}" class="btn btn-danger" title="Eliminar asesor"><i class="icon-close"></i></buttom>
                                                </div>
                                            </div>                
                                        </td>
                                    </tr>
                                    <p style="display:none;">{{ $cont++ }}</p>

                                    @include("livewire.asesores.delete")

                                @empty
                                    <td align="center" colspan="7">Sin resultados</td>
                                @endforelse
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
