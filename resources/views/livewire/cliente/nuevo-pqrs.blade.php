<div>

        @if (session()->has('envio_pqrs'))
            <script  type="text/javascript">
                    toastr.success('Se procesó un nuevo PQRS con exito!!', 'Bien hecho!!');
            </script>
        @endif

        <section class="flexbox-container">
            <div class="col-12 d-flex align-items-center justify-content-center">
                <div class="col-md-12 col-10 box-shadow-2 p-0">
                <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                    <div class="card-header border-0 pb-0">
                    <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                        <span style="font-size:20px;">GENERAR NUEVO PQRS</span>
                    </h6>
                    </div>
                    <div class="card-content">

                    @if(!$confir_envio_pqrs)
                        <div class="card-body">
                            <form class="form-horizontal">
                                <div class="row justify-content-center">
                                    @if($errors->count() > 0)
                                        <div class="alert bg-danger alert-dismissible mb-2" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <strong>Lo sentimos!</strong> Algunos campo estan vacios o tienen errores, por favor corrija y vuelva a intentarlo nuevamente.
                                        </div>
                                    @endif

                                    <div class="form-group position-relative has-icon-left col-md-10">
                                        <select class="form-control" wire:model.defer="t_pqrs">
                                            <option value=""selected>Seleccionar tipo de solicitud (obligatorio)*</option>
                                            @foreach($tipos as $tipo)
                                            <option value="{{ $tipo->id }}"> {{ $tipo->t_pqr }} </option>
                                            @endforeach

                                        </select>
                                        @error('t_pqrs') <span style="color:red;">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group position-relative has-icon-left col-md-10">
                                        <textarea class="form-control" wire:model.defer="descripcion_pqrs" placeholder="Describa aquí el contenido de su petición... (obligatorio)*" cols="30" rows="10"></textarea>
                                        @error('descripcion_pqrs') <span style="color:red;">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group position-relative has-icon-left col-md-10">
                                        <p>Puede anexar un documento de ser necesario, (tamaño Max 2mb.)</p>
                                        <input type="file" class="form-control" wire:model.defer="archivo_solicitud">
                                    </div>

                                    <div class="col-md-8 row justify-content-center">
                                        <div class="col-md-10">
                                            <a wire:click="enviarPQRS" class="btn btn-outline-success btn-block mt-1"><i class="ft-user"></i> Enviar PQRS</a>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    @else
                        <div class="alert alert-success border-0 alert-dismissible mb-2" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <h4 class="alert-heading mb-2">PQRS procesado con exito!</h4>
                            <p>Su PQRS fue enviado satisfactoriamente, bajo el número de radicado <b>{{ $radicado }}</b></a>,</p>
                            <p class="mb-0">Puede hacer seguimiento a sus radicados aquí <a href="{{ route('mis_pqrs') }}" class="alert-link">Mis PQRS</a> </p>
                        </div>
                    @endif
                    </div>
                </div>
                </div>
            </div>
        </section>



</div>
