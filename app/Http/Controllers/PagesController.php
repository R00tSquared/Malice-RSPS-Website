<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Welcome to OutLawz-RS!';
        return view('pages.index')->with('title', $title);
    }

    public function about()
    {
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }

    public function forum()
    {
       return redirect('https://outlawzrs.com/forums');
    }

    public function features()
    {
        $data = [
            'title'     => 'Features',
            'features'  => [
                'nothing',
                'shitserver',
                'gaycunt'
            ]
        ];
        return view('pages.features')->with($data);
    }
}