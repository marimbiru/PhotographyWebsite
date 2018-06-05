<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\skills;
use App\client_logos;

class HomeController extends Controller
{
    //Display a listing of the resource
    public function index()
    {
        //skills
        $skills = skills::all();
        
        //client logos
        $client_logos = client_logos::all();
            
        return view('homepage', ['client_logos' => $client_logos, 'skills' => $skills]);
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
