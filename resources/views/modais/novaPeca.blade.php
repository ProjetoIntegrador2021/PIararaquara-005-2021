 <!--MODAL NOVA PEÇA-->
 <div class="modal" id="novaPecaModal" tabindex="-1" role="dialog" aria-labelledby="novaPecaModalLabel" aria-hidden="true" data-backdrop="static"> <!-- data-backdrop="static" não fecha a modal quando clica fora -->
    <div class="modal-dialog" role="document">
        <div class="modal-content">   
            <form class="form-horizontal" id="formPeca" action="/pecas" method="POST" enctype="multipart/form-data">@csrf
                <div class="modal-header">
<<<<<<< HEAD
                    <h5 class="modal-title">Nova Peça</h5>
=======
                    <h5 class="modal-title">Nova Produto</h5>
>>>>>>> 81707ae0fe3c836d362c84a0ae7f3f1859be7651
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <!-- @if ($errors->any()) 
                        <div class="alert alert-danger"> 
                            <ul> 
                            @foreach ($errors->all() as $error) 
                                <li>{{ $error }}</li> 
                            @endforeach 
                            </ul> 
                        </div> 
                       <br /> 
                    @endif  -->
                    <input type="hidden" id="id" name="id" class="form-control">
                    <div class="form-group">
                        <label for="nomePeca" class="control-label">Nome da Produto</label>
                        <div class="input-group">
                            <input type="text" class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}"  name="nome" placeholder="Nome da Peca" value="{{old('nome')}}">
                        @if($errors->has('nome'))
                            <div class="invalid-feedback">{{$errors->first('nome')}}<!-- first pega o 1º erro do nome pra nao aparecer vários erros pro mesmo campo -->
                            </div>
                        @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="categoriaPeca" class="control-label">Categoria</label>
                        <div class="input-group">
                            <select class="form-control {{$errors->has('categoria_id') ? 'is-invalid' : ''}}" name="categoria_id">
                                
                        <option value="" disabled selected>Selecione uma categoria</option>
                         @foreach(App\Categoria::all() as $cat)
                            <option value="{{$cat->id}}" {{ old('categoria_id') == $cat->id ? 'selected' : '' }}>{{ $cat->nome }}</option>
                        @endforeach

                        <!-- OUTRA FORMA: -->
                        <!-- @foreach(App\Categoria::all() as $cat)
                            @if($cat->id == old('categoria_id'))
                                  <option value="{{$cat->id}}" selected>{{$cat->nome}}</option> 
                                  @else
                                  <option value="{{$cat->id}}">{{$cat->nome}}</option> 
                                  @endif
                                @endforeach  -->
                                
                                
                            </select>
                            @if($errors->has('categoria_id'))
                                <div class="invalid-feedback">{{$errors->first('categoria_id')}}</div>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="nseriePeca" class="control-label">Quantidade</label>
                        <div class="input-group">
                            <input type="text" class="form-control {{$errors->has('nserie') ? 'is-invalid' : ''}}" name="nserie" placeholder="NSerie da Peça" value="{{old('nserie')}}">
                            @if($errors->has('nserie'))
                                <div class="invalid-feedback">{{$errors->first('nserie')}}</div>
                            @endif
                        </div>
                    </div>

                    <!--<div class="form-group">
                        <label for="patrimonioPeca" class="control-label">Patrimonio</label>
                        <div class="input-group">
                            <input type="text" class="form-control {{ $errors->has('patrimonio') ? 'is-invalid' : '' }}" id="patrimonio" name="patrimonio" placeholder="Patrimonio da Peça" value="{{old('patrimonio')}}">
                            @if($errors->has('patrimonio'))
                                <div class="invalid-feedback">{{$errors->first('patrimonio')}}</div>
                            @endif
                        </div>
                    </div>-->

<<<<<<< HEAD
                    <div class="form-group">
=======
                    <!--<div class="form-group">
>>>>>>> 81707ae0fe3c836d362c84a0ae7f3f1859be7651
                        <label for="marcaPeca" class="control-label">Marca</label>
                        <div class="input-group">
                            <input type="text" class="form-control {{$errors->has('marca') ? 'is-invalid' : ''}}" id="marca" name="marca" placeholder="Marca da Peça" value="{{old('marca')}}">
                            @if($errors->has('marca'))
                            <div class="invalid-feedback">{{$errors->first('marca')}}</div>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="estadoPeca" class="control-label">Condição</label>
                        <div class="input-group">
                            <select class="form-control {{$errors->has('estado') ? 'is-invalid' : ''}}" id="estadoPeca" name="estado">
                            @if ($errors->any())
                                <option value ="{{old('estado')}}">{{old('estado')}}</option>
                            @else
                                <option value="" disabled selected>Selecione a condição da peça</option>
                            @endif
                                <option value ="Funcionando">Funcionando</option>
                                <option value ="Quebrado">Quebrado</option>
                                <option value ="Obsoleto">Obsoleto</option>
                            </select>
                            @if($errors->has('estado'))
                                <div class="invalid-feedback">{{$errors->first('estado')}}</div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- <label for="descricaoPeca" class="control-label">Descrição</label>
                        <div class="input-group"> 
                            <input type="text" class="form-control {{$errors->has('descricao') ? 'is-invalid' : ''}}" id="descricao" name="descricao" placeholder="descricao da Peça" value="{{old('descricao')}}">
                            @if($errors->has('descricao'))
                            <div class="invalid-feedback">{{$errors->first('descricao')}}</div>
                            @endif
                        </div> -->
                         <label for="descricaoPeca">Descrição</label>
                         <textarea class="form-control {{$errors->has('descricao') ? 'is-invalid' : ''}}" id="descricaoPeca" name="descricao" rows="2">{{old('descricao')}}</textarea>
                         @if($errors->has('descricao'))
                            <div class="invalid-feedback">{{$errors->first('descricao')}}</div>
                            @endif
                    </div>
                    <!--<div class="form-group">
                        <label for="fotoPeca">Imagem</label>
                        <input type="file" class="form-control-file {{$errors->has('foto') ? 'is-invalid' : ''}}" name="foto" id="fotoPeca">
                         @if($errors->has('foto'))
                        <div class="invalid-feedback">{{$errors->first('foto')}}</div>
                        @endif
                    </div>-->
                        
                    <!-- <div class="custom-file">
                        <input type="file" class="custom-file-input" name="foto2" id="customFile">
                        <label class="custom-file-label" for="customFile">Foto</label>
                    </div> -->
                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit-peca" id="submit-peca" class="btn btn-primary">Salvar</button>
                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
                @if (count($errors) > 0 )
                <script>
                    $( document ).ready(function() {
                        $('#novaPecaModal').modal('show');
                    });
                </script>
                @endif
                
                
               
               
            </form>
        </div>
    </div>
</div>