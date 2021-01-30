<div>


        <div class="row">


            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 align="center" class="card-title">CLIENTES REGISTRADOS</h2>
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
                                        <option value="ciudad">Ordenar por Ciudad</option>
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
                                <th style="width:15%;">Nombres</th>
                                <th style="width:20%;">Correo</th>
                                <th style="width:15%;">Celular</th>
                                <th style="width:15%;">Ciudad</th>
                                <th style="width:15%;">Dirección</th>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse($clientes as $cliente)
                                    <tr>
                                        <td>{{ $cont }}.</td>
                                        <td>{{ $cliente->documento }}</td>
                                        <td>{{ $cliente->name }}</td>
                                        <td>{{ $cliente->email }}</td>
                                        <td>{{ $cliente->celular }}</td>
                                        <td>{{ $cliente->ciudad }}</td>
                                        <td>{{ $cliente->direccion }}</td>

                                    </tr>
                                    <p style="display:none;">{{ $cont++ }}</p>


                                @empty
                                    <td align="center" colspan="6">Sin resultados</td>
                                @endforelse
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
