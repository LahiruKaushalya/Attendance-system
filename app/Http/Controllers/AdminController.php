<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Admin;
use App\Student;
use App\Teacher;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function admin_home() {
        return view('admin_home');
    }

    public function get_register() {
        return view('admin_register');
    }

    public function logout() {
        Auth::guard('admin')->logout();
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
          $req->session()->save();
      }
      else{
          return redirect()->back();
      }
    

      // if unsuccessful, then redirect back to the login with the form data
      return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function post_register(Request $req){

        $this->validate( $req , [
            'user' => 'required',
            'user_name' => 'required|unique:admins|unique:students|unique:teachers',
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'nic' => 'required',
            'dob' => 'required',
            'password' => 'required|min:6|confirmed',
            'tel' => 'required|digits:10',
            'email' => 'required|email'
        ]);

        $user_type = $req->input('user');
        $first_name = $req->input('first_name');
        $last_name = $req->input('last_name');
        $user_name = $req->input('user_name');
        $address = $req->input('address');
        $nic = $req->input('nic');
        $dob = $req->input('dob');
        $password = $req->input('password');
        $tel = $req->input('tel');
        $email = $req->input('email');
        $other = $req->input('other');

        if($user_type == "0"){
            $var = new Student();
        }
        else if($user_type == "1"){
            $var = new Teacher();
        }
        else if($user_type == "2"){
            $var = new Admin();
        }

        $var->user_name = $user_name;
        $var->password = bcrypt($password);
        $var->first_name = $first_name;
        $var->last_name = $last_name;
        $var->address = $address;
        $var->nic = $nic;
        $var->dob = $dob;
        $var->telephone = $tel;
        $var->email = $email;
        $var->other = $other;
        
        $var->save();

        return redirect()->back();
    }


    public function admin_details() {
        return view('admin_details');
    }

    public function admin_records() {
        return view('admin_records');
    }
    
}
