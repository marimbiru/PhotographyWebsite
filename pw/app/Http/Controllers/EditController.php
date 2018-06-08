<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\gallery;
use App\client_quotes;
use App\client_logos;
use App\skills;

class EditController extends Controller
{
    //Display a listing of the resource
    public function index($id)
    {
        //fetch gallery item to be edited
        $gallery_item = gallery::find($id);

        //fetch gallery item to be edited
        $categories = skills::all();
            
        return view('edit_content', ['gallery_item' => $gallery_item, 'categories' => $categories]);
    }


    //edit gallery item
    public function editGalleryItem($id){

        //removes white-spaces
        function seoUrl($string) {
            //Lower case everything
            $string = strtolower($string);
            //Make alphanumeric (removes all other characters)
            $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
            //Clean up multiple dashes or whitespaces
            $string = preg_replace("/[\s-]+/", " ", $string);
            //Convert whitespaces and underscore to dash
            $string = preg_replace("/[\s_]/", "-", $string);
            return $string;
        }

        //get previous image data and delete previous image
        $previous_image = gallery::find($id);
        $previous_image_text = $previous_image->text;
        $previous_image_category = $previous_image->category;

        Storage::delete('public/'.$previous_image_category.'/'.$previous_image_text);

        //get image
        $image = request('image');

        //get category type
        $category_type = request('category');

        //get new category name
        $new_category_type = request('new-category');

        if($new_category_type != null){
            //if new category inserted, change the select option value to the same value
            $category_type = $new_category_type;

            //save new category
            $new_category = new Skills();
            $new_category->type = $new_category_type;
            $new_category->percentage = 0;
            $new_category->save();
        }

        //file name
        $image_filename = $category_type .'-'. time() . '.' . $image->getClientOriginalExtension();

        //insert image into storage
        Storage::disk('public')->put($category_type."/".$image_filename, file_get_contents($image));

        //save info to db
        $gallery_item = gallery::find($id);
        $gallery_item->category = $category_type;
        $gallery_item->text = $image_filename;
        $gallery_item->save();

        return redirect('/admin');
    }

}