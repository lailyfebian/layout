<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function welcome(){
        return view('welcome');
    }

	public function home(){
		return view('home');
	}

    public function navigasi(){
    	return view('/layout/navigasi');
    }

    public function jumbotron(){
    	return view('/layout/jumbotron');
    }

    public function footer(){
    	return view('/layout/footer');
    }

    public function navjumbo(){
        return view('/layout/navjumbo');
    }
}
