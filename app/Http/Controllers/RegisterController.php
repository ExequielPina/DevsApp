<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
   public function index () 
   {
     return view('auth.register');
   }

   public function store(Request $request)
   {
      //***Validación***//
      $request->request->add(['username' => Str::slug( $request->username )]);

      $this->validate($request,[
         'name' => 'required',
         'username' => 'required|unique:users|min:3|max:15',
         'email' => 'required|unique:users|email',
         'password' => 'required|confirmed'
      ]);

      User::create([
         'name' => $request->name,
         'username' => $request->username,
         'email' => $request->email,
         'password' => Hash::make( $request->password )

      ]);

      //*** Autenticar usuarios ***//
      auth()->attempt($request->only('email', 'password'));

        
      //*** Redireccionar ***//
      return redirect()->route('posts.index');
   }
}
