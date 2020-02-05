<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class AdminAllController extends Controller
{
    public function all()
    {
        return view('admin');
    }

    public function category(){
        return view('admin_caterory', ['categories' => Category::all()]);
    }
}
