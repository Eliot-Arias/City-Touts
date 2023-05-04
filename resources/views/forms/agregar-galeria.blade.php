@extends('index')

@section('title', 'galery-form')
@section('content')
    <div class="container">
        <div class="row align-items-md-stretch mt-3">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card h-100 bg-light text-center border rounded-3">
                    <div class="card-header">
                        <h2>Crear Paquete</h2>
                        <a name="" id="" class="btn btn-light btn-outline-secondary"
                            href=" {{ route('inicio') }} " role="button">Ver Inicio</a>
                    </div>
                    <div class="card-body">
                        <form action=" {{ route('guardar') }} " method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 row">
                                <label for="nombre" class="col-sm-4 col-form-label">Nombre</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="nombre" id="nombre"
                                        placeholder="Nombre">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="descripcion" class="col-sm-4 col-form-label">Descripcion</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" name="descripcion" id="descripcion" rows="5"></textarea>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="precio" class="col-sm-4 col-form-label">Precio</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="precio" id="precio"
                                        placeholder="Precio">
                                </div>
                            </div>
                            
                            <div class="mb-3 row">
                                <label for="img" class="col-sm-4 col-form-label">Imagen</label>
                                <div class="col-sm-8">
                                    <input type="file" class="form-control" name="img" id="img" placeholder="" aria-describedby="fileHelpId">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-8">
                                    <button type="submit" class="btn btn-light btn-outline-secondary">Guardar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection