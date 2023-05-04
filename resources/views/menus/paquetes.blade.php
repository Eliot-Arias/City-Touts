@extends('index')

@section('title', 'paquetes')

@section('content')
    <div class="container galery">
        <div class="galery__container gap-2">
            @foreach ($imagenes as $imagen)
                <div class="galery__container--item">
                    <div><a href=""><img src="{{ asset($imagen->img) }}" alt="" class="galery--img mb-1"></a>
                    </div>
                    <div class="galery__container--descripcion">
                        <h4> {{ $imagen->nombre }} </h4>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
