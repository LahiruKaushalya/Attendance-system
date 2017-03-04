<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
      $this->middleware('guest:admin');
    }

    public function get_admin_login() {
        return view('admin_login');
    }

    // Attempt to log the user in
    public function post_admin_login(Request $req){

      $this->validate( $req , [
          'username' => 'required',
          'password' => 'required'
      ]);
      

      if(Auth::guard('admin')->attempt(['user_name'=> $req['username'] , 'password'=> $req['password']],$req->remember)){
          return redirect()->route('get_admin_home');
      }
      else{
          return redirect()->back();
      }
    

      // if unsuccessful, then redirect back to the login with the form data
      return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
