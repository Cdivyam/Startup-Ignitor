<?php

namespace App\Http\Controllers;
use App\Mentor;
use DataRepository;
use Illuminate\Http\Request;

class MentorController extends Controller
{
    public function index()
    {
        return view('mentorview.index');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'position' => 'required',
            'ministry' => 'required',
            'department' => 'required',
            'industry' => 'required',
            'sector' => 'required',
            'city' => 'required',
            'state' => 'required',
            'preferred_stage' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'description' => 'required',
            'application_link' => 'required',
            'website' => 'required',
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

        $mentor = new Mentor;
        $mentor->position = $request->input('position');
        $mentor->u_id = auth()->user()->id;
        $mentor->ministry = $request->input('ministry');
        $mentor->department = $request->input('department');
        $mentor->industry = $request->input('industry');
        $mentor->sector = $request->input('sector');        
        $mentor->city = $request->input('city');;
        $mentor->state = $request->input('state');
        $mentor->preferred_stage = $request->input('preferred_stage');
        $mentor->phone = $request->input('phone');
        $mentor->address = $request->input('address');
        $mentor->description = $request->input('description');
        $mentor->application_link = $request->input('application_link');
        $mentor->website = $request->input('website');
        $mentor->image = $fileNameToStore;
        $mentor->save();
        return redirect('/admin/mentor-inital');
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
        return view('mentorview.mentorprofile');
    }
    public function mentorviewprofile()
    {
        return view('mentorview.mentorviewprofile');
    }
    public function virtualkeypad()
    {
        return view('mentorview.virtualkeypad');
    }

}
