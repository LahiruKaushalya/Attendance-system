<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class TeacherLoginController extends Controller
{
   public function __construct()
   {
      $this->middleware('guest:teacher');
   }

   public function get_teacher_login() {
      return view('teacher_login');
   }

    // Attempt to log the user in
   public function post_teacher_login(Request $req){

      $this->validate( $req , [
         'username' => 'required',
         'password' => 'required'
      ]);
      

      if(Auth::guard('teacher')->attempt(['user_name'=> $req['username'] , 'password'=> $req['password']],$req->remember)){
         return redirect()->route('get_teacher_home');
      }
      else{
         return redirect()->back();
      }
   }
}
