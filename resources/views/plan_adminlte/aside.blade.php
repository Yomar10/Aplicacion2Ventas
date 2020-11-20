<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview menu-open">
            <a href="{{route('inicio.index')}}" class="nav-link active">
              <i class="nav-icon fas fa-bahai"></i>
              <p>
                Inicio
              </p>
            </a>
            
          </li>
        <li class="nav-item has-treeview menu-open">
        <a href="{{route('cliente.index')}}" class="nav-link active">
          <i class="nav-icon fas fa-user"></i>
          <p>
            Cliente
          </p>
        </a>
        
      </li>
      <li class="nav-item has-treeview menu-open">
        <a href="{{route('producto.index')}}" class="nav-link active">
          <i class="nav-icon fas fa-shopping-bag"></i>
          <p>
            Producto
          </p>
        </a>
      </li>
      <li class="nav-item has-treeview menu-open">
        <a href="{{route('categoria.index')}}" class="nav-link active">
          <i class="nav-icon fas fa-shopping-cart"></i>
          <p>
            Categoría
          </p>
        </a>
      </li>
    </ul>
  </nav>