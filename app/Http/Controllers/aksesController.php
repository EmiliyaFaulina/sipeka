<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
class aksesController extends Controller
{
    public function akses(Request $request){
      $data = [
        'email' => $request->input('email'),
        'password' => $request->input('password'),
        'role' =>  $request->input('role')
    ];

    $cekUser = User::where('email', $data['email'])->where('password', md5($request['password']))->count();
    if($cekUser >= 1){
      $role = $request->role;
      if($role == 'E-Government'){
        session::put('role', $role);
        return view('laila.index');
      }
      
      elseif($role == 'IKP'){
        session::put('role', $role);
        return view('emiliya.index');
      }

      elseif($role == 'Persandian'){
        session::put('role', $role);
        return view('via.index');
      }
    }else{
      return redirect()->back();
    }

      
    }
}
