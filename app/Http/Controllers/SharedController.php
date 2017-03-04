<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SharedController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:student,teacher');
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

	public function update_email(Request $req){

        $this->validate( $req , [
            'email' => 'required|email'
        ]);

        $user_name = Auth::User()->user_name;

        if(Auth::guard('teacher')->check()){
        	DB::table('teachers')
        	->where('user_name', $user_name)
            ->update(['email' => $req->input('email')]);
        	return redirect()->back();
        }
        else if(Auth::guard('student')->check()){
        	DB::table('students')
            ->where('user_name', Auth::User()->user_name)
            ->update(['email' => $req->input('email')]);
        	return redirect()->back();
        }
        
    }

    public function update_address(Request $req){

        $this->validate( $req , [
            'address' => 'required'
        ]);

        $user_name = Auth::User()->user_name;

        if(Auth::guard('teacher')->check()){
        	DB::table('teachers')
        	->where('user_name', $user_name)
            ->update(['address' => $req->input('address')]);
        	return redirect()->back();
        }
        else if(Auth::guard('student')->check()){
        	DB::table('students')
            ->where('user_name', Auth::User()->user_name)
            ->update(['address' => $req->input('address')]);
        	return redirect()->back();
        }
        
    }

    public function update_tel(Request $req){

        $this->validate( $req , [
            'tel' => 'required|digits:10'
        ]);

        $user_name = Auth::User()->user_name;

        if(Auth::guard('teacher')->check()){
        	DB::table('teachers')
        	->where('user_name', $user_name)
            ->update(['address' => $req->input('address')]);
        	return redirect()->back();
        }
        else if(Auth::guard('student')->check()){
        	DB::table('students')
            ->where('user_name', Auth::User()->user_name)
            ->update(['address' => $req->input('address')]);
        	return redirect()->back();
        }
    }

    public function update_pwd(Request $req){

        $this->validate( $req , [
            'tel' => 'required|digits:10'
        ]);

        $user_name = Auth::User()->user_name;

        if(Auth::guard('teacher')->check()){
        	DB::table('teachers')
        	->where('user_name', $user_name)
            ->update(['telephone' => $req->input('address')]);
        	return redirect()->back();
        }
        else if(Auth::guard('student')->check()){
        	DB::table('students')
            ->where('user_name', Auth::User()->user_name)
            ->update(['address' => $req->input('address')]);
        	return redirect()->back();
        }
    }

}
