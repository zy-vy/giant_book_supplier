<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index(Request $request, $name){
        $category = category::where('name',$name)->first();
        $books = $category->books;
        return view ('category',compact('category'));
    }

}
