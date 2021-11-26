@extends('layouts.master')
@section('content')
@if(Auth::user()->nivel == "1")
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


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group  row">
                            <label for="nivel" class="col-md-4 col-form-label text-md-right">Nível de privilégio</label>
                            <div class="col-md-6">
                                <select class="form-control" id="nivel" name="nivel">
                                 @if($errors->has('nivel'))
                                 <option value="" disabled selected>Selecione o nivel</option>
                                 <option value ="1">Administrador</option>
                                 <option value ="2">Normal</option>
                                 @else
                                 @if ($errors->any())
                                 <option value="" disabled>Selecione o nivel</option>
                                 <option value ="{{old('nivel')}}" selected>@if(old('nivel') == 1) Administrador @else @if(old('nivel') == 2) Normal @endif @endif</option>
                                 <option value ="@if(old('nivel') == 1) 2 @else @if(old('nivel') == 2) 1 @endif @endif">@if(old('nivel') == 1) Normal @else @if(old('nivel') == 2) Administrador @endif @endif</option>
                                 @else
                                 <option value="" disabled selected>Selecione o nivel</option>
                                 <option value ="1">Administrador</option>
                                 <option value ="2">Normal</option>
                                 @endif                                
                                 @endif
                             </select> 
                             @error('nivel')
                             <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Senha') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Registrar') }}
                            </button>
                        </div>
                    </div>
                    @if(session('mensagem'))
                    <script>
                        $( document ).ready(function() {
                            $('#RegistradoModal').modal('show');
                        });
                    </script>
                    @include('modais.registrado')

                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@else

@endif
@endsection
