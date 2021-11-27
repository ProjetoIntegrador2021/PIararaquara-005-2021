<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="{{asset('AdminLTE/dist/img/cimento.jpg')}}" alt="AdminLTE Logo" class="brand-image img elevation-3"
    style="opacity: .8">
    <span class="brand-text font-weight-light">Estoque</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-1 pb-1 mb-1 d-flex">
      <div class="image">

      </div>

      <nav class="mt-1">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item has-treeview">


            <a class="nav-link " href="#" > <i class="fa fa-user"></i>
              {{ Auth::user()->name }} <span class="caret"></span>
            </a>


            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('profile') }}"> 
                  {{ __('Perfil') }}
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">

                <p>
                  {{ __('Sair') }}
                  
                </p>

              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </li>
            
          </ul>
        </li>
      </ul>
    </nav>
    <!--  <a href="{{ route('profile') }}" class="d-block"> <h5>{{ Auth::user()->name }}</h5> </a> -->
    <!-- </div> -->
  </div>

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item has-treeview menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link">
                  <i class="fa fa-home"></i>
                  <p>Painel</p>
                </a>
              </li>
              
              
            </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-table"></i>
              <p>
                Tabelas
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             <!-- <li class="nav-item">
                <a href="{{ route('equipamentos.index') }}" class="nav-link">
                  <i class="fa fa-desktop"></i>
                  <p>Equipamentos</p>
                </a>
              </li>-->
              <!--<li class="nav-item" >
                <a href="{{ route('locais.index') }}" class="nav-link">
                  <i class="fa fa-map-marker"></i>
                  <p>Locais</p>
                </a>
              </li>-->
              <li class="nav-item" >
                <a href="{{ route('pecas.index') }}" class="nav-link">
                  <i class="fa fa-cog"></i>
                  <p>Produtos</p>
                </a>
              </li>
              <li class="nav-item" >
                <a href="{{ route('categorias.index') }}" class="nav-link">
                  <i class="fa fa-cubes"></i>
                  <p>Categorias</p>
                </a>
              </li>
              @if(Auth::user()->nivel == 1)
              <li class="nav-item">
                <a href="{{ route('usuarios') }}" class="nav-link">
                  <i class="fa fa-user-circle-o"></i>
                  <p>Usuários</p>
                </a>
              </ul>
            </li>
            @else
            @endif
            
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>