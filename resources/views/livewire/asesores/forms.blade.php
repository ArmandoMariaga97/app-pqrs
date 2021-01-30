
            <div class="col-md-12">
              <div class="card ">

                <div x-show="!form_edit" class="card-header">
                    <h4 align="center" class="card-title text-green form-create">REGISTRAR NUEVO ASESOR</h4>
                    <hr>
                </div>

                <div x-show="form_edit" class="card-header">
                    <h4 align="center" class="card-title text-green form-create">ACTUALIZAR ASESOR</h4>
                    <hr>
                </div>

                <div class="card-content collapse show">
                    <div class="card-body">

                        <div x-show="!form_edit" class="alert bg-info alert-icon-right alert-dismissible mb-2" role="alert">
                                <span class="alert-icon"><i class="la la-info-circle"></i></span>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <strong>Importante!</strong> Los asesores registrados por este medio, su <b>usuario será su correo</b> y su <b>contraseña será su documento</b>
                        </div>

                        <div x-show="form_edit" class="alert bg-warning alert-icon-right alert-dismissible mb-2" role="alert">
                                <span class="alert-icon"><i class="la la-info-circle"></i></span>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <strong>Importante!</strong> Tenga en cuenta, que si modifica el Correo, actualizará también el <b>Usuario de acceso del Asesor.</b>
                        </div>

                            <form class="form-horizontal">
                                <div class="row justify-content-left">
                                    <div class="form-group position-relative has-icon-left col-md-12">
                                        <label for="">Nombre Completo:</label>
                                        <input type="text" class="form-control" x-model="name" placeholder="Nombre completo">
                                        @error('name') <span style="color:red;">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group position-relative has-icon-left col-md-6">
                                        <label for="">Documento de identidad::</label>
                                        <input type="number" class="form-control" x-model="documento" placeholder="Documento">
                                        @error('documento') <span style="color:red;">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group position-relative has-icon-left col-md-6">
                                        <label for="">Correo:</label>
                                        <input type="email" class="form-control" x-model="email" placeholder="Correo">
                                        @error('email') <span style="color:red;">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group position-relative has-icon-left col-md-6">
                                        <label for="nmae">Celular:</label>
                                        <input type="number" class="form-control" x-model="celular" placeholder="Celular">
                                        @error('celular') <span style="color:red;">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group position-relative has-icon-left col-md-6">
                                        <label for="">Ciudad:</label>
                                        <select class="form-control" x-model="ciudad">
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
                                    </div>

                                    <div class="form-group position-relative has-icon-left col-md-6">
                                        <label for="">Dirección:</label>
                                        <input type="string" class="form-control" x-model="direccion" placeholder="dirección">
                                        @error('direccion') <span style="color:red;">{{ $message }}</span> @enderror
                                    </div>

                                    <div x-show="!form_edit" align="center" class="col-md-12 row justify-content-center">
                                            <div class="col-md-5">
                                                <a x-on:click="open_form = false, $wire.limpiarcampos()" class="btn btn-outline-danger btn-block mt-1">Cancelar registro</a>
                                            </div>
                                            <div class="col-md-5">
                                                <a x-on:click="$wire.registrar()" class="btn btn-outline-success btn-block mt-1">Procesar registro</a>
                                            </div>
                                    </div>

                                    <div x-show="form_edit"  align="center" class="col-md-12 row justify-content-center">
                                        <div class="col-md-5">
                                            <a x-on:click="open_form = false, $wire.limpiarcampos()" class="btn btn-outline-danger btn-block mt-1">Cancelar actualización</a>
                                        </div>
                                        <div x-show="form_edit" class="col-md-5">
                                            <a x-on:click="$wire.update()" class="btn btn-outline-primary btn-block mt-1">Actualizar Asesor</a>
                                        </div>
                                    </div>

                                </div>
                            </form>
                    </div>
                </div>
              </div>
            </div>
