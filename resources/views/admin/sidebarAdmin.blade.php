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

                <li  data-toggle="collapse" data-target="#products" class="collapsed active">
                  <a href="#"><i class="fa fa-gift fa-lg"></i> Productos <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="products">
                    <li class="active"><a href="{{route('listaProductosAdmin')}}">Lista Productos</a></li>
                    <li><a href="{{route('agregarProductoAdmin')}}">Agregar Producto</a></li>
                    <li><a href="#">Buscar Producto</a></li>
                    <li><a href="{{route('listaProductosNoDisponiblesAdmin')}}">Productos no disponibles</a></li>
                    <li><a href="{{route('listaProductosSinStockAdmin')}}">Productos sin stock</a></li>
                    
                </ul>


                 <li>
                  <a href="#">
                  <i class="fa fa-users fa-lg"></i> Usuarios
                  </a>
                </li>
            </ul>
     </div>
</div>