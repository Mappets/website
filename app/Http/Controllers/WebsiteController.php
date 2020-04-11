<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    /**
     * Returns the website index
     * 
     * @return view
     */
    public function index(Request $request)
    {
        return view('index');
    }

    /**
     * Returns the website help
     * 
     * @return view
     */
    public function help(Request $request)
    {
        return view('help');
    }
}
