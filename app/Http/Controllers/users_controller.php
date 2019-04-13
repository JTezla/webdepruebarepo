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

    public function details($id){
        $user=User::find($id);
    return view('userdetails',[ 'user'=>$user]);
    //"Mostrando detalles de usuario : {$id}";
    }
}
