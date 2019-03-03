<?php

namespace App\Http\Controllers;
use Mentor;
use DataRepository;
use Illuminate\Http\Request;

class MentorController extends Controller
{
    public function index()
    {
        return view('mentorview.index');
    }

    public function uploads()
    {
        $Mid = auth()->mentor()->id;
        $mentor = Mentor::find($Mid);
        return view('mentorview.uploads')->with('datas', $mentor->datas);
    }
    public function dashboard()
    {
        return view('mentorview.dashboard');
    }
    public function update()
    {
        return view('mentorview.update');
    }
    public function myapplication()
    {
        return view('mentorview.myapplication');
    }
    public function mystats()
    {
        return view('mentorview.mystats');
    }
    public function blacklists()
    {
        return view('mentorview.blacklists');
    }

    public function mentorapplyform()
    {
        return view('mentorview.mentorapplyform');
    }
    public function mentorviewprofile()
    {
        return view('mentorview.mentorviewprofile');
    }
    public function mentorviewprofile2()
    {
        return view('mentorview.mentorviewprofile_2');
    }
    public function virtualkeypad()
    {
        return view('mentorview.virtualkeypad');
    }

}
