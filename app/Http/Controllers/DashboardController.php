<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function versao1()
    {
        return view('dashboard.index');
    }
    public function versao2()
    {
        return view('dashboard.index2');
    }
    public function versao3()
    {
        return view('dashboard.index3');
    }
}
