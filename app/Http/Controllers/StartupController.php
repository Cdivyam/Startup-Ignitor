<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartupController extends Controller
{
    public function index()
    {
        return view('startupview.index');
    }
    public function menteeapplyform(){
        return view('startupview.menteeapplyform');
    }
    public function mouform()
    {
        return view('startupview.mouform');
    
    }
    public function dashboard()
    {
        return view('startupview.dashboard');
    }
    public function list_mentors()
    {
        return view('startupview.list_mentors');
    }
    public function list_stakeholders()
    {
        return view('startupview.list_stakeholders');
    }
    public function ongoingconnection(){
        return view('startupview.ongoingconnection');
    }
    public function videocall(){
        return view('startupview.videocall');
    }
    public function chat(){
        return view('startupview.chat');
    }
}
