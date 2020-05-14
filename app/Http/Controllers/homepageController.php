<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
class homepageController extends Controller
{
    public function exibirhomepage()
    {
    	if(Session::has('login'))
    	{
    		return view('/homepage');
    	}
		return redirect ('/');
		
    }
}
