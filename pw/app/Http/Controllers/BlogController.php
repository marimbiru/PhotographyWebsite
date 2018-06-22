<?php

namespace App\Http\Controllers;

use App\blog;
use App\blog_categories;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index($id)
    {
        $blog=blog::find($id);
        $category=blog_categories::find($blog->id);
        $category_name=$category->category_name;

        // $prev_id="";
        // $prev_title="";
        // $next_id="";
        // $next_title="";

        // $last=blog::latest()->first();
        // $last_id=$last->id;

        // if($id>1){
        //     $prev_id=$id-1;
        //     $prev=blog::find($prev_id);
        //     $prev_title=$prev->title;
        // }else{
        //     $prev_title="No previous blog";
        // }

        // if($id<$last_id){
        //     $next_id=$id+1;
        //     $next=blog::find($next_id);
        //     $next_title=$next->title;
        // }else{
        //     $next_title="No next blog";
        // }



        return view('blog_post',['blog'=>$blog,'category'=>$category_name]);
    }

    public function show_all(){
        $blogs=blog::all();
        $categories=blog_categories::all();
        return view('blog',['blogs'=>$blogs,'categories'=>$categories]);        
    }

    public function filtercategory($id){
        $blogs=blog::where('category_id',$id)->get();
        $categories=blog_categories::all();
        $category=blog_categories::select('category_name')->where('id',$id)->first();
        return view('blog',['blogs'=>$blogs,'categories'=>$categories,'category'=>$category]);
    }

    public function deleteBlog($id){

        $delete_blog = blog::find($id);
        $image_name = $delete_blog->cover_photo;
        
        $delete_blog->delete();

        Storage::delete('storage/blog-coverphotos/'.$image_name);
    }

    public function editBlog($id){
        $edit=blog::find($id);
        $categories=blog_categories::all();
        return view('edit_blog',['blog'=>$edit,'categories'=>$categories]);
    }

    public function updateBlog(){
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
        $id=request('id');
        $title=request('title');
        $text=request('description');

        $old_category=request('category');
        $new_category=request('new-category');

        if($new_category!=NULL){
            //save new category
            $new_category_type = new blog_categories();
            $new_category_type->category_name = $new_category;

            if($new_category->save()){
            $old_category=$new_category->id;
            }
        }

        $new_image=request('image');

        $update_blog=blog::find($id);
        $update_blog->title=$title;
        $update_blog->body_text=$text;

        if ($new_image!=NULL) {
            $new_filename= seoUrl($title).'.'. $new_image->getClientOriginalExtension();
            Storage::disk('public')->put("blog-coverphotos/".$image_filename, file_get_contents($blog_image));
            $update_blog->cover_photo=$new_filename;
        }
        
        $update_blog->save;
        return redirect('/admin');        
    }
}
