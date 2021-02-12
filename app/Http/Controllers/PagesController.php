<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Welcome To TSDC Inc!';
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about()
    {
        $title = 'About Us!';
        return view('pages.about')->with('title', $title);
    }

    public function services()
    {
        $data = array(
            'title' => 'Our Services',
            'services' => ['Web Development', 'Desktop Application Dev' ,'SEO']
        );
        // $title = 'Our Service!';
        return view('pages.services')->with($data);
    }
}
