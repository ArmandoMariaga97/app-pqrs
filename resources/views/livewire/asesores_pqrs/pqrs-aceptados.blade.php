<div>

    @if (session()->has('aceptado'))
        <script  type="text/javascript">
                toastr.success('Radicado aceptado con exito.', 'Bien hecho!!');
        </script>
    @endif

    @if (session()->has('aceptado_fail'))
        <script  type="text/javascript">
                toastr.error('Esta radicado ya ha sido tomado po otro asesor.', 'Lo sentimos!!');
        </script>
    @endif

    <div class="row">

    @include("livewire.asesores_pqrs.respuesta")


        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2 align="center" class="card-title">PQRS ACEPTADOS <span style="color:green;">( #{{ $pqrs_aceptados->count() }} )</span></h2>
                </div>
                <hr>
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
                            @forelse($pqrs_aceptados as $pqrs)
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
                                                <buttom wire:click="mostarform({{ $pqrs->id }})" class="btn btn-success" title="Responder PQRS"><i class="icon-pencil"></i></buttom>
                                            </div>
                                        </div>                
                                    </td>
                                </tr>

                                @include("livewire.asesores_pqrs.detalle_pqrs")

                            @empty
                                <td align="center" colspan="5">No hay PQRS Aceptados</td>
                            @endforelse
                        </tbody>
                    </table>
                    <img src="http://pqrs.solucionesttottos.com/uploads/archivos/gPES87XYrQ8b06ptW0hO2sEvm94aLe.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
