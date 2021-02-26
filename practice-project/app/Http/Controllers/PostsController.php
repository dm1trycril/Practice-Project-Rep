<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

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
}