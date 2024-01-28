<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.home.index');
    }

    public function about()
    {
        return view('frontend.about.index');
    }

    public function services()
    {
        return view('frontend.services.index');
    }

    public function blogs()
    {
        return view('frontend.blogs.index');
    }

    public function contact()
    {
        return view('frontend.contact.index');
    }

}
