<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TimelineController extends Controller
{
    public function index(){
        $user = auth()->user();
        return view('timeline',compact('user'));
    }

    public function profile(){
        return view('edit-profile');
    }
}
