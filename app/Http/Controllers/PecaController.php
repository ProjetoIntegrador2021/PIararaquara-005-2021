<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peca;



class PecaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $pecas = Peca::paginate(5);
        // $pecas = Peca::onlyTrashed()->get();

        $pecas = Peca::all();
        // $pecas = Peca::withTrashed()->get();
        // $funcionando = Peca::where('estado', 'like', 'funcionando')->get();
        // $semFoto = Peca::whereNull('foto')->get();
        // return view('pecas')->withPecas($pecas)
        //                     ->withSemFoto($semFoto);

        return view('pecas')->withPecas($pecas);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {



        //Peca::create($request->all());
     $request->validate([
        'nome' => 'required|string|max:20',
        'categoria_id' => 'required',
        'nserie' => 'required|string|max:20',
        'marca' => 'required|string|max:20',
        'estado' => 'required',
        'descricao' => 'required|string|max:40',
        'foto' => 'image',
    ]);


     $pecas = new Peca();
     $pecas->nome = $request->input('nome');
     $pecas->categoria_id = $request->input('categoria_id');
     $pecas->nserie = $request->input('nserie');
     $pecas->marca = $request->input('marca');
     $pecas->estado = $request->input('estado');
     $pecas->descricao = $request->input('descricao');



     if($request->hasFile('foto')){
        $md5Name = md5_file($request->file('foto')->getRealPath());
        $guessExtension = $request->file('foto')->guessExtension();
        $pecas->foto = $request->file('foto')->storeAs('imagens', $md5Name.'.'.$guessExtension  ,'public');
    }

    $pecas->save();
    return redirect()->route('pecas.index');

}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pecas = Peca::find($id);
         // $pecas = Peca::withTrashed()->find($id);
        return view('show')->withPecas($pecas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pecas = Peca::find($id);
        return redirect()->route('pecas.index');
        
    }

    public function update(Request $request, $id)
    {        

        //$pecas = Peca::find($id)->update($request->all());
       $request->validate([
        'nome' => 'required|string|max:20',
        'categoria_id' => 'required',
        'nserie' => 'required|string|max:20',
        'marca' => 'required|string|max:20',
        'estado' => 'required',
        'descricao' => 'required|string|max:40',
        'foto' => 'image',
    ]);
        // Peca::find($id)->update($request->all());


       $pecas = Peca::find($id);
        // $pecas = Peca::withTrashed()->find($id);
       // if($pecas->trashed()){
       //  $pecas->restore();
       //  }else {
       $pecas->nome = $request->input('nome');
       $pecas->categoria_id = $request->input('categoria_id');
       $pecas->nserie = $request->input('nserie');
       $pecas->marca = $request->input('marca');
       $pecas->estado = $request->input('estado');
       $pecas->descricao = $request->input('descricao');

       if($request->hasFile('foto')){
         @unlink('storage/' . $pecas->foto);
         $md5Name = md5_file($request->file('foto')->getRealPath());
         $guessExtension = $request->file('foto')->guessExtension();
         $pecas->foto = $request->file('foto')->storeAs('imagens', $pecas->nome.'.'.$md5Name.'.'.$guessExtension  ,'public');
     } 

     $pecas->update(); 
       // }  
     return redirect()->route('pecas.index');   
 }




 public function destroy($id)
 {
     $pecas = Peca::find($id);
        // $pecas = Peca::withTrashed()->find($id);
        // if($pecas->trashed()){
        // $pecas->forceDelete();
        // } else {
        if(isset($pecas->foto)){
            @unlink('storage/' . $pecas->foto);
            $pecas->delete();
        } 
            $pecas->delete();
            
        
        // }
        return redirect()->route('pecas.index');
}

}