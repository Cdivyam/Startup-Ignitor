<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function blogs()
    {
        return redirect('http://localhost:8080/blogs');
    }
    public function about()
    {
        return view('front.about');
    }
    public function aboutecosystem()
    {
        return view('front.abouteco');
    }
    public function howto()
    {
        return view('front.howto');
    }
    public function eventsession()
    {
        return view('front.event-session');
    }
    public function faqs()
    {
        return view('front.faqs');
    }
    public function schemes()
    {
        return view('front.schemes');
    }
    public function templates()
    {
        return view('front.templates');
    }
    public function livesession()
    {
        return view('front.live-session');
    }
    public function tutorial()
    {
        return view('front.tutorial');
    }
}
