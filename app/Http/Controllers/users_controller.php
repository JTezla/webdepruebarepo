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
}
