<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Student;

class StudentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:student');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function logout() {
        Auth::guard('student')->logout();
        return view('student_login');
    }

    public function student_home() {
        return view('student_home');
    }

    public function get_student_login() {
        if(Auth::guard('admin')->check()){
            return view('admin_home');
        }
        else if(Auth::guard('student')->check()){
            return view('student_home');
        }
        else{
            return view('student_login');
        }
        
    }

    public function student_profile() {
        $user_name = Auth::User()->user_name;
        $data = DB::table('students')
                ->select('*',DB::raw("CONCAT(first_name,' ',last_name) as full_name"))
                ->where('user_name', $user_name)
                ->get();
        return view('shared_profile',compact('data'));
    }

    public function student_records() {
        return view('student_records');
    }
    
}
