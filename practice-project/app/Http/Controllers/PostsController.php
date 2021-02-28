<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Http\Requests\PostAddingForm;

class PostsController extends Controller
{
    public function news(){
    	$posts = Posts::all();
    	return view('news', array('posts' => $posts));
    }
    public function show_single_post($id){
    	$post_data = new Posts();
    	return view('single_post', ['posts' => $post_data->find($id)]);
    }
    public function post_form(){
    	return view('post-adding-form');
    }
    //You need to configure the controller to add data to the database
    public function add_post(PostAddingForm $req){
    	dd($req);
    }
}