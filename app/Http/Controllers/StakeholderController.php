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
    public function reglvl1(){
    	return view('stakeholders.reglvl1');
    }
    public function reglvl2(){
    	return view('stakeholders.reglvl2');
    }
    public function index(){
        return view('stakeholders.index');
    }
}
