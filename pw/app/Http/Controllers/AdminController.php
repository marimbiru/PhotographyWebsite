<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\gallery;
use App\client_quotes;
use App\client_logos;
use App\skills;
use App\contacts;

class AdminController extends Controller
{
    //Display a listing of the resource
    public function index()
    {
        //fetch references
        $references = client_logos::all();

        //fetch quotes
        $quotes = client_quotes::all();

        //fetch skills
        $all_skills = skills::all();

        //fetch gallery
        $gallery = gallery::all();

        //fetch contacts
        $contacts = contacts::all();

        $corporate_skills = skills::where('type', "corporate")->first();
        $cinematography_skills = skills::where('type', "cinematography")->first();
        $documentary_skills = skills::where('type', "documentary")->first();
        $wedding_skills = skills::where('type', "wedding")->first();
        $product_skills = skills::where('type', "product")->first();
            
        return view('admin', [
            'references' => $references,
            'contacts'=>$contacts,
            'quotes' => $quotes,
            'all_skills' => $all_skills,
            'gallery' => $gallery,
            'corporate_skills' => $corporate_skills,
            'cinematography_skills' => $cinematography_skills,
            'documentary_skills' => $documentary_skills,
            'wedding_skills' => $wedding_skills,
            'product_skills' => $product_skills
            ]);

    }


    //save inserted reference 
    public function insertToGallery(){
        
        //get gallery image
        $gallery_image = request('gallery-image');

        //get category type
        $category_type = request('skill-category');

        //get new category name
        $new_category_type = request('new-skill-category');

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
        $image_filename = $category_type .'-'. time() . '.' . $gallery_image->getClientOriginalExtension();

        //insert image into storage
        Storage::disk('public')->put($category_type."/".$image_filename, file_get_contents($gallery_image));

        //save info to db
        $gallery_item = new gallery();
        $gallery_item->category = $category_type;
        $gallery_item->text = $image_filename;
        $gallery_item->save();

        return redirect('/admin');

    }

    //edit gallery item
    public function editGalleryItem(){

    }

    //delete gallery item
    public function deleteGalleryItem($id){

        $delete_item = gallery::find($id);
        $deleting_item_category = $delete_item->category;
        $deleting_item_text = $delete_item->text;
        $delete_item->delete();

        Storage::delete('public/'.$deleting_item_category.'/'.$deleting_item_text);

        return redirect('/admin');
    }



    //Save inserted skill values
    public function insertSkill(){

        $corporate_skills = skills::where('type', "corporate")->first();
        $corporate_skills->percentage = request('corporate');
        $corporate_skills->save();

        $cinematography_skills = skills::where('type', "cinematography")->first();
        $cinematography_skills->percentage = request('cinematography');
        $cinematography_skills->save();

        $documentary_skills = skills::where('type', "documentary")->first();
        $documentary_skills->percentage = request('documentary');
        $documentary_skills->save();

        $wedding_skills = skills::where('type', "wedding")->first();
        $wedding_skills->percentage = request('wedding');
        $wedding_skills->save();

        $product_skills = skills::where('type', "product")->first();
        $product_skills->percentage = request('product');
        $product_skills->save();

        return redirect('/admin');

    }


    //Save inserted quotes
    public function insertQuote(){

        $client_quote = new client_quotes();
        $client_quote->name = request('client-name');
        $client_quote->position = request('client-position');
        $client_quote->quote = request('client-quote');
        $client_quote->save();

        return redirect('/admin');
    }

    //remove selected quote
    public function removeQuote($id){

        $client_quote = client_quotes::find($id);
        $client_quote->delete();

        return redirect('/admin');

    }

    //save inserted reference 
    public function insertReference(){

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

        //get company logo image
        $company_logo_image = request('company-logo');

        //get company name
        $company_name = request('company-name');

        //remove white-spaces
        $company_name_clean = seoUrl($company_name);

        //file name
        $image_filename = $company_name_clean .'-'. time() . '.' . $company_logo_image->getClientOriginalExtension();

        //insert image into storage
        Storage::disk('public')->put("reference/".$image_filename, file_get_contents($company_logo_image));

        //save info to db
        $reference = new client_logos();
        $reference->image_name = $image_filename;
        $reference->company_name = $company_name;
        $reference->save();

        return redirect('/admin');

    }

    //remove inserted reference 
    public function removeReference($image_name){

        $reference = client_logos::where('image_name', '=', $image_name);
        $reference->delete();

        Storage::delete('public/reference/'.$image_name);

        return redirect('/admin');

    }

}
