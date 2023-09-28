<header>
    <h1>Coders free</h1>
    <nav>
        <ul>
            {{-- El ?, es como tener un if, es decir evalua la request, si esto da true, activaria la propiedad
            active, los :, significa un else, como no queremos que imprima, pues solo se ponen dos comillas --}}
            <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}}">Home</a></li>
            {{-- forma php --}}
            {{--< ?php dump(request()->routeIs('home')) ?> --}}
            {{-- @dump(request()->routeIs('home')) con esto se sabe si esta activo --}}

            {{-- <li><a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.index') ? 'active' : ''}}">Cursos</a></li>
            al poner asterisco(*), abarca todo el contenedor --}}
            <li><a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.*') ? 'active' : ''}}">Cursos</a></li>
            <li><a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros') ? 'active' : ''}}">Nosotros</a></li>
            <li><a href="{{route('contactanos.index')}}" class="{{request()->routeIs('contactanos.index') ? 'active' : ''}}">Contactanos</a></li>

        </ul>
    </nav>
</header>