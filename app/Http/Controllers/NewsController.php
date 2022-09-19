<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index() 
    {
        return view('news', [
            "title" => "All News",
            // "posts" => News::all()
            "posts" => News::latest()->get()
        ]);
    }

    public function show(News $news) 
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $news 
        ]);
    }
}
