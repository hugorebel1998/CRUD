@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-info-circle"></i>
                        {{ __('Detalle de producto') }}
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6 ">
                                <p>
                                    <i class="fas fa-fingerprint"></i>
                                    {{ __(' ID del producto') }}
                                    <b>{{ $producto->id }}</b>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p>
                                    <i class="fas fa-signature"></i>
                                    {{__('Nombre del articulo')}}
                                    
                                    <b>{{ $producto->NombreArticulo }}</b>
                                </p>
                            </div>
                            <div class="col-md-6 pt-4">
                                <p>
                                    <i class="fas fa-puzzle-piece"></i>
                                    {{__('Seccion al que pertenece')}}
                                    <b>{{ $producto->Seccion }}</b>
                                </p>

                            </div>
                            <div class="col-md-6 pt-4">
                                <p> 
                                    <i class="fas fa-donate"></i>
                                    {{__('Precio')}}
                                    <b>{{ $producto->Precio }}</b>
                                </p>

                            </div>
                            <div class="col-md-6 pt-4">
                                <p>
                                    <i class="fas fa-flag"></i>
                                {{__('País de origen')}}
                                    <b>{{ $producto->PaisOrigen }}</b>
                                </p>

                            </div>
                            <div class="col-md-6 pt-4">
                                <p>
                                    <i class="fas fa-calendar-alt"></i>
                                    {{__('Fecha de compra')}}
                                    <b>{{ $producto->Fecha }}</b>
                                </p>

                            </div>
                        </div>
                        <div class="text-center mt-5">
                            <a href="{{ route('productos.index') }} " class="btn btn-sm btn-info text-white"><i
                                    class="fas fa-undo-alt text-white"></i> Atras</a>
                        </div>
                    </div>

                </div>


            </div>

        </div>

    </div>

@endsection
