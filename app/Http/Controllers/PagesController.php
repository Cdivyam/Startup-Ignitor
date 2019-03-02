<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
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
    public function news(){ 
    	$client = new Client();
        $response = $client->request('GET', 'https://newsapi.org/v2/top-headlines?sources=business-insider&apiKey=c7f7fc0490074243888cc544008bff3e');
        // return $response;

        $content = $response->getBody();
        // return $content['article'];
        $news =  json_decode($content, true);
       	$articles = $news['articles'];
        return view('front.news')->with('articles', $articles);
    }

}
