@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Crear productos') }}
                    </div>
                    <div class="card-body">
                        <form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 pb-4">
                                    <label for="NombreArticulo">{{ __('Nombre de producto') }}</label>
                                    <input type="text" class="form-control @error('NombreArticulo') is-invalid @enderror"
                                        name="NombreArticulo" value="{{ old('NombreArticulo') }}">
                                    @error('NombreArticulo')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 pb-4">
                                    <label for="Seccion">{{ __('Sección') }}</label>
                                    <input type="text" class="form-control @error('Seccion') is-invalid @enderror"
                                        name="Seccion" value="{{ old('Seccion') }}">
                                    @error('Seccion')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 pb-4">
                                    <label for="Precio">{{ __('Precio') }}</label>
                                    <input type="number" class="form-control @error('Precio') is-invalid @enderror"
                                        name="Precio" value="{{ old('Precio') }}">
                                    @error('Precio')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 pb-4">
                                    <label for="PaisOrigen">{{ __('País de Origen') }}</label>
                                    <input type="text" class="form-control @error('PaisOrigen') is-invalid @enderror"
                                        name="PaisOrigen" value="{{ old('PaisOrigen') }}">
                                    @error('PaisOrigen')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 pb-4">
                                    <label for="Fecha">{{ __('Fecha') }}</label>
                                    <input type="date" class="form-control @error('Fecha') is-invalid @enderror"
                                        name="Fecha" value="{{ old('Fecha') }}">
                                    @error('Fecha')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-12 text-center mt-4">
                                    <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
                                </div>
                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection
