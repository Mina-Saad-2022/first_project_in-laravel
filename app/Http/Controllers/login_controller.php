<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class login_controller extends Controller
{

//^============================================================================================================//
//^---------------------------------------------to open login page--------------------------------------------//
//^==========================================================================================================//

    public function login()
    {
        return view('login');
    }

//^=============================================================================================================//
//^------------------------------------to show if email & password is right------------------------------------//
//^===========================================================================================================//

    public function right(Request $request)
    {

session_start();

$_SESSION['email'] = $request->input('user_email');
$_SESSION['password'] = $request->input('password');

$user_email = $_SESSION['email'];
$password = $_SESSION['password'];

if (!empty($user_email) && !empty($password)) {

if (DB::table('user_data')->where('email', "=", $user_email)->where('password', "=", $password)->exists()) {

    return redirect()->route('user.index');

} else {

    return view('login');
}

} else {

    return view('login');
}


    }
//^=============================================================================================================//
//^------------------------------------------to open registration page-----------------------------------------//
//^===========================================================================================================//


    public function registration()
    {
        return view('registration');

    }



}