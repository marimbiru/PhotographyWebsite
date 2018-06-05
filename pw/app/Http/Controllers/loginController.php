<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

//test password
//muchiri123

class loginController extends Controller
{
    //Display a listing of the resource
    public function index()
    {
        return view('login');
    }

    //Show the form for creating a new resource
    public function create()
    {
        //
    }

    //Store a newly created resource in storage
    public function store()
    {
        //
    }

    //Display the specified resource
    public function show($id)
    {
        //
    }

    //Show the form for editing the specified resource
    public function edit($id)
    {
        //
    }

    //Update the specified resource in storage
    public function update($id)
    {
        //
    }

    //Remove the specified resource from storage
    public function destroy($id)
    {
        //
    }

    //Handle an authentication attempt
    public function authenticate(Request $request)
    {
        //form inputs
        $login_email = request('login-email');
        $login_password = request('login-password');

        //second arg(boolean) is to remember authenticated user using remember token
        //remember me functionality
        if (Auth::attempt(['email' => $login_email, 'password' => $login_password], true))
        {
            return redirect()->intended('admin');
        }

        //If you are "remembering" users, you may use the viaRemember method to determine 
        //if the user was authenticated using the "remember me" cookie
        if (Auth::viaRemember())
        {
            //
        }
    }
}
