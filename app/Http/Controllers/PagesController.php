<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = "Welcome to LookLearn."; 

        return view('pages.index')->with('title', $title);
    }

    public function about()
    {
        $title = "About LookLearn"; 

        return view('pages.about')->with('title', $title);
    }

    public function posts()
    {
        $data= array(
            'title' => "Look and Learn",
            'posts' => ['From Students']
        );

        return view('pages.posts')->with($data);
    }
}
