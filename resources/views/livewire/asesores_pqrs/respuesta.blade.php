@if($form_respuesta)
            @foreach($pqrs_aceptados as $pqrs)
                @if($pqrs->id == $pqrs_id )
                    <div style="border: solid 1px blue; border-radius:5px;" class="modal-content">
                        <div style="background:blue; border-radius:5px 5px 0 0;" class="modal-header">
                        <label class="modal-title text-white text-text-bold-600" > </label>
                        </div>
                        <div class="modal-body">
            
                            <div class="row">
                                <div class="col-md-12">
                                    <h4><b>Radicado #{{ $pqrs->radicado }}</b></h4>
                                    <p><b>cliente:</b> {{ $pqrs->clienteCreador->name }}</p>
                                    <p><b>Descripción del PQRS:</b> {{ $pqrs->descripcion_solicitud }}</p>
                                </div>
            
                                <div class="form-group position-relative has-icon-left col-md-12">
                                    <textarea class="form-control" wire:model.defer="respuesta" placeholder="Describa aqui su respuesta para este PQRS... (obligatorio)*" cols="30" rows="10"></textarea>
                                    @error('respuesta') <span style="color:red;">{{ $message }}</span> @enderror
                                </div>
            
                                <div class="form-group position-relative has-icon-left col-md-12">
                                    <p>Puede anexar un documento de ser necesario, (tamaño Max 2mb.)</p>
                                    <input type="file" class="form-control" wire:model.defer="archivo_respuesta">
                                </div>
                            </div>
            
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-outline-success" wire:click="enviarRespuesta({{ $pqrs->id }})"  data-dismiss="modal">Enviar respuesta</button>
                        </div>  
            
                    </div>
                @endif
            @endforeach
        @endif