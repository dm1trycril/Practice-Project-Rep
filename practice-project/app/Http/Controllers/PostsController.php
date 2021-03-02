<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Http\Requests\PostAddingForm;

class PostsController extends Controller
{
    public function news(){
    	$posts = Posts::where('status', '=', 'PUBLISHED')->get();
    	return view('news', array('posts' => $posts));
    }
    public function show_single_post($id){
    	$post_data = Posts::where('id', $id)->first();
        $post_data->increment('views');
    	return view('single_post', ['posts' => $post_data]);
    }
    public function post_form(){
    	return view('post-adding-form');
    }
    //You need to configure the controller to add data to the database
    public function add_post(PostAddingForm $req){
        $post = new Posts();
        $post->add_post($req);
        return redirect()->route('news');
    }
}