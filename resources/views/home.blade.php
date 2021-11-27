@extends('layouts.master')
<title>Home</title>
@section('content')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-6" id="Estoque">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3> @if(App\Peca::all()->count() >= 0) {{App\Peca::all()->count()}} @endif </h3> <!-- numero de peças em estoque -->

            <p>Peças em estoque</p>
          </div>
          <div class="icon" style="top:0%">
           <i class="fa fa-archive" ></i>
         </div>
         <a href="{{ route('pecas.index') }}" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
       </div>
     </div>      

   </div>
 </div>
 <div class="col-lg-3 col-6" id="Funcioando">
  <!-- small box -->
  <div class="small-box bg-success">
    <div class="inner">
      <h3> @if(App\Peca::where('estado', 'like', 'funcionando')->count() >= 0)  {{App\Peca::where('estado', 'like', 'funcionando')->count()}} @endif    </h3>

      <p>Funcionando</p>
    </div>
    <div class="icon" style="top:0%">
      <i class="fa fa-check-circle-o" ></i>
    </div>
    <a href="{{ route('pecas.index') }}" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div>

<div class="col-lg-3 col-6" id="Obsoleto">
  <!-- small box -->
  <div class="small-box bg-warning" >
    <div class="inner">
      <h3>@if(App\Peca::where('estado', 'like', 'obsoleto')->count() >= 0)  {{App\Peca::where('estado', 'like', 'obsoleto')->count()}} @endif </h3>

      <p>Obsoleto</p>
    </div>
    <div class="icon" style="top:0%">
      <i class="fa fa-hashtag" ></i>
    </div>
    <a href="{{ route('pecas.index') }}" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div>

<div class="col-lg-3 col-6" id="Quebrado">
  <!-- small box -->
  <div class="small-box bg-danger">
    <div class="inner">
      <h3> @if(App\Peca::where('estado', 'like', 'quebrado')->count() >= 0)  {{App\Peca::where('estado', 'like', 'quebrado')->count()}} @endif  </h3>

      <p>Quebrado</p>
    </div>
    <div class="icon" style="top:0%">
      <i class="fa fa-times-circle-o" ></i>
    </div>
    <a href="{{ route('pecas.index') }}" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div>



          


            

</div>










@endsection

