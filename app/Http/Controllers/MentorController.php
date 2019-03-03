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

    public function mentorapplyform()
    {
        return view('mentorview.mentorapplyform');
    }

}
