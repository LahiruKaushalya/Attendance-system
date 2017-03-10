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
        $this->middleware('auth:admin,student,teacher');
        
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
            ->update(['telephone' => $req->input('tel')]);
        	return redirect()->back();
        }
        else if(Auth::guard('student')->check()){
        	DB::table('students')
            ->where('user_name', Auth::User()->user_name)
            ->update(['telephone' => $req->input('tel')]);
        	return redirect()->back();
        }
    }

    public function update_pwd(Request $req){
        
        $this->validate( $req , [
            'cur_pwd' => 'required',
            'new_pwd' => 'required|min:6|confirmed'
        ]);

        if(bcrypt($req->input('cur_pwd')) != Auth::User()->password){
            return redirect()->route('home');
        }
        else
        {
            $user_name = Auth::User()->user_name;

            if(Auth::guard('teacher')->check()){
                DB::table('teachers')
                ->where('user_name', $user_name)
                ->update(['password' => bcrypt($req->input('new_pwd'))]);
                return redirect()->back();
            }
            else if(Auth::guard('student')->check()){
                DB::table('students')
                ->where('user_name', Auth::User()->user_name)
                ->update(['password' => bcrypt($req->input('new_pwd'))]);
                return redirect()->back();
            }
        }
    }

    public function search(Request $req){
        $searched_user = $req->search;
        $header = "Student Details";

        if($searched_user[0] == "S"){
            $data = DB::table('students')
                ->select('*' , DB::raw("CONCAT(first_name,' ',last_name) as full_name"))
                ->where('user_name', $searched_user)
                ->get();
        }
        else if($searched_user[0] == "T"){
            $data = DB::table('teachers')
                ->select('*' , DB::raw("CONCAT(first_name,' ',last_name) as full_name"))
                ->where('user_name', $searched_user)
                ->get();
        }

        if($data->count() != 0){
            return view('shared_profile_view',compact('data','header'));
        }
        else{
            return redirect()->back();
        }
    }

}
