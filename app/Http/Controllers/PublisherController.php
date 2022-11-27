<?php

namespace App\Http\Controllers;

use App\Models\publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    //
    public function index(){
        $publishers = publisher::all();
        // return $publishers;
        return view('publisher',compact('publishers'));
    }

    public function detail(Request $request,$id){
        $publisher = publisher::find($id);
        $books = $publisher->books;
        return view('publisher_detail',compact('publisher'));
    }


}
