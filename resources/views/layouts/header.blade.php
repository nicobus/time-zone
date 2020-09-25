<header class="header pt-3 bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand mr-md-auto" href="{{route('home')}}"><img src="/img/logo.png" alt="logo-time-zone"></a>
        
        @if (Auth::check())
        <div class="ml-auto mr-1 d-lg-none">
            <a href="{{route('mostrarCarrito')}}"><img src="/img/carrito.png" style="width:30px;" alt="imagen-carrito-compras"></a>
        </div>
    @endif
        
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="hamburguer-menu"><i class="fas fa-bars"></i></span>
        </button>

        <div class="collapse navbar-collapse mt-5" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link m-lg-3" href="{{route('home')}}">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-lg-3" href="{{route('sobreNosotros')}}">Sobre Nosotros</a>
                </li>
                <li class="nav-item dropdown m-lg-3">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tienda
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach ($categorias as $categoria)
                            <a class="dropdown-item capitalize" href="{{route('productosPorCategoria', ['categoria-id'=>$categoria->nombre])}}">{{$categoria->nombre}}</a>
                        @endforeach
                        <a class="dropdown-item" href="{{route('productos')}}">Todos los productos</a>
                    </div>
                </li>
                <li class="nav-item m-lg-3">
                    <a class="nav-link" href="{{route('contacto')}}" tabindex="-1" aria-disabled="true">Contacto</a>
                </li>
            </ul>
        </div>
        <div class="menu-session d-none d-lg-block p-1">
            <ul class="nav">
                
                
                <li class="nav-item ml-auto mr-4">
                    <form action="{{route('buscarProducto')}}">
                    <div class="container">
                        <div class="row">
                            <div class="search">
                                <input type="text" class="form-control input-sm border-0 bg-light" maxlength="64" placeholder="Buscar..." name="busqueda">
                                <button class="buscar-btn border-0 bg-light" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                    </form>
                </li>
                
                <li class="nav-item mx-2">
                    <a href="{{route('login')}}">
                        <i class="fa fa-user-o" aria-hidden="true">
                            </i>
                        </a>
                    </li>
                @if (Auth::check())
                    <li class="nav-item mx-2"><a href="{{route('mostrarCarrito')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                @else
                <li class="nav-item mx-2"><a href="{{route('login', ['redirect_to'=>url()->current()])}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                @endif
                
                
            </ul>
        </div>
    </nav>
    <div class="menu-session bg-red p-1">
        <div class="panel-session">
        @if (Auth::user() != null)
        <div class="dropdown ml-3 d-inline mr-auto">
            <span class="dropdown-toggle font-weight-bold d-inline" id="dropdownMenuButton" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Hola, <span class="capitalize-first-letter">{{Auth::user()->name}}</span>
            </span>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                @if (1 ==0)
                <a class="dropdown-item" href="#">Añadir Pelicula</a>
                <a class="dropdown-item" href="#">Modificar/eliminar pelicula</a>
                @endif
                <a class="dropdown-item" href="#"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{route('user.logout')}}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
        @else
        <div class="font-weight-bold mx-3">
            <a class="link-white mr-3" href="{{ route('login') }}">Iniciar sesión</a>
            <a class="link-white" href="{{ route('register') }}">Registrarse</a>
        </div>
        @endif
    </div>
    </div>
</header>