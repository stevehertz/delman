<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index()  
    {
        return view('pages.index');
    }

    public function about()  
    {
        return view('pages.about');
    }

    public function services()  
    {
        return view('pages.services');
    }

    public function contact()  
    {
        return view('pages.contacts');
    }

}
