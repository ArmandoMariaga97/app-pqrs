<div>


    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2 align="center" class="card-title">TODOS PQRS<span style="color:green;">( #{{ $pqrs_pend->count() }} )</span></h2>
                </div>
                <hr>
                <div class="col-md-12 row justify-content-center mb-1">
                    <div class="col-md-6">
                        <input type="text" class="form-control" wire:model="buscar" placeholder="Buscar por radicado...">
                    </div>
                    <div class="col-md-3">
                        <select  class="form-control" wire:model="orderBy">
                            <option value="radicado">Ordenar por radicado</option>
                            <!-- <option value="name">Ordenar por cliente</option> -->
                            <option value="t_pqr">Ordenar por tipo PQRS</option>
                            <option value="estado">Ordenar por Estado</option>
                            <option value="created_at">Ordenar por Fecha</option>
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

                <div class="card-content collapse show">
                    <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                        <tr>
                            <th style="width:10%;"># Radicado</th>
                            <th style="width:20%;">Tipo PQRS</th>
                            <th style="width:20%;">Cliente</th>
                            <th style="width:20%;">Estado</th>
                            <th style="width:20%;">Fecha Radicado</th>
                            <th style="width:10%;">&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse($pqrs_pend as $pqrs)
                                <tr>
                                    <td># <span style="color:green;">{{ $pqrs->radicado }}</span></td>
                                    
                                    <td>{{ $pqrs->tipoRadicado->t_pqr}}</td>

                                    <td>{{ $pqrs->clienteCreador->name}}</td>

                                    @if($pqrs->estado == 1)
                                        <td> <span style="width:100%;" class="badge badge-warning"> Pendiente por aceptación</span></td>
                                    @endif

                                    @if($pqrs->estado == 2)
                                        <td> <span style="width:100%;" class="badge badge-primary"> Aceptado por asesor</span></td>
                                    @endif

                                    @if($pqrs->estado == 3)
                                        <td> <span style="width:100%;" class="badge badge-success"> Finalizado se brindo una respuesta</span></td>
                                    @endif

                                    <td> {{ $pqrs->created_at }} </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <buttom data-toggle="modal" data-target="#detalle-{{ $pqrs->id }}" class="btn btn-warning" title="Ver PQRS"><i class="icon-eye"></i></buttom>
                                            </div>
                                        </div>                
                                    </td>
                                </tr>

                                @include("livewire.asesores_pqrs.detalle_pqrs")

                            @empty
                                <td align="center" colspan="5">No hay PQRS Registrados</td>
                            @endforelse
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
