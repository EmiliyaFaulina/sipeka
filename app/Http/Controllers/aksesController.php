<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aksesController extends Controller
{
    public function akses(Request $request){
      $role = $request->role;

      if($role == 'E-Government'){
        return view('laila.index');
      }
      
      elseif($role == 'IKP'){
        return view('emiliya.index');
      }

      elseif($role == 'Persandian'){
        return view('via.index');
      }
    }
}
