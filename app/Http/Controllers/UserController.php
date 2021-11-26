<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;



class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function usuarios()
    {
        $users = User::all();
        return view('usuarios')->withUsers($users);
    }

    public function edit($id)
    {
        $users = User::find($id);
        return view('usuarios-editar')->withUsers($users);
    }

    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $data = $request->validate([
            // 'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'nivel' => ['required'],
        ]);
        

        $data = $request->all();
        
        $users->update($data);
        return redirect()->route('usuarios');
    }

    public function profile()
    {
      return view('profile');
  }

  public function profileUpdateName(Request $request)
  {
    $data = $request->validate([
        'name' => ['required', 'string', 'max:40'],
    ]);
    $data = $request->all();
    $update = auth()->user()->update($data);
    return view('profile');
}

public function profileUpdateEmail(Request $request)
{
    $id = auth()->user()->id;
    $data = $request->validate([
        'email' => "required|string|email|max:255|unique:users,email,{$id},id",
        //para não dar erro se clicar para salvar o e-mail sem ter mudado
    ]);
    $data = $request->all();
    $update = auth()->user()->update($data);
    return view('profile');
}

public function profileUpdateSenha(Request $request)
{
    $data = $request->validate([
        'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);
    $data = $request->all();
    if($data['password'] != null)
       $data['password'] = bcrypt($data['password']);
   else
       unset($data['password']);
   $update = auth()->user()->update($data);
   return view('profile');
}

// public function profileUpdate(Request $request)
// {
//   $data = $request->validate([
//     'name' => ['required', 'string', 'max:255'],
//     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//             // 'password' => ['required', 'string', 'min:8', 'confirmed'],
// ]);
  
//   $data = $request->all();
//      	// if($data['password'] != null)
//      	// 	$data['password'] = bcrypt($data['password']);
//      	// else
//      	// 	unset($data['password']);
//   $update = auth()->user()->update($data);
//   return view('profile');
//      	// if($update)
//      	// 	return redirect()->route('profile')->with('success', 'Sucesso ao atualizar');

//      	// return redirect()->back()->with('error', 'falha ao atualizar');
// }



// public function index()
// {
    
// }

// public function create()
// {
//         //
// }

// public function store(Request $request)
// {
    
// }

// public function show($id)
// {
 
// }

// public function destroy($id)
// {
    
// }
}
