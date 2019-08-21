<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
    <!--<pre> {{ dump(request()->path()) }} </pre>-->
    <a class="navbar-brand" href="#">Menú</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        {{-- <li class="nav-item active">
            <a class="nav-link" href="{{ route('inicio') }}">Inicio <span class="sr-only">(current)</span></a>
        </li> --}}
        <!-- si existe un usuario autenticado actualmente -->
        @if (auth()->check())
        {{-- <li class="nav-item active">
            <a class="nav-link" href="{{ route('producto.index') }}">Productos</a>
        </li> --}}
            @if (auth()->user()->hasRoles(['Administrador']))
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('producto.index') }}">
                        Productos
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('cliente.index') }}">
                        Clientes
                    </a>
                </li>
            @endif
            @if (auth()->user()->hasRoles(['Vendedor']))
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('usuarios.index') }}">Ventas</a>
                </li>
            @endif
        @endif
        <!-- sólo si es un usuario invitado -->
        @if (auth()->guest())
        <li class="nav-item active">
            <a href="{{ route('login') }}">Autenticarse</a>
        </li>
        @else 
        <li class="dropdown">
            <a class="nav-link dropdown-toggle" 
                href="{{ route('producto.index') }}" data-toggle="dropdown">
                {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
                <li class="nav-item">
                    <li><a class="dropdown-item" 
                            href="{{ route('logout') }}">Cerrar sesión
                    </a><li>
                </li>
            </ul>
        </li>
        @endif
        </ul>
    </div>
</nav>