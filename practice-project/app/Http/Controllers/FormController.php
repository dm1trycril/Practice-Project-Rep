<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EntryForm;

class FormController extends Controller
{
    public function form(){
    	return view('form');
    }
    public function send(EntryForm $req){
    	dd($req);
    }
}	