<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function Registrasi(Request $request){
        $data = [
         'name' => $request->input('name'),
          'email' => $request->input('email'),
          'username' => $request->input('username'),
          'password' => $request->input('password'),
          'role' =>  $request->input('role')
      ];
      }
  
        
      }
