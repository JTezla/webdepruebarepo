<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Validation\Validator;
use Illuminate\Support\Arr;

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

    public function crear(Request $request){
        $user=$request->validate([
                'name'          => 'required',
                'email'         => 'required|email|unique:users,email',
                'password'      =>'required|min:6'
                ],
                [
                'name.required'     => 'El campo Nombre es Obligatorio',
                'email.required'    => 'El campo Email es Obligatorio',
                'password.required' => 'El password debe contener mínimo de 6 caracteres',
        ]);

        User::create([
            'name'      =>  $user['name'],
            'email'     =>  $user['email'],
            'password'  =>  bcrypt($user['password'])
        ]);
        return redirect(route('users.r'));
    }

    public function editar(User $user){
        return view('edit_users',['user'=>$user]);
    }

    public function update(Request $request, User $user){
        $data = $request->validate([
            'name'          => 'required|string',
            'email'         => 'required|email|unique:users,email,'. $user->id,
            'password'      => 'nullable|string|min:6'
            ]);

        if ($data['password'] != null) {
            $data['password']=bcrypt($data['password']);
        }else{
            unset($data['password']);
        } 
       
    $user->update($data);

    return redirect()->route('users.r')->with('hola','Usuario Actualizado correctamente'); 
    }

    public function destroy(User $user){

    $user->delete();

    return redirect()->route('users.r')->with('borrado','Usuario Eliminado Correctamente');

    }
}
