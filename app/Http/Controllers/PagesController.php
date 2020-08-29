<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function body(){
		return view('/template/body');
	}

    public function about(){
    	return view('about');
    }

    public function contact(){
    	return view('contact');
    }

    public function signin(){
    	return view('signin');
    }
}
