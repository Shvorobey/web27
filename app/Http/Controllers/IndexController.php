<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function Main()
    {
        return view('index', ['posts' => \App\Post::paginate (10)]);
    }
}
