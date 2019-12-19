<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class FrontendController extends Controller
{
    public function index(Posts $posts){
    	$data=$posts->orderBy('created_at','desc')->get();
    	return view('frontend',compact('data'));
    }
}
