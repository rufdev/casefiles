<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Cases as Cases;
class CasesController extends Controller
{
    //ok so lets make our controller work..
    public function cases($id)
    {	
    	//
    	$cases = Cases::find($id);

		return view('samplepage',array('cases'=>$cases));
    }
}
