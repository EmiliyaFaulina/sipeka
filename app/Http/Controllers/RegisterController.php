<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function Registrasi(Request $request){
        $data = [
         'name' => $request->input('name'),
          'email' => $request->input('email'),
          'password' => $request->input('password'),
          'role' =>  $request->input('role')
      ];
      
      $User = User::create(
        [
            'username' => $data['name'],
            'password' => Hash::make($data['password']),
            'email' => $data['email'],
            'role' => $data['role']
        ]);
        
    if($User == true){ 
        return redirect()->route('home');
    }
  
        
    }

    public function loginUser(Request $request){

        $validated = $request->validate([
            'username' => 'required|max:255',
            'password' => 'required',
        ]);
      
        // $2y$12$.jOERMBBHcxPU8rfAQj9ueHp411VhWMgdqQIhVfSA6.E0b.b1gPdm
        $usercek = User::where('username', $validated['username'])->first();
        if(!$usercek){
            return redirect()->back()->withErrors('username tidak ada');
        }
        if(Hash::check($validated['password'], $usercek->password)){
            session::put('id', $usercek['id']);
            session::put('username', $usercek['username']);
            session::put('email', $usercek['email']);
           return redirect()->route('homeLogin');
        }
        else{
            return redirect()->back()->withErrors('username Ada password salah');;
        }
         
    }
}
