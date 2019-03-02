<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StakeholderController extends Controller
{
    public function registration1(){
    	return view('stakeholders.registration1');
    }
    public function stakeholdersprofile(){
    	return view('stakeholders.stakeholdersprofile');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'type' => 'required',
            'prefered_stage' => 'required',
            'industry' => 'required',
            'sector' => 'required',
            'services' => 'required',
            'resources' => 'required',
            'government_funded' => 'required',
            'location' => 'required',
            'about' => 'required',
            'image' => 'image|nulllable|max:1999',
        ]);

        if($request->hasFile('image')){
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filenameToStore = $filename.'_'.time().'.'.$extension;
            $path=$request->file('cover_image')->storedAs('public/cover_images',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        $stakeholder = new Stakeholder;
        $stakeholder->name = $request->input('name');
        $stakeholder->type = $request->input('type');
        $stakeholder->preferred_stage = $request->input('prefered_stage');
        $stakeholder->industry = $request->input('industry');
        $stakeholder->sector = $request->input('sector');
        $stakeholder->services = $request->input('services');
        $stakeholder->resources = $request->input('resources');
        $stakeholder->government_funded = $request->input('government_funded');
        $stakeholder->location = $request->input('location');
        $stakeholder->about = $request->input('about');
        $stakeholder->image = $fileNameToStore;
        $stakeholder->user_id = auth()->user->id;
        $stakeholder->save();

        return redirect('/reglvl1');
    }
    public function reglvl1(){
    	return view('stakeholders.reglvl1');
    }
    public function reglvl2(){
    	return view('stakeholders.reglvl2');
    }
    public function index(){
        return view('stakeholders.index');
    }

    public function stakeholderform(){
        return view('stakeholders.stakeholderform');
    }

}
