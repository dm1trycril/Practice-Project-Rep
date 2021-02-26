<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\post_validator;

class FormController extends Controller
{
    public function form(){
    	return view('form');
    }
    public function send(post_validator $req){
    	dd($req);
    }
}	