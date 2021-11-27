<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peca;


class PecaApagadaController extends Controller
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
        
        $pecas = Peca::onlyTrashed()->get();
        return view('pecas-apagadas')->withPecas($pecas);

    }
    
    public function update($id)
    {        

       $pecas = Peca::onlyTrashed()->find($id)->restore();
        return redirect()->route('pecas-apagadas.index');  
    }


    public function destroy($id)
    {
        $pecas = Peca::onlyTrashed()->find($id)->forceDelete();
        return redirect()->route('pecas-apagadas.index');
    }

    
}