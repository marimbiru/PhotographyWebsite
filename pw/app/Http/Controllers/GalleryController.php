<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\gallery;

class GalleryController extends Controller
{
    //Display a listing of the resource
    public function index()
    {
        //gallery images
        $gallery_images = gallery::all()->where('category','=', "corporate");
                
        return view('gallery', ['gallery_images' => $gallery_images]);

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
    public function show($category)
    {
        //gallery images
        $gallery_images = gallery::all()->where('category', "=", $category);
            
        return view('gallery', ['gallery_images' => $gallery_images]);
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
