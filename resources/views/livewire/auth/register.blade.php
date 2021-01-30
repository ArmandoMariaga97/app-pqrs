<div>

    <div style="background:#15b3ff;" class="app-content content">
        <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="flexbox-container">
            <div class="col-12 d-flex align-items-center justify-content-center">
                <div class="col-md-8 col-10 box-shadow-2 p-0">
                <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                    <div class="card-header border-0 pb-0">
                    <div class="col-md-12 row justify-content-center">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <img style="max-width:100%;" src="/img/logo.png" alt="branding logo">
                        </div>
                    </div>
                    <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                        <span>Formulario de registro</span>
                    </h6>
                    </div>
                    <div class="card-content">

                    @if(!$confir_register)
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

                                    @if($password != $password_confir)
                                        <div class="alert bg-warning alert-dismissible mb-2" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <strong>Algo no anda bien!</strong> Las contraseñas no coinciden
                                        </div>
                                    @endif

                                    <div class="form-group position-relative has-icon-left col-md-12">
                                        <input type="text" class="form-control" wire:model.defer="name" placeholder="Nombre completo / Razón social">
                                        @error('name') <span style="color:red;">{{ $message }}</span> @enderror
                                        <div class="form-control-position">
                                            <i class="ft-user"></i>
                                        </div>
                                    </div>

                                    <div class="form-group position-relative has-icon-left col-md-6">
                                        <select class="form-control" wire:model.defer="t_documento">
                                            <option value="">Tipo de documento</option>
                                            <option value="Cedula de ciudadania">Cédula de ciudadania</option>
                                            <option value="Nit">Nit</option>
                                        </select>
                                        @error('t_documento') <span style="color:red;">{{ $message }}</span> @enderror
                                        <div class="form-control-position">
                                            <i class="ft-user"></i>
                                        </div>
                                    </div>

                                    <div class="form-group position-relative has-icon-left col-md-6">
                                        <input type="number" class="form-control" wire:model.defer="documento" placeholder="Documento">
                                        @error('documento') <span style="color:red;">{{ $message }}</span> @enderror
                                        <div class="form-control-position">
                                            <i class="ft-user"></i>
                                        </div>
                                    </div>

                                    <div class="form-group position-relative has-icon-left col-md-6">
                                        <input type="email" class="form-control" wire:model.defer="email" placeholder="Correo">
                                        @error('email') <span style="color:red;">{{ $message }}</span> @enderror
                                        <div class="form-control-position">
                                            <i class="ft-mail"></i>
                                        </div>
                                    </div>

                                    <div class="form-group position-relative has-icon-left col-md-6">
                                        <input type="number" class="form-control" wire:model.defer="celular" placeholder="Celular">
                                        @error('celular') <span style="color:red;">{{ $message }}</span> @enderror
                                        <div class="form-control-position">
                                            <i class="ft-phone"></i>
                                        </div>
                                    </div>

                                    <div class="form-group position-relative has-icon-left col-md-6">
                                        <select class="form-control" wire:model.defer="ciudad">
                                            <option value="" selected>Seleccionar Ciudad</option>
                                            <option value="Arauca">Arauca</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Barranquilla">Barranquilla</option>
                                            <option value="Bogotá">Bogotá</option>
                                            <option value="Bucaramanga">Bucaramanga</option>
                                            <option value="Cali">Cali</option>
                                            <option value="Cartagena">Cartagena</option>
                                            <option value="Cúcuta">Cúcuta</option>
                                            <option value="Florencia">Florencia</option>
                                            <option value="Ibagué">Ibagué</option>
                                            <option value="Leticia">Leticia</option>
                                            <option value="Manizales">Manizales</option>
                                            <option value="Medellín">Medellín</option>
                                            <option value="Mitú">Mitú</option>
                                            <option value="Mocoa">Mocoa</option>
                                            <option value="Montería">Montería</option>
                                            <option value="Neiva">Neiva</option>
                                            <option value="Pasto">Pasto</option>
                                            <option value="Pereira">Pereira</option>
                                            <option value="Popayán">Popayán</option>
                                            <option value="Puerto Carreño">Puerto Carreño</option>
                                            <option value="Puerto Inírida">Puerto Inírida</option>
                                            <option value="Quibdó">Quibdó</option>
                                            <option value="Riohacha">Riohacha</option>
                                            <option value="San Andrés">San Andrés</option>
                                            <option value="San José del Guaviare">San José del Guaviare</option>
                                            <option value="Santa Marta">Santa Marta</option>
                                            <option value="Sincelejo">Sincelejo</option>
                                            <option value="Tunja">Tunja</option>
                                            <option value="Valledupar">Valledupar</option>
                                            <option value="Villavicencio">Villavicencio</option>
                                            <option value="Yopal">Yopal</option>
                                        </select>
                                        @error('ciudad') <span style="color:red;">{{ $message }}</span> @enderror
                                        <div class="form-control-position">
                                            <i class="ft-home"></i>
                                        </div>
                                    </div>

                                    <div class="form-group position-relative has-icon-left col-md-6">
                                        <input type="text" class="form-control" wire:model.defer="direccion" placeholder="Dirección">
                                        @error('direccion') <span style="color:red;">{{ $message }}</span> @enderror
                                        <div class="form-control-position">
                                            <i class="ft-home"></i>
                                        </div>
                                    </div>

                                    <div class="form-group position-relative has-icon-left col-md-6">
                                        <input type="password" class="form-control" wire:model.defer="password"  placeholder="Escribir contraseña">
                                        @error('password') <span style="color:red;">{{ $message }}</span> @enderror
                                        <div class="form-control-position">
                                            <i class="la la-key"></i>
                                        </div>
                                    </div>

                                    <div class="form-group position-relative has-icon-left col-md-6">
                                        <input type="password" class="form-control" wire:model.defer="password_confir" placeholder="Confirmar contraseña">
                                        @error('password_confir') <span style="color:red;">{{ $message }}</span> @enderror
                                        <div class="form-control-position">
                                            <i class="la la-key"></i>
                                        </div>
                                    </div>

                                    <div class="col-md-8 row justify-content-center">
                                    <div class="col-md-10">
                                        <a wire:click="registrar_cliente()" class="btn btn-outline-success btn-block mt-1"><i class="ft-user"></i> Completar registro</a>
                                    </div>
                                    <div class="col-md-5">
                                        <a href="{{ route('login') }}" class="btn btn-outline-danger btn-block mt-1"><i class="ft-unlock"></i> Iniciar Sesión</a>
                                    </div>
                                    <div class="col-md-5">
                                        <a href="{{ route('/') }}" class="btn btn-outline-warning btn-block mt-1"><i class="ft-home"></i> Inicio</a>
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
                            <h4 class="alert-heading mb-2">Registro procesado con exito!</h4>
                            <p>Su registro se realizó de manera exitosa, para iniciar sesión precione <a href="{{ route('login') }}" class="alert-link">iniciar sesión</a>,</p>
                            <p class="mb-0">O si desea puede regresar al <a href="{{ route('/') }}" class="alert-link">inicio</a> </p>
                        </div>
                    @endif
                    </div>
                </div>
                </div>
            </div>
            </section>
        </div>
        </div>
    </div>


</div>
