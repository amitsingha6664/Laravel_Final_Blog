<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;  /* Connected Models Table */
use App\Models\Post;  /* Connected Models Table  */
use App\Models\Categories;  /* Connected Models Table  */

class BlogController extends Controller
{
    public function Home(){
        $All_Post = Post::where('status', 'published')->get();
        return view('Frontend.Home', compact('All_Post'));
    }

    public function Add_New_Post(){
        $All_Category = Categories::select('id', 'category_name')->get();
        return view('Frontend.AddNewPost', compact('All_Category'));
    }

    public function User_Create_Post(Request $request){
        $Post = new Post;
        $Post->post_title = $request->post_title;
        $Post->slug_url = $request->post_slug;
        $Post->author_id = $request->author_name;
        $Post->post_category = $request->category;
        $Post->img = $request->image;
        $Post->post_description = $request->post_description;
        if($Post->save()){
            return redirect()->back()
                             ->with('success', 'Post Create Successfuly!');
        }
        else{
            return redirect()->back()
                             ->with('error', 'Post Create Failed!');
        }
    }

    public function Category(){
        return view('Frontend.Category');
    }

    public function Articles(){
        return view('Frontend.Articles');
    }

    public function About(){
        return view('Frontend.About');
    }

    public function Contact(){
        return view('Frontend.Contact');
    }
}
