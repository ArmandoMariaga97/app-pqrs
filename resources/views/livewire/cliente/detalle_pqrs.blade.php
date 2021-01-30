
<div class="modal fade text-left" id="ver-mas-{{ $pqrs->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel9"
    aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div style="border: solid 1px blue; border-radius:5px;" class="modal-content">
        <div style="background:blue; border-radius:5px 5px 0 0;" class="modal-header">
          <label class="modal-title text-white text-text-bold-600" > </label>
        </div>
        <div class="modal-body">

        <section class="card">
            <div id="invoice-template" class="card-body">
                <!-- Invoice Company Details -->
                <div id="invoice-company-details" class="row">
                <div class="col-md-6 col-sm-12 text-center text-md-left">
                    <div class="media">
                    <img src="/img/icono.png" alt="company logo" class="">
                    <div class="media-body">
                        <ul class="ml-2 px-0 list-unstyled">
                            <li class="text-bold-800"><b>Active PQRS</b></li>
                            <li>J&R Technology</li>
                            <li>Emprendimiento dígital</li>
                        </ul>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 text-center text-md-right">
                    <h2> radicado: <b>#{{ $pqrs->radicado }}</b></h2>
                    <p><b>Tipo de PQRS:</b> {{ $pqrs->tipoRadicado->t_pqr }}</p>
                    <p class="pb-3"><b>Fecha solicitud:</b> {{ $pqrs->created_at }}</p>
                    @if($pqrs->estado == 1)
                        <span class="badge badge-warning"> Pendiente por aceptación</span>
                    @endif

                    @if($pqrs->estado == 2)
                        <span class="badge badge-primary"> Aceptado por asesor</span>
                    @endif

                    @if($pqrs->estado == 3)
                        <span class="badge badge-success"> Finalizado se brindo una respuesta</span>
                    @endif
                </div>
                </div>
                <hr>

                <div id="invoice-customer-details" class="row pt-2">
                    <div class="col-sm-12 text-center text-md-left">
                        <p class="text-muted"><b>Datos solicitante PQRS</b></p>
                    </div>
                    <div class="col-md-6 col-sm-12 text-center text-md-left">
                        <ul class="px-0 list-unstyled">
                            <li class="text-bold-800"><b>Nombres:</b> {{ $pqrs->clienteCreador->name }}</li>
                            <li><b>Correo:</b> {{ $pqrs->clienteCreador->email }}</li>
                            <li><b>Celular:</b> {{ $pqrs->clienteCreador->celular }}</li>
                            <li><b>Ciudad:</b> {{ $pqrs->clienteCreador->ciudad }}</li>
                            <li><b>dirección:</b> {{ $pqrs->clienteCreador->direccion }}</li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-12 text-center text-md-left">
                        <ul class="px-0 list-unstyled">
                            <p><b>Archivo Anexo Solicitud:</b> 
                                @if($pqrs->archivo_solicitud == 'No se cargó ningun archivo')
                                    No se cargó ningun archivo
                                @else
                                    <a href="/uploads/archivos/{{ $pqrs->archivo_solicitud }}"  target="_blank">Ver archivo anexo</a>
                                @endif
                            </p>                        
                        </ul>
                    </div>
                </div>

                <!-- Invoice Footer -->
                <div id="invoice-footer">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <h4><b>Descripión solicitud PQRS</b></h4>
                            <p>{{ $pqrs->descripcion_solicitud }}</p>
                        </div>

                    </div>
                </div>
                
                <hr>

                <div id="invoice-customer-details" class="row pt-2">
                    <div class="col-sm-12 text-center text-md-left">
                        <p class="text-muted"><b>Datos Asesor PQRS</b></p>
                    </div>
                    @if($pqrs->asesorPqrs)
                        <div class="col-md-6 col-sm-12 text-center text-md-left">
                            <ul class="px-0 list-unstyled">
                                <li class="text-bold-800"><b>Nombres:</b> {{ $pqrs->asesorPqrs->name }}</li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-12 text-center text-md-left">
                            <ul class="px-0 list-unstyled">
                                <p><b>Archivo Anexo Respuesta:</b> 
                                    @if($pqrs->archivo_respuesta == null)
                                        No se cargó ningun archivo
                                    @else
                                        <a href="/uploads/archivos/{{ $pqrs->archivo_respuesta }}"  target="_blank">Ver archivo anexo</a>
                                    @endif
                                </p>                        
                            </ul>
                        </div>

                        <div class="col-md-6 col-sm-12 text-center text-md-left">
                            <ul class="px-0 list-unstyled">
                                <h4><b>Descripión respuesta PQRS</b></h4>
                                <p>{{ $pqrs->descripcion_respuesta }}</p>
                            </ul>
                        </div>
                        
                    @else
                        <div class="col-md-6 col-sm-12 text-center text-md-left">
                            <ul class="px-0 list-unstyled">
                                <li class="text-bold-800"><p>No se ha asignado ningún asesor a este radicado.</p></li>
                            </ul>
                        </div>
                    @endif
                </div>

            </div>
            </section>

        </div>
        <div class="modal-footer">
           <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
        </div>  

    </div>
  </div>
</div>

