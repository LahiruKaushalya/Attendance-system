<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Teacher;

class TeacherController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:teacher');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function logout() {
        Auth::guard('teacher')->logout();
        return view('teacher_login');
    }

    public function teacher_home() {
        return view('teacher_home');
    }

    public function get_teacher_login() {
        return view('teacher_login');
    }

    public function teacher_profile() {

        $user_name = Auth::User()->user_name;
        $data = DB::table('teachers')
                ->select('*' , DB::raw("CONCAT(first_name,' ',last_name) as full_name"))
                ->where('user_name', $user_name)
                ->get();

        return view('shared_profile',compact('data'));
    }

    /*public function teacher_records() {
        return view('teacher_records');
    }*/

}
