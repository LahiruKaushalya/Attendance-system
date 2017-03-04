<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class StudentLoginController extends Controller
{
   public function __construct()
   {
      $this->middleware('guest:student');
   }

   public function get_student_login() {
      return view('student_login');
   }

    // Attempt to log the user in
   public function post_student_login(Request $req){

      $this->validate( $req , [
         'username' => 'required',
         'password' => 'required'
      ]);
      

      if(Auth::guard('student')->attempt(['user_name'=> $req['username'] , 'password'=> $req['password']],$req->remember)){
         return redirect()->route('get_student_home');
      }
      else{
         return redirect()->back();
      }
   }
}
