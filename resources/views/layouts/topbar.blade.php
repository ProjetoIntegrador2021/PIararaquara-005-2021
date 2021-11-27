

<!-- Navbar -->
<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="{{ route('home') }}" class="nav-link">Home</a>
    </li>

  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Messages Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i  class="fa fa-bell-o"></i>
        <span class="badge badge-danger navbar-badge">@if(App\Peca::whereNull('foto')->count() > 0) {{App\Peca::whereNull('foto')->count()}} @endif</span>   <!-- numero de peça sem foto  -->
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <a href="#" class="dropdown-item">
          <!-- Message Start -->
          <div class="media">
            <div class="media-body">
              @foreach(App\Peca::all() as $pecas)
              @if(Auth::user()->nivel == "1")
              @if($pecas->foto == null)
              <div class="alert alert-warning" role="alert" title='A peça "{{$pecas->nome}}" com id {{$pecas->id}} está sem foto.'>
                <img class="card-img-top figure-img img-alert rounded" src="/storage/imagem-fixa/triangle-warning-sign-png.png">
                A produto "{{$pecas->nome}}" com id {{$pecas->id}} está sem foto.
              </div>
              @else
              
              @endif
              @endif
              @endforeach
              @foreach(App\Equipamento::all() as $equipamentos)
              @if($equipamentos->foto == null)
              <div class="media">
                <div class="media-body">
                  <div class="alert alert-warning" role="alert">
                    <img class="card-img-top figure-img img-alert rounded" src="/storage/imagem-fixa/triangle-warning-sign-png.png">
                    O equipamento com id {{$equipamentos->id}} está sem foto.
                  </div>
                </div>
              </div>
              @else
              
              @endif
              @endforeach
            </div>
          </div>
        </a>
      </div>
    </li>
  </ul>
</nav>
  <!-- /.navbar -->