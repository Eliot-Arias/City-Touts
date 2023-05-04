<nav class="navbar navbar-expand-sm navbar-light" id="neubar">
    <div class="container">
        {{-- <a class="navbar-brand" href=""><img src="{{ asset('images/logo/logo.png') }}" height="80" /></a> --}}
        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto ">
                <li class="nav-item">
                    <a class="nav-link mx-2 {{ request()->routeIs('inicio') ? 'active' : '' }}" aria-current="page"
                        href=" {{ route('inicio') }} ">INICIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2 {{ request()->routeIs('paquetes') ? 'active' : '' }}"
                        href=" {{ route('paquetes') }}">PAQUETES TURISTICOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2 {{ request()->routeIs('tips') ? 'active' : '' }}"
                        href="{{ route('tips') }}">TIPS DE VIAJE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2 {{ request()->routeIs('contacto') ? 'active' : '' }}"
                        href="{{ route('contacto') }}">CONTACTO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2 {{ request()->routeIs('nosotros') ? 'active' : '' }}"
                        href="{{ route('nosotros') }}">NOSOTROS</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
