<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
        //Display a listing of the resource
    public function index()
    {
        //client quotes
        $contacts = contacts::all();
            
        return view('contact', ['contacts' => $contacts]);
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
}
