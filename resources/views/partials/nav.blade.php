<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
    <!--<pre> {{ dump(request()->path()) }} </pre>-->
    <a class="navbar-brand" href="#">Menú</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <!-- si existe un usuario autenticado actualmente -->
        @if (auth()->check())
            @if (auth()->user()->hasRoles(['Administrador']))
            <div class="btn-group-vertical">  
                <li class="nav-item active">
                    <a class="btn btn-outline-success btn-sm" href="{{ route('producto.index') }}">Productos</a>
                </li>
                <li class="nav-item active">
                    <a class="btn btn-outline-success btn-sm" href="{{ route('venta.index') }}">Ventas</a>
                </li>
                <li class="nav-item active">
                    <a class="btn btn-outline-success btn-sm" href="{{ route('cliente.index') }}">Clientes</a>
                </li>
                <li class="nav-item active">
                    <a class="btn btn-outline-success btn-sm" href="{{ route('personal.index') }}">Personal</a>
                </li>
            </div>
            @endif
            @if (auth()->user()->hasRoles(['Vendedor']))
            <div class="btn-group-vertical">            
                <li class="nav-item active">
                    <a class="btn btn-outline-success btn-sm" href="{{ route('venta.index') }}">Ventas</a>
                </li>
                <li class="nav-item active">
                    <a class="btn btn-outline-success btn-sm" href="{{ route('consultaPersonal.index') }}">Consultar personal</a>
                </li>
                <li class="nav-item active">
                    <a class="btn btn-outline-success btn-sm" href="{{ route('consultaProducto.index') }}">Consultar productos</a>
                </li>
                <li class="nav-item active">
                    <a class="btn btn-outline-success btn-sm" href="{{ route('consultaUsuario.index') }}">Consultar Usuarios</a>
                </li>
            </div>
            @endif
            @if (auth()->user()->hasRoles(['Consulta']))
            <div class="btn-group-vertical">  
                <li class="nav-item active">
                    <a class="btn btn-outline-success btn-sm" href="{{ route('consultaPersonal.index') }}">Consultar personal</a>
                </li>
                <li class="nav-item active">
                    <a class="btn btn-outline-success btn-sm" href="{{ route('consultaProducto.index') }}">Consultar productos</a>
                </li>
                <li class="nav-item active">
                    <a class="btn btn-outline-success btn-sm" href="{{ route('consultaVenta.index') }}">Consultar Ventas</a>
                </li>
                <li class="nav-item active">
                    <a class="btn btn-outline-success btn-sm" href="{{ route('consultaUsuario.index') }}">Consultar Usuarios</a>
                </li>
            </div>
            @endif
        @endif
        <!-- sólo si es un usuario invitado -->
        @if (auth()->guest())
        <div class="btn-group-vertical">  
            <li class="nav-item active">
                <a class="btn btn-outline-success btn-sm" href="{{ route('consultaPersonal.index') }}"> Consultar personal</a>
            </li>
            <li class="nav-item active">
                <a class="btn btn-outline-success btn-sm" href="{{ route('consultaProducto.index') }}">Consultar productos</a>
            </li>
            <li class="nav-item active">
                <a class="btn btn-outline-success btn-sm" href="{{ route('consultaVenta.index') }}">Consultar Ventas</a>
            </li>
            <li class="nav-item active">
                <a class="btn btn-outline-success btn-sm" href="{{ route('consultaUsuario.index') }}"> Consultar Usuarios</a>
            </li>
            <br>
            <li class="nav-item active">
                <a class="btn btn-warning btn-lg" href="{{ route('login') }}">Autenticarse</a>
            </li>
        </div>
        @else 
        <li class="dropdown">
            <a class="nav-link dropdown-toggle" 
                href="{{ route('producto.index') }}" data-toggle="dropdown">
                {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
                <li class="nav-item">
                    <li>
                        <a class="dropdown-item btn-lg" href="{{ route('logout') }}">Cerrar sesión</a>
                    <li>
                </li>
            </ul>
        </li>
        @endif
        </ul>
    </div>
</nav>