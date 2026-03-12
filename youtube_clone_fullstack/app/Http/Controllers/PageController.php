<?php

namespace App\Http\Controllers;

use App\Models\video_details;

class PageController extends Controller
{
    public function index(){
        $main = video_details::all();
        return view('index',compact('main'));
    }
}
