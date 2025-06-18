<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;  /* Connected Models Table */
use App\Models\Post;  /* Connected Models Table  */
use App\Models\Categories;  /* Connected Models Table  */

class AdminController extends Controller
{
    public function Dashboard_View(){
        $Post_Count = Post::count();
        $User_Count = User::count();
        $Category_Count = Categories::count();
        return view('Backend.DashboardView', compact('Post_Count', 'User_Count', 'Category_Count'));
    }

    public function All_Post_View(){
        $All_Post = Post::select('id', 'post_title', 'post_category', 'status', 'author_id', 'created_at')->paginate(15);
        $All_Category = Categories::select('id', 'category_name')->get();
        
        foreach($All_Post as $Post){
            $Category_Data = Categories::where('id', $Post->post_category)->first();
            $Post->Category_Name = $Category_Data->category_name;
        }

        foreach($All_Post as $Post){
            $User_Data = User::where('id', $Post->author_id)->first();
            $Post->User_Name = $User_Data->name;
        }

        $Post_Count = Post::count();
        return view('Backend.AllPostView', compact('All_Post', 'Post_Count', 'All_Category'));
    }

    public function Search_Post(Request $request){
        $All_Post = Post::select('id', 'post_title', 'post_category', 'status', 'author_id', 'created_at')
                         ->where('post_title', 'like', "%{$request->search}%")->get();
        foreach($All_Post as $Post){
            $Category_Data = Categories::where('id', $Post->post_category)->first();
            $Post->Category_Name = $Category_Data->category_name;
        }

        foreach($All_Post as $Post){
            $User_Data = User::where('id', $Post->author_id)->first();
            $Post->User_Name = $User_Data->name;
        }
        $Post_Count = $All_Post->count();
        return view('Backend.AllPostView', compact('All_Post', 'Post_Count'));
    }

    public function Post_Filter(Request $request){

        if($request->post_category == 'all' &&  $request->post_status == 'all'){
            $All_Post = Post::select('id', 'post_title', 'post_category', 'status', 'author_id', 'created_at')->get();
        }
        else if ($request->post_category == 'all' &&  $request->post_status != 'all') {
            $All_Post = Post::select('id', 'post_title', 'post_category', 'status', 'author_id', 'created_at')->where('status', $request->post_status)->get();
        }
        else if ($request->post_category != 'all' &&  $request->post_status == 'all') {
            $All_Post = Post::select('id', 'post_title', 'post_category', 'status', 'author_id', 'created_at')->where('post_category', $request->post_category)->get();
        }
        else {
            $All_Post = Post::select('id', 'post_title', 'post_category', 'status', 'author_id', 'created_at')->where('status', $request->post_status)->where('post_category', $request->post_category)->get();
        }


        $All_Category = Categories::select('id', 'category_name')->get();
        
        foreach($All_Post as $Post){
            $Category_Data = Categories::where('id', $Post->post_category)->first();
            $Post->Category_Name = $Category_Data->category_name;
        }

        foreach($All_Post as $Post){
            $User_Data = User::where('id', $Post->author_id)->first();
            $Post->User_Name = $User_Data->name;
        }

        $Post_Count = Post::count();
        return view('Backend.AllPostView', compact('All_Post', 'Post_Count', 'All_Category'));
    }

    public function Create_Post_View(){
        $All_Category = Categories::select('id', 'category_name')->get();
        return view('Backend.CreatePostView', compact('All_Category'));
    }

    public function Create_Post(Request $request){
        $Post = new Post;
        $Post->post_title = $request->title;
        $Post->img = $request->image;
        $Post->post_category = $request->category;
        $Post->slug_url = $request->slug;
        $Post->status = $request->status ?? 'Draft';
        $Post->author_id = 1;
        $Post->post_description = $request->content;

        if($Post->save()){
            return redirect()->back()
                             ->with('success', 'Post Create Successfuly!');
        }
        else{
            return redirect()->back()
                             ->with('error', 'Post Create Failed!');
        }
    }

    public function Users_Post_Management_View(){
        $User_Post = Post::where('status', 'pending')->get();
        $User_Post_Count = Post::where('status', 'pending')->count();
        foreach($User_Post as $Post){
            $User_Data = User::where('id', $Post->author_id)->first();
            $Post->User_Name = $User_Data->name;
        }
        foreach($User_Post as $Post){
            $Category_Data = Categories::where('id', $Post->post_category)->first();
            $Post->Category_Name = $Category_Data->category_name;
        }
        return view('Backend.UsersPostManagementView', compact('User_Post', 'User_Post_Count'));
    }

    public function Categories_Management_View(){
        $All_Category = Categories::select('id', 'category_name', 'slug_url')->get();
        return view('Backend.CategoriesManagementView', compact('All_Category'));
    }

    public function Add_New_Category(Request $request){
        $Category = new Categories;
        $Category->category_name = $request->category_name;
        $Category->slug_url = $request->category_slug;
        $Category->category_description = $request->category_description;

        if($Category->save()){
            return redirect()->back()
                             ->with('success', 'New Category Create Successfuly!');
        }
        else{
            return redirect()->back()
                             ->with('error', 'New Category Create Failed!');
        }
    }

    public function Category_Delete($id){
        $Category = Categories::findOrFail($id);
        if(!$Category){
            return redirect()->back()
                             ->with('error', 'Category Not Found!');
        }
        if($Category->delete()){
            return redirect()->back()
                             ->with('success', 'Category Delete Successfuly!');
        }
        else{
            return redirect()->back()
                             ->with('error', 'Category Delete Failed!');
        }
    }

    public function Comments_Management_View(){
        return view('Backend.CommentsManagementView');
    }

    public function Users_Management_View(){
        $Users = User::select('id', 'name', 'role', 'email', 'created_at')->get();
        $User_Count = User::count();
        return view('Backend.UsersManagementView', compact('Users', 'User_Count'));
    }

    public function Add_New_User(Request $request){
        $Users = new User;
        $Users->name = $request->user_name;
        $Users->role = $request->role;
        $Users->email = $request->email;
        $Users->password = $request->password;
        if($Users->save()){
            return redirect()->back()->with('success', 'New User Create Successfuly!');
        }
        else{
            return redirect()->back()->with('error', 'User Create Failed!');
        }
    }

    public function View_Post($id){
        $Post = Post::where('id', $id)->first();
        $Category = Categories::where('id', $Post->post_category)->first();
        $All_Category = Categories::select('id', 'category_name')->get();
        $Category_Name = $Category->category_name;
        return view('Backend.ViewPost', compact('Post', 'All_Category', 'Category_Name'));
    }

    public function Post_Edit_View($id){
        $Post = Post::where('id', $id)->first();
        $Category = Categories::where('id', $Post->post_category)->first();
        $All_Category = Categories::select('id', 'category_name')->get();
        $Category_Name = $Category->category_name;
        return view('Backend.PostEditView', compact('Post', 'All_Category', 'Category_Name'));
    }

    public function Post_Edit_Update(Request $request, $id){
        $Post = Post::findOrFail($id);
        if(!$Post){
            return redirect()->back()
                             ->with('error', 'No Data Found');
        }
        $Post->post_title = $request->title;
        $Post->img = $request->image;
        $Post->post_category = $request->category;
        $Post->slug_url = $request->slug;
        $Post->status = $request->status ?? 'Draft';
        $Post->author_id = $request->author;
        $Post->post_description = $request->content;

        if($Post->update()){
            return redirect()->back()
                             ->with('success', 'Post Update Successfuly!');
        }else{
            return redirect()->back()
                             ->with('error', 'Post Update Failed!');
        }
    }

    public function Post_Delete($id){
        $Post = Post::findOrFail($id);
        if(!$Post){
            return redirect()->back()
                             ->with('error', 'Post Not Found!');
        }
        if($Post->Delete()){
            return redirect()->back()
                             ->with('success', 'Post Delete Successfuly!');
        }
        else{
            return redirect()->back()
                             ->with('error', 'Post Delete Failed!');
        }
    }
}