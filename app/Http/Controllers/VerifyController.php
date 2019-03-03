<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class VerifyController extends Controller
{
    public function verify($token)
    {
        User::where('token',$token)->firstOrfail()
            ->update(['token'=>null]);

            return redirect()
            ->route('mentor.auth')
            ->with('success','Account verified');
    }
}
