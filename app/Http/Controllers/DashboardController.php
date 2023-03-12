<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $sms = contact::get();
        $news =  Post::get();
        return view('admin.dashboard',compact('sms','news'));
    }
}
