<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Author;

class Posts_by_authorController extends Controller
{
    public function __invoke($key)
    {
        $author = \App\Author::find(1)->where ('key', '=',  $key)->first();
        return view('posts_by_author', ['author' => $author] );
    }
}
