<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipamento;

class EquipamentoController extends Controller
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
       $equipamentos = Equipamento::all();
       return view('equipamentos')->withEquipamentos($equipamentos);
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $equi = new Equipamento();
        $equi->local_id = $request->input('local_id');
        $equi->latitude = $request->input('latitude');
        $equi->longitude = $request->input('longitude');


        if($request->hasFile('foto')){
            $md5Name = md5_file($request->file('foto')->getRealPath());
            $guessExtension = $request->file('foto')->guessExtension();
            $equi->foto = $request->file('foto')->storeAs('imagens', $md5Name.'.'.$guessExtension  ,'public');
        }
        $equi->save();
        return redirect()->route('equipamentos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $equi = Equipamento::find($id);
       return redirect()->route('equipamentos.index');
   }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $equi = Equipamento::find($id);        
        $equi->local_id = $request->input('local_id');
        $equi->latitude = $request->input('latitude');
        $equi->longitude = $request->input('longitude');
        if($request->hasFile('foto')){
             @unlink('storage/' . $equi->foto);
            $md5Name = md5_file($request->file('foto')->getRealPath());
            $guessExtension = $request->file('foto')->guessExtension();
            $equi->foto = $request->file('foto')->storeAs('imagens', $md5Name.'.'.$guessExtension  ,'public');
        }
        
        $equi->update();
        return redirect()->route('equipamentos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $equi = Equipamento::find($id);
        if(isset($equi->foto)){
           @unlink('storage/' . $equi->foto);
           $equi->delete();
        }
        $equi->delete();
        return redirect()->route('equipamentos.index');
 }
}
