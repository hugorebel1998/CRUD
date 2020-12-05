@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 mt-3">
                <div class="card">
                    <div class="card-header">
                        {{ __('Productos') }}
                    </div>
                    <div class="card-body mt-4">
                        <div class="text-right mb-3">
                            <a href="{{ route('productos.create') }}" class="btn btn-sm btn-success"><i
                                    class="fas fa-plus"></i> {{ __('Crearproducto') }}</a>
                        </div>
                        <div class="table table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nombre de producto</th>
                                        <th scope="col">Seccion</th>
                                        <th scope="col">Precio</th>
                                        <th scope="col">País</th>
                                        <th scope="col">Fecha</th>
                                        <th colspan="1">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productos as $producto)
                                        <tr>
                                            <td>{{ $producto->id }}</td>
                                            <td>{{ $producto->NombreArticulo }}</td>
                                            <td>{{ $producto->Seccion }}</td>
                                            <td>{{ $producto->Precio }}</td>
                                            <td>{{ $producto->PaisOrigen }}</td>
                                            <td>{{ $producto->Fecha }}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-sm btn-info dropdown-toggle text-white"
                                                        type="button" id="dropdownMenu2" data-toggle="dropdown">
                                                        <i class="fas fa-cogs"></i>
                                                        {{ __('Acciones') }}
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                        <a href="{{ route('productos.show', $producto->id) }}"
                                                            class="btn btn-link text-secondary"><i
                                                                class="fas fa-cogs text-primary"></i> Ver producto</a>
                                                        <a href="{{ route('productos.edit', $producto->id) }}"
                                                            class="btn btn-link text-secondary"><i
                                                                class="fas fa-edit text-success"></i> Editar producto</a>
                                                        <a href="{{ route('productos.delete', $producto->id) }}"
                                                            class="btn btn-link text-secondary"><i
                                                                class="far fa-trash-alt text-danger"></i> Eliminar
                                                            producto</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection
