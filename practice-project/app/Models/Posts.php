<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\PostAddingForm;

class Posts extends Model
{
    protected $fillable = [
    	'id',
    	'title',
    	'body',
    	'created_at',
    ];

    public function add_post(PostAddingForm $req) {
    	$this->author_id = $req->input('0');
    	$this->title = $req->input('title');
    	$this->body = $req->input('body');
    	$this->slug = $req->input('title');
    	$this->save();
    }
}
