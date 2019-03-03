<?php

namespace App\Http\Controllers;

use App\Mentee;
use Illuminate\Http\Request;

class StartupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('startupview.index');
    }
    public function menteeapplyform(){

        return view('startupview.profilefill');
    }


    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'country' => 'required',
            'city' => 'required',
            'state' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'description' => 'required',
            'industry' => 'required',
            'sector' => 'required',
            'image' => 'image|nullable|max:1999'
        ]);
        //Handle File Upload
        if($request->hasFile('image')){
            //Get File name with ext
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            //FileName to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->File('image')->storeAs('public/image', $fileNameToStore);
        } else {
            $fileNameToStore = 'noImage.jpg';
        }

        $mentee = new Mentee;
        $mentee->name = $request->input('name');
        $mentee->u_id = auth()->user()->id;
        $mentee->country = $request->input('country');
        $mentee->city = $request->input('city');;
        $mentee->state = $request->input('state');
        $mentee->phone = $request->input('phone');
        $mentee->address = $request->input('address');
        $mentee->description = $request->input('description');
        $mentee->industry = $request->input('industry');
        $mentee->sector = $request->input('sector');
        $mentee->image = $fileNameToStore;
        $mentee->save();
        return redirect('/dashboard');
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
    public function application(){
        return view('startupview.application');
    }
    public function viewprofile(){
        return view('startupview.viewprofile');
    }
    public function requestmentorship(){
        return view('startupview.requestmentorship');
    }
    public function online(){
        return view('startupview.online');
    }
    public function physical(){
        return view('startupview.physical');
    }
}
