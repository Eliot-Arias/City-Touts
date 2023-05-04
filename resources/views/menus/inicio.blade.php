@extends('index')

@section('title', 'inicio')

@section('content')
@include('menus.slider')
    <div class="container-fluid galery">
        <div class="text-center mt-2">
            <h1 class="fw-bold" style="font-family: monospace">Destinos Turisticos</h1>
        </div>
        <div class="galery__container gap-2">
            @foreach ($imagenes as $imagen)
                <div class="galery__container--item">
                    <div><a href="{{ route('paquetes') }}"><img src="{{ asset($imagen->img)}}" alt="" class="galery--img mb-1"></a>
                    </div>
                    <div class="galery__container--descripcion">
                        <h4> {{ $imagen->nombre }} </h4>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
