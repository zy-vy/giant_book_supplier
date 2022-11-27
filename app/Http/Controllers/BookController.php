<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function index(){
        $books = book::all();
        return view('home',compact('books'));
    }

    public function detail($id){
        $book = book::find($id);
        return view('book_detail',compact('book'));
    }
}
