<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class users_controller extends Controller
{
    public function index(){

        $listusers=User::all();
     /*    return view('usuarios',['listusers'=>$listusers]); */

     return view('usuarios')
     ->with('listusers', User::all());
    }

    public function details(user $user){
      /*   $user=User::findOrFail($id); */

    /* if ($user==null){
    return response()->view('errors_404',[],404);
    } */
 //return abort(403);
    return view('userdetails',[ 'user'=>$user]);
    //"Mostrando detalles de usuario : {$id}";
    }

    public function nuevo(){
        return view('usuario_nuevo');
    }

    public function crear(){
        $user=request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password'=>'required',
            ],[
            'name.required'=> 'El campo Nombre es Obligatorio'
            'email.required'=> 'El campo Email es Obligatorio'
            'password.required'=> 'El campo Password es Obligatorio'
        ]);
       /*  if (empty($user['name'])){

            return redirect(route('users.nuevo.r'))->withErrors([
                'name' => 'El campo es obligatorio',
            ]);
        } */
        User::create([
            'name'=> $user['name'],
            'email'=> $user['email'],
            'password'=>$user['password']
        ]);
        return redirect(route('users.r'));
    }
}
