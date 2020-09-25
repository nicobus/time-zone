{{-- inicio barra navegacion lateral de admin --}}
<div class="nav-side-menu">
    <div class="brand">Time Zone</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
    <div class="menu-list">
        <ul id="menu-content" class="menu-content collapse out">
            <li>
                <a href="#">
                    <i class="fa fa-dashboard fa-lg"></i> Dashboard Admin
                </a>
            </li>
            {{-- inicio menu desplegable productos --}}
            <li data-toggle="collapse" data-target="#products" class="collapsed">
                <a href="#"><i class="fa fa-gift fa-lg"></i> Productos <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="products">
                <li class="active"><a href="{{ route('listaProductosAdmin') }}">Lista Productos</a>
                </li>
                <li><a href="{{ route('agregarProductoAdmin') }}">Agregar Producto</a></li>
                <li><a href="{{ route('crearBusqueda') }}">Buscar Producto</a></li>
                <li><a href="{{ route('listaProductosNoDisponiblesAdmin') }}">Productos no
                        disponibles</a></li>
                <li><a href="{{ route('listaProductosSinStockAdmin') }}">Productos sin stock</a></li>
            </ul>
            {{-- fin menu desplegable productos --}}
            {{-- inicio menu desplegable usuarios --}}
            <li data-toggle="collapse" data-target="#users" class="collapsed">
                <a href="#"><i class="fa fa-users fa-lg"></i> Usuarios <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="users">
                <li class="active"><a href="{{ route('listaUsuarios') }}">Lista Usuarios</a></li>
                <li><a href="{{ route('crearBusquedaUsuario') }}">Buscar Usuario</a></li>
            </ul>
            {{-- fin menu desplegable usuarios --}}
            {{-- inicio formulario de logout de sesion --}}
            <li>
                <a class="dropdown-item btn btn-light" href="#"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Salir') }}
                </a>
                <form id="logout-form" action="{{ route('user.logout') }}" method="POST"
                    style="display: none;">
                    @csrf
                </form>
            </li>
            {{-- fin formulario de logout de sesion --}}
        </ul>
    </div>
</div>
{{-- fin barra navegacion lateral admin --}}
