<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Models\user_table;
use Illuminate\Http\Request;

class database_data extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//^=============================================================================================================//
//^---------------------------------------to show all database in table----------------------------------------//
//^===========================================================================================================//

    public function index()
    {

        $data = user_table::all();

        return view("user_table", ['user_data' => $data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//^=============================================================================================================//
//^-------------------------------to insert data for registration page to database-----------------------------//
//^===========================================================================================================//

    public function create(Request $request)
    {
        $user = $request->input('user');
        $email = $request->input('email');
        $age = $request->input('age');
        $phone = $request->input('phone');
        $password = $request->input('password');


       DB::table("user_data")->insert([

            "name" => $user,
            "email" => $email,
            "age" => $age,
            "phone" => $phone,
            "password" => md5($password)
        ]);


return view('login');

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

//^=============================================================================================================//
//^---------------------------------------------to do order delete---------------------------------------------//
//^===========================================================================================================//

    public function destroy($id)
    {
        $delete = user_table::find($id);
        $delete->delete();
        // $data = user_table::all();

        // return view("user_table", ['user_data' => $data]);

        return redirect()->back();

    }
}